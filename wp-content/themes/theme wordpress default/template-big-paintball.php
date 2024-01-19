<?php /*
 * Template Name: Paintball za odrasle
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
                    <h1>Paintball za odrasle</h1>
                    <ul>
                        <li><a href="/">Naslovna</a></li>
                        <li><?php wp_title(); ?></li>
                    </ul>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>


    <!--    <div class="header-rodjendani">-->
    <!--        <div class="uheader">-->
    <!--            <h1>Paintnball dečiji rodjendani</h1>-->
    <!--            <ul>-->
    <!--                <li><a href="/">Naslovna</a></li>-->
    <!--                <li>--><?php //wp_title(); ?><!--</li>-->
    <!--            </ul>-->
    <!--        </div>-->
    <!--    </div>-->

    <div class="paintball-price">
        <div class="paintball-price-about-field object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
            <h6>Paintball Paketi</h6>
            <div class="paintball-price-about-field-about-logo">
                <img src="<?php echo bloginfo('template_directory');?>/assets/images/real-small-logo.png" alt="">
            </div>
            <h3>Cene paketa po broju kuglica</h3>
            <p>Paintball je uzbudljiva i adrenalinska aktivnost namijenjena odraslima koja kombinira taktičko razmišljanje, timsku suradnju i brzu akciju. Igra se obično odvija na terenu s preprekama i skloništima, stvarajući dinamično okruženje. Svaki igrač opremljen je markerom koji ispaljuje bojeve kuglice ispunjene bojom koja označava pogodak. Cilj je eliminirati protivničke igrače iz igre pomoću preciznih poteza i strategije.</p>
            <p>Paintball za odrasle pruža priliku za ispuštanje stresa, razvijanje timskog duha te promicanje taktičkog razmišljanja i brze reakcije. Igra se često igra u različitim scenarijima, kao što su osvajanje zastava, spašavanje talaca ili jednostavno "svaki za sebe". Ova aktivnost nije samo izazovna fizički, već i mentalno, jer igrači moraju donositi brze odluke u stvarnom vremenu.</p>
            <p>Paintball za odrasle pruža priliku za povezivanje s prijateljima, kolegama ili članovima obitelji na jedinstven način, stvarajući uspomene i potičući suradnju. Bez obzira jeste li entuzijastični igrač ili prvi put sudjelujete, paintball će vam pružiti nezaboravno iskustvo puno smijeha, uzbuđenja i timskog duha.</p>
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


    <div class="third-section object-non-visible wow fadeIn animated" data-wow-duration="0.5s" data-wow-delay="400ms">
        <div class="third-section-text">
            <h3><strong>[</strong> PAINTBALL ZA UZRAST OD 15+ GODINA <strong>]</strong></h3>
            <p>Paintball je taktički sport u kojem se igrači međusobno bore koristeći puške koje ispaljuju kuglice ispunjene bojom (paintballs). Ove kuglice prskaju boju kada pogode cilj, što omogućava jasno označavanje i identifikaciju pogođenih igrača.</p>
        </div>
        <hr>
        <div class="all-third-block object-non-visible wow fadeInUp animated" data-wow-duration="0.5s" data-wow-delay="400ms">
            <div class="third-block">
                <h3>PRINCIP IGRE</h3>
                <p>Igrači podeljeni u dve ekipe, jure se po paintball terenu i gađaju paintball kuglicama. Pogođeni igrači odlaze u svoje baze i čekaju završetak runde. Runda traje do 5 minuta.
                    Dečiji paintball rođendani u proseku traju 15-ak rundi.</p>
            </div>

            <div class="third-block">
                <h3>ŠTA PODRAZUMEVAJU DEČIJI RODJENDANI</h3>
                <p>Paintball podrazumeva nošenje zaštitne maske, kombinezona sve vreme radi bezbednosti učesnika. Skidanje maske na terenu je strogo zabranjeno. Nepoštovanje tog pravila, rezultiraće izbacivanjem igrača iz igre. Sudija je tokom celokupnog vremena sa igračima, prati situaciju i ne dozvoljava skidanje maske ili bilo kakav drugi vid nediscipline.</p>
            </div>

            <div class="third-block">
                <h3>RAZLIKA IZMEDJU REGULARNOG PAINTBALLA I DEČIJIH RODJENDANA</h3>
                <p>Je u konstrukciji puške, kao i u kinetičkoj energiji ispaljene kuglice. Splatmaster pušku čini plastična, crvena pumparica. Masa Splatmaster puske je oko 700 g, dok je masa paintball puške oko 3.5 kg. Splatmaster pušku je neophodno repetirati svaki put pre pucanja, tako da je nemoguće ispucati sve kuglice za 5 minuta. Kinetička energija kuglice ispaljene iz Splatmaster puske je 1 J (džul), dok je kod regularnih paintball pušaka 5 J (džula).</p>
            </div>
        </div>
    </div>




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
            <div class="accordion-item">
                <div class="accordion-item-header">
                    Koliko treba da imam godina da bi igrao paintball?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        Za dečiji paintball minimum godina da bi igrao je 7, što se tiče paintball-a za odrasle minumum godina 15.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                    Da li su paintball rodjendani i paintball za odrasle bezbedni?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        Razlika između regularnog paintball-a i splatmaster-a je u konstrukciji puške, kao i u kinetičkoj energiji ispaljene kuglice. Splatmaster pušku čini plastična, crvena pumparica. Masa Splatmaster puske je oko 700 g, dok je masa paintball puške oko 3.5 kg. Kinetička energija kuglice ispaljene iz Splatmaster puske je 1 J (džul), dok je kod regularnih paintball pušaka 5 J (džula).
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                    Koliko je ljudi minimum za paintball, a koliko maksimum?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        Minimum igrača za regularni paintball je 6, dok je maksimum igraca 10.<br/>
                        Što se tiče dečijih rodjendana maksimum igrača je 20.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                    Koje sve aktivnosti nudimo?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        Od aktivnosti koje nudimo su Paintball za odrasle, Dečiji paintball, Airsoft gadjanje u metu.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                    Kako rezervisati paintball igru?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        Rezervisati minimum 4 dana pre igre, zbog slobodnih termina. Prilikom rezervacije odaberete paket i uplatite kaparu 3000 dinara.
                    </div>
                </div>
            </div>
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
<!--                    <div class="black-background"></div>-->
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
