<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js" integrity="sha256-TQq84xX6vkwR0Qs1qH5ADkP+MvH0W+9E7TdHJsoIQiM=" crossorigin="anonymous"></script>
<script type="text/javascript">
    function s4() {
        return Math.floor((1 + Math.random()) * 0x10000).toString(16).substring(1);
    }
    function guid() {
        return this.s4() + this.s4() + '-' + this.s4() + '-' + this.s4() + '-' + this.s4() + '-' + this.s4() + this.s4() + this.s4();
    }
    $(document).ready(function () {
        $inputUserName = "<?php echo $userInfo['CandidateNationalCode']; ?>";
        $inputPassword = "<?php echo $userInfo['CandidateNationalCode']; ?>";
        $sendData = {
            'userName': $inputUserName,
            'password': $inputPassword,
            'grant_type': 'password',
            'client_id': guid()
        }
        $.ajax({
            url: 'http://188.253.3.141:8080/Auth/token',
            type: 'post',
            data: $sendData,
            success: function (data) {
                if (data['token_type'] !== '') {
                    var now = new Date();
                    var time = now.getTime();
                    var expireTime = time + 1000 * 36000;
                    now.setTime(expireTime);
                    document.cookie = 'clientId=' + JSON.stringify(data) + ';expires=' + now.toUTCString() + ';path=/';
                    $("iframe").attr('src', 'http://oexam.s-hasht.ir/setcookie.html?clientId=' + JSON.stringify(data));
                    $("iframe").on('load', function () {
                        $(".result-container a").attr('href', 'http://oexam.s-hasht.ir/RelatedExams').attr('target', '_blank');
                    });
                }
            },
            error: function () {}
        });
    });
    $(document).ready(function () {
        $nationalCode = "<?php echo $userInfo['CandidateNationalCode']; ?>";
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
        try {
            $rolesScore = '<?php echo $userInfo['CandidateRolesScore']; ?>';
            $rolesScore = JSON.parse($rolesScore);
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
            for ($i = 0; $i < $rolesScore.length; $i++) {
                $item = $rolesScore[$i];
                if ($item['Key'] === "Persuasive") {
                    $data.push($item['Value']);
                }
            }
            var ctx = document.getElementById('BarChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        'نمایندگی',
                        'ارزیابی',
                        'نظارت ',
                        'طراحی',
                        'هماهنگ‌ سازی'
                    ],
                    datasets: [{
                        label:'',
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
                    legend: {
                        display: false
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem) {
                                return tooltipItem.yLabel;
                            }
                        }
                    },
                    scales: {
                        yAxes: [{
                            ticks: {
                                max: 100,
                                beginAtZero: true,
                                fontSize: 12,
                                fontFamily: "'iranYekan'",
                                fontColor: '#000',
                                fontStyle: '500'
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                max: 100,
                                beginAtZero: true,
                                fontSize: 12,
                                fontFamily: "'iranYekan'",
                                fontColor: '#000',
                                fontStyle: '500'
                            },
                            gridLines: {
                                color: "rgba(0, 0, 0, 0)",
                            }
                        }]
                    }
                }
            });
            Chart.pluginService.register({
                afterDraw: function (chartInstance) {
                    var ctx = chartInstance.chart.ctx;
                    ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, 'normal', Chart.defaults.global.defaultFontFamily);
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'top';
                    myChart.data.datasets.forEach(function (dataset) {
                        for (var i = 0; i < dataset.data.length; i++) {
                            var model = dataset._meta[Object.keys(dataset._meta)[0]].data[i]._model;
                            ctx.fillText(dataset.data[i], model.x, model.y - 2);
                        }
                    });
                }
            });
        }
        catch (e) {}
    });
</script>