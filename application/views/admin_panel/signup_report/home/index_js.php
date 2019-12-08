<?php $ci =& get_instance(); ?>
<script type="text/javascript">

    function toEnglishDigits(str) {
        var e = '۰'.charCodeAt(0);
        str = str.replace(/[۰-۹]/g, function (t) {
            return t.charCodeAt(0) - e;
        });
        e = '٠'.charCodeAt(0);
        str = str.replace(/[٠-٩]/g, function (t) {
            return t.charCodeAt(0) - e;
        });
        return str;
    }

    $(document).ready(function(){



        $("#searchButton").click(function () {
            $inputFromDate = $.trim($("#inputFromDate").val());
            $inputToDate = $.trim($("#inputToDate").val());
            toggleLoader();
            $sendData = {
                'inputFromDate': $inputFromDate,
                'inputToDate': $inputToDate
            }
            /* Get Api Generated  Address */
            $.ajax({
                type: 'post',
                url: base_url + 'SignUpReport/doGetPersonReport',
                data: $sendData,
                success: function (api) {
                    $.ajax({
                        type: 'get',
                        url: api,
                        success: function (data) {
                            $.ajax({
                                type: 'post',
                                url: base_url + 'SignUpReport/doExportReport',
                                data: {
                                    'inputFromDate': $inputFromDate,
                                    'inputToDate': $inputToDate,
                                    'inputItems': JSON.stringify(data)
                                },
                                success: function (data) {
                                    toggleLoader();
                                    var a = document.createElement("a");
                                    a.href = "<?php echo base_url(); ?>"+ 'Export.xlsx';
                                    document.body.appendChild(a);
                                    a.click();
                                },
                                error: function (jqXHR, textStatus, errorThrown) {
                                    notify('اطلاعات نمایندگی تکراری ست', 'red');
                                    toggleLoader();
                                }
                            });
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            notify('اطلاعات نمایندگی تکراری ست', 'red');
                            toggleLoader();
                        }
                    });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('اطلاعات نمایندگی تکراری ست', 'red');
                    toggleLoader();
                }
            });
        });
    });
</script>