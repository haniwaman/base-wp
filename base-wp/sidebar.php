<?php
/**
 * Sidebar
 */

if ( is_active_sidebar( 'sidebar' ) ) : ?>

<aside class="l-content__secondary" role="complementary">
	<?php dynamic_sidebar( 'sidebar' ); ?>
</aside><!-- /.l-secondary -->

<?php endif; ?>
