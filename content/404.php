<p>Please try using the site navigation to find what you're looking for.</p>
<p>Here are some helpful links:<br>
	<?php
	$args = [
		'theme_location' => 'primary',
		'container'      => false,
		'items_wrap'     => false,
		'depth'          => 1,
		'echo'           => false
	];
	echo str_replace( '</a>', '</a><br>', wp_nav_menu( $args ) );
	?>
</p>
