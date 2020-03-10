<?php $ci =& get_instance(); ?>
<script type="text/javascript">
    $(document).on('click', '.set-status', function () {
        $this = $(this);
        $title = "<strong class='badge'> " + $this.data('title') + " </strong>";
        $.confirm({
            title: '',
            content: 'آیا '+ $title +' مطمئن هستید؟',
            buttons: {
                specialKey: {
                    text: 'تایید',
                    btnClass: 'btn-blue',
                    action: function () {
                        toggleLoader();
                        $sendData = {
                            'inputRowId': $this.data('row-id'),
                            'inputDescription': $.trim($("#inputDescription").val()),
                            'inputAcceptanceStatus': $this.data('action')
                        }
                        $.ajax({
                            type: 'post',
                            url: base_url + 'InternalCandidate/doSetSupervisorType',
                            data: $sendData,
                            success: function (data) {
                                toggleLoader();
                                $result = jQuery.parseJSON(data);
                                iziToast.show({
                                    title: $result['content'],
                                    color: $result['type'],
                                    zindex: 9060,
                                    position: 'topLeft'
                                });
                                setTimeout(function(){
                                    if ($result['success']) {
                                        location.reload();
                                    }
                                } , 1000);
                            },
                            error: function (jqXHR, textStatus, errorThrown) {
                                iziToast.show({
                                    title: 'خطای ارتباط با سرور.دقایقی دیگر تلاش کنید',
                                    color: 'red',
                                    zindex: 9060,
                                    position: 'topLeft'
                                });
                                toggleLoader();
                            }
                        });
                    }
                },
                alphabet: {
                    text: 'انصراف',
                    action: function () {
                        //$.alert('A or B was pressed');
                    }
                }
            }
        });
    })
</script>