<?php
get_template_part( 'partials/base-top' );

do_action( 'cnp_after_header' );
do_action( cnp_get_action( 'after_header' ) );
?>
	<div class="wrapper" role="document">
		<div class="main row">
			<?php
			do_action( 'cnp_before_content_div' );
			do_action( cnp_get_action( 'before_content_div' ) );
			?>
			<div <?php
			CNP\Utility::echo_classes( 'content', 'cnp_content_div' );
			?>><?php
				include_once( cnp_template_path() );
				?></div><!-- /.content -->
			<?php
			do_action( cnp_get_action( 'after_content_div' ) );
			do_action( 'cnp_after_content_div' );
			?>
		</div><!-- /.main -->
	</div><!-- /.wrapper -->
<?php
do_action( 'cnp_before_footer' );
do_action( cnp_get_action( 'before_footer' ) );

get_template_part( 'partials/base-bottom' );
