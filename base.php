<?php
get_template_part( 'partials/base-top' );

do_action( 'cnp_after_header' );
do_action( CNP\get_action( 'after_header' ) );
?>
	<div <?php CNP\Utility::echo_classes( [ 'wrapper' ], 'cnp_wrapper_div' ); ?> role="document">
		<div <?php CNP\Utility::echo_classes( [ 'main', 'row' ], 'cnp_main_div' ); ?>>
			<?php
			do_action( 'cnp_before_content_div' );
			do_action( CNP\get_action( 'before_content_div' ) );
			?>
			<div <?php CNP\Utility::echo_classes( [ 'column', 'content' ], 'cnp_content_div' ); ?>><?php
				include_once( CNP\template_path() );
				?></div><!-- /.content -->
			<?php
			do_action( CNP\get_action( 'after_content_div' ) );
			do_action( 'cnp_after_content_div' );
			?>
		</div><!-- /.main -->
	</div><!-- /.wrapper -->
<?php
do_action( 'cnp_before_footer' );
do_action( CNP\get_action( 'before_footer' ) );

get_template_part( 'partials/base-bottom' );
