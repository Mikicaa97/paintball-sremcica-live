<?php /*
 * Template Name: Galerija
 */
get_header(); ?>

<div class="gallery-wrapper">
    <?php if( have_rows('about_us') ): ?>
        <?php while( have_rows('about_us') ): the_row();
            $image = get_sub_field('about_logo');
            ?>
            <div class="about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                <h6>Galerija</h6>
                <div class="about-logo">
                    <!--                        animated pulse infinite-->
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
                <h3><?php the_sub_field('naslov'); ?></h3>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php if( have_rows('homepage_slider') ): ?>
        <div id="gallery-slider" class="head-banner desk-slider owl-carousel owl-theme">
            <?php while( have_rows('homepage_slider') ): the_row();
                $deskImage = get_sub_field('desktop_image');
                $mobImage = get_sub_field('mobile_image');
                ?>
                <div class="slider">
                    <div class="slider-desktop-gallery">
                        <img src="<?php echo esc_url($deskImage['url']); ?>" alt="<?php echo esc_attr($deskImage['alt']); ?>" />
                    </div>
                    <div class="slider-mobile">
                        <img src="<?php echo esc_url($mobImage['url']); ?>" alt="<?php echo esc_attr($mobImage['alt']); ?>" />
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>




    <div class="paintball-games">
        <img class="planeta-krug-plava" src="<?php echo bloginfo('template_directory');?>/assets/images/logo.png" alt="" />
        <?php if( have_rows('about_us_video') ): ?>
            <?php while( have_rows('about_us_video') ): the_row();
                $image = get_sub_field('about_logo');
                ?>
                <div class="about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                    <h6>Paintball Video</h6>
                    <div class="about-logo">
                        <!--                        animated pulse infinite-->
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <h3><?php the_sub_field('naslov'); ?></h3>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>


        <div class="paintball-slike-gallery owl-carousel owl-theme">
            <div class="item-rodjendani content slika-galerija-hover">
                <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                    <div class="content-overlay"></div>
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
                </a>
            </div>

            <div class="item-rodjendani content slika-galerija-hover">
                <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                    <div class="content-overlay"></div>
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
                </a>
            </div>

            <div class="item-rodjendani content slika-galerija-hover">
                <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                    <div class="content-overlay"></div>
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
                </a>
            </div>

            <div class="item-rodjendani content slika-galerija-hover">
                <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                    <div class="content-overlay"></div>
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
                </a>
            </div>

            <div class="item-rodjendani content slika-galerija-hover">
                <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                    <div class="content-overlay"></div>
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
                </a>
            </div>

            <div class="item-rodjendani content slika-galerija-hover">
                <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                    <div class="content-overlay"></div>
                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
                </a>
            </div>
        </div>


        <?php if( have_rows('pravila_video') ): ?>
            <?php while( have_rows('pravila_video') ): the_row();

                // Get sub field values.
                $image = get_sub_field('image');
                $link = get_sub_field('link');

                ?>

                <div class="paintball-videos-gallery">
                    <div class="item-video object-non-visible wow fadeInDown animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                        <?php the_sub_field('video_cetri'); ?>
                    </div>

                    <div class="item-video object-non-visible wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                        <?php the_sub_field('video_pet'); ?>
                    </div>

                    <div class="item-video object-non-visible wow fadeInDown animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                        <?php the_sub_field('video_sest'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>

    <?php if( have_rows('about_us_rodj') ): ?>
        <?php while( have_rows('about_us_rodj') ): the_row();
            $image = get_sub_field('about_logo');
            ?>
            <div class="about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                <h6>Slike Rođendani</h6>
                <div class="about-logo">
                    <!--                        animated pulse infinite-->
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
                <h3><?php the_sub_field('naslov'); ?></h3>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <div class="rodjendaniGalerija-slider owl-carousel owl-theme">
        <div class="item-rodjendani content slika-galerija-hover">
            <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                <div class="content-overlay"></div>
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
            </a>
            <p>Lukin Rođendan</p>
            <small>9. septembar 2023</small>
        </div>

        <div class="item-rodjendani content slika-galerija-hover">
            <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                <div class="content-overlay"></div>
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
            </a>
            <p>Marijin Rođendan</p>
            <small>9. septembar 2023</small>
        </div>

        <div class="item-rodjendani content slika-galerija-hover">
            <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                <div class="content-overlay"></div>
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
            </a>
            <p>Mihailov Rođendan</p>
            <small>9. septembar 2023</small>
        </div>

        <div class="item-rodjendani content slika-galerija-hover">
            <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                <div class="content-overlay"></div>
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
            </a>
            <p>Katarinin Rođendan</p>
            <small>9. septembar 2023</small>
        </div>

        <div class="item-rodjendani content slika-galerija-hover">
            <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                <div class="content-overlay"></div>
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
            </a>
            <p>Jovanin Rođendan</p>
            <small>9. septembar 2023</small>
        </div>

        <div class="item-rodjendani content slika-galerija-hover">
            <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                <div class="content-overlay"></div>
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
            </a>
            <p>Aleksin Rođendan</p>
            <small>20 avgust 2023</small>
        </div>
    </div>


</div>
<?php get_footer(); ?>
