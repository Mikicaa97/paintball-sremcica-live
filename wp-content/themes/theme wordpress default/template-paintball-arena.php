<?php /*
 * Template Name: Paintball arena
 */
get_header(); ?>


    <div class="pravila-igre-wrapper">
        <?php if( have_rows('background_baner') ): ?>
            <?php while( have_rows('background_baner') ): the_row();
                $imageDes = get_sub_field('desktop_image');
                $imageMob = get_sub_field('mobile_image');
                ?>

                <div class="header-rodjendani">
<!--                    <div class="desktop-image">-->
<!--                        <img src="--><?php //echo esc_url($imageDes['url']); ?><!--" alt="--><?php //echo esc_attr($imageDes['alt']); ?><!--" />-->
<!--                    </div>-->
<!---->
<!--                    <div class="mobile-image">-->
<!--                        <img src="--><?php //echo esc_url($imageMob['url']); ?><!--" alt="--><?php //echo esc_attr($imageMob['alt']); ?><!--" />-->
<!--                    </div>-->

                    <div class="uheader">
                        <h1>Paintball arena</h1>
                        <ul>
                            <li><a href="/">Naslovna</a></li>
                            <li><?php wp_title(); ?></li>
                        </ul>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>


        <?php if( have_rows('opis_pravila_igre') ): ?>
            <?php while( have_rows('opis_pravila_igre') ): the_row();

                // Get sub field values.
                $image = get_sub_field('pravila_igre_slika');
                $link = get_sub_field('link');

                ?>

                <div class="first-pravila-field">
                    <div class="pravila-left">
                        <div class="paintball-price-about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                            <h6>Paintball arena</h6>
                            <div class="paintball-price-about-field-about-logo">
                                <img src="<?php echo bloginfo('template_directory');?>/assets/images/real-small-logo.png" alt="">
                            </div>
                            <h3><?php the_sub_field('naslov_pravila'); ?></h3>
                        </div>
                        <div class="pravila-content object-non-visible wow fadeInLeft animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                            <?php the_sub_field('pravila_igre_text'); ?>
                        </div>
                    </div>
                    <div class="pravila-right object-non-visible wow fadeInRight animated" data-wow-duration="0.5s" data-wow-delay="400ms">
<!--                        <img src="--><?php //echo bloginfo('template_directory');?><!--/assets/images/pravila.jpg" alt="">-->
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>


        <?php if( have_rows('sta_je_paintball') ): ?>
            <?php while( have_rows('sta_je_paintball') ): the_row();
                $image = get_sub_field('image');
                ?>
                <div class="what-is-paintball">
                    <?php if( have_rows('slider') ): ?>
                        <div class="what-is-paintball-slider-left owl-carousel owl-theme object-non-visible wow fadeInLeft animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                            <?php while( have_rows('slider') ): the_row();
                                $imageSlide = get_sub_field('image_slide');
                                ?>
                                <img src="<?php echo esc_url($imageSlide['url']); ?>" alt="<?php echo esc_attr($imageSlide['alt']); ?>" />
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                    <?php if( have_rows('content') ): ?>
                        <?php while( have_rows('content') ): the_row();

                            $image = get_sub_field('image_logo');
                            ?>
                            <div class="what-is-paintball-about-field object-non-visible wow fadeInRight  animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                                <h6>Šta je paintball</h6>
                                <div class="what-is-paintball-about-field-about-logo">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                                <h3><?php the_sub_field('naslov'); ?></h3>
                                <?php the_sub_field('opis'); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>



        <div class="paintball-games">
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