<?php

/**
 * The main template file. It is required in all themes.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/get_header/
 * @see  https://developer.wordpress.org/reference/functions/get_footer/
 */
?>
<?php
/**
 * get_header() is the function that goes to call the header.php template
 * 
 * @see  https://developer.wordpress.org/reference/functions/get_header/
 */
get_header();
?>

<?php
/* if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part('template-parts/archive/content');
	}
} else {
	get_template_part('template-parts/archive/empty');
} */
?>

<?php
/**
 * get_footer() is the function that goes to call the footer.php template
 * 
 * @see  https://developer.wordpress.org/reference/functions/get_footer/
 */
get_footer();
?>