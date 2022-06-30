<?php get_header(); ?>
<?php
if ((isset($_GET['s']))) {
    $term = get_queried_object();
    $cat = $term->slug;
    $args = array(
        's' => $_GET['s'],
        'post_type' => 'product',
        'posts_per_page' => 10,
        'product_cat' => $cat,
        'orderby' => @$_GET['orderby'] == null ? explode('-', $_GET['orderby'])[0] : 'date',
        'order'   => @$_GET['orderby'] == null ? explode('-', $_GET['orderby'])[1] : 'asc',
        // 'meta_query' => array(
        //     array(
        //         'key' => '_price',
        //         'value' => $_GET['min_price'] ?? 0,
        //         'compare' => '>=',
        //         'type' => 'NUMERIC'
        //     ),
        //     array(
        //         'key' => '_price',
        //         'value' => $_GET['max_price'] ?? 99999999999,
        //         'compare' => '<='
        //     )
        // )
    );
} else {
    $term = get_queried_object();
    $cat = $term->slug;
    $args = array(

        'post_type' => 'product',
        'posts_per_page' => 10,
        'product_cat' => $cat,
        'orderby' => @$_GET['orderby'] == null ? explode('-', $_GET['orderby'])[0] : 'date',
        'order'   => @$_GET['orderby'] == null ? explode('-', $_GET['orderby'])[1] : 'asc',
        // 'meta_query' => array(
        //     array(
        //         'key' => '_price',
        //         'value' => $_GET['min_price'] ?? 0,
        //         'compare' => '>=',
        //         'type' => 'NUMERIC'
        //     ),
        //     array(
        //         'key' => '_price',
        //         'value' => $_GET['max_price'] ?? 99999999999,
        //         'compare' => '<='
        //     )
        // )
    );
}
?>
<div id="content">
    <div id="mcn-breadcrumb">
        <div class="container">
            <div class="bread-crumb">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    yoast_breadcrumb('<a>', '</a>');
                }
                ?>
            </div>
            <div id="content" class="wrap__page">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="sidebar widget__left">
                                <div class="inner-wrapper-sticky" style="position: relative;">

                                    <!-- WIDGET TÙY CHỌN SIDEBAR -->
                                    <section id="nav_menu-7" class="widget widget_nav_menu"><span class="widget-title">Danh mục sản phẩm</span>
                                        <div class="menu-danh-muc-bao-ho-lao-dong-container">
                                            <?php get_template_part('sidebar'); ?>
                                        </div>
                                    </section>
                                    <div class="sb-hotline">
                                        <span><i class="m-ic ic-sbhotline"></i> 0905007482</span>
                                    </div>
                                </div>
                            </div> <!-- end sidebar -->
                        </div>
                        <div class="col-md-9 col-sm-12 col-xs-12">
                            <div class="ct-post">
                                <div class="mcn-title-post text-left custom-title-page">
                                    <h2><span><?= $term->name; ?></span></h2>
                                </div>

                                <div id="container">
                                    <div class="bread-crumb">
                                        <?php
                                        if (function_exists('yoast_breadcrumb')) {
                                            yoast_breadcrumb('<a>', '</a>');
                                        }
                                        ?>
                                    </div>
                                    <div id="content" role="main">

                                        <!--<h1 class="woocommerce-products-header__title page-title"></h1> -->



                                        <p class="woocommerce-result-count">
                                            <?php $getposts = new WP_query($args); ?>
                                            <?php $count = $getposts->found_posts; ?>
                                            Xem tất cả <?= $count; ?> kết quả</p>
                                        <form class="woocommerce-ordering" method="get">
                                            <select name="orderby" class="orderby">
                                                <option value="popularity">Phổ biến nhất</option>
                                                <option value="rating">Đánh giá cao nhất</option>
                                                <option value="date" selected="selected">Mới nhất</option>
                                                <option value="price">Giá thấp đến cao</option>
                                                <option value="price-desc">Giá cao xuống thấp</option>
                                            </select>
                                        </form>

                                        <ul class="products">

                                            <div class="clear"></div>
                                            <div class="block-news-tinlienquan san-pham">
                                                <ul class="lst-news row">

                                                    <?php global $wp_query;
                                                    $wp_query->in_the_loop = true; ?>
                                                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                                                        <?php global $product; ?>
                                                        <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                                            <div class="detail">
                                                                <a href="<?php the_permalink(); ?>" class="img">
                                                                    <img width="200" height="150" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')); ?>" class="img-fluid mx-auto wp-post-image" alt="mu-bao-ho-cov-han-quoc"> </a>
                                                                <div class="m-txt-news">
                                                                    <h5 class="text__truncate text__truncate--1">
                                                                        <a href="<?php the_permalink(); ?>"><?= ($product->get_title()); ?></a>
                                                                    </h5>
                                                                    <p>Giá: <span>Liên hệ</span></p>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php endwhile;  ?>
                                                </ul>
                                            </div>
                                        </ul>
                                        <div class="mcn-pagination" style="padding-top:30px;">
                                            <!-- PHÂN TRANG -->
                                            <div class="clear"></div>
                                        </div>
                                        <!-- END PHÂN TRANG -->
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- end wrapper -->

    </div>
</div>
<?php get_footer(); ?>