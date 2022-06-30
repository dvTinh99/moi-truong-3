<?php
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 3,
    'product_cat' => 'thiet-bi-pohong-chay-chua-chay'
);
$getposts = new WP_query($args);
?>
<?php
$term = get_term_by('slug', 'thiet-bi-pohong-chay-chua-chay', 'product_cat');
$name = $term->name;
?>
<div class="flexible__sidebar">

    <span class="widget-title"><span><?= $name; ?></span></span>
    <div class="flexible__content widgetflex__product">
        <ul class="lst-product-sb">
            <?php global $wp_query;
            $wp_query->in_the_loop = true; ?>
            <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                <?php global $product; ?>
                <?php  //var_dump($product); die();
                ?>

                <li>
                    <div class="detail">
                        <div class="img_">
                            <a href="<?php the_permalink(); ?>" class="img">
                                <img width="160" height="100" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array('class' => 'thumnail')) ?>" class="img-fluid mx-auto wp-post-image" alt=""> </a>
                        </div>
                        <div class="txt_">
                            <h5><a href="<?php the_permalink(); ?>"><?= $product->get_title(); ?></a></h5>
                            <p><span>Giá: Liên hệ</span></p>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>