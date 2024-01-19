<?php /*
 * Template Name: Naslovna
 */
get_header(); ?>

<div class="homepage-wrapper">
    <?php if( have_rows('homepage_slider') ): ?>
    <div class="head-banner desk-slider owl-carousel owl-theme">
            <?php while( have_rows('homepage_slider') ): the_row();
                $deskImage = get_sub_field('desktop_image');
                $mobImage = get_sub_field('mobile_image');
                ?>
            <div class="slider">
                <div class="slider-desktop">
                    <img src="<?php echo esc_url($deskImage['url']); ?>" alt="<?php echo esc_attr($deskImage['alt']); ?>" />
                </div>
                <div class="slider-mobile">
                    <img src="<?php echo esc_url($mobImage['url']); ?>" alt="<?php echo esc_attr($mobImage['alt']); ?>" />
                </div>
                <div class="slider-content zoomIn wow animated animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                    <h1><?php the_sub_field('title'); ?></h1>
                    <p><?php the_sub_field('text'); ?></p>
                    <div class="slider-link">
                        <a href="<?php the_sub_field('link_paketi'); ?>">Vidi pakete</a>
                        <a href="<?php the_sub_field('link_o_nama'); ?>">O nama</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
    </div>
    <?php endif; ?>


    <?php if( have_rows('about_us') ): ?>
        <?php while( have_rows('about_us') ): the_row();
            $image = get_sub_field('about_logo');
            ?>
            <div class="about-field object-non-visible wow fadeInRight animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                <h6>Dobrodošli</h6>
                <div class="about-logo object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
<!--                    animated pulse infinite-->
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
                <h3><?php the_sub_field('naslov'); ?></h3>
                <p><?php the_sub_field('content'); ?></p>
<!--                <div class="about-link animated pulse infinite">-->
<!--                    <a href="--><?php //the_sub_field('link'); ?><!--"> > &nbsp; &nbsp; O nama</a>-->
<!--                </div>-->
            </div>
        <?php endwhile; ?>
    <?php endif; ?>




    <?php if( have_rows('sta_je_paintball') ): ?>
        <?php while( have_rows('sta_je_paintball') ): the_row();
            $image = get_sub_field('image');
            ?>
            <div class="what-is-paintball">
                <?php if( have_rows('slider') ): ?>
                    <div class="what-is-paintball-slider-left owl-carousel owl-theme object-non-visible wow fadeInLeft animated" data-wow-duration="0.5s" data-wow-delay="400ms"">
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


    <div class="paintball-price">
        <div class="paintball-price-about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
            <h6>IGRAJ PAINTBALL</h6>
            <div class="paintball-price-about-field-about-logo">
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/real-small-logo.png" alt="">
            </div>
            <h3>Cene i paketi</h3>
        </div>
        <ul class="lista">
            <li><a href="#rodjendani">Dečiji rodjendani</a></li>
            <li><a href="#odrasle">Broju kuglica</a></li>
        </ul>


            <?php if( have_rows('cena_za_rodjendane') ): ?>
                <div id="rodjendani" class="za-rodjendane object-non-visible wow fadeInLeft animated tab_content reveal" data-wow-duration="0.5s" data-wow-delay="400ms">
                    <?php while( have_rows('cena_za_rodjendane') ): the_row();
                        $image = get_sub_field('naslov_slika');
                        ?>
                    <div class="price-field">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<!--                        <h3>--><?php //the_sub_field('naslov'); ?><!--</h3>-->
                        <div class="price">
                            <span class="valuta"><?php the_sub_field('valuta'); ?></span>
                            <span class="cena"><?php the_sub_field('cena'); ?></span>
                            <span class="vreme"><?php the_sub_field('sati'); ?></span>
                        </div>
                        <hr>
                        <div class="equipment">
                            <?php the_sub_field('oprema'); ?>
                        </div>
                        <div class="link">
                            <a href="<?php the_sub_field('link'); ?>">Rezerviši</a>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>


            <?php if( have_rows('cene_za_odrasle') ): ?>
                <div id="odrasle" class="za-rodjendane tab_content reveal">
                    <?php while( have_rows('cene_za_odrasle') ): the_row();
                        $image = get_sub_field('naslov_slika');
                        ?>
                        <div class="price-field">
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<!--                            <h3>--><?php //the_sub_field('naslov'); ?><!--</h3>-->
                            <div class="price">
                                <span class="valuta"><?php the_sub_field('valuta'); ?></span>
                                <span class="cena"><?php the_sub_field('cena'); ?></span>
                                <span class="vreme"><?php the_sub_field('sati'); ?></span>
                            </div>
                            <hr>
                            <div class="equipment">
                                <?php the_sub_field('oprema'); ?>
                            </div>
                            <div class="link">
                                <a href="<?php the_sub_field('link'); ?>">Rezerviši</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
    </div>



    <?php if( have_rows('background_deo') ): ?>
        <?php while( have_rows('background_deo') ): the_row();

            ?>
            <div class="big-image">
                <?php if( have_rows('levi_deo') ): ?>
                    <?php while( have_rows('levi_deo') ): the_row();

                        $image = get_sub_field('image');
                        ?>

                        <div class="content-left object-non-visible wow fadeInLeft animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                            <h2><span> [ </span><?php the_sub_field('naslov'); ?><span> ] </span></h2>
                            <p><?php the_sub_field('opis'); ?></p>


                            <?php if( have_rows('stikeri') ): ?>
                            <div id="right-field" class="three-image">
                                    <?php while( have_rows('stikeri') ): the_row();
                                        $image = get_sub_field('slika');
                                        ?>
                                        <p>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /><br/>
                                            <?php the_sub_field('naslov'); ?></p>

                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                            <a href="<?php the_sub_field('link'); ?>">
                                <div class="big-image-link" id="link1">
                                    <p>Paintball Arena</p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>


                <?php if( have_rows('desni_deo') ): ?>
                    <?php while( have_rows('desni_deo') ): the_row();

                        $image = get_sub_field('image');
                        ?>

                        <div class="content-left object-non-visible wow fadeInRight animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                            <h2><span> [ </span><?php the_sub_field('naslov'); ?><span> ] </span></h2>
                            <p><?php the_sub_field('opis'); ?></p>


                            <?php if( have_rows('stikeri') ): ?>
                                <div id="right-field" class="three-image">
                                    <?php while( have_rows('stikeri') ): the_row();
                                        $image = get_sub_field('slike');
                                        ?>
                                        <p>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /><br/>
                                            <?php the_sub_field('naslov'); ?></p>

                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                            <a href="<?php the_sub_field('link'); ?>">
                                <div class="big-image-link" id="link2">
                                    <p>Airsoft Shoot Arena</p>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <div class="homepage-gallery" id="galerija">
        <?php if( have_rows('galerija_naslov') ): ?>
            <?php while( have_rows('galerija_naslov') ): the_row();
                $image = get_sub_field('logo');
                ?>
                <div class="about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                    <h6>Paintball Sremcica</h6>
                    <div class="about-logo">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <h3><?php the_sub_field('naslov'); ?></h3>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
<!--        <ul class="lista">-->
<!--            <li><a href="#rodjendani">Galerija Rodjendani</a></li>-->
<!--            <li><a href="#odrasle">Galerija 15+</a></li>-->
<!--        </ul>-->
        
        <div class="u-gallery owl-carousel owl-theme object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                <div class="item content slika-galerija-hover">
                    <a href="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" class="fancybox" data-fancybox="galerija">
                        <div class="content-overlay"></div>

                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/d1.jpg" alt="" />
                        <div class="content-details fadeIn-top">
                            <i class="fal fa-plus"></i>
                        </div>
                    </a>
                    <p></p>
                </div>

                <div class="item content slika-galerija-hover">
                    <a href="<?php echo bloginfo('template_directory');?>/assets/images/d2.jpg" class="fancybox" data-fancybox="galerija">
                        <div class="content-overlay"></div>

                        <img src="<?php echo bloginfo('template_directory');?>/assets/images/d2.jpg" alt="" />
                        <div class="content-details fadeIn-top">
                            <i class="fal fa-plus"></i>
                        </div>
                    </a>
                    <p></p>
                </div>
        </div>
    </div>
</div>
<?php
get_footer(); ?>