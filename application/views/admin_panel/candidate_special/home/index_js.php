<?php $ci =& get_instance(); ?>
<script type="text/javascript">
    $items = <?php echo $ci->config->item('defaultPageSize'); ?>;
    $itemsOnPage = <?php echo $ci->config->item('defaultPageSize'); ?>;
    $selectedPage = 1;
    $totalResultCount = 0;
    $hasPagination = false;
    $currentPage = 1;
    function loadData(selectedPage = $selectedPage){
        toggleLoader();
        $inputCandidateStatus = $("#inputCandidateStatus").val();
        $inputCandidateFullName = $("#inputCandidateFullName").val();
        $inputCandidateState = $("#inputCandidateState").val();
        $sendData = {
            'pageIndex': selectedPage,
            'inputCandidateState': $inputCandidateState,
            'inputCandidateFullName': $inputCandidateFullName,
        }
        $.ajax({
            type: 'post',
            url: base_url + 'Candidate/doSpecialPagination',
            data: $sendData,
            success: function (data) {
                hideLoader();
                $result = JSON.parse(data);
                $(".table-rows").html($result['htmlResult']);
                $totalResultCount = $result['count'];
                if($hasPagination){
                    $(".simple-pagination").pagination('updateItems', $totalResultCount);
                }
                else{
                    $hasPagination = true;
                    $(".simple-pagination").pagination({
                        items: $totalResultCount,
                        itemsOnPage: $itemsOnPage,
                        cssStyle: 'compact-theme',
                        prevText: 'قبلی',
                        nextText: 'بعدی',
                        onPageClick: function (pageNum, e) {
                            e.preventDefault();
                            loadData(pageNum);
                            $currentPage = pageNum;
                        }
                    });
                }
            }
        });
    }
    $(document).ready(function() {
        loadData();
        $("#searchButton").click(function () {
            loadData(1);
        });
        /* Export*/
        $(document).on('click', ".invite-button", function () {
            $('.show-box').hide();
            $("#show-box").html('');
            $("#show-box").append($(".loading-text").clone().removeClass('hidden'));
            $(".modal-body").append($(".loading-demo").clone().removeClass('hidden'));
            $srcImage = $(this).data('src');
            $candidateName = $(this).data('title');
            $candidateArea = $(this).data('area');
            $('.inner-candidate-image').attr('src', $srcImage);
            $('.modalCandidateName').text($candidateName);
            $('.modalCandidateArea').text($candidateArea);
            domtoimage.toJpeg(document.getElementById('hidden-box1'), {quality: 1}).then(function (dataUrl) {

                $(".modal-body").find(".loading-demo").remove();
                var img = new Image();
                img.src = dataUrl;
                document.body.appendChild(img);
                $("#show-box div:first").append(img);
                var link = document.createElement('a');
                link.href = dataUrl;
                link.download = Math.floor(Math.random() * 10000) + 'Story.jpg';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            });
            domtoimage.toJpeg(document.getElementById('hidden-box2'), {quality: 1}).then(function (dataUrl) {
                var img = new Image();
                img.src = dataUrl;
                document.body.appendChild(img);
                $("#show-box div:last").append(img);
                var link = document.createElement('a');
                link.href = dataUrl;
                link.download = Math.floor(Math.random() * 10000) + 'Post.jpg';
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
                $('.show-box').fadeIn();
            });
        });
        $(document).on('click', '.remove-special-candidate', function () {
            $this = $(this);
            $title = "<strong class='badge'> " + $this.data('title') + " </strong>";
            $.confirm({
                title: '',
                content: 'آیا از حذف '+ $title +' مطمئن هستید؟',
                buttons: {
                    specialKey: {
                        text: 'تایید',
                        btnClass: 'btn-blue',
                        action: function () {
                            toggleLoader();
                            $sendData = {
                                'inputRowId': $this.data('id')
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Candidate/doDeleteCandidateSpecial',
                                data: $sendData,
                                success: function (data) {
                                    toggleLoader();
                                    $result = jQuery.parseJSON(data);
                                    iziToast.show({
                                        title: $result['content'],
                                        color: $result['type'],
                                        zindex: 9060,
                                        position: 'topLeft'
                                    });
                                    setTimeout(function(){
                                        if ($result['success']) {
                                            location.reload();
                                        }
                                    } , 1000);
                                },
                                error: function (jqXHR, textStatus, errorThrown) {
                                    iziToast.show({
                                        title: 'خطای ارتباط با سرور.دقایقی دیگر تلاش کنید',
                                        color: 'red',
                                        zindex: 9060,
                                        position: 'topLeft'
                                    });
                                    toggleLoader();
                                }
                            });
                        }
                    },
                    alphabet: {
                        text: 'انصراف',
                        action: function () {
                            //$.alert('A or B was pressed');
                        }
                    }
                }
            });
        });
        $(document).on('click', '.toggle-acceptance', function () {
            $this = $(this);
            $title = "<strong class='badge'> " + $this.data('title') + " </strong>";
            $.confirm({
                title: '',
                content: 'آیا از نغییر وضعیت '+ $title +' مطمئن هستید؟',
                buttons: {
                    specialKey: {
                        text: 'تایید',
                        btnClass: 'btn-blue',
                        action: function () {
                            toggleLoader();
                            $sendData = {
                                'inputRowId': $this.data('id')
                            }
                            $.ajax({
                                type: 'post',
                                url: base_url + 'Candidate/doToggleAcceptanceCandidateSpecial',
                                data: $sendData,
                                success: function (data) {
                                    toggleLoader();
                                    $result = jQuery.parseJSON(data);
                                    iziToast.show({
                                        title: $result['content'],
                                        color: $result['type'],
                                        zindex: 9060,
                                        position: 'topLeft'
                                    });
                                    setTimeout(function(){
                                        if ($result['success']) {
                                            loadData($currentPage);
                                        }
                                    } , 1000);
                                },
                                error: function (jqXHR, textStatus, errorThrown) {
                                    iziToast.show({
                                        title: 'خطای ارتباط با سرور.دقایقی دیگر تلاش کنید',
                                        color: 'red',
                                        zindex: 9060,
                                        position: 'topLeft'
                                    });
                                    toggleLoader();
                                }
                            });
                        }
                    },
                    alphabet: {
                        text: 'انصراف',
                        action: function () {
                            //$.alert('A or B was pressed');
                        }
                    }
                }
            });
        });
        /* Export*/
    });
</script>