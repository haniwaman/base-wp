<?php
/**
 * Archive
 */

get_header();
get_template_part( 'template-section/main-visual/archive' );
get_template_part( 'template-section/breadcrumb' );
?>

<div class="l-body">
	<div class="l-body__inner l-inner">

		<div class="l-content">
			<main class="l-content__primary" role="main">
				<?php
				if ( have_posts() ) :
					while ( have_posts() ) :
						the_post();
						get_template_part( 'template-section/content/archive' );
				endwhile;
				get_template_part( 'template-module/pagination', 'archive' );
				endif;
				?>
			</main><!-- /.l-content__primary -->
			<?php get_sidebar(); ?>
		</div><!-- /.l-content -->

	</div><!-- /l-body__inner -->
</div><!-- /l-body -->
<?php get_footer(); ?>
