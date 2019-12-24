<?php $ci =& get_instance(); ?>
<script type="text/javascript">
    $items = <?php echo $ci->config->item('defaultPageSize'); ?>;
    $itemsOnPage = <?php echo $ci->config->item('defaultPageSize'); ?>;
    $selectedPage = 1;
    $totalResultCount = 0;
    $hasPagination = false;
    function loadData(selectedPage = $selectedPage){
        toggleLoader();
        $inputCandidateStatus = $("#inputCandidateStatus").val();
        $inputCandidateFullName = $("#inputCandidateFullName").val();
        $inputCandidateState = $("#inputCandidateState").val();
        $sendData = {
            'pageIndex': selectedPage,
            'inputCandidateState': $inputCandidateState,
            'inputCandidateFullName': $inputCandidateFullName,
        }
        $.ajax({
            type: 'post',
            url: base_url + 'Candidate/doSpecialPagination',
            data: $sendData,
            success: function (data) {
                hideLoader();
                $result = JSON.parse(data);
                $(".table-rows").html($result['htmlResult']);
                $totalResultCount = $result['count'];
                if($hasPagination){
                    $(".simple-pagination").pagination('updateItems', $totalResultCount);
                }
                else{
                    $hasPagination = true;
                    $(".simple-pagination").pagination({
                        items: $totalResultCount,
                        itemsOnPage: $itemsOnPage,
                        cssStyle: 'compact-theme',
                        prevText: 'قبلی',
                        nextText: 'بعدی',
                        onPageClick: function (pageNum, e) {
                            e.preventDefault();
                            loadData(pageNum);
                        }
                    });
                }
            }
        });
    }
    $(document).ready(function(){
        loadData();
        $("#searchButton").click(function () {
            loadData(1);
        });
    });
    $(document).on('click', '.remove-candidate', function () {
        $this = $(this);
        $title = "<strong class='badge'> " + $this.data('title') + " </strong>";
        $.confirm({
            title: '',
            content: 'آیا از حذف '+ $title +' مطمئن هستید؟',
            buttons: {
                specialKey: {
                    text: 'تایید',
                    btnClass: 'btn-blue',
                    action: function () {
                        toggleLoader();
                        $sendData = {
                            'inputCandidateId': $this.data('id')
                        }
                        $.ajax({
                            type: 'post',
                            url: base_url + 'Candidate/doDelete',
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