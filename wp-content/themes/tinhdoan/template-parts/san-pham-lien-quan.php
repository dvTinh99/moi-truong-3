<section class="related products">
    <div class="mcn-title">
        <h2 class="related-title"><span>Sản phẩm liên quan</span></h2>
    </div>
    <ul class="products">


        <div class="block-news-tinlienquan san-pham">
            <ul class="lst-news row">
            <?php

                global $post; // setup_postdata will not work without this being set (outside of the foreach loop)

                $args = array(
                    'posts_per_page'   => 6,
                    'orderby'          => 'rand',
                    'post_type'        => 'product' ); 

                $random_products = get_posts( $args );

                foreach ( $random_products as $post ) : setup_postdata( $post ); ?>
                <li class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                    <div class="detail">
                        <a href="<?php the_permalink(); ?>" class="img">
                            <img 
                            width="200" 
                            height="150" 
                            src="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ) ?>" class="img-fluid mx-auto wp-post-image" alt="">
                        </a>
                        <div class="m-txt-news">
                            <h5 class="text__truncate text__truncate--1">
                                <a href="<?php the_permalink(); ?>">
                                    <?php echo($post->post_title);  ?>
                                </a>
                            </h5>
                            <p>Giá: <span>Liên hệ</span></p>
                        </div>
                    </div>
                </li>
                <?php endforeach; 
                wp_reset_postdata();
                ?>
                
            </ul>
        </div>
    </ul>

</section>