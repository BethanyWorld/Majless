<script type="text/javascript">
    $(document).ready(function () {
        $candidateNationalCode = "<?php echo $candidate['CandidateNationalCode']; ?>";
        $personalInfo = "";
        $militaryInfo = "";
        $politicalInfo = "";
        $researchInfo = "";
        $skillInfo = "";

        /* $personalInfo Done */
        $.ajax({
            type: 'GET',
            url: '<?php echo $api['PersonalInformationWeb']; ?>nationalCode=' + $candidateNationalCode,
            success: function(data){
                $personalInfo = data;
                $.each($personalInfo , function(key , value){
                    $(".personal-info-container .info-"+key).html(value);
                });
                if($personalInfo['profileImage'] != null){
                    $(".profile-image").attr('src', ("data:image/png;base64,"+ $personalInfo['profileImage']));
                }
                //personal-info
            }
        });
        /* $militaryInfo Done */
        $.ajax({
            type: 'GET',
            url: '<?php echo $api['MilitaryWeb']; ?>nationalCode=' + $candidateNationalCode,
            success: function(data){
                $militaryInfo = data;
                $temp = "";
                $.each($militaryInfo , function(key , value){
                    $temp += "<p class='text-danger'>"+ value + "</p>";
                });
                $(".military-info-container").html($temp);
            }
        });
        /* $politicalInfo Done */
        $.ajax({
            type: 'GET',
            url: '<?php echo $api['PoliticalRecordWeb']; ?>nationalCode=' + $candidateNationalCode,
            success: function(data){
                $politicalInfo = data['items'];
                $index = 0;
                $.each($politicalInfo , function(key , value){
                    $index +=1;
                    $record = $(".temp-politic-record").clone().removeClass('temp-politic-record');
                    $record.find('.row').html($index);
                    for($i=0;$i < Object.keys(value).length; $i++){
                        $record.find('.info-'+Object.keys(value)[$i]).html(Object.values(value)[$i] || "➖");
                        $(".political-info-container tbody").append($record);
                    }
                });
            }
        });
        /* $researchInfo */
        $.ajax({
            type: 'GET',
            url: '<?php echo $api['ResearchSkillWeb']; ?>nationalCode=' + $candidateNationalCode,
            success: function(data){
                $researchInfo = data;

                $index = 0;
                $.each($researchInfo['authoredBookItems'] , function(key , value){
                    $index+=1;
                    $record = $(".temp-book-record").clone().removeClass('temp-book-record');
                    $record.find('.row').html($index);
                    for($i=0;$i < Object.keys(value).length; $i++){
                        $record.find('.info-'+Object.keys(value)[$i]).html(Object.values(value)[$i] || "➖");
                        $(".book-info-container tbody").append($record);
                    }
                });

                $index = 0;
                $.each($researchInfo['authoredArticleItems'] , function(key , value){
                    $index+=1;
                    $record = $(".temp-article-record").clone().removeClass('temp-article-record');
                    $record.find('.row').html($index);
                    for($i=0;$i < Object.keys(value).length; $i++){
                        $record.find('.info-'+Object.keys(value)[$i]).html(Object.values(value)[$i] || "➖");
                        $(".article-info-container tbody").append($record);
                    }
                });

                $index = 0;
                $.each($researchInfo['inventionItems'] , function(key , value){
                    $index+=1;
                    $record = $(".temp-invention-record").clone().removeClass('temp-invention-record');
                    $record.find('.row').html($index);
                    for($i=0;$i < Object.keys(value).length; $i++){
                        $record.find('.info-'+Object.keys(value)[$i]).html(Object.values(value)[$i] || "➖");
                        $(".invention-info-container tbody").append($record);
                    }
                });

                $index = 0;
                $.each($researchInfo['researchProposalItems'] , function(key , value){
                    $index+=1;
                    $record = $(".temp-research-record").clone().removeClass('temp-research-record');
                    $record.find('.row').html($index);
                    for($i=0;$i < Object.keys(value).length; $i++){
                        $record.find('.info-'+Object.keys(value)[$i]).html(Object.values(value)[$i] || "➖");
                        $(".research-info-container tbody").append($record);
                    }
                });

                $index = 0;
                $.each($researchInfo['scientificLectureItems'] , function(key , value){
                    $index+=1;
                    $record = $(".temp-scientific-record").clone().removeClass('temp-scientific-record');
                    $record.find('.row').html($index);
                    for($i=0;$i < Object.keys(value).length; $i++){
                        $record.find('.info-'+Object.keys(value)[$i]).html(Object.values(value)[$i] || "➖");
                        $(".scientific-info-container tbody").append($record);
                    }
                });

                $index = 0;
                $.each($researchInfo['translatedBookItems'] , function(key , value){
                    $index+=1;
                    $record = $(".temp-translate-record").clone().removeClass('temp-translate-record');
                    $record.find('.row').html($index);
                    for($i=0;$i < Object.keys(value).length; $i++){
                        $record.find('.info-'+Object.keys(value)[$i]).html(Object.values(value)[$i] || "➖");
                        $(".translate-info-container tbody").append($record);
                    }
                });

            }
        });
        /* $skillInfo Done */
        $.ajax({
            type: 'GET',
            url: '<?php echo $api['OtherSkillWeb']; ?>nationalCode=' + $candidateNationalCode,
            success: function(data){
                $skillInfo = data['items'];
                $index = 0;
                $.each($skillInfo , function(key , value){
                    $index +=1;
                    $record = $(".temp-skill-record").clone().removeClass('temp-skill-record');
                    $record.find('.row').html($index);
                    for($i=0;$i < Object.keys(value).length; $i++){
                        $record.find('.info-'+Object.keys(value)[$i]).html(Object.values(value)[$i] || "➖");
                        $(".skill-info-container tbody").append($record);
                    }
                });
            }
        });

        $("#doGrading").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            $inputGrade = $.trim($("#inputGrade").val());
            /* Validation */
            if (!$.isNumeric($inputGrade)) {
                notify('نمره نامعتبر است', 'red');
                return false;
            }
            /* End Validation */
            toggleLoader();
            $sendData = {
                'inputCandidateId': $inputCandidateId,
                'inputGrade': $inputGrade
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doMarkCandidate',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });

        $("#doAcceptFirstExam").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            toggleLoader();
            $sendData = { 'inputCandidateId': $inputCandidateId }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doAcceptCandidateFirstExam',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });
        $("#doRejectFirstExam").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            toggleLoader();
            $sendData = { 'inputCandidateId': $inputCandidateId }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doRejectCandidateFirstExam',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });

        $("#doAcceptSecondExam").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            toggleLoader();
            $sendData = { 'inputCandidateId': $inputCandidateId }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doAcceptCandidateSecondExam',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });
        $("#doRejectSecondExam").click(function () {
            $inputCandidateId = $.trim($("#inputCandidateId").val());
            toggleLoader();
            $sendData = { 'inputCandidateId': $inputCandidateId }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doRejectCandidateSecondExam',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('مشکلی درخ داده است', 'red');
                    toggleLoader();
                }
            });
        });

    });
</script>