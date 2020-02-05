<input type="hidden" id="inputCandidateDocumentName" value="<?php echo $documentName; ?>"/>
<br>
<div class="panel panel-warning">
    <div class="panel-heading">
        <p class="margin-b-0">
            شما میتوانید تمامی مدارک مرتبط با
            <?php echo $documentPersianName; ?>
            خود را بارگذاری کنید.
            مدارک را در فرمت تصاویر و فایل های zip , pdf , rar بارگذاری کنید
        </p>
    </div>
</div>
<div class="col-xs-12 padding-0">
    <form id="fileupload" method="POST" enctype="multipart/form-data">
        <span id="spanUpload" class="btn fileinput-button padding-0">
            <i class="icon-plus icon-white"></i>
            <input class="display-in-block" id="files" type="file" name="files[]" multiple/>
            <input class="display-in-block upload-file-btn" type="submit" value="بارگذاری مدارک"/>
        </span>
    </form>
    <div class="progress" style="display: none;">
        <div class="progress-bar progress-bar-striped active pull-right"
             role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <br>
    <?php $countOfDocuments = 0;
    foreach ($userInfo['candidateDocuments'] as $candidateDocument) {
        if ($candidateDocument['CandidateDocumentName'] == $documentName) {
            $countOfDocuments += 1;
        }
    } ?>
    <div class="col-xs-12 alert alert-info">
        تعداد
        <strong class="number-of-uploads"><?php echo $countOfDocuments; ?></strong>
        مدرک بارگذاری شده است
    </div>
    <table class="table table-condensed table-hover table-bordered upload-table">
        <thead>
        <tr>
            <th class="fit">ردیف</th>
            <th class="text-center">مشاهده</th>
            <th class="fit">تاریخ بارگذاری</th>
            <th class="fit">حذف</th>
        </tr>
        </thead>
        <tbody>
        <?php $index = 0;
        foreach ($userInfo['candidateDocuments'] as $candidateDocument) {
            if ($candidateDocument['CandidateDocumentName'] == $documentName) {
                $index += 1; ?>
                <tr data-index="<?php echo $index; ?>">
                    <td class="fit">#<?php echo $index; ?></td>
                    <td class="text-center">
                        <a href="<?php echo $candidateDocument['CandidateDocumentUrl']; ?>" target="_blank">
                            <i class="fa fa-folder-open-o"></i>
                        </a>
                    </td>
                    <td class="fit" dir="ltr">
                        <?php echo $candidateDocument['CreateDateTime']; ?>
                    </td>
                    <td class="fit">
                        <button class="btn btn-danger remove-document"
                                data-row-id="<?php echo $candidateDocument['RowId']; ?>">
                            <i class="fa fa-remove"></i>
                        </button>
                    </td>
                </tr>
            <?php }
        } ?>
        </tbody>
    </table>

</div>
<script>
    $(document).ready(function () {
        $(".upload-file-btn").click(function (e) {
            $(".upload-file-btn").attr('disabled', 'disabled');
            e.preventDefault();
            var form_data = new FormData();
            var totalfiles = document.getElementById('files').files.length;
            if (totalfiles >= 0) {
                for (var index = 0; index < totalfiles; index++) {
                    form_data.append("files[]", document.getElementById('files').files[index]);
                }
                $.ajax({
                    xhr: function () {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function (evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                $(".upload-file-btn").attr('disabled', 'disabled');
                                $(".progress").show();
                                $(".progress .progress-bar").css('width', percentComplete + '%');
                            }
                        }, false);
                        return xhr;
                    },
                    url: base_url + 'Profile/UploadMultipleFile',
                    dataType: 'text',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: form_data,
                    type: 'post',
                    success: function (data) {
                        $result = JSON.parse(data);
                        if ($result['fileSrc'] === '') {
                            notify('حداقل یک فایل انتخاب کنید', 'red');
                            $(".upload-file-btn").removeAttr('disabled');
                            $(".progress").hide();
                            $(".progress .progress-bar").css('width', '0%');
                            $("#files").val(null);
                            return false;
                        }
                        $arrayUploadedFiles = JSON.parse($result['fileSrc']);
                        if ($result['success'] === true) {
                            $sendData = {
                                inputCandidateDocumentUrl: $arrayUploadedFiles,
                                inputCandidateDocumentName: $("#inputCandidateDocumentName").val(),
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Profile/candidateUpdateDocuments',
                                data: $sendData,
                                success: function (data) {
                                    $result = JSON.parse(data);
                                    console.log($result);
                                    notify($result['content'], $result['type']);

                                    $lastIndex = $(".upload-table tbody tr:last").index()+1;
                                    $lastIndex += 1;
                                    for ($i = 0; $i < $arrayUploadedFiles.length; $i++) {
                                        $tr = '<tr data-index="' + $lastIndex + '">';
                                        $tr += '<td class="fit">' + $lastIndex + '</td>';
                                        $tr += '<td class="text-center"><a href="' + $arrayUploadedFiles[$i] + '" target="_blank">';
                                        $tr += '<i class="fa fa-folder-open-o"></i></a>';
                                        $tr += '</td>';
                                        $tr += '<td class="fit"  dir="ltr">';
                                        $tr += $arrayUploadedFiles[$i].split('?ud=')[1];
                                        $tr += '</td>';
                                        $tr += '<td class="text-center" data-toggle="tooltip" title="جهت فعال شدن امکان حذف کلیک کنید"><a href="javascript:void(0)" onclick="location.reload()"><button class="btn btn-default">';
                                        $tr += '<i class="fa fa-refresh"></i></a></button>';
                                        $tr += '</td>';
                                        $tr += "</tr>";
                                        $(".upload-table tbody").append($tr);
                                        $lastIndex += 1;
                                    }
                                    //update number of uploaded files
                                    $(".number-of-uploads").text($lastIndex);

                                    $(".progress").hide();
                                    $(".progress .progress-bar").hide().css('width', '0%');
                                    $(".upload-file-btn").removeAttr('disabled');
                                    $("#files").val(null);
                                    $('[data-toggle="tooltip"]').tooltip();
                                }
                            });
                        }
                        else {
                            $result = JSON.parse(data);
                            notify($result['content'], $result['type']);
                            $(".progress").hide();
                            $(".progress .progress-bar").hide().css('width', '0%');
                            $(".upload-file-btn").removeAttr('disabled');
                            $("#files").val(null);
                        }
                    },
                    error: function (data) {
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                        $("#files").val(null);
                    },
                })
            }
            else {
                $(".upload-file-btn").removeAttr('disabled');
                notify('حداقل یک فایل انتخاب کنید', 'red');
            }
        });
        $(".remove-document").click(function () {
            $sendData = {'inputRowId': $(this).data('row-id')}
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/removeCandidateDocumentByRowId',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    if ($result['success']) {
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                }
            });
        });
    });
</script>