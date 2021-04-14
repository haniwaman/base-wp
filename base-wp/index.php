<?php
/**
 * Index
 */

get_header();
get_template_part( 'template-section/main-visual/archive' );
get_template_part( 'template-module/breadcrumb' );
?>


<div class="l-content">

	<main class="l-content__primary" role="main">
		<!-- インデックスのメインコンテンツ -->
	</main><!-- /.l-content__primary -->
	<?php get_sidebar(); ?>

</div><!-- /.l-content -->

<?php get_footer(); ?>
