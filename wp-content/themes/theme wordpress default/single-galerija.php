<?php /**
     * The template for displaying single events
     *
     * @package WordPress
     * @subpackage Metalika
     * @since Metalika 1.0
     */
get_header(); ?>


        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>











<?php get_footer(); ?>