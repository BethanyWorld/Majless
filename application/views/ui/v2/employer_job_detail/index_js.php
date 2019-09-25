<script type="text/javascript">
    $(document).ready(function(){
        function loadData(num = 1) {
            toggleLoader();
            $inputSearchKeyword = $.trim($("#inputSearchKeyword").val());
            $inputCategory = $.trim($("#inputCategory").val());
            $inputState = $.trim($("#inputState").val());
            $inputJobContractType = $("input[name='inputJobContractType']:checked").val() || "";
            $inputJobBackward = $("input[name='inputJobBackward']:checked").val() || "";
            $inputJobGender = $("input[name='inputJobGender']:checked").val() || "";
            $sendData = {
                'pageIndex': num,
                'inputSearchKeyword': $inputSearchKeyword,
                'inputCategory': $inputCategory,
                'inputState': $inputState,
                'inputJobContractType': $inputJobContractType,
                'inputJobBackward': $inputJobBackward,
                'inputJobGender': $inputJobGender,
            }
            $.ajax({
                type: 'post',
                url: base_url + 'JobList/search',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $("#jobContainer").html(data);
                    $("html , body").animate({ 'scrollTop': 0 });
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    toggleLoader();
                    iziToast.show({
                        title: 'خطای ارتباط با سرور',
                        color: 'red',
                        zindex: 2030,
                        position: 'topLeft'
                    });
                }
            });
        }
        loadData();
        $('#pagination').bootpag({
            total: <?php echo round($jobCount/$defaultPageSize); ?>,
            maxVisible: 5
        }).on("page", function(event, num){
            loadData(num);
        });
        $("#searchByKeyword").click(function(e){
            e.preventDefault();
            loadData();
        });
        $(".filterData").click(function(e){
            e.preventDefault();
            loadData();
        });
    });
</script>
