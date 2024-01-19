<?php
function insert_jquery(){
wp_enqueue_script('jquery', false, array(), false, false);
}
add_filter('wp_enqueue_scripts','insert_jquery',1);

// Remove WP Admin Bar

add_filter('show_admin_bar', '__return_false');

add_theme_support( 'post-thumbnails' );


function custom_excerpt_length( $length ) {
  return 25;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter("gform_validation_message", "gwp_change_message", 10, 2);
function gwp_change_message($message, $form){
    return '
<div class="validation_error">Došlo je do greške pri popunjavanju prijave. Molimo Vas da popunite sva označena obavezna polja. Hvala!
</div>
';
}

// Nav menu

 register_nav_menus( array(
  'meni-left' => __( 'Left meni', 'yourtheme'), 'meni-right' => __( 'Right meni', 'yourtheme')
) );
/**
 *  Search Form
 */
function wp_search_form( $form ) {
    $form = '<section class="search search-form"><form role="search" method="get" action="' . home_url( '/' ) . '" >
    <label class="screen-reader-text" for="s">' . __('',  'domain') . '</label>
     <input type="search" class="search-field" value="' . get_search_query() . '" name="s" id="s" placeholder="Unesite željeni pojam" />
     <button type="submit" id="searchsubmit" class="search-submit" value="'. esc_attr__('Go', 'domain') .'" />
     </form></section>';
    return $form;
}

add_filter( 'get_search_form', 'wp_search_form' );

add_filter('get_search_form', 'wp_search_form');
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}

add_filter('wp_nav_menu_objects', 'mlnc_wp_nav_menu_objects', 10, 2);

function mlnc_wp_nav_menu_objects( $items, $args ) {
  // loop
  foreach( $items as $item ) {
    // vars
    $your_field = get_field('nav_additional', $item);
    // append field
    if( $your_field ) {
      $item->title .= '<div class="nav-drop">'.$your_field.'</div>';
    }
  }
  // return
  return $items;
}



function customize_ssa_button_text( $translated_text, $text, $domain )
{
    if ( $domain !== 'simply-schedule-appointments' )
    {
        return $translated_text;
    }


    switch ($text) {
        case 'Select a date':
            return 'Izaberi datum';
            break;
        case 'Afternoon':
            return 'Popodne';
            break;
        case 'Morning':
            return 'Ujutru';
            break;
        case 'Evening':
            return 'Uveče';
            break;
        case 'You are booking:  Teren za padel':
            return 'Rezervacija za:  Teren za padel';
            break;
        case 'Name':
            return 'Ime i prezime';
            break;
        case 'Book this appointment':
            return 'Rezerviši';
            break;
        case 'Loading Available Appointments';
            return 'Učitavanje dostupnih termina';
            break;
        case 'Your timezone:';
            return 'Vaša vremenska zona:';
            break;
        case 'Select a time on';
            return 'Odaberite termin za ';
            break;
        case 'hour';
            return 'sat';
            break;
        case 'You are booking: ';
            return 'Vaša rezervacija: ';
            break;
        case 'Thank you! Your appointment is booked: ';
            return 'Hvala vam! Vaš termin je rezerviran: ';
            break;
        case 'Save to calendar';
            return 'Sačuvaj u kalendar';
            break;
        case 'Edit Information';
            return 'Prepravi informacije';
            break;
        case 'Reschedule';
            return 'Promeni termin';
            break;
        case 'Cancel Appointment';
            return 'Otkaži termin';
            break;
        case 'Schedule a new appointment';
            return 'Zakaži novi termin';
            break;
        case 'What would you like to do next?';
            return 'Želite nešto da promenite vezano za termin?';
            break;
        case 'Update this appointment';
            return 'Ažuriraj termin';
            break;
        case 'Saving';
            return 'Obrada rezervacije';
            break;
        case 'Are you sure you want to cancel?';
            return 'Da li ste sigurni da želite da otkažete?';
            break;
        case 'Keep appointment';
            return 'Zadrži termin';
            break;
        case 'Keep Appointment';
            return 'Zadrži Termin';
            break;
        case 'December';
            return 'Decembar';
            break;
        case 'November';
            return 'Novembar';
            break;



        default:
            return $translated_text;
    }

}