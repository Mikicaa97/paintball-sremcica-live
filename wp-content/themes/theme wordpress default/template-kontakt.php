<?php /*
 * Template Name: Kontakt
 */
get_header(); ?>

<div class="kontakt-wrapper">

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
                    <h1>Kontakt</h1>
                    <ul>
                        <li><a href="/">Naslovna</a></li>
                        <li><?php wp_title(); ?></li>
                    </ul>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>



<!--    <div class="header-rodjendani">-->
<!--        <div class="desktop-image">-->
<!--            <h1>klajfls</h1>-->
<!--        </div>-->
<!--        <div class="mobile-image">-->
<!--            <h1>sdlkclsc</h1>-->
<!--        </div>-->
<!--        <div class="uheader">-->
<!--            <h1>Kontakt</h1>-->
<!--            <ul>-->
<!--                <li><a href="/">Naslovna</a></li>-->
<!--                <li>--><?php //wp_title(); ?><!--</li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </div>-->

    <div class="first-section-kontakt">
        <div class="item object-non-visible wow fadeInLeft animated" data-wow-duration="0.5s" data-wow-delay="400ms">
            <i class="fas fa-location-arrow"></i>
            <h3>Lokacija</h3>
            <p>Mijatovih njiva 21,<br/> Beograd, Sremčica</p>
        </div>

        <div class="item object-non-visible wow fadeInLeft animated" data-wow-duration="0.5s" data-wow-delay="400ms">
            <i class="fas fa-regular fa-mobile"></i>
            <h3>Telefon</h3>
            <p><a href="tel:+381655822552">065/58 22 552</a></p>
        </div>

        <div class="item object-non-visible wow fadeInRight animated" data-wow-duration="0.5s" data-wow-delay="400ms">
            <i class="fas fa-thin fa-watch"></i>
            <h3>Radno vreme</h3>
            <p>pon-ned: 10:00 - 22:00h</p>
        </div>
    </div>
    <hr>
    <div class="social-title">
        <h3>Društvene mreže</h3>
    </div>
    <div class="second-section-kontakt">
        <div class="item object-non-visible wow fadeInLeft animated" data-wow-duration="0.5s" data-wow-delay="400ms">
            <i class="fab fa-instagram"></i>
            <h3>Instagram</h3>
            <p><a href="https://www.instagram.com/paintballsremcica/">Pogledaj Profil</a></p>
        </div>

        <div class="item object-non-visible wow fadeInRight animated" data-wow-duration="0.5s" data-wow-delay="400ms">
            <i class="fab fa-facebook-f"></i>
            <h3>Facebook</h3>
            <p><a href="https://www.facebook.com/paintballsremcica">Pogledaj Profil</a></p>
        </div>
    </div>
    <hr>
    <div class="social-title">
        <h3>Kako do nas!</h3>
    </div>
    <div class="second-section-maps object-non-visible wow fadeInRight animated" data-wow-duration="0.5s" data-wow-delay="400ms">
        <div style="width: 100%;">
            <!-- Karta se sada prikazuje po širini roditeljskog elementa -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d408.7235445138724!2d20.379157145404946!3d44.6827376123353!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a731a9f3ea69f%3A0xd599b29006329a2!2sPaintball%20Sremcica!5e0!3m2!1ssr!2srs!4v1690974885215!5m2!1ssr!2srs"
                    width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
<!--        <div class="kontakt-form">-->
<!--            <h3>Zakaži termin</h3>-->
<!--            <form action="/submit" method="post">-->
<!--                <div class="form-field">-->
<!--                    <label for="ime">Ime:</label>-->
<!--                    <input type="text" id="ime" name="ime" required>-->
<!--                </div>-->
<!--                <div class="form-field">-->
<!--                    <label for="email">Email:</label>-->
<!--                    <input type="email" id="email" name="email" required>-->
<!--                </div>-->
<!--                <div class="form-field">-->
<!--                    <label for="poruka">Poruka:</label>-->
<!--                    <textarea id="poruka" name="poruka" required></textarea>-->
<!--                </div>-->
<!--                <div class="form-field">-->
<!--                    <button type="submit"><i class="fas fa-paper-plane"></i> Pošalji</button>-->
<!--                </div>-->
<!--            </form>-->
<!--        </div>-->
    </div>
</div>









<?php get_footer(); ?>
