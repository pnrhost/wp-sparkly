<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sparkly
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php

    switch (get_post_type()) :
            case 'wdc_service':
                $single_loop = 'service';
                break;
                  default:
                $single_loop = 'blog';
                break;
        endswitch;

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', $single_loop );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
