<?php get_header(); ?>
<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mcn-slider">
                    <!--start slider-->
                    <section class="slider">
                        <div class="slideshow-container">

                            <div class="mySlides">
                                <img src="<?php bloginfo('template_directory') ?>/html/images/BHLD1.jpg" style="width:100%">
                            </div>

                            <div class="mySlides">
                                <img src="<?php bloginfo('template_directory') ?>/html/images/bhlD2.jpg" style="width:100%">
                            </div>

                        </div>
                        <div style="text-align:center">
                            <span class="dot"></span>
                            <span class="dot"></span>
                        </div>
                    </section>
                    <!--end slider-->
                </div>
                <!-- end mcn-slider -->
            </div>
        </div>
    </div>

    <div class="block-content wrap__page">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="sidebar widget__left">
                        <!-- WIDGET TÙY CHỌN SIDEBAR -->
                        <section id="nav_menu-7" class="widget widget_nav_menu">
                            <span class="widget-title">Danh mục sản phẩm</span>
                            <div class="menu-danh-muc-bao-ho-lao-dong-container">
                                <?php get_template_part('sidebar'); ?>
                            </div>
                        </section>
                        <div class="sb-hotline">
                            <span><i class="m-ic ic-sbhotline"></i> 0905007482</span>
                        </div>
                    </div>
                    <!-- end sidebar -->
                </div>
                <div class="col-md-9">
                    <?php get_template_part('template-parts/san-pham-noi-bat') ?>
                    <?php get_template_part('template-parts/phong-chay-chua-chay', null, ['slug' => 'thiet-bi-pohong-chay-chua-chay']) ?>
                    <?php get_template_part('template-parts/phong-chay-chua-chay', null, ['slug' => 'bao-ho-lao-dong']) ?>
                    <?php //get_template_part('template-parts/bao-ho-lao-dong') 
                    ?>
                    <?php //get_template_part('template-parts/bien-canh-bao') 
                    ?>
                    <?php //get_template_part('template-parts/thiet-bi-an-toan-dien') 
                    ?>
                    <?php //get_template_part('template-parts/thiet-bi-ho-tro') 
                    ?>

                </div>
            </div>
        </div>
    </div>

    <!-- end mcn-news -->
</div>
<!-- end content -->
<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
</script>
<?php get_footer(); ?>