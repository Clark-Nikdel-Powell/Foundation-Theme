<!doctype html>
<html lang="en-US">
<?php
get_template_part( 'partials/head' );
?>
<body <?php body_class(); ?>>
<?php
do_action( 'cnp_before_webpage_div' );
do_action( CNP\get_action( 'before_webpage_div' ) );
?>
<div <?php CNP\Utility::echo_classes( [ 'webpage' ], 'cnp_webpage_div' ); ?>>
	<div class="row">
		<div class="column">
			<?php
			get_header();

			do_action( 'cnp_before_wrapper_div' );
			do_action( CNP\get_action( 'before_wrapper_div' ) );
			?>
			<div <?php CNP\Utility::echo_classes( [ 'wrapper' ], 'cnp_wrapper_div' ); ?> role="document">
				<?php
				do_action( 'cnp_before_main_div' );
				do_action( CNP\get_action( 'cnp_before_main_div' ) );
				?>
				<div <?php CNP\Utility::echo_classes( [ 'main' ], 'cnp_main_div' ); ?>>
					<?php
					do_action( 'cnp_before_content_div' );
					do_action( CNP\get_action( 'before_content_div' ) );
					?>
					<div <?php CNP\Utility::echo_classes( [ 'content' ], 'cnp_content_div' ); ?>><?php
						include_once( CNP\template_path() );
						?></div><!-- /.content -->
					<?php
					do_action( CNP\get_action( 'after_content_div' ) );
					do_action( 'cnp_after_content_div' );
					?>
				</div><!-- /.main -->
				<?php
				do_action( 'cnp_after_main_div' );
				do_action( CNP\get_action( 'cnp_after_main_div' ) );
				?>
			</div><!-- /.wrapper -->
			<?php
			do_action( 'cnp_after_wrapper_div' );
			do_action( CNP\get_action( 'after_wrapper_div' ) );
			?>
			<?php
			get_footer();
			?>
		</div><!-- /.column -->
	</div><!-- /.row -->
</div><!-- /.webpage -->
<?php
do_action( 'cnp_after_webpage_div' );
do_action( CNP\get_action( 'cnp_after_webpage_div' ) );
wp_footer();
?>
</body>
</html>
