<script type="text/javascript">

    $(document).ready(function () {
        $('#IranMap .map .province path').click(function () {
            var province = $(this).attr('class');
            var provinceId = $(this).data('province-id');
            var provinceName = $(this).data('province-name');
            window.location.href = base_url + "State/detail/" + provinceId + "/" + provinceName;
        });
        $("#IranMap svg g path").hover(
            function () {
                var provinceName = $(this).data('province-name');
                $("#IranMap .show-title").html(provinceName).css({display: "block"})
            },
            function () {
                $("#IranMap .list a").removeClass("hover");
                $("#IranMap .show-title").html("").css({display: "none"})
            }
        );

        $("#inviteCandidate").click(function () {
            debugger;
            event.preventDefault();
            var file_data = $('#inputCandidateProfileImage').prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);
            $.ajax({
                url: base_url + "Home/uploadFile",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (data) {
                    debugger;
                    $result = jQuery.parseJSON(data);
                    $inputCandidateFullName = $.trim($("#inputCandidateFullName").val());
                    $inputCandidateImage = $result['fileSrc'];
                    $inputCandidateStateId = $.trim($("#inputCandidateStateId").val());
                    $inputCandidateElectionId = $.trim($("#inputCandidateElectionId").val());
                    $inputCaptcha = $.trim($("#inputCaptcha").val());
                    /* End Validation */

                    if(file_data === undefined || file_data === "" ){
                        notify("لطفا عکس را وارد کنید", "red");
                    }
                    else {
                        $sendData = {
                            'inputCandidateFullName': $inputCandidateFullName,
                            'inputCandidateProfileImage': $inputCandidateImage,
                            'inputCandidateStateId': $inputCandidateStateId,
                            'inputCandidateElectionId': $inputCandidateElectionId,
                            'inputCaptcha': $inputCaptcha
                        }
                        $.ajax({
                            type: 'post',
                            url: base_url + 'State/doInviteCandidateSpecial',
                            data: $sendData,
                            success: function (data) {
                                toggleLoader();
                                $result = jQuery.parseJSON(data);
                                notify($result['content'], $result['type']);
                                if($result['success']){
                                    location.reload();
                                }
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                notify('اطلاعات نامزد انتخاباتی تکراری ست', 'red');
                                toggleLoader();
                            }
                        });
                    }
                },
                error: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                }
            });
        });



        $(".recaptcha").click(function () {
            $(".recaptcha").addClass('fa-spin');
            $src = $(".captcha_img").attr('src');
            $(".captcha_img").attr('src', $src + '?' + Date.now());
            setTimeout(function () {
                $(".recaptcha").removeClass('fa-spin');
            }, 2000);
        });
        $('#inputCandidateStateId').change(function(){
            toggleLoader();
            $("#inputCandidateCityId").html('');
            $stateId = $(this).val();
            $.ajax({
                type: 'post',
                url: "<?php echo base_url(); ?>" + 'State/getElectionsByStateId/'+$stateId,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    $("#inputCandidateElectionId").html('');
                    for(let i=0;i<$result.length;i++){
                        $("#inputCandidateElectionId").append('<option value="'+$result[i].ElectionId+'">'+$result[i].ElectionName+'</option>');
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    iziToast.show({
                        title: 'خطای ارتباط با سرور.دقایقی دیگر تلاش کنید',
                        color: 'red',
                        zindex: 9060,
                        position: 'topLeft'
                    });
                    toggleLoader();
                }
            });
        });


    });
</script>