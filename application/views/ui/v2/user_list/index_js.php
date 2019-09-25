<script type="text/javascript">
    $(document).ready(function(){
        function loadData(num = 1) {
            toggleLoader();
            $inputSearchKeyword = $.trim($("#inputSearchKeyword").val());
            $inputMainMajorId = $.trim($("#inputMainMajorId").val());
            $inputState = $.trim($("#inputState").val());
            $inputJobGender = $("input[name='inputJobGender']:checked").val() || "";
            $sendData = {
                'pageIndex': num,
                'inputSearchKeyword': $inputSearchKeyword,
                'inputMainMajorId': $inputMainMajorId,
                'inputState': $inputState,
                'inputJobGender': $inputJobGender,
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/search',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $("#userContainer").html(data);
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
            total: <?php echo round($userCount/$defaultPageSize); ?>,
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
