<?php get_header(); ?>
<?php
$product = wc_get_product(get_the_ID());
?>
<div id="content">
    <div id="main-content" class="wrap__page">
        <div class="container">
            <div class="bread-crumb">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<a>', '</a>');
                }
                ?>
            </div>
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12">
                    <div class="ct-post">
                        <div class="mcn-title-post text-left custom-title-page">
                            <h2><span><?= the_title();  ?></span></h2>
                        </div>
                        <div id="container">
                            <div id="content" role="main">
                                <nav class="woocommerce-breadcrumb">
                                    <a href="https://baoholaodongdanang.com">Trang
                                        chủ</a>&nbsp;/&nbsp;
                                    <a href="https://baoholaodongdanang.com/san-pham/">Sản
                                        phẩm</a>&nbsp;/&nbsp;<a href="https://baoholaodongdanang.com/danh-muc/bao-ho-lao-dong/">Bảo hộ lao
                                        động</a>&nbsp;/&nbsp;<a href="https://baoholaodongdanang.com/danh-muc/bao-ho-lao-dong/thiet-bi-bao-ve-dau/">Thiết
                                        bị bảo vệ đầu</a>&nbsp;/&nbsp;<a href="https://baoholaodongdanang.com/danh-muc/bao-ho-lao-dong/thiet-bi-bao-ve-dau/non-bao-ho/">Nón
                                        bảo hộ</a>&nbsp;/&nbsp;Mũ bảo hộ COV Hàn Quốc
                                </nav>



                                <div id="product-12766" class="post-12766 product type-product status-publish has-post-thumbnail product_cat-bao-ho-lao-dong product_cat-non-bao-ho product_cat-thiet-bi-bao-ve-dau product_tag-mu-bao-ho product_tag-mu-bao-ho-cov-d-hf-001-2a product_tag-mu-bao-ho-cov-han-quoc product_tag-mu-bao-ho-han-quoc product_tag-mu-bao-ho-lao-dong first instock shipping-taxable product-type-simple">
                                    <?php
                                    // $url = get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); 
                                    // var_dump($url);
                                    // die();
                                    ?>
                                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1;">
                                        <figure class="woocommerce-product-gallery__wrapper">
                                            <div data-thumb="" class="woocommerce-product-gallery__image m-zoomin">
                                                <a href="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')) ?>" class="img2">
                                                    <img width="180" height="151" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>" class="attachment-shop_single size-shop_single wp-post-image" alt="mu-bao-ho-cov-han-quoc" title="" data-src="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>" data-large_image="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>" data-large_image_width="429" data-large_image_height="361" srcset="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>" sizes="(max-width: 180px) 100vw, 180px">
                                                </a>
                                            </div>
                                        </figure>
                                    </div>

                                    <div class="summary entry-summary">

                                        <h1 class="product_title entry-title"><?= the_title(); ?></h1>
                                        <p>Giá: <span>Liên hệ</span></p>
                                        <!-- Đặt thẻ này vào phần đầu hoặc ngay trước thẻ đóng phần nội dung của bạn. -->
                                        <!-- <script src="https://apis.google.com/js/platform.js" async="" defer=""
                                                gapi_processed="true">
                                                    { lang: 'vi' }
                                                </script> -->

                                        <div class="woocommerce-product-details__short-description">
                                            <h5>Mô tả ngắn:</h5>
                                            <?= ($product->get_short_description()); ?>
                                        </div>
                                        <!-- <div class="product_meta">



                                                    <span class="posted_in">Danh mục: <a href="https://baoholaodongdanang.com/danh-muc/bao-ho-lao-dong/" rel="tag">Bảo hộ lao động</a>, <a href="https://baoholaodongdanang.com/danh-muc/bao-ho-lao-dong/thiet-bi-bao-ve-dau/non-bao-ho/" rel="tag">Nón bảo hộ</a>, <a href="https://baoholaodongdanang.com/danh-muc/bao-ho-lao-dong/thiet-bi-bao-ve-dau/" rel="tag">Thiết bị bảo vệ đầu</a></span>
                                                    <span class="tagged_as">Tag: <a href="https://baoholaodongdanang.com/tu-khoa/mu-bao-ho/" rel="tag">Mũ bào hộ</a>, <a href="https://baoholaodongdanang.com/tu-khoa/mu-bao-ho-cov-d-hf-001-2a/" rel="tag">Mũ bảo hộ COV D-HF-001-2A</a>, <a href="https://baoholaodongdanang.com/tu-khoa/mu-bao-ho-cov-han-quoc/" rel="tag">Mũ bảo hộ COV Hàn Quốc</a>, <a href="https://baoholaodongdanang.com/tu-khoa/mu-bao-ho-han-quoc/" rel="tag">Mũ bảo hộ Hàn Quốc</a>, <a href="https://baoholaodongdanang.com/tu-khoa/mu-bao-ho-lao-dong/" rel="tag">mũ bảo hộ lao động</a></span>

                                                </div> -->


                                    </div><!-- .summary -->
                                    <div class="clear"></div>


                                    <div class="woocommerce-tabs wc-tabs-wrapper">
                                        <ul class="tabs wc-tabs" role="tablist">
                                            <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                                                <a href="#tab-description">Mô tả</a>
                                            </li>
                                        </ul>
                                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="display: block;">

                                            <!--<h2></h2>-->

                                            <?= ($product->get_description()); ?>
                                        </div>
                                    </div>


                                    <?php get_template_part('template-parts/san-pham-lien-quan') ?>


                                </div><!-- #product-12766 -->


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-12 col-xs-12">

                    <aside class="sidebar widget-area widget__right" role="complementary">
                        <div class="sidebar__inner">
                            <section id="nav_menu-8" class="widget widget_nav_menu"><span class="widget-title">Bảo
                                    hộ lao động</span>
                                <div class="menu-danh-muc-bao-ho-lao-dong-container">
                                    <?php get_template_part('sidebar', null, array('left' => "left")); ?>
                                </div>
                            </section>
                            <section id="dpe_fp_widget-10" class="widget widget_dpe_fp_widget">

                                <?php get_template_part('template-parts/div.phongchay'); ?>

                            </section>
                            <section class="widget widget_dpe_fp_widget"><span class="widget-title"><span></span></span></section>
                        </div>
                    </aside>
                </div>
                <!-- #secondary -->
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>