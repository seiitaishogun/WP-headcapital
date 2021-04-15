<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package headcapital
 */


if (get_locale()=='en_US') {
    wp_redirect( '/?page_id=138' );
    exit;
} else {
    wp_redirect( '/?page_id=140&lang=vi' );
    exit;
}

?>


<?php
get_footer();
