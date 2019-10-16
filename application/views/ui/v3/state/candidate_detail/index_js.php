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
        /* $skillInfo Done */
        $.ajax({
            type: 'GET',
            url: '<?php echo $api['EducationalInfoReportWeb']; ?>nationalCodeList=' + $candidateNationalCode,
            success: function(data){
                console.log(data);
                $eduInfo = data['items'][0]['educationals'];
                $index = 0;
                $.each($eduInfo , function(key , value){
                    $index +=1;
                    $record = $(".temp-edu-record").clone().removeClass('temp-edu-record');
                    $record.find('.row').html($index);
                    for($i=0;$i < Object.keys(value).length; $i++){
                        $record.find('.info-'+Object.keys(value)[$i]).html(Object.values(value)[$i] || "➖");
                        $(".edu-info-container tbody").append($record);
                    }
                });
            }
        });

        /* JobHistoryWeb Done */
        $.ajax({
            type: 'GET',
            url: '<?php echo $api['JobHistoryWeb']; ?>nationalCode=' + $candidateNationalCode,
            success: function(data){
                console.log(data);
                $eduInfo = data['items'];
                $index = 0;
                $.each($eduInfo , function(key , value){
                    $index +=1;
                    $record = $(".temp-job-record").clone().removeClass('temp-job-record');
                    $record.find('.row').html($index);
                    for($i=0;$i < Object.keys(value).length; $i++){
                        $record.find('.info-'+Object.keys(value)[$i]).html(Object.values(value)[$i] || "➖");
                        $(".job-info-container tbody").append($record);
                    }
                });
            }
        });






        $("#submitReportForm").click(function () {
            toggleLoader();
            $inputReportFullName = $.trim($("#inputReportFullName").val());
            $inputReportTitle = $.trim($("#inputReportTitle").val());
            $inputReportPhone = $.trim($("#inputReportPhone").val());
            $inputReportContent = $.trim($("#inputReportContent").val());
            $inputCaptcha = $.trim($("#inputCaptcha").val());
            $inputCSRF = $.trim($("#inputCSRF").val());
            $inputReportCandidateId = $.trim($("#inputReportCandidateId").val());

            if ($inputReportFullName == "" || $inputReportTitle == "" || $inputReportPhone == "" || $inputReportContent == "" || $inputCaptcha == "") {
                notify("لطفا تمامی موارد را کامل کنید", "red");
                toggleLoader();
            }
            else {
                $sendData = {
                    'inputReportCandidateId': $inputReportCandidateId,
                    'inputReportFullName': $inputReportFullName,
                    'inputReportTitle': $inputReportTitle,
                    'inputReportPhone': $inputReportPhone,
                    'inputReportContent': $inputReportContent,
                    'inputCaptcha': $inputCaptcha,
                    'inputCSRF': $inputCSRF
                }
                $.ajax({
                    type: 'post',
                    url: base_url + 'State/submitReportAbuse',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'] , $result['type']);
                        if($result['success']){
                            setTimeout(function(){
                                location.reload();
                            } , 2000);
                        }
                    },
                    error: function(){
                        toggleLoader();
                        notify($result['content'] , $result['type']);
                    }
                });
            }
        });

    });
</script>