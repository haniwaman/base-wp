<?php
/**
 * Pagination Archive
 */

 ?>

<?php if ( paginate_links() ) : ?>
<div class="p-pagination">
		<?php
		echo wp_kses_post(
			paginate_links(
				array(
					'end_size'  => 0,
					'mid_size'  => 1,
					'prev_next' => true,
					'prev_text' => '&lt;',
					'next_text' => '&gt;',
				)
			)
		);
		?>
</div><!-- /.p-pagination -->
<?php endif; ?>
