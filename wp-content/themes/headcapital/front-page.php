<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package headcapital
 */

get_header();
?>

    <main class="main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

            get_footer();

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
    <!-- End Page -->
    <!-- body scripts -->

    <script src="<?php echo get_theme_file_uri( 'vendor/jquery/jquery.min.js' ); ?>"></script>
    <script src="<?php echo get_theme_file_uri( 'vendor/bootstrap/js/bootstrap.bundle.min.js' ); ?>"></script>
<?php //wp_enqueue_script( 'jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array ( 'jquery' ), 1.1, true); ?>
<?php //wp_enqueue_script( 'bootstrap.bundle', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array ( 'jquery' ), 1.1, true); ?>

    <!-- Custom Scroll bar Js -->
    <!-- <script src="libs/mscrollbar/jquery.mCustomScrollbar.concat.min.js"></script> -->
    <!--Internal  Perfect-scrollbar js -->
    <!-- <script src="libs/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
      <script src="libs/plugins/perfect-scrollbar/p-scroll.js"></script> -->
    <script src="<?php echo get_theme_file_uri( 'js/menu.min.js' ); ?>"></script>
    <script src="<?php echo get_theme_file_uri( 'js/icons.min.js' ); ?>"></script>
    <script src="<?php echo get_theme_file_uri( 'js/common.min.js' ); ?>"></script>
<?php //wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.min.js', array ( 'jquery' ), 1.1, true); ?>
<?php //wp_enqueue_script( 'icons', get_template_directory_uri() . '/js/icons.min.js', array ( 'jquery' ), 1.1, true); ?>
<?php //wp_enqueue_script( 'common', get_template_directory_uri() . '/js/common.min.js', array ( 'jquery' ), 1.1, true); ?>

<?php //wp_footer(); ?>

    </body>
    </html>


<?php
//get_sidebar();
