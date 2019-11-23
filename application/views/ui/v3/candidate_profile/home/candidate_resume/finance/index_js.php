<script type="text/javascript">
    $(document).ready(function () {
        $(".add-form").click(function () {
            $form = $(this).parent().next('div.panel-body').find(".unique-form").eq(0).clone().removeClass('hidden').removeClass('unique-form');
            $form = $(this).parent().next('div.panel-body').find(".divider").eq(0).after($form);
        });
        $(document).on('click', '.remove-form', function () {
            $(this).parent().remove();
        });
        $(document).on('change', '#RealEstateCountryId', function () {
            $parentDom = $(this).parents('#form-books').attr('id');
            $parentId = "#" + $parentDom + '';
            $RealEstateCountryId = $(this).val();
            if ($RealEstateCountryId === 'iran') {
                $('[name="RealEstateStateId"]').attr('readonly', 'readonly');
                $('[name="RealEstateCityId"]').attr('readonly', 'readonly');
                $('.MoneyStateDiv').css('pointerEvents', 'none');
            } else {
                $('[name="RealEstateStateId"]').removeAttr('readonly');
                $('[name="RealEstateCityId"]').removeAttr('readonly');
                $('.MoneyStateDiv').css('pointerEvents', 'auto');
            }
        });
        $(document).on('change', '.price-unit', function () {
            debugger;
            $RealEstateBuyTimePrice = $('#RealEstateBuyTimePrice').val();
            $leftSide = $(this).find("select option:selected").data('left-side');
            $rightSide = $(this).find("select option:selected").data('right-side');
            $(this).prev('div').find("input[type='number']").attr('data-unit', $leftSide);
            $(this).prev('div').prev('div').find("input[type='number']").attr('data-unit', $rightSide);
            updatePrice();
        });

        function updatePrice() {
            $('.price-left-side').each(function () {
                debugger;
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
                debugger;
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

    });
</script>