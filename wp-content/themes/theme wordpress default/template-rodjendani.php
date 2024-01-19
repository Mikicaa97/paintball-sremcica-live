<?php /*
 * Template Name: Rodjendani
 */
get_header(); ?>


<div class="rodjendani-wrapper">
    <?php if( have_rows('background_baner') ): ?>
        <?php while( have_rows('background_baner') ): the_row();
            $imageDes = get_sub_field('desktop_image');
            $imageMob = get_sub_field('mobile_image');
            ?>

            <div class="header-rodjendani">
<!--                <div class="desktop-image">-->
<!--                    <img src="--><?php //echo esc_url($imageDes['url']); ?><!--" alt="--><?php //echo esc_attr($imageDes['alt']); ?><!--" />-->
<!--                </div>-->
<!---->
<!--                <div class="mobile-image">-->
<!--                    <img src="--><?php //echo esc_url($imageMob['url']); ?><!--" alt="--><?php //echo esc_attr($imageMob['alt']); ?><!--" />-->
<!--                </div>-->

                <div class="uheader">
                    <h1>Paintnball dečiji rodjendani</h1>
                    <ul>
                        <li><a href="/">Naslovna</a></li>
                        <li><?php wp_title(); ?></li>
                    </ul>
                    <div class="uheder-link">
                        <a href="#rezervacija-rodjendana">Zakažite termin za rođendan</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>


    <div class="paintball-price">
        <div class="paintball-price-about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
            <h6>Paintball Paketi</h6>
            <div class="paintball-price-about-field-about-logo">
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/real-small-logo.png" alt="">
            </div>
            <h3>Cene paketa za dečije rodjendane</h3>
            <p>Proslavite nezaboravan dečji rođendan uz paintball avanturu! Naša posebno prilagođena paintball arena čeka male avanturiste da dožive uzbuđenje i radost igranja ove dinamične igre. Deca će imati priliku da se obuku u zaštitnu opremu, preuzmu svoje markere i uđu u svet taktičkih izazova.</p>
            <p>Naš tim stručnjaka će se pobrinuti da svaka partija bude sigurna i prilagođena uzrastu, dok će roditelji moći uživati u miru znajući da su deca pod pažljivim nadzorom. Paintball rođendani donose smeh, uzbuđenje i nezaboravne trenutke timskog duha. Doživite rođendansku avanturu koju će vaša deca prepričavati još dugo!</p>
        </div>
<!--        <ul class="lista">-->
<!--            <li><a href="#rodjendani">Dečiji rodjendani</a></li>-->
<!--        </ul>-->


        <?php if( have_rows('cena_za_rodjendane') ): ?>
            <div class="za-rodjendane object-non-visible wow fadeInRight animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                <?php while( have_rows('cena_za_rodjendane') ): the_row();
                    $image = get_sub_field('image');
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
    </div>

    <div id="rezervacija-rodjendana" class="reservation-birthday">
        <h3>Rezervišite termin za rodjendan!</h3>

        <?php the_field('rezervacija_rodjendana'); ?>
    </div>

    <?php if( have_rows('o_rodjendanima') ): ?>
        <?php while( have_rows('o_rodjendanima') ): the_row();

            // Get sub field values.
            $image = get_sub_field('image');
            $link = get_sub_field('link');

            ?>

            <div class="third-section object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                <div class="third-section-text">
                    <h3><strong>[</strong> <?php the_sub_field('naslov'); ?> <strong>]</strong></h3>
                    <p><?php the_sub_field('opis'); ?></p>
                </div>
                <hr>
                <div class="all-third-block object-non-visible wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="400ms">

                    <?php if( have_rows('o_rodjendanima_repeater') ): ?>
                    <div class="all-third-block object-non-visible wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                            <?php while( have_rows('o_rodjendanima_repeater') ): the_row();
                                $image = get_sub_field('image');
                                ?>

                                <div class="third-block">
                                    <h3><?php the_sub_field('naslov'); ?></h3>
                                    <p><?php the_sub_field('opis'); ?></p>
                                    <a href="<?php the_sub_field('link'); ?>">
<!--                                        <div class="big-image-link" id="link2">-->
<!--                                            <p>Download form</p>-->
<!--                                            --><?php
//                                            $link = get_field('link');
//                                            if( $link ): ?>
<!--                                                <a class="button" href="--><?php //echo esc_url( $link ); ?><!--">opis</a>-->
<!--                                            --><?php //endif; ?>
<!--                                        </div>-->
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <div class="faq">
        <?php if( have_rows('third_section_about') ): ?>
            <?php while( have_rows('third_section_about') ): the_row();
                $image = get_sub_field('image');
                ?>
                <div class="about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                    <h6>FAQ Paintball</h6>
                    <div class="about-logo">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <h3><?php the_sub_field('naslov'); ?></h3>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        <div class="accordion object-non-visible wow fadeInLeft animated" data-wow-duration="0.5s" data-wow-delay="400ms">

            <?php if( have_rows('faq') ): ?>
                <ul class="slides">
                    <?php while( have_rows('faq') ): the_row();
                        $image = get_sub_field('image');
                        ?>

                        <div class="accordion-item">
                            <div class="accordion-item-header">
                                <?php the_sub_field('naslov'); ?>
                            </div>
                            <div class="accordion-item-body">
                                <div class="accordion-item-body-content">
                                    <?php the_sub_field('opis'); ?>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>

    <div class="homepage-gallery" id="galerija">
        <?php if( have_rows('galerija_naslov') ): ?>
            <?php while( have_rows('galerija_naslov') ): the_row();
                $image = get_sub_field('logo');
                ?>
                <div class="about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
                    <h6>Paintball Sremčica</h6>
                    <div class="about-logo">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
                    <h3><?php the_sub_field('naslov'); ?></h3>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
<!--        <ul class="lista">-->
<!--            <li><a href="#rodjendani">Paintball Rodjendani</a></li>-->
<!--            <li><a href="#za-odrasle">Za odrasle</a></li>-->
<!--        </ul>-->

        <div class="u-gallery owl-carousel owl-theme object-non-visible wow fadeInRight animated" data-wow-duration="0.5s" data-wow-delay="400ms">
            <div class="item content slika-galerija-hover">
                <a href="<?php echo bloginfo('template_directory');?>/assets/images/rodj-galerija.png" class="fancybox" data-fancybox="galerija">
                    <div class="content-overlay"></div>

                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/rodj-galerija.png" alt="" />
                    <div class="content-details fadeIn-top">
                        <i class="fal fa-plus"></i>
                    </div>
                </a>
                <p></p>
            </div>

            <div class="item content slika-galerija-hover">
                <a href="<?php echo bloginfo('template_directory');?>/assets/images/rodj-galerija2.png" class="fancybox" data-fancybox="galerija">
                    <div class="content-overlay"></div>

                    <img src="<?php echo bloginfo('template_directory');?>/assets/images/rodj-galerija2.png" alt="" />
                    <div class="content-details fadeIn-top">
                        <i class="fal fa-plus"></i>
                    </div>
                </a>
                <p></p>
            </div>
        </div>
    </div>
</div>














<?php get_footer() ?>
