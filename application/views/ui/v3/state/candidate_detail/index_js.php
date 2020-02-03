<script type="text/javascript">
    $(document).ready(function () {

        $(window).scrollTop(0);

        $personalInfo = "";
        $militaryInfo = "";
        $politicalInfo = "";
        $researchInfo = "";
        $skillInfo = "";
        $("#submitReportForm").click(function () {
            toggleLoader();
            $inputReportFullName = $.trim($("#inputReportFullName").val());
            $inputReportTitle = $.trim($("#inputReportTitle").val());
            $inputReportPhone = $.trim($("#inputReportPhone").val());
            $inputReportContent = $.trim($("#inputReportContent").val());
            $inputCaptcha = $.trim($("#inputCaptcha").val());
            $inputCSRF = $.trim($("#inputCSRF").val());
            $inputReportCandidateId = $.trim($("#inputReportCandidateId").val());

            if ($inputReportFullName == "" || $inputReportTitle == "" || $inputReportPhone == "" || $inputReportContent == "" || $inputCaptcha == "") {
                notify("لطفا تمامی موارد را کامل کنید", "red");
                toggleLoader();
            }
            else {
                $sendData = {
                    'inputReportCandidateId': $inputReportCandidateId,
                    'inputReportFullName': $inputReportFullName,
                    'inputReportTitle': $inputReportTitle,
                    'inputReportPhone': $inputReportPhone,
                    'inputReportContent': $inputReportContent,
                    'inputCaptcha': $inputCaptcha,
                    'inputCSRF': $inputCSRF
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'State/submitReportAbuse',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'] , $result['type']);
                        if($result['success']){
                            setTimeout(function(){
                                location.reload();
                            } , 2000);
                        }
                    },
                    error: function(){
                        toggleLoader();
                        notify($result['content'] , $result['type']);
                    }
                });
            }
        });
        $(".commonScrollStyle li a").click(function () {
            theHref = $(this).attr("href");
            $("html, body").animate({
                scrollTop: $(theHref).offset().top
            }, 500);
            return false;
        });
    });
    $(document).ready(function () {
        function updatePrice() {
            $('.price-left-side').each(function () {
                $leftDataUnit = $(this).find('input[type="number"]').attr('data-unit');
                switch ($leftDataUnit) {
                    case 'SD':
                        $(this).find('label').text('صد تومان');
                        break;
                    case 'HZ':
                        $(this).find('label').text('هزار تومان');
                        break;
                    case 'MI':
                        $(this).find('label').text('میلیون تومان');
                        break;
                }
            });
            $('.price-right-side').each(function () {
                $rightDataUnit = $(this).find('input[type="number"]').attr('data-unit');
                switch ($rightDataUnit) {
                    case 'HZ':
                        $(this).find('label').text('هزار تومان');
                        break;
                    case 'MI':
                        $(this).find('label').text('میلیون تومان');
                        break;
                    case 'ML':
                        $(this).find('label').text('میلیارد تومان');
                        break;
                }
            });
        }
        // for panel tab
        $(function () {
            var $tabButtonItem = $('#tab-button li'),
                $tabSelect = $('#tab-select'),
                $tabContents = $('.tab-contents'),
                activeClass = 'is-active';

            $tabButtonItem.first().addClass(activeClass);
            $tabContents.not(':first').hide();

            $tabButtonItem.find('a').on('click', function (e) {
                var target = $(this).attr('href');

                $tabButtonItem.removeClass(activeClass);
                $(this).parent().addClass(activeClass);
                $tabSelect.val(target);
                $tabContents.hide();
                $(target).show();
                e.preventDefault();
            });

            $tabSelect.on('change', function () {
                var target = $(this).val(),
                    targetSelectNum = $(this).prop('selectedIndex');

                $tabButtonItem.removeClass(activeClass);
                $tabButtonItem.eq(targetSelectNum).addClass(activeClass);
                $tabContents.hide();
                $(target).show();
            });
        });
        // for panel tab
        $(".LeftPaneAction button").click(function () {
            $data = $(this).parents('.LeftPaneAction').prev('div.panel-body').find('form').eq(0).serializeArray();
            $role = $(this).data('role');
            $target = $(this).data('target');
            /*@Role
             * Self
             * Wife
             * Child
             */
            $sendData = {
                'data': $data,
                'role': $role,
                'target': $target
            }
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateUpdateFinance',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                },
                error: function (data) {
                    toggleLoader();
                    notify('لطفا تمامی موارد را کامل کنید', 'red');
                }
            });

        });
    });


</script>