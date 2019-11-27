<script type="text/javascript">
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
                $('[name=inputRealEstateCountryId]').change();
                $('.price-unit').change();
                updatePrice();
            }, 500);
        });
        $(document).on('click', '.remove-form', function () {
            $(this).parent().remove();
        });
        $(document).on('change', '[name=inputRealEstateCountryId]', function () {
            $parentId = $(this).eq(0).parents('div.form').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";

            if ($(this).val() !== "103" && $(this).val() !== "0") {
                $($parentDom + '[name="inputRealEstateStateId"]').val(0).attr('readonly', 'readonly');
                $($parentDom + '[name="inputRealEstateCityId"]').val(0).attr('readonly', 'readonly');
                $($parentDom + '.MoneyStateDiv').css('pointerEvents', 'none');
            } else {
                if ($(this).val() === "" || $(this).val() === "0" || $(this).val() === "103") {
                    $($parentDom + '[name="inputRealEstateStateId"]').removeAttr('readonly');
                    $($parentDom + '[name="inputRealEstateCityId"]').removeAttr('readonly');
                    $($parentDom + '.MoneyStateDiv').css('pointerEvents', 'auto');
                }
            }
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
                    $.each($result, function (index, item) {
                        var selectInnerHtml = $('<option />',
                            {
                                "class": "",
                                "value": item['CityId'],
                                "text": item['CityName']
                            });
                        $citySelect.append(selectInnerHtml);
                    });
                    $citySelect.find('option').eq(0).attr('selected', 'selected');
                    cutSelectOptionLongText();
                },
                error: function (data) {
                    toggleLoader();
                    notify('درخواست با خطا مواجه شد', 'red');
                }
            });
        });
        $('[name=inputRealEstateCountryId]').change();
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
            for ($i = 0; $i < $ajaxCallResults.length; $i++) {
                for ($j = 0; $j < $UUIDs.length; $j++) {
                    if ($ajaxCallResults[$i]["uuid"] === $UUIDs[$j]["uuid"]) {
                        $ajaxCallResults[$i]["stateId"] = $UUIDs[$j]["stateId"];
                        $ajaxCallResults[$i]["cityId"] = $UUIDs[$j]["cityId"];
                    }
                }
            }
            console.log("ajaxs", $ajaxCallResults);
            for ($i = 0; $i < $ajaxCallResults.length; $i++) {
                $result = $ajaxCallResults[$i];
                $cityId = $result["cityId"];
                $cities = JSON.parse($result["data"]);
                $citySelect = $("#" + $result["uuid"]).next('.MoneyStateDiv').next('.MoneyStateDiv').find('.city-select').eq(0);
                $citySelect.html('');
                $.each($cities, function (index, item) {
                    var selectInnerHtml = $('<option />', {
                        "class": "",
                        "value": item['CityId'],
                        "text": item['CityName']
                    });
                    $citySelect.append(selectInnerHtml);
                });
                $citySelect.val($cityId);
            }
        });
    });
</script>