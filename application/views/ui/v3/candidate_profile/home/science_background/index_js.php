<script type="text/javascript">
    $(document).ready(function () {

        $(".add-form").click(function(){
            $form = $(this).parent().next('div.panel-body').find(".unique-form").eq(0)
                .clone().removeClass('hidden').removeClass('unique-form');
            $form = $(this).parent().next('div.panel-body').find(".divider").eq(0).after($form);
        });
        $(document).on('click','.remove-form',function(){
            $(this).parent().remove();
        });


        $("#updateProfileBooks").click(function () {
            if($("#form-books").serializeArray().length <=0){
                notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            }
            else{
                $sendData = { inputCandidateBooks: $("#form-books").serializeArray() }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdateBooks',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                    }
                });
            }
        });
        $("#updateProfileArticles").click(function () {
            if($("#form-articles").serializeArray().length <=0){
                notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            }
            else{
                $sendData = { inputCandidateArticles : $("#form-articles").serializeArray() }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdateArticles',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                    }
                });
            }
        });
        $("#updateProfileResearch").click(function () {
            if($("#form-research").serializeArray().length <=0){
                notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            }
            else{
                $sendData = { inputCandidateResearch : $("#form-research").serializeArray() }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdateResearch',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                    }
                });
            }
        });
        $("#updateProfileTranslation").click(function () {
            if($("#form-translate").serializeArray().length <=0){
                notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            }
            else{
                $sendData = { inputCandidateTranslation : $("#form-translate").serializeArray() }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdateTranslation',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                    }
                });
            }
        });
        $("#updateProfileInvention").click(function () {
            if($("#form-invention").serializeArray().length <=0){
                notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            }
            else{
                $sendData = { inputCandidateInvention : $("#form-invention").serializeArray() }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdateInvention',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                    }
                });
            }
        });
        $("#updateProfileConference").click(function () {
            if($("#form-conference").serializeArray().length <=0){
                notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            }
            else{
                $sendData = { inputCandidateConference : $("#form-conference").serializeArray() }
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdateConference',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                    }
                });
            }
        });


    });
</script>