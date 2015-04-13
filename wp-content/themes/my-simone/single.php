<?php
/**
 * The Template for displaying all single posts.
 *
 * @package my-simone
 */

get_header(); ?>

	<div id="primary" class="content-area">

		<main id="main" class="site-main" role="main">


		<?php while ( have_posts() ) : the_post(); ?>



		<?php endwhile; // end of the loop. ?>


		</main><!-- #main -->
			

	</div><!-- #primary -->
<div class="calendar">
<?php echo do_shortcode('[ai1ec view="monthly"]'); ?>
</div>


<?php get_footer(); ?>