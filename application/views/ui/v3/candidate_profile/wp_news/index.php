<?php $_DIR = base_url('assets/ui/v3/'); ?>
<div class="container container-wrapper" style="background: none;">
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
        <?php  if(count($candidateWordpress) > 0){ ?>
            <div class="col-xs-12 alert alert-success">
                <strong>
                    شما میتوانید اخبار و اطلاعات مرتبط با خود جهت نمایش در سایت را از طریق آدرس زیر بارگذاری کنید
                </strong>
            </div>
            <div class="col-xs-12">
                <p>
                    <span>نام کاربری:</span>
                    <strong><?php echo $candidateWordpress[0]['CandidateUserName']; ?></strong>
                </p>
                <p>
                    <span>رمز عبور:</span>
                    <strong><?php echo $candidateWordpress[0]['CandidatePassword']; ?></strong>
                </p>
                <p>
                    <a target="_blank" href="<?php echo base_url('blog/wp-login.php'); ?>">
                        <strong>جهت درج اخبار اینجا کلیک کنید</strong>
                    </a>
                </p>
            </div>
        <?php } else { ?>
            <div class="col-xs-12 alert alert-info">
                <strong>
                    در صورتی که فرآیند آزمون و نمره دهی شما تکمیل شود شما میتوانید اطلاعات دسترسی به پنل اخبار را در اینجا مشاهده کنید
                </strong>
            </div>
        <?php }  ?>
    </div>
</div>

<script>
    $(document).ready(function () {

    });
</script>
