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

	<div id="primary" class="content-area" style="background: #fff; min-height: 700px;">
		<main id="main" class="container" >

		<?php

    switch (get_post_type()) :
            case 'services':
                $single_loop = 'services';
                break;
                  default:
                $single_loop = 'blog';
                break;
        endswitch;

		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/single', $single_loop );

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
