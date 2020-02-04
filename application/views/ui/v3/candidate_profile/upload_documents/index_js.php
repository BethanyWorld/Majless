<script type="text/javascript">
    $(document).ready(function () {
        $(".upload-file-btn").click(function (e) {
            e.preventDefault();
            toggleLoader();
            var form_data = new FormData();
            var totalfiles = document.getElementById('files').files.length;
            if (totalfiles >= 0) {
                for (var index = 0; index < totalfiles; index++) {
                    form_data.append("files[]", document.getElementById('files').files[index]);
                }
                $.ajax({
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
                            toggleLoader();
                            notify('حداقل یک فایل انتخاب کنید' , 'red');
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
                        }
                        else {
                            toggleLoader();
                            $result = JSON.parse(data);
                            notify($result['content'], $result['type']);
                        }
                    },
                    error: function (data) {
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                    },
                })
            }
            else {
                toggleLoader();
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