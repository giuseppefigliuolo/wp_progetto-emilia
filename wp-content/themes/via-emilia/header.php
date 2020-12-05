<?php

/**
 * The header template file usually contains your site’s document type, meta information, links to stylesheets and scripts, and other data.
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 * @see  https://developer.wordpress.org/reference/functions/wp_head/
 * @see  https://developer.wordpress.org/reference/functions/body_class/
 */
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- WP HEAD SCRIPTS -->

    <?php
    /**
     * the wp_head() function lets WordPress execute all the pre-body operations including the injection of important styles and scripts.
     * This function call should always be inside your <head> tag
     * 
     * @see  https://developer.wordpress.org/reference/functions/wp_head/
     */
    wp_head();
    ?>

    <!-- END WP HEAD SCRIPTS -->

</head>

<body <?php body_class(); ?>>
    <header>
        <div class="header-banner" style="background-image: linear-gradient( rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.2) ), url('<?php the_field('header_img') ? the_field('header_img') : the_field('header_img', 19); ?>')">
            <?php
            if (is_home()) {
                get_template_part('./templates/headers/header-home');
            } else {
                get_template_part('./templates/headers/header-page');
            }
            ?>
        </div>
    </header>