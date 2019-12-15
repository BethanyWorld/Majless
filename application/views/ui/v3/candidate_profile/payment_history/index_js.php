<script type="text/javascript">
    $(document).ready(function () {
        $nationalCode = "<?php echo $userInfo['CandidateNationalCode']; ?>";
        $("#changePassword").click(function (e) {
            e.preventDefault();
            $inputCurrentPassword = $("#inputCurrentPassword").val();
            $inputNewPassword = $("#inputNewPassword").val();
            $inputConfirmPassword = $("#inputConfirmPassword").val();
            if($inputNewPassword != $inputConfirmPassword){
                notify('رمز عبور جدید با تکرار آن یکسان نیست' , 'red');
                return false;
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/doChangePassword',
                data: {
                    'inputCurrentPassword': $inputCurrentPassword,
                    'inputNewPassword': $inputNewPassword
                },
                success: function (data) {
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    if ($result['success']) {
                        setTimeout(function () {
                           window.history.back();
                        }, 2000);
                    }
                }
            });
        });
    });
</script>