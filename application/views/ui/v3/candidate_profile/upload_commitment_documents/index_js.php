<script type="text/javascript">
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