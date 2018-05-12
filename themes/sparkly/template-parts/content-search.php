<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sparkly
 */

?>


<article id="post-<?php the_ID(); ?>">

<div class='col-md-6 hhh' style="margin-top: 10px;margin-bottom: 10px">
<div class="wthree_rt">

	<?php the_title( sprintf( '<h4><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
</div>
</article><!-- #post-<?php the_ID(); ?> -->
