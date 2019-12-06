<?php
/**
 * The template for accommodations
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bosko
 */

get_header();
?>




<!-- <?php echo do_shortcode("[wpml-string context='Bosko']Babilon[/wpml-string]"); ?>*/ -->


	
<h2>Apartment </h2>
<p><?php the_field('title'); ?></p>
<p>Share</p>
<p>Check Availability</p>

<h2>Photos</h2>

<?php

// check if the repeater field has rows of data
if( have_rows('photos_cdn') ):
    $x = 0;
 	// loop through the rows of data
    while ( have_rows('photos_cdn') ) : the_row();
        $x = $x + 1;
        $image = get_sub_field('photo_link');
        
        if( $x < "2" ) {
		 echo '<a class="spotlight" href="https://res.cloudinary.com/niknet/image/upload/' .$image. '"><img src="https://res.cloudinary.com/niknet/image/upload/h_200/' .$image. '"></a>';			
		}
        if( $x > "1" && $x < "4" ) {
		echo '<a class="spotlight" href="https://res.cloudinary.com/niknet/image/upload/' .$image. '"><img src="https://res.cloudinary.com/niknet/image/upload/h_100/' .$image. '"></a>';			
		}
        if( $x > "3" ) {
		echo '<a class="spotlight" href="https://res.cloudinary.com/niknet/image/upload/' .$image. '"></a>';			
		}
        
        // display a sub field value
        

    endwhile;

else :

    // no rows found

endif;

?>




<h2>Apartment Type</h2>
<p>Apartment</p>
<p>2 Persons</p>
<p>1 Room</p>
<p>1 Double bed</p>
<p>Apartment size: 43m</p>
<p>Free public parking is possible at a location nearby (reservation is not needed).</p>
<p>Terrace</p>
<p>Air Conditioning</p>
<p>WiFi</p>
<p>Sat TV</p>
<p>Shared Washing Machine</p>



<?php echo do_shortcode("[hb_rates]"); ?>
<?php echo do_shortcode("[hb_availability]"); ?>
<?php echo do_shortcode("[hb_booking_form all_accom]"); ?>








<?php

get_footer();
