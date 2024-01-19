<?php /*
 * Template Name: Airsoft
 */
get_header(); ?>


    <div class="airsoft-wrapper">
        <?php if( have_rows('background_baner') ): ?>
            <?php while( have_rows('background_baner') ): the_row();
                $imageDes = get_sub_field('desktop_image');
                $imageMob = get_sub_field('mobile_image');
                ?>

                <div class="header-rodjendani">
                    <div class="desktop-image">
                        <img src="<?php echo esc_url($imageDes['url']); ?>" alt="<?php echo esc_attr($imageDes['alt']); ?>" />
                    </div>

                    <div class="mobile-image">
                        <img src="<?php echo esc_url($imageMob['url']); ?>" alt="<?php echo esc_attr($imageMob['alt']); ?>" />
                    </div>
                    <div class="uheader">
                        <h1>Airsoft Gadjanje u Metu</h1>
                        <ul>
                            <li><a href="/">Naslovna</a></li>
                            <li><?php wp_title(); ?></li>
                        </ul>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>


        <div class="first-pravila-field">
            <div class="airsoft-left object-non-visible wow fadeInRight animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/airsoft-page.png" alt="">
            </div>
            <div class="airsoft-right">
                <div class="paintball-price-about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                    <h6>Airsoft igra</h6>
                    <div class="paintball-price-about-field-about-logo">
                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/real-small-logo.png" alt="">
                    </div>
                    <h3>Gadjanje u metu- Paintball Sremčica</h3>
                </div>
                <div class="pravila-content object-non-visible wow fadeInLeft animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                    <p>Dobrodošli u našu airsoft arenu za gađanje u metu! Ovde se preciznost susreće s uzbuđenjem u sigurnom okruženju. Bez obzira da li ste početnik ili iskusni airsoft entuzijasta, naša arena vam pruža priliku da unapredite svoje veštine gađanja.</p>
                    <p>Gadanje u metu čini nezaboravan dodatak svakom rođendanskom slavlju! Ova uzbudljiva aktivnost donosi dozu uzbuđenja i smeha među prijatelje, čineći proslavu još zanimljivijom. S preciznošću i koncentracijom, gosti mogu testirati svoje veštine gađanja, dok boje i mete stvaraju šarenu atmosferu veselja. Neka rođendansko slavlje postane neverovatno iskustvo s dodatkom gadanja u metu - jedinstvenom igrom koja će definitivno ostati u sećanju svih prisutnih.</p>
                </div>
            </div>
        </div>

        <div class="all-video">
            <?php if( have_rows('about_us') ): ?>
                <?php while( have_rows('about_us') ): the_row();
                    $image = get_sub_field('about_logo');
                    ?>
                    <div class="about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                        <h6>See the action</h6>
                        <div class="about-logo">
                            <!--                        animated pulse infinite-->
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        </div>
                        <h3><?php the_sub_field('naslov'); ?></h3>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

            <div class="airsoft-video">
                <?php the_field('airsoft_video'); ?>
            </div>
        </div>



        <div class="paintball-games">
            <?php if( have_rows('pravila_video') ): ?>
                <?php while( have_rows('pravila_video') ): the_row();

                    // Get sub field values.
                    $image = get_sub_field('image');
                    $link = get_sub_field('link');

                    ?>
                    <div class="paintball-videos">
                        <div class="item-video object-non-visible wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                            <?php the_sub_field('video_prvi'); ?>
                        </div>
                        <div class="item-video object-non-visible wow fadeInDown animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                            <?php the_sub_field('video_drugi'); ?>
                        </div>
                        <div class="item-video object-non-visible wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                            <?php the_sub_field('video_treci'); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <a href="<?php the_sub_field('link'); ?>">
                <div class="big-image-link-pravila object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms" id="link2-pravila">
                    <p>Još videa</p>
                </div>
            </a>
        </div>







</div>
<?php get_footer(); ?>