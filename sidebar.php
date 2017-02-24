<?php
/**
 * Sidebar
 *
 * Displays sidebar widgets.
 *
 * @package CLIENT_NAMESPACE
 */

?>
<div <?php CNP\Utility::echo_classes( [ 'sidebar', 'column' ], 'cnp_sidebar_div' ); ?>>
	<div <?php CNP\Utility::echo_classes( 'sidebar__inside', 'cnp_sidebar_inside_div' ); ?>>
		<?php
		do_action( 'cnp_sidebar_widgets' );
		?>
	</div>
</div><!-- sidebar -->
