 <div class="mcn-product mcn-product-feature">
     <div class="mcn-title">
         <h2>
             <span>Sản phẩm nổi bật</span>
             <a href="https://baoholaodongdanang.com/san-pham" class="readmore">Xem thêm</a>
         </h2>
     </div>
     <div class="block-product">
         <ul class="lst-product row lst-slick">
             <?php
                $tax_query[] = array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                    'operator' => 'IN',
                );
                ?>
             <?php $args = array('post_type' => 'product', 'posts_per_page' => 10, 'ignore_sticky_posts' => 1, 'tax_query' => $tax_query); ?>
             <?php $getposts = new WP_query($args); ?>
             <?php global $wp_query;
                $wp_query->in_the_loop = true; ?>
             <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                 <?php global $product; ?>
                 <li class="col-md-3 col-xs-4 col-sm-6">
                     <div class="detail" style ="height: 100%;
    display: flex !important;
    flex-direction: column;">
                         <div class="img_" style ="flex-shrink: 0">
                             <a href="<?php the_permalink(); ?>" class="img">
                                 <img width="200" height="auto" src="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumnail', array( 'class' =>'thumnail') ); ?>" class="img-fluid mx-auto wp-post-image" alt="" />
                             </a>
                         </div>
                         <div class="txt_" style = "height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;">
                             <h4><a href="<?php the_permalink(); ?>"> <?=  $product->get_title(); ?></a></h4>
                             <p><span>Giá: Liên hệ</span></p>
                         </div>
                     </div>
                 </li>
             <?php endwhile;
                wp_reset_postdata(); ?>
         </ul>
     </div>
 </div>