<!doctype html>
<html>
	<?php get_template_part( 'partials/head' ); ?>
	<body <?php body_class(); ?>>
		<div class="webpage">
			<?php
				do_action( 'get_header' );
				get_template_part( 'partials/header' );
			?>
			<div class="wrapper" role="document">
				<div class="main">
					<div class="content">
						<?php include_once( cnp_template_path() ); ?>
					</div><!-- /.content -->
				</div><!-- /.main -->
			</div><!-- /.wrapper -->
			<?php
				do_action( 'get_footer' );
				get_template_part( 'partials/footer' );
				wp_footer();
			?>
		</div>
	</body>
</html>