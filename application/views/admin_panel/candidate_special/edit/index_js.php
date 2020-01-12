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
                    /* End Validation */
                    toggleLoader();
                    $sendData = {
                        'inputRowId': $inputRowId,
                        'inputCandidatePreName': $inputCandidatePreName,
                        'inputCandidateFullName': $inputCandidateFullName,
                        'inputCandidateProfileImage': $inputCandidateImage,
                        'inputCandidateStateId': $inputCandidateStateId,
                        'inputCandidateElectionId': $inputCandidateElectionId,
                        'inputCandidateInstaAccount': $inputCandidateInstaAccount
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
                'inputAction': 'Assign'
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