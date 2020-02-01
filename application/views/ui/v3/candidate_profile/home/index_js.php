<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"
        integrity="sha256-TQq84xX6vkwR0Qs1qH5ADkP+MvH0W+9E7TdHJsoIQiM="
        crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $nationalCode = "<?php echo $userInfo['CandidateNationalCode']; ?>";
        $personalInfoApi = "<?php echo $this->config->item('api')['PersonalInformationWeb']; ?>nationalCode=" + $nationalCode;
        $legalConditionsApi = "<?php echo $this->config->item('api')['LegalConditionsWeb']; ?>nationalCodeList=" + $nationalCode;
        $currentCandidateStatus = "<?php echo $userInfo['CandidateStatus']; ?>";
        $candidateStatus = "";
        $.ajax({
            type: 'get',
            url: base_url + 'Profile/getResumeStatus',
            success: function (data) {
                $result = JSON.parse(data);
                if ($result['message'] !== undefined) {
                    $message = "<hr><div class='row col-xs-12' style='padding:0;'><ul class='list-group'><li  class='list-group-item'>" + $result['message'] + "</li></ul></div>";
                    $(".alerts-container").append($message);
                }
                /*اگر نامزد انتخاباتی رزومه خود را تکمیل کرده بود*/
                if ($result['isCompleted']) {
                    $candidateStatus = "CandidateResumeCompleted";
                    /*اگر نامزد انتخاباتی رزومه را تکمیل کرده بود و  شرایط  نامزد را داشت*/
                    if ($result['hasConditions']) {
                        $candidateStatus = "CandidateResumeAccepted";
                    }
                    /*اگر نامزد انتخاباتی رزومه را تکمیل کرده بود ولی  شرایط  نامزد را نداشت*/
                    else {
                        $candidateStatus = "CandidateResumeRejected";
                    }
                }
                /*اگر نامزد انتخاباتی رزومه خود را تکمیل نکزده بود*/
                else {
                    $candidateStatus = "CandidateRegister";
                }
                if ($currentCandidateStatus == 'CandidateRegister' ||
                    $currentCandidateStatus == 'CandidateResumeCompleted' ||
                    $currentCandidateStatus == 'CandidateResumeAccepted' ||
                    $currentCandidateStatus == 'CandidateResumeRejected') {
                    $sendData = {'inputCandidateStatus': $candidateStatus}
                    $.ajax({
                        type: 'post',
                        url: base_url + 'SignUp/changeCandidateState',
                        data: $sendData,
                        success: function (data) {
                            if ($currentCandidateStatus != $candidateStatus) {
                                location.reload();
                            }
                        }
                    });
                }
            }
        });
        $("#hasNotNormalCondition").click(function () {
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateHasOtherConditionToContinue',
                data: {'inputCandidateContinueCondition': 'CandidateHasNotContinueCondition'},
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    if ($result['success']) {
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    }
                }
            });
        });
        $("#hasNormalCondition").click(function () {
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateHasOtherConditionToContinue',
                data: {'inputCandidateContinueCondition': 'CandidateHasContinueCondition'},
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                    if ($result['success']) {
                        setTimeout(function () {
                            location.reload();
                        }, 2000);
                    }
                }
            });
        });

        $rolesScore = <?php echo $userInfo['CandidateRolesScore']; ?>;

        $data = [];
        for ($i = 0; $i < $rolesScore.length; $i++) {
            $item = $rolesScore[$i];
            if ($item['Key'] === "Link") {
                $data.push($item['Value']);
            }
        }
        for ($i = 0; $i < $rolesScore.length; $i++) {
            $item = $rolesScore[$i];
            if ($item['Key'] === "Evaluator") {
                $data.push($item['Value']);
            }
        }
        for ($i = 0; $i < $rolesScore.length; $i++) {
            $item = $rolesScore[$i];
            if ($item['Key'] === "Persuasive") {
                $data.push($item['Value']);
            }
        }
        for ($i = 0; $i < $rolesScore.length; $i++) {
            $item = $rolesScore[$i];
            if ($item['Key'] === "Moderator") {
                $data.push($item['Value']);
            }
        }
        for ($i = 0; $i < $rolesScore.length; $i++) {
            $item = $rolesScore[$i];
            if ($item['Key'] === "Lawmaker") {
                $data.push($item['Value']);
            }
        }
        var ctx = document.getElementById('BarChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    'رابط مردم با نظام',
                    'ارزیاب طرح‌ها و لوایح',
                    'هماهنگ‌ کننده و اقناع ‌کننده',
                    'ناظر ',
                    'قانون‌گذار'
                ],
                datasets: [{
                    label: 'نمرات نقش ها',
                    data: $data,
                    backgroundColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{ticks: {fontSize: 12, fontFamily: "'iranYekan'", fontColor: '#000', fontStyle: '500'}}],
                    xAxes: [{ticks: {fontSize: 12, fontFamily: "'iranYekan'", fontColor: '#000', fontStyle: '500'}}]
                }
            }
        });

    });
</script>