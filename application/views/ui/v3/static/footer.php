<?php $_DIR = base_url('assets/ui/v4/'); ?>
<!-- #main -->
<footer id="footer-promo">
    <div class="container">
        <a target="_blank" href="http://twitter.com/azmaa_net" class="tbWow fadeIn" data-wow-delay="0.1s">
            <span aria-hidden="true" class="fa fa-twitter"></span>
        </a>
        <a target="_blank" href="http://instagram.com/azmaa_net" class="tbWow fadeIn" data-wow-delay="0.2s">
            <span aria-hidden="true" class="fa fa-instagram"></span>
        </a>
        <a target="_blank" href="http://t.me/azmaa_net" class="tbWow fadeIn" data-wow-delay="0.3s">
            <span aria-hidden="true" class="fa fa-telegram"></span>
        </a>
        <a target="_blank" href="https://www.aparat.com/azmaa_net" class="tbWow fadeIn" data-wow-delay="0.3s">
            <span aria-hidden="true" class="fa fa-file-movie-o"></span>
        </a>
    </div>
</footer>
<footer id="footer-navigation">
    <div class="container">
        <div class="row">
            <div class="disclaimer-area col-sm-6">
                <nav>
                    <div class="menu-footer-container">
                        <ul id="menu-footer" class="menu rtl">
                            <li id="menu-item-50"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-9 current_page_item menu-item-50">
                                <a href="<?php echo base_url(); ?>">خانه</a>
                            </li>
                            <li id="menu-item-49"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a
                                        href="<?php echo base_url('AboutUs/intro'); ?>">درباره ما</a></li>
                            <li id="menu-item-47"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a
                                        href="<?php echo base_url('SignUp?type=candidate'); ?>">ثبت نام نامزدهای
                                    انتخاباتی</a></li>
                            <li id="menu-item-841"
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-841"><a
                                        href="<?php echo base_url('SignUp?type=sponsor'); ?>">حامیان</a></li>
                        </ul>
                    </div>
                </nav>
                <div class="clear"></div>
                <div class="clear rtl">
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="fw-page-builder-content textalignright">تمامی حقوق برای جنبش ازما محفوظ است</div>
                <style>
                    ul.tags{
                        float: right;
                    }
                    ul.tags li{
                        float: right !important;
                        display: inline-block !important;
                        margin: 5px !important;
                        text-transform: uppercase!important;
                    }
                    ul.tags a{
                        color: #7CA1CC;
                        border: 1px solid #0545a4;
                        padding: 5px;
                        float: right;
                    }
                </style>
                <ul class="tags">
                    <li><a sty href="<?php echo base_url(); ?>">ازما</a></li>
                    <li><a href="<?php echo base_url(); ?>">از ما</a></li>
                    <li><a href="<?php echo base_url(); ?>">جنبش ازما</a></li>
                    <li><a href="<?php echo base_url(); ?>">جنبش از ما</a></li>
                    <li><a href="<?php echo base_url(); ?>">انتخابات مجلس</a></li>
                    <li><a href="<?php echo base_url(); ?>">مجلس مردمی</a></li>
                    <li><a href="<?php echo base_url(); ?>">فرآیند سنجش نامزدها</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
</div>
<script type='text/javascript' src='<?= $_DIR; ?>js/bootstrap.min.js?ver=3.3.7'></script>
<script type='text/javascript' src='<?= $_DIR; ?>js/loading_screen.js?ver=1.0'></script>
<script type='text/javascript' src='<?= $_DIR; ?>js/theme.js?ver=1.0'></script>
</body>
</html>