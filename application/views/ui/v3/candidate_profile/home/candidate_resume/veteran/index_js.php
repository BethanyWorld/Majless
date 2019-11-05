<script type="text/javascript">
    $(document).ready(function () {


        $(document).on('click', '.panel-heading', function(e) {
            e.preventDefault();
            ($(this).find(":checkbox").attr('checked') == undefined) ? $(this).find(":checkbox").attr('checked' , 'checked') : $(this).find(":checkbox").removeAttr('checked')
            $(this).next('.panel-body').slideToggle();
            $(this).find('i').toggleClass('fa-chevron-down' , 'fa-chevron-up');
        });
        $(document).on('click', 'input[type="radio"]', function () {
            $inputid = $(this).attr('id');
            $inputparent = $(this).parents('.list-group-Grade');
            $inputvalue = $inputparent.find(this).val();

            if ($inputvalue === "Veteran") {
                $($inputparent).find('.PercentageOfVeterans').show();
                $($inputparent).find('.liberationdate').hide();

            }
            if ($inputvalue === "Liberation") {
                $($inputparent).find('.liberationdate').show();
                $($inputparent).find('.PercentageOfVeterans').hide();

            }
            if ($inputvalue === "Martyr") {
                $($inputparent).find('.liberationdate').hide();
                $($inputparent).find('.PercentageOfVeterans').hide();
            }
        });


        $('div.list-group-Grade').each(function() {

            $this = $(this);
            $(this).attr('id', UUID());
            $form =  $(this).attr('id', UUID()); // rfwerfgwerfefe
            $expandPanels =  ($(this).find('.RegistrationTypeDiv :checkbox').attr('checked') != undefined) ? true : false;
            if($expandPanels) {
                $form.find('.panel-body').show();
            }

            $this.find('.Radio-Buttons input[type="radio"]').each(function(){
                $this = $(this);
                if($this.attr('checked') != '' && $this.attr('checked') != undefined){
                    $this.click();
                }
            });


            $radioButtonNameUUID =  UUID();
            $form.find('input[type="radio"]').each(function() {
                $id =  UUID();
                $(this).attr('id' , $id);
                $(this).attr('name' , "veteran-"+$radioButtonNameUUID);
                $(this).next('label').attr('for' , $id);
            });

        });

        $("#updateVeteran").click(function () {
            $sendData = [];
            $(".list-group-Grade").each(function() {
                $isTabChecked =  ($(this).find('.RegistrationTypeDiv :checkbox').attr('checked') != undefined) ? true : false;
                $inputCandidateVeteranFamilyTitle = $(this).find('.RegistrationTypeDiv :checkbox').val();
                $inputCandidateVeteranType = $(this).find('.Radio-Buttons :radio:checked').val();
                $inputCandidateVeteranPercent = $(this).find('.PercentageOfVeterans input[type="number"]').val();
                $inputCandidateStartLiberationMonth = $(this).find('.liberationdate input[name="inputCandidateStartLiberationMonth"]').val();
                $inputCandidateStartLiberationYear = $(this).find('.liberationdate input[name="inputCandidateStartLiberationYear"]').val();
                $sendData.push({
                    'isTabChecked' : $isTabChecked,
                    'inputCandidateVeteranFamilyTitle' : $inputCandidateVeteranFamilyTitle,
                    'inputCandidateVeteranType' : $inputCandidateVeteranType,
                    'inputCandidateVeteranPercent' : $inputCandidateVeteranPercent,
                    'inputCandidateStartLiberationMonth' : $inputCandidateStartLiberationMonth,
                    'inputCandidateStartLiberationYear' : $inputCandidateStartLiberationYear
                });
            });
            toggleLoader();
            $.ajax({
                type: 'post',
                url: base_url + 'Profile/candidateUpdateVeteran',
                data: { 'inputCandidateVeteran' : $sendData },
                success: function (data) {
                    toggleLoader();
                    $result = JSON.parse(data);
                    notify($result['content'], $result['type']);
                }
            });
        });
    });
</script>