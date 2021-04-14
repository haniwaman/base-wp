<?php
/**
 * Single
 */

get_header();
get_template_part( 'template-section/main-visual/single' );
get_template_part( 'template-module/breadcrumb' );
?>

<div class="l-content">

	<main class="l-content__primary">
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-section/content/single' );
				get_template_part( 'template-module/pagination', 'page' );
		endwhile;
		endif;
		?>
	</main><!-- /.l-primary -->

	<?php get_sidebar(); ?>

</div><!-- /.l-content -->

<?php get_footer(); ?>
