<footer>
            <div class="footer-top">
                <div class="container">
                    <div class="ft-bot">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="contact-ft">
                                    <h6>Liên hệ</h6>
                                    <p><i class="fa fa-map-marker"></i>Tổ 4 Thôn Phước Hưng, xã Hòa Nhơn Huyện Hòa Vang
                                        TP Đà Nẵng</p>
                                    <p><i class="fa fa-mobile"></i><strong>0905 007 482</strong></p>
                                    <p><i class="fa fa-fax" aria-hidden="true"></i><strong>0905 274 461</strong></p>
                                    <p><i class="fa fa-mobile"></i><strong>0944 750 583</strong></p>
                                    <p><i class="fa fa-envelope"></i>baoholaodongvamoitruongqh.@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="support-ft">
                                    <h6>Sản phẩm & Dịch vụ</h6>
                                    <ul class="lst_">
                                    <?php
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'header-menu',
                                                'menu_id' => 'menu-san-pham-dich-vu',
                                                // 'menu_class' => 'menu hidden-sm hidden-xs'
                                            )
                                        );
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="about-ft">
                                    <h6>Bản đồ</h6>
                                    <div class="google__map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.981129794053!2d108.120455014446!3d16.014497788914767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421d158623542d%3A0xbc406469e92635b4!2zUGjGsOG7m2MgaMawbmc!5e0!3m2!1svi!2s!4v1655571914561!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bot">
                <div class="container" style="text-align: center;">
                    <p>© 2022 Domain. All rights reserved. Thiết kế bởi <a href="#">https://codeby.com/</a></p>
                </div>
            </div>
        </footer>


    </div>

    <script>
        document.querySelectorAll('._toggle-menu').forEach((e) => e.
            addEventListener('click', () => document.querySelector('#menu-mobile').classList.toggle('_on')))
    </script>
</body>

</html>