<div <?php CNP\Utility::echo_classes(['sidebar', 'column'], 'cnp_sidebar_div_classes'); ?>>
	<div <?php CNP\Utility::echo_classes('sidebar__inside', 'cnp_sidebar_inside_div_classes'); ?>>
		<?php
		do_action( 'cnp_sidebar_widgets' );
		do_action( CNP\get_action( 'cnp_sidebar_widgets' ) );
		?>
	</div>
</div><!-- sidebar -->