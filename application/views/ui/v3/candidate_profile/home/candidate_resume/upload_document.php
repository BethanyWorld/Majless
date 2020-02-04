<input type="hidden" id="inputCandidateDocumentName" value="<?php echo $documentName; ?>" />

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
    <?php
    $countOfDocuments = 0;
    foreach ($userInfo['candidateDocuments'] as $candidateDocument) {
        if ($candidateDocument['CandidateDocumentName'] == $documentName) {
            $countOfDocuments = 1;
        }
    }
    if($countOfDocuments == 0){ ?>
        <br>
        <div class="alert alert-info">
            برای
            <strong>
                <?php echo $documentPersianName; ?>
            </strong>
             مدرکی بارگذاری نشده است
        </div>
    <?php } else{ ?>
        <br>
        <?php $countOfDocuments = 0;
        foreach ($userInfo['candidateDocuments'] as $candidateDocument) {
            if ($candidateDocument['CandidateDocumentName'] == $documentName) {
                $countOfDocuments +=1;
            }
        } ?>
        <div class="col-xs-12 alert alert-info">
            تعداد
            <strong><?php echo $countOfDocuments; ?></strong>
            مدرک بارگذاری شده است
        </div>
        <table class="table table-condensed table-hover table-bordered">
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
                if ($candidateDocument['CandidateDocumentName'] == $documentName) { $index += 1; ?>
                    <tr>
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
                <?php } } ?>
            </tbody>
        </table>
    <?php }  ?>
</div>
<script>
    $(document).ready(function () {
        $(".upload-file-btn").click(function (e) {
            $(".upload-file-btn").attr('disabled' , 'disabled');
            e.preventDefault();
            var form_data = new FormData();
            var totalfiles = document.getElementById('files').files.length;
            if (totalfiles >= 0) {
                for (var index = 0; index < totalfiles; index++) {
                    form_data.append("files[]", document.getElementById('files').files[index]);
                }
                $.ajax({
                    xhr: function() {
                        var xhr = new window.XMLHttpRequest();
                        xhr.upload.addEventListener("progress", function(evt) {
                            if (evt.lengthComputable) {
                                var percentComplete = evt.loaded / evt.total;
                                percentComplete = parseInt(percentComplete * 100);
                                $(".upload-file-btn").attr('disabled' , 'disabled');
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
                        if($result['fileSrc'] === ''){
                            notify('حداقل یک فایل انتخاب کنید' , 'red');
                            $(".upload-file-btn").removeAttr('disabled');
                            $(".progress").hide();
                            $(".progress .progress-bar").css('width', '0%');
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
                                    notify($result['content'], $result['type']);
                                    if ($result['success']) {
                                        setTimeout(function () {
                                            location.reload();
                                        }, 1000);
                                    }
                                }
                            });
                        }
                        else {
                            $result = JSON.parse(data);
                            notify($result['content'], $result['type']);
                            $(".progress").hide();
                            $(".progress .progress-bar").hide().css('width', '0%');
                            $(".upload-file-btn").removeAttr('disabled');
                        }
                    },
                    error: function (data) {
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
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