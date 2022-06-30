<?php
$cat = $args['slug'];
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 4,
    'product_cat' => $cat
);
$getposts = new WP_query($args);
?>
<?php
$term = get_term_by('slug', $cat, 'product_cat');
$link = (get_term_link($cat, 'product_cat'));
$name = $term->name;
?>
<section class="mcn-product">
    <div class="mcn-title">
        <h2>
            <a href="<?= $link  ?>" class="color--primary"><?= $name?></a>
            <a href="<?= $link  ?>" class="readmore">Xem thêm</a>
        </h2>
    </div>
    <div class="block-product">
        <ul class="lst-product row lst-slick">
        <?php global $wp_query;
            $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; ?>
                <?php  //var_dump($product); die();
                ?>
            <li class="col-md-3 col-xs-4 col-sm-6">
                <div class="detail"  style ="height: 100%;
    display: flex !important;
    flex-direction: column;">
                    <div class="img_"  style ="flex-shrink: 0">
                        <a href="<?php the_permalink(); ?>" class="img">
                            <img width="200" height="150" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')) ?>" class="img-fluid mx-auto wp-post-image" alt="" />
                        </a>
                    </div>
                    <div class="txt_" style = "height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;">
                        <h5><a href="<?php the_permalink(); ?>"><?= $product->get_title(); ?></a></h5>
                        <p><span>Giá: Liên hệ</span></p>
                    </div>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
        <!-- product__slider -->
    </div>
</section>