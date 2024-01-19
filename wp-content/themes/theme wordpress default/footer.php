<!--.............................................FOOTER SECTION....................................................................-->
<footer>
<!--    class="object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms"-->
    <a href="javascript:void(0)" onClick="window.scrollTo(0, 0)" id="myBtn" class="object-non-visible wow fadeInRight animated" data-wow-duration="1s" data-wow-delay="600ms"><i class="fal fa-chevron-up"></i></a>
    <div class="footer">

        <div class="social">
            <h3>Social</h3>
            <ul>
                <li>
                    <a href="https://www.instagram.com/paintballsremcica/"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/paintballsremcica/"><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href="#!"><img src="<?php echo bloginfo('template_directory');?>/assets/images/tiktok-icon1.png" alt="tik-tok"></a>
                </li>
            </ul>
        </div>

        <div class="logo-futer">
            <a href="/">
                <img src="<?php echo bloginfo('template_directory');?>/assets//images/real-logo.png"/>
            </a>
        </div>

        <div class="contanct">
            <h3>Kontakt</h3>
            <ul>
                <li>Tel: <a href="tel:+381655822552">065 / 58 - 22 - 552</a></li>
                <li>Mail: <a href="mailto:vlajkovic.1997@gmail.com">paintballsremcica@gmail.com</a></li>
                <li>Adresa: <a href="https://goo.gl/maps/cXA6kQpwYM7uzKMv9">Mijatovih njiva 21, Beograd, Sremčica</a></li>
            </ul>
        </div>
    </div>

    <div class="footer-menu">
        <div class="footer-flex">
            <div class="copyright">
                <p>© 2024 <a href="/">Paintball Sremčica</a> Powered by <a href="#!">Mihailo</a> </p>
            </div>
<!--            <div class="menu-pages-footer">-->
<!--                --><?php
//                wp_nav_menu( array('container_class' => 'menu-header',
//                    'theme_location' => 'meni-left') ); ?>
<!--                --><?php
//                wp_nav_menu( array('container_class' => 'menu-header',
//                    'theme_location' => 'meni-right') ); ?>
<!--            </div>-->
        </div>
    </div>
</footer>



<?php wp_footer(); ?>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<script>
    new WOW().init();
</script>

<script src="<?php echo bloginfo('template_directory');?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/js/slick.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/js/wow.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/js/owl.carousel.min.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/js/jquery.fancybox.js"></script>
<script src="<?php echo bloginfo('template_directory');?>/assets/js/main.js"></script>
</html>