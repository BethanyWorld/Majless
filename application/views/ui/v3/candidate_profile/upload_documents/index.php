<?php $_DIR = base_url('assets/ui/v3/'); ?>
<?php
$documentPersianName = 'تایید صلاحیت و تعهد نامه';
$documentName = 'Acceptance';
$documentData['documentName'] = $documentName;
$documentData['documentPersianName'] = $documentPersianName;
$documentData['candidateDocuments'] = $userInfo['candidateDocuments'];
?>
<div class="container container-wrapper">
    <div class="row col-xs-12 col-md-3 pull-right">
        <div class="row col-xs-12  pull-right">
            <div class="row col-xs-12 pull-right sidebar">
                <div class="col-md-12 col-md-offset-0 col-sm-6 col-s-offset-3 col-xs-6 col-xs-offset-3 padding-0">
                    <img class="thumbnail profile-image"
                         width="100%" height="135px"
                         id="imageProfile"
                         src="<?php echo $noImg; ?>"/>
                </div>
                <div class="col-md-12 col-xs-12 col-sm-12 padding-0">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <?php echo $userInfo['CandidateFirstName'] . " " . $userInfo['CandidateLastName']; ?>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <?php echo $sidebar; ?>
                        </div>
                    </div>
                    <strong style="font-size: 14px;text-align: right;display: inline-block;">آخرین ورود:</strong>
                    <?php
                    if (!empty($this->session->userdata('UserLoginInfo')['loginRecord'])) {
                        $loginInfo = $this->session->userdata('UserLoginInfo')['loginRecord'][0];
                        ?>
                        <strong style="font-size: 14px;text-align: left;display: inline-block;direction: ltr;">
                            <?php echo $loginInfo['LoginDate']; ?>
                        </strong>
                    <?php } else { ?>
                        <strong style="font-size: 14px;text-align: left;display: inline-block;direction: ltr;">
                            <?php echo jDateTime::date("Y/m/d H:i:s", false, false); ?>
                        </strong>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xs-12 col-md-9 pull-right">
        <input type="hidden" id="inputCandidateDocumentName" value="<?php echo $documentName; ?>" />

        <br>
        <div class="panel panel-warning">
            <div class="panel-heading" style="color: white;">
                <p class="margin-b-0">
                    شما میتوانید تمامی مدارک مرتبط با
                    <?php echo $documentPersianName; ?>
                    خود را بارگذاری کنید.
                    مدارک را در فرمت تصاویر و فایل های zip , pdf , rar بارگذاری کنید
                </p>
            </div>
        </div>
        <div class="col-xs-12 padding-0">
            <form id="fileupload" method="POST" enctype="multipart/form-data">
            <span id="spanUpload" class="btn fileinput-button padding-0">
                <input class="display-in-block pull-right" id="files" type="file" name="files[]" multiple/>
                <input class="display-in-block upload-file-btn" type="submit" value="بارگذاری مدارک"/>
            </span>
            </form>
            <div class="progress" style="display: none;">
                <div class="progress-bar progress-bar-striped active pull-right" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <?php
            $countOfDocuments = 0;
            foreach ($userInfo['candidateDocuments'] as $candidateDocument) {
                if ($candidateDocument['CandidateDocumentName'] == $documentName) {
                    $countOfDocuments = 1;
                }
            }
            if($countOfDocuments == 0){ ?>
                <br>
                <div class="alert alert-info">
                    برای
                    <strong>
                        <?php echo $documentPersianName; ?>
                    </strong>
                    مدرکی بارگذاری نشده است
                </div>
            <?php }
            else{ ?>
                <br>

                <?php $countOfDocuments = 0;
                foreach ($userInfo['candidateDocuments'] as $candidateDocument) {
                    if ($candidateDocument['CandidateDocumentName'] == $documentName) {
                        $countOfDocuments +=1;
                    }
               } ?>
                <div class="col-xs-12 alert alert-info">
                    تعداد
                    <strong><?php echo $countOfDocuments; ?></strong>
                    مدرک بارگذاری شده است
                </div>
                <table class="table table-condensed table-hover table-bordered">
                    <thead>
                    <tr>
                        <th class="fit">ردیف</th>
                        <th class="text-center">مشاهده</th>
                        <th class="text-center">تاریخ بارگذاری</th>
                        <th class="fit">حذف</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $index = 0;
                    foreach ($userInfo['candidateDocuments'] as $candidateDocument) {
                        if ($candidateDocument['CandidateDocumentName'] == $documentName) { $index += 1; ?>
                            <tr>
                                <td class="fit">#<?php echo $index; ?></td>
                                <td class="text-center">
                                    <a href="<?php echo $candidateDocument['CandidateDocumentUrl']; ?>" target="_blank">
                                        <i class="fa fa-folder-open-o"></i>
                                    </a>
                                </td>
                                <td class="fit" dir="ltr">
                                    <?php echo $candidateDocument['CreateDateTime']; ?>
                                </td>
                                <td class="fit">
                                    <button class="btn btn-danger remove-document"
                                            data-row-id="<?php echo $candidateDocument['RowId']; ?>">
                                        <i class="fa fa-remove"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php }
                    } ?>
                    </tbody>
                </table>
            <?php }  ?>
        </div>
    </div>
</div>