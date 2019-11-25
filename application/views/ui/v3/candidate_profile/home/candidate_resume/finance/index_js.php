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
                }
            });

        });


        $(".add-form").click(function () {
            $form = $(this).parent().next('div.panel-body').find(".unique-form").eq(0).clone().removeClass('hidden').removeClass('unique-form');
            $form = $(this).parent().next('div.panel-body').find(".divider").eq(0).after($form);
            setTimeout(function(){
                // $('[name=inputRealEstateCountryId]').change();
                $('.price-unit').change();
                updatePrice();
            } , 500);
        });
        $(document).on('click', '.remove-form', function () {
            $(this).parent().remove();
        });
        $(document).on('change', '[name=inputRealEstateCountryId]', function () {
            if ($(this).val() !== "118" &&  $(this).val() !== "0"  ) {
                $('[name="inputRealEstateStateId"]').val(0).attr('readonly', 'readonly');
                $('[name="inputRealEstateCityId"]').val(0).attr('readonly', 'readonly');
                $('.MoneyStateDiv').css('pointerEvents', 'none');
            } else{
                if($(this).val() === "" || $(this).val() === "0" || $(this).val() === "118") {
                    $('[name="inputRealEstateStateId"]').removeAttr('readonly');
                    $('[name="inputRealEstateCityId"]').removeAttr('readonly');
                    $('.MoneyStateDiv').css('pointerEvents', 'auto');
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

        // $('[name=inputRealEstateCountryId]').change();
        $('.price-unit').change();
    });
</script>