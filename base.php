<!doctype html>
<html>
<?php
get_template_part( 'partials/head' );
?>
<body <?php
body_class();
?>>
<div class="webpage">
	<div class="row">
		<div class="column">
			<?php
			get_header();

			do_action( 'cnp_after_header' );
			do_action( cnp_get_action( 'after_header' ) );
			?>
			<div class="wrapper" role="document">
				<div class="main row">
					<div <?php
					cnp_content_class();
					?>><?php
						include_once( cnp_template_path() );
						?></div><!-- /.content -->
					<?php
					do_action( 'cnp_after_content_div' );
					do_action( cnp_get_action( 'after_content_div' ) );
					?>
				</div><!-- /.main -->
			</div><!-- /.wrapper -->
			<?php
			do_action( 'cnp_before_footer' );
			do_action( cnp_get_action( 'before_footer' ) );

			get_footer();
			wp_footer();
			?>
		</div><!-- /.column -->
	</div><!-- /.row -->
</div><!-- /.webpage -->
</body>
</html>