<?php
get_header();
global $_URL, $_DIR;
wpb_set_post_views(get_the_ID());
?>
    <div class="page-caption">
        <?= the_title(); ?>
    </div>
    <div class="container container-wrapper">
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="breadcrumb">
                    <div class="breadcrumbs">
                        <div class="blog-detail-breadcrumb">
                            <div class="breadcrumbs blog-styles">
                                <ul class="blog-breadcrumb-ul-style">
                                    <li class="blog-breadcrumb-li-style">
                                        <a href="<?= $_URL; ?>">بلاگ</a>
                                    </li>
                                    <li class="blog-breadcrumb-li-style">
                                        <a href="javascript:void(0)"><?= the_title(); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-xs-12 padding-left-style pull-left main-single-container">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-md-12 col-xs-12 blog-detail-page-desc-main-div">
                    <div class="col-md-12 col-xs-12 padding-0">
                        <?php $src = get_the_post_thumbnail_url();  ?>
                        <div class="col-md-12 col-xs-12 blog-detail-page-image text-center">
                            <img src="<?= $src; ?>" style="width: 250px;height: auto;">
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 blog-detail-desc-main-div">
                        <p class="blog-categorized-text text-center">
                            <a href="<?=get_category_link(get_the_category(get_the_ID())[0]->term_id); ?>">
                                <?=get_the_category(get_the_ID())[0]->name; ?>
                            </a>
                        </p>
                        <a href="<?php the_permalink(); ?>" target="_blank">
                            <h1 class="blog-detail-title  text-center"><?= the_title(); ?></h1>
                        </a>
                        <div class="row col-xs-12  text-center">
                            <span class="blog-post-meta">
                            <i class="fa fa-user"></i>
                            <a href="#" target="_blank">
                                <?php  the_author_meta( 'display_name' , get_the_author_meta('ID') ) ?>
                                /
                            </a>
                            <i class="fa fa-calendar"></i>
                            <a href="#" target="_blank">
                                <?php echo _jDate(get_the_date()); ?>
                            </a>
                                <!--                            <i class="fa fa-comment-o"></i>-->
                                <!--                            <a href="#" target="_blank">-->
                                <!--                                بدون نوشته-->
                                <!--                            </a>-->
                        </span>
                        </div>
                        <div class="col-md-12 col-xs-12 blog-detail-page-separator text-center">
                            <img src="<?= $_DIR; ?>assets/images/spacer_center_no_change.png" width="50px;">
                        </div>
                        <div class="col-xs-12 col-md-12 blog-contents-div">
                            <?php the_content(); ?>
                        </div>
                        <div class="hidden col-md-12 col-xs-12 blog-comment-div">
                            <h2>
                                <i class="fa fa-comment"></i>
                                نظرات خود را ارسال کنید
                            </h2>
                            <form>
                                <div class="col-md-12 col-xs-12">
                                    <div class="col-md-6 col-xs-12 col-sm-6 blog-comment-form-div">
                                        <div class="form-group pull-right">
                                            <label for="blogEmail">ایمیل</label>
                                            <input class="form-control" type="text" id="blogEmail">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12 col-sm-6 blog-comment-form-div">
                                        <div class="form-group pull-right">
                                            <label for="fullname">نام و نام خانوادگی</label>
                                            <input class="form-control" type="text" id="fullname">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-xs-12 blog-comment-form-div">
                                        <div class="form-group">
                                            <label>متن پیام :</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-xs-12 blog-send-comment-button-div">
                                        <button class="btn btn-default" type="submit">ارسال نظر</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <?php include 'sidebar.php'; ?>
    </div>
<?php get_footer(); ?>