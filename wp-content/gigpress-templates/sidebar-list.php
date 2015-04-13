<?php
/*
	STOP! DO NOT MODIFY THIS FILE!
	If you wish to customize the output, you can safely do so by COPYING this file into a new folder called 'gigpress-templates' in your 'wp-content' directory	and then making your changes there. When in place, that file will load in place of this one.
	
	This template displays all of our individual show data in the sidebar/wudget shows listing.

	If you're curious what all variables are available in the $showdata array, have a look at the docs: http://gigpress.com/docs/
*/
?>

<li class="<?php echo $class; ?>">
	<span class="gigpress-sidebar-date">
		<?php echo $showdata['date_long']; ?>
		<?php if($showdata['end_date']) echo ' - '.$showdata['end_date']; ?>
	</span>
	<span>
	<?php if( ! $group_artists && ! $artist && $total_artists > 1) : ?>
		<span class="gigpress-sidebar-artist"><?php echo $showdata['artist']; ?></span>
	<?php endif; ?>
	</span> <?php _e("at", "gigpress"); ?>
	 
	<?php echo $showdata['time']; ?>
</li>
