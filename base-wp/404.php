<?php
/**
 * 404
 */

get_header();
get_template_part( 'template-section/main-visual/page' );
get_template_part( 'template-module/breadcrumb' );
?>

<div class="l-content">

	<main class="l-content__primary" role="main">
		<!-- 404コンテンツ -->
	</main><!-- /.l-content__primary -->
	<?php get_sidebar(); ?>

</div><!-- /.l-content -->

<?php get_footer(); ?>
