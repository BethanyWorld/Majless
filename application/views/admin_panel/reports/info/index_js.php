<script type="text/javascript">
    $(document).ready(function(){
        var $filterableRows = $("#info #table-0 tbody tr");
        $("#info .search").on('input', function() {
            $filterableRows.hide().filter(function() {
                return $(this).find('td').filter(function() {
                    var tdText = $(this).text().toLowerCase(),
                        inputValue = $('#' + $(this).data('input')).val().toLowerCase();
                    return tdText.indexOf(inputValue) !== -1;
                }).length == $(this).find('td').length;
            }).show();
        });

        var $filterableRows1 = $("#payments #table-1 tbody tr");
        $("#payments .search").on('input', function() {
            $filterableRows1.hide().filter(function() {
                return $(this).find('td').filter(function() {
                    var tdText = $(this).text().toLowerCase(),
                        inputValue = $('#' + $(this).data('input')).val().toLowerCase();
                    return tdText.indexOf(inputValue) !== -1;
                }).length == $(this).find('td').length;
            }).show();
        });
    });
</script>