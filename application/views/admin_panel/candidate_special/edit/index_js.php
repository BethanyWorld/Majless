<script type="text/javascript">
    $(document).ready(function () {
        /* Update User Info */
        $("#editCandidateSpecial").click(function () {
            event.preventDefault();
            var file_data = $('#inputCandidateImage').prop('files')[0];
            var form_data = new FormData();
            form_data.append('file', file_data);
            $.ajax({
                url: base_url + "ExamPlaces/uploadFile",
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function (data) {
                    $result = jQuery.parseJSON(data);
                    $inputCandidatePreName = $.trim($("#inputCandidatePreName").val());
                    $inputCandidateFullName = $.trim($("#inputCandidateFullName").val());
                    $inputRowId = $.trim($("#inputRowId").val());
                    $inputCandidateImage = $result['fileSrc'];
                    $inputCandidateStateId = $.trim($("#inputCandidateStateId").val());
                    $inputCandidateElectionId = $.trim($("#inputCandidateElectionId").val());
                    $inputCandidateInstaAccount = $.trim($("#inputCandidateInstaAccount").val());
                    $inputCandidateElectionCode = $.trim($("#inputCandidateElectionCode").val());
                    $inputOperationStatus = $("input[name='CandidateOperationStatus']:checked").val();
                    $inputCandidateSelectionStatus = $("input[name='CandidateSelectionStatus']:checked").val();
                    /* End Validation */
                    toggleLoader();
                    $sendData = {
                        'inputRowId': $inputRowId,
                        'inputCandidatePreName': $inputCandidatePreName,
                        'inputCandidateFullName': $inputCandidateFullName,
                        'inputCandidateProfileImage': $inputCandidateImage,
                        'inputCandidateStateId': $inputCandidateStateId,
                        'inputCandidateElectionId': $inputCandidateElectionId,
                        'inputCandidateInstaAccount': $inputCandidateInstaAccount,
                        'inputOperationStatus': $inputOperationStatus,
                        'inputCandidateSelectionStatus': $inputCandidateSelectionStatus,
                        'inputCandidateElectionCode': $inputCandidateElectionCode
                    }
                    $.ajax({
                        type: 'post',
                        url: base_url + 'Candidate/doEditCandidateSpecial',
                        data: $sendData,
                        success: function (data) {
                            toggleLoader();
                            $result = jQuery.parseJSON(data);
                            notify($result['content'], $result['type']);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            notify('اطلاعات نامزد انتخاباتی تکراری ست', 'red');
                            toggleLoader();
                        }
                    });
                },
                error: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                }
            });
        });
        $('#inputCandidateStateId').change(function(){
            $("#inputCandidateCityId").html('');
            $stateId = $(this).val();
            $.ajax({
                type: 'post',
                url: "<?php echo base_url(); ?>" + 'State/getElectionsByStateId/'+$stateId,
                success: function (data) {
                    $result = jQuery.parseJSON(data);
                    $("#inputCandidateElectionId").html('');
                    for(let i=0;i<$result.length;i++){
                        $("#inputCandidateElectionId").append('<option value="'+$result[i].ElectionId+'">'+$result[i].ElectionName+'</option>');
                    }
                    $electionId = $("#inputCandidateStateId").data('election-id');
                    $("#inputCandidateElectionId").val($electionId);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    iziToast.show({
                        title: 'خطای ارتباط با سرور.دقایقی دیگر تلاش کنید',
                        color: 'red',
                        zindex: 9060,
                        position: 'topLeft'
                    });
                }
            });
        });
        $('#inputCandidateStateId').change();
        /* End Update User Info */
        $("#inputSearch").keyup(function () {
            $sendData = {'inputSearch': $(this).val() }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/getJsonCandidate',
                data: $sendData,
                success: function (data) {
                    $result = jQuery.parseJSON(data);
                    $('.candidate-placeholder').html('');
                    for(var i=0;i<$result.length;i++){
                        item = $result[i];
                        $row = '<div class="row col-xs-12"><input class="selected-candidate" id="i-' + item['CandidateId'] + '" type="checkbox"  value="' + item['CandidateId'] + '" />';
                        $row += '<label for="i-' + item['CandidateId'] + '">' + item['CandidateFirstName']+item['CandidateLastName'] + '</label>';
                        $row += '</div>';
                        $('.candidate-placeholder').append($row);
                    }
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('اطلاعات نامزد انتخاباتی تکراری ست', 'red');
                }
            });
        });
        $("#editBindCandidateSpecial").click(function () {
            $inputSelected = 0;
            $inputRowId = $.trim($("#inputRowId").val());
            $(".selected-candidate").each(function () {
                if ($(this).is(":checked")) {
                    $inputSelected = $(this).val();
                }
            });
            toggleLoader();
            $sendData = {
                'inputRowId': $inputRowId,
                'inputRefCandidateId': $inputSelected
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doBindCandidateSpecial',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
                error: function (jqXHR, textStatus, errorThrown) {
                    notify('اطلاعات نامزد انتخاباتی تکراری ست', 'red');
                    toggleLoader();
                }
            });
        });
        /*
        * Transparency
        * Obligation
        * Merit
        * */
        $inputCandidateCode = $.trim($("#inputCandidateCode").val());
        $('.Assignment').click(function () {
            toggleLoader();
            $sendData = {
                'inputCandidateId':$inputCandidateCode,
                'inputCandidateBadge': $(this).data('action-type'),
                'inputCandidateType': 'Special',
                'inputAction': 'Assign',
                'inputCandidateBadgeAddress': $("#"+$(this).data('action-type')).val(),
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doAssignBadge',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
            });
        });
        $('.Delete').click(function () {
            toggleLoader();
            $sendData = {
                'inputCandidateId':$inputCandidateCode,
                'inputCandidateBadge': $(this).data('action-type'),
                'inputCandidateType': 'Special',
                'inputAction': 'Delete'
            }
            $.ajax({
                type: 'post',
                url: base_url + 'Candidate/doAssignBadge',
                data: $sendData,
                success: function (data) {
                    toggleLoader();
                    $result = jQuery.parseJSON(data);
                    notify($result['content'], $result['type']);
                },
            });
        });
    });
</script>