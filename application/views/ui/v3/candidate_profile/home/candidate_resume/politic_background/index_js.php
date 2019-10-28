<script type="text/javascript">
    $(document).ready(function () {

        $President = JSON.parse (
            ' [' +
            '{ "name": "دوره اول - 1358" , "value" : "1" } ,' +
            '{ "name": "دوره دوم - 1360" , "value" : "2"  } ,' +
            '{ "name": "دوره سوم - 1360" , "value" : "3"  }   ,' +
            '{ "name": "دوره چهارم - 1364" , "value" : "4"  }  ,' +
            '{ "name": "دوره پنجم - 1368" , "value" : "5"  }   ,' +
            '{ "name": "دوره ششم - 1372" , "value" : "6"  }   ,' +
            '{ "name": "دوره هفتم - 1376" , "value" : "7"  }   ,' +
            '{ "name": "دوره هشتم - 1380" , "value" : "8"  }   ,' +
            '{ "name": "دوره نهم - 1384" , "value" : "9"  }   ,' +
            '{ "name": "دوره دهم - 1388" , "value" : "10"  }   ,' +
            '{ "name": "دوره یازدهم - 1392" , "value" : "11"  }   ,' +
            '{ "name": "دوره دوازدهم - 1396" , "value" : "12"  }   ' +
            ']'
        );
        $Parliament = JSON.parse (
            ' [' +
            '{ "name": "دوره اول - 1358"  , "value" : "1" } ,' +
            '{ "name": "دوره دوم - 1363" , "value" : "2"  } ,' +
            '{ "name": "دوره سوم - 1367" , "value" : "3"  }   ,' +
            '{ "name": "دوره چهارم - 1371" , "value" : "4"  }  ,' +
            '{ "name": "دوره پنجم - 1374" , "value" : "5"  }   ,' +
            '{ "name": "دوره ششم - 1379" , "value" : "6"  }   ,' +
            '{ "name": "دوره هفتم - 1382" , "value" : "7"  }   ,' +
            '{ "name": "دوره هشتم - 1386" , "value" : "8"  }   ,' +
            '{ "name": "دوره نهم - 1390" , "value" : "9"  }   ,' +
            '{ "name": "دوره دهم - 1394" , "value" : "10"  }   ' +
            ']'
        );
        $CouncilExperts = JSON.parse (
            ' [' +
            '{ "name": "دوره اول - 1361"  , "value" : "1" } ,' +
            '{ "name": "دوره دوم - 1369" , "value" : "2"  } ,' +
            '{ "name": "دوره سوم - 1377" , "value" : "3"  }   ,' +
            '{ "name": "دوره چهارم - 1385" , "value" : "4"  }  ,' +
            '{ "name": "دوره پنجم - 1394" , "value" : "5"  }   ' +
            ']'
        );
        $CityCouncil = JSON.parse (
            ' [' +
            '{ "name": "دوره اول - 1377"  , "value" : "1" } ,' +
            '{ "name": "دوره دوم - 1381" , "value" : "2"  } ,' +
            '{ "name": "دوره سوم - 1385" , "value" : "3"  }   ,' +
            '{ "name": "دوره چهارم - 1392" , "value" : "4"  }  ,' +
            '{ "name": "دوره پنجم - 1396" , "value" : "5"  }   ' +
            ']'
        );

        $(document).on('change', '[name="inputCandidateActivityType"]', function () {
            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputCandidateActivityType = $(this).val();

            if ($inputCandidateActivityType === "Group") {
                $($parentDom + '.ElectionType').css('display', 'none');
                $($parentDom + '.MemberShip').css('display', 'block');
                $($parentDom + '.Partnership-title').css('display', 'none');

                $($parentDom + '.Media').css('display', 'none');
                $($parentDom + '.MediaName').css('display', 'none');
                $($parentDom + '.Media-Date').css('display', 'none');
                $($parentDom + '.Media-Activity').css('display', 'none');
                $($parentDom + '.CollectionName').css('display', 'none');

            }
            if ($inputCandidateActivityType === "CandidatesCampaign") {
                $($parentDom + '.ActivityType').css('display', 'none');
                $($parentDom + '.ElectionType').css('display', 'block');
                $($parentDom + '.CandidateName').css('display', 'block');
                $($parentDom + '.MemberShip').css('display', 'none');
                $($parentDom + '.Partnership-title').css('display', 'none');


                $($parentDom + '.Media').css('display', 'none');
                $($parentDom + '.MediaName').css('display', 'none');
                $($parentDom + '.Media-Date').css('display', 'none');
                $($parentDom + '.Media-Activity').css('display', 'none');
                $($parentDom + '.CollectionName').css('display', 'none');
            }
            if ($inputCandidateActivityType === "SupervisoryBoard") {
                $($parentDom + '.Partnership-title').css('display', 'block');
                $($parentDom + '.ElectionType').css('display', 'block');
                $($parentDom + '.CandidateName').css('display', 'none');
                $($parentDom + '.MemberShip').css('display', 'none');

                $($parentDom + '.Media').css('display', 'none');
                $($parentDom + '.MediaName').css('display', 'none');
                $($parentDom + '.Media-Date').css('display', 'none');
                $($parentDom + '.Media-Activity').css('display', 'none');
                $($parentDom + '.CollectionName').css('display', 'none');
            }

            if ($inputCandidateActivityType === "Media") {
                $($parentDom + '.Media').css('display', 'block');
                $($parentDom + '.MediaName').css('display', 'block');
                $($parentDom + '.Media-Date').css('display', 'block');
                $($parentDom + '.Media-Activity').css('display', 'block');

                $($parentDom + '.ElectionType').css('display', 'none');
                $($parentDom + '.Partnership-title').css('display', 'none');
                $($parentDom + '.MemberShip').css('display', 'none');
                $($parentDom + '.CandidateName').css('display', 'none');
                $($parentDom + '.CollectionName').css('display', 'none');
            }

            if ($inputCandidateActivityType === "Others") {
                $($parentDom + '.CollectionName').css('display', 'block');
                $($parentDom + '.MemberShip').css('display', 'block');
                $($parentDom + '.Media-Date').css('display', 'block');

                $($parentDom + '.ElectionType').css('display', 'none');
                $($parentDom + '.Media').css('display', 'none');
                $($parentDom + '.MediaName').css('display', 'none');
                $($parentDom + '.Media-Activity').css('display', 'none');
            }
        });
        $(document).on('change', '[name="inputCandidateMediaType"]', function () {
            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputCandidateMediaType = $(this).val();

            if ($inputCandidateMediaType === "Others") {
                $($parentDom + '.media-template-title').css('display', 'block');
            } else {
                $($parentDom + '.media-template-title').css('display', 'none');
            }
        });
        $(document).on('change', '[name="inputCandidateElectionType"]', function () {
            $parentId = $(this).eq(0).parents('div.list-group-item').eq(0).attr('id');
            $parentDom = "#" + $parentId + " ";
            $inputCandidateElectionType = $(this).val();
            $($parentDom + '.ElectionPeriod').css('display', 'block');

            if($inputCandidateElectionType === "President"){
                fillMajorDropDown($parentDom , $President);
            }
            if($inputCandidateElectionType === "Parliament"){
                fillMajorDropDown($parentDom , $Parliament);
            }
            if($inputCandidateElectionType === "CouncilExperts"){
                fillMajorDropDown($parentDom , $CouncilExperts);
            }
            if($inputCandidateElectionType === "CityCouncil"){
                fillMajorDropDown($parentDom , $CityCouncil);
            }
        });

        function fillMajorDropDown($id , data) {
            $selectedMajor = $($id + "[name='inputCandidateElectionType']").data('selected-major');
            $($id + "[name='inputCandidateElectionPeriod']").html('');
            $tempOption = "<option selected value=''>-- انتخاب کنید --</option>";
            $($id + "[name='inputCandidateElectionPeriod']").append($tempOption);
            for($i=0;$i<data.length;$i++){
                if($selectedMajor == data[$i]['value']){
                    $tempOption = "<option selected value='"+data[$i]['value']+"'> "+ data[$i]['name']+"</option>";
                }
                else{
                    $tempOption = "<option value='"+data[$i]['value']+"'> "+ data[$i]['name']+"</option>";
                }
                $($id + "[name='inputCandidateElectionPeriod']").append($tempOption);
            }
        }
        $(".add-form").click(function () {
            $form = $("#unique-form").clone().removeClass('hidden').attr('id', UUID());
            $form.find('[data-name]').each(function () {
                $(this).attr('name', $(this).data('name'))
            });
            $(".skill-divider").after($form);
        });
        $(document).on('click', '.remove-form', function () {
            $(this).parent().remove();
        });

        /* Add By ME */
        $('[name="inputCandidateActivityType"]').change();
        setTimeout(function(){$('[name="inputCandidateElectionType"]').change();} , 500);
        setTimeout(function(){$('[name="inputCandidateMediaType"]').change();} , 1000);

        $("#updatePoliticBackground").click({redirect: false}, updatePoliticBackground);
        $("#updatePoliticBackgroundAndRedirect").click({redirect: true}, updatePoliticBackground);
        function updatePoliticBackground(param) {
            if ($("#form").serializeArray().length <= 0) {
                notify('وارد کردن حداقل یک مهارت الزامی ست', 'yellow');
            }
            else {
                $sendData = {inputCandidatePoliticBackground : $("#form").serializeArray()}
                toggleLoader();
                $.ajax({
                    type: 'post',
                    url: base_url + 'Profile/candidateUpdatePoliticBackground',
                    data: $sendData,
                    success: function (data) {
                        toggleLoader();
                        $result = JSON.parse(data);
                        notify($result['content'], $result['type']);
                        if (param.data.redirect) {
                            window.location.href = base_url + 'Profile/jobHistory';
                        }
                    }
                });
            }
        }

    });
</script>