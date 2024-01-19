<?php

get_header(); ?>


    <div class="cars-wrapper z-index-9">
        <div class="backgroundImage">
            <img class="shadow" src="<?php echo bloginfo('template_directory');?>/images/overlay-novo.png"/>
            <img class="positionAbsolute" src="<?php echo bloginfo('template_directory');?>/images/automobili-listanje-header.jpg"/>
            <div class="textCenter textCenterSearch">
                <h1>Rezultati <br> <span>PRETRAGE</span> </h1>
                <p>Za termin pretrage <strong><?php the_search_query(); ?></strong> pronađeno je <strong><?php global $wp_query; echo $wp_query->found_posts; ?></strong>  rezultata.</p>
            </div>

        </div>
            <div class="cars-list-wrapper z-index-9 width-99">
                <div class="car-list width-99">
                    <?php
                    if (have_posts()) :
                        /* Start the Loop */
                        while (have_posts()) : the_post(); ?>



                            <div class="recommendBlock">

                                <a href="<?php echo get_permalink(); ?>">
                                    <?php the_post_thumbnail( 'full', array('class' => 'imageFW') ); ?>
                                </a>
                                <div class="nameOfCars">
                                    <h1><?php the_title();?></h1>
                                    <p><?php echo get_post_meta(get_the_ID(), 'godiste', true);?></p>
                                </div>
                                <div class="categoryAndPrice">
                                    <div class="category">
                                        <?php $categories = get_the_category();
                                        $category_id = $categories[0]->cat_ID;
                                        $categoryName=get_cat_name($category_id);?>
                                        <p><?php echo $categoryName;?></p>
                                        <p><?php echo get_post_meta(get_the_ID(), 'kilometraza', true);?>km</p>
                                        <p><?php echo get_post_meta(get_the_ID(), 'snaga', true);?></p>
                                        <p><?php echo get_post_meta(get_the_ID(), 'kubikaza', true);?>cm3</p>
                                    </div>
                                    <div class="price">
                                        <!-- Privremeno iskljuceno -->
                                        <!-- <?php $cena= get_post_meta(get_the_ID(), 'cena', true);

                                        if($cena=="Dogovor"){?>
                                <p>Mesečno već od <br> <span class="green"><?php echo get_post_meta(get_the_ID(), 'cena', true);?></span> <span class="eur">

                                </span> </p>

                            <?php } else{
                                            $mesecnaCena= $cena*0.014;?>
                                <p>Mesečno već od <br> <span class="green"><?php echo number_format((float)$mesecnaCena, 0, '.', '');?></span> <span class="eur">
                                    EUR
                                </span> </p>
                                <?php }?> -->

                                        <p>Mesečno već od <br> <span class="green"> DOGOVOR</span>  </p>
                                    </div>
                                </div>
                                <div class="linkToSingle">
                                    <a href="<?php echo get_permalink(); ?>">
                                        SAZNAJ VIŠE
                                    </a>
                                </div>

                            </div>

                        <?php endwhile; // End of the loop.



                    else : ?>



                    <?php endif;
                    ?>
                </div>
                <?php
                the_posts_pagination(array(
                    'prev_text' => 'Prethodna',
                    'next_text' => 'Sledeća',
                ));
                ?>
            </div>
        </div>

    </div>

<?php get_footer(); ?>