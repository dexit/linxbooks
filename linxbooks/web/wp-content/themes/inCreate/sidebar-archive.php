<?php global $ht_options; ?>
<div class="grid_3 sidebar">
	    <?php
		if ( is_active_sidebar('archive-sidebar') ) {
		    dynamic_sidebar('archive-sidebar');
		} else {
		    dynamic_sidebar('default-sidebar');
		}
		?>
</div><!-- .sidebar -->
