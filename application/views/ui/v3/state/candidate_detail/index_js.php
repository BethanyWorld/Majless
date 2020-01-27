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
        $(".add-form").click(function () {
            $form = $(this).parent().next('div.panel-body').find(".unique-form").eq(0).clone().attr('id', UUID()).removeClass('hidden').removeClass('unique-form');
            $form = $(this).parent().next('div.panel-body').find(".divider").eq(0).after($form);
            setTimeout(function () {
                $('.price-unit').change();
                updatePrice();
            }, 500);
        });
        $(document).on('click', '.remove-form', function () {
            $(this).parent().remove();
        });
        function updateCountriesReadOnly(){
            $(".countries").each(function(){
                $val = $(this).find('select').eq(0).val();
                if ($val == 103) {
                    $(this).next('div').css('pointerEvents', 'auto');
                    $(this).next('div').next('div').css('pointerEvents', 'auto');
                    $(this).next('div').find('select').removeAttr('readonly');
                    $(this).next('div').next('div').find('select').removeAttr('readonly');
                }
                else {
                    $(this).next('div').css('pointerEvents', 'none');
                    $(this).next('div').next('div').css('pointerEvents', 'none');
                    $(this).next('div').find('select').val(0).attr('readonly','readonly');
                    $(this).next('div').next('div').find('select').val(0).attr('readonly','readonly');
                }
            });
        }
        $(document).on('change', '[name=inputRealEstateCountryId]', function () {
            updateCountriesReadOnly();
        });
        $(document).on('change', '.price-unit', function () {
            $RealEstateBuyTimePrice = $('#RealEstateBuyTimePrice').val();
            $leftSide = $(this).find("select option:selected").data('left-side');
            $rightSide = $(this).find("select option:selected").data('right-side');
            $(this).prev('div').find("input[type='number']").attr('data-unit', $leftSide);
            $(this).prev('div').prev('div').find("input[type='number']").attr('data-unit', $rightSide);
            updatePrice();
        });
        $(document).on('change', '.state-select[name=inputRealEstateStateId]', function () {
            toggleLoader();
            $inputCandidateStateId = $(this).val();
            $this = $(this);
            $.ajax({
                type: 'post',
                url: base_url + 'State/getCityByStateId/' + $inputCandidateStateId,
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    $citySelect = $this.parent().next('div').find('.city-select').eq(0);
                    $citySelect.html('');
                    var selectInnerHtml = $('<option/>',
                        {
                            "class": "",
                            "value": 0,
                            "text": '-- انتخاب کنید --'
                        });
                    $citySelect.append(selectInnerHtml);
                    $.each($result, function (index, item) {
                        var selectInnerHtml = $('<option/>',
                            {
                                "class": "",
                                "value": item['CityId'],
                                "text": item['CityName']
                            });
                        $citySelect.append(selectInnerHtml);
                    });
                    $citySelect.find('option').eq(1).attr('selected', 'selected');
                    cutSelectOptionLongText();
                },
                error: function (data) {
                    toggleLoader();
                    notify('درخواست با خطا مواجه شد', 'red');
                }
            });
        });
        $('.price-unit').change();
        $ajaxCalls = [];
        $ajaxCallResults = [];
        $requests = [];
        $UUIDs = [];

        $requestIndex = 0;
        $(".countries").each(function () {
            $uuid = UUID();
            $stateId = $(this).find("select").eq(0).data('state-id');
            $cityId = $(this).find("select").eq(0).data('city-id');
            $(this).attr('id', $uuid);
            $UUIDs.push({
                'uuid': $uuid,
                'stateId': $stateId,
                'cityId': $cityId,
            });
        });
        for ($i = 0; $i < $UUIDs.length; $i++) {
            $requests.push(
                $.ajax({
                    url: base_url + 'State/getCityByStateId/' + $UUIDs[$i]["stateId"],
                    async: false,
                    success: function (data) {
                        $ajaxCallResults.push({
                            'uuid': $UUIDs[$i]["uuid"],
                            'data': data
                        });
                    }
                })
            );
        }
        $.when.apply(this, $requests).then(function () {
            console.log($ajaxCallResults);
            for ($i = 0; $i < $ajaxCallResults.length; $i++) {
                for ($j = 0; $j < $UUIDs.length; $j++) {
                    if ($ajaxCallResults[$i]["uuid"] === $UUIDs[$j]["uuid"]) {
                        $ajaxCallResults[$i]["stateId"] = $UUIDs[$j]["stateId"];
                        $ajaxCallResults[$i]["cityId"] = $UUIDs[$j]["cityId"];
                    }
                }
            }
            for ($i = 0; $i < $ajaxCallResults.length; $i++) {
                $result = $ajaxCallResults[$i];
                $cityId = $result["cityId"];
                $cities = JSON.parse($result["data"]);
                $citySelect = $("#" + $result["uuid"]).next('.MoneyStateDiv').next('.MoneyStateDiv').find('.city-select').eq(0);
                $citySelect.html('');
                var selectInnerHtml = $('<option/>',
                    {
                        "class": "",
                        "value": 0,
                        "text": '-- انتخاب کنید --'
                    });
                $citySelect.append(selectInnerHtml);
                $.each($cities, function (index, item) {
                    var selectInnerHtml = $('<option/>', {
                        "class": "",
                        "value": item['CityId'],
                        "text": item['CityName']
                    });
                    $citySelect.append(selectInnerHtml);
                });
                $citySelect.val($cityId);
            }
        });
        updateCountriesReadOnly();
        
    });


</script>