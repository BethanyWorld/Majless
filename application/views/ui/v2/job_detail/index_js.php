<script>
    $(document).ready(function () {
        $myFavoriteJob = $("#myFavoriteJob");
        $inputJobId = $myFavoriteJob.data("job-id");
        $inputUserId = "<?php echo $this->session->userdata('UserLoginInfo')[0]['UserId']; ?>";

        $myFavoriteJob.click(function () {
            toggleLoader();
            $sendData = {
                'inputJobId': $myFavoriteJob.data("job-id"),
                'inputUserId': $inputUserId
            }
            if ($inputUserId == "" || !$inputUserId) {
                alert('ابتدا وارد حساب کاربری خود شوید');
                var url = window.location.href;
                var origin = "<?php echo base_url('/Account/login'); ?>";
                $returnUrl = url;
                window.location.replace(origin + '?returnUrl=' + $returnUrl);
            }
            $.ajax({
                type: 'post',
                url: base_url + 'JobList/doJobFavoriteForUser',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    iziToast.show({
                        title: $result['content'],
                        color: $result['type'],
                        zindex: 2030,
                        position: 'topLeft'
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toggleLoader();
                }
            });
        });


        $requestJob = $("#requestJob");
        $requestJob.click(function () {
            toggleLoader();
            $sendData = {
                'inputJobId': $myFavoriteJob.data("job-id"),
                'inputUserId': $inputUserId
            }
            if ($inputUserId == "" || !$inputUserId) {
                alert('ابتدا وارد حساب کاربری خود شوید');
                var url = window.location.href;
                var origin = "<?php echo base_url('/Account/login'); ?>";
                $returnUrl = url;
                window.location.replace(origin + '?returnUrl=' + $returnUrl);
            }
            $.ajax({
                type: 'post',
                url: base_url + 'JobList/doRequestJobForUser',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    iziToast.show({
                        title: $result['content'],
                        color: $result['type'],
                        zindex: 2030,
                        position: 'topLeft'
                    });
                    if ($result['success']) {
                        window.location.replace($result['redirect']);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toggleLoader();
                }
            });
        });


    });
</script>