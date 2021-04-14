<?php
/**
 * Pagination Page
 */

?>

<?php
$tp_in_same_term = false;
?>
<div class="p-entry-pager">
	<div class="p-entry-pager__prev"><?php previous_post_link( '%link', ' 前の記事', $tp_in_same_term ); ?></div>
	<div class="p-entry-pager__next"><?php next_post_link( '%link', '次の記事', $tp_in_same_term ); ?></div>
</div><!-- /.p-entry-pager -->
