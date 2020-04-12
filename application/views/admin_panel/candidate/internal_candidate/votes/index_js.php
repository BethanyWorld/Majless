<?php $ci =& get_instance(); ?>
<script type="text/javascript">
    $items = <?php echo $ci->config->item('defaultPageSize'); ?>;
    $itemsOnPage = <?php echo $ci->config->item('defaultPageSize'); ?>;
    $selectedPage = 1;
    $totalResultCount = 0;
    $hasPagination = false;
    function loadData(selectedPage = $selectedPage){
        toggleLoader();
        $inputCandidateState = $("#inputCandidateState").val();
        $sendData = {
            'inputCandidateState': $inputCandidateState,
            'pageIndex': selectedPage,
        }
        $.ajax({
            type: 'post',
            url: base_url + 'InternalCandidate/doVotesPagination',
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
        var a = document.createElement("a");
        a.href = "<?php echo base_url(); ?>"+ 'ExportVotes.xlsx';
        document.body.appendChild(a);
        a.click();
    });
</script>