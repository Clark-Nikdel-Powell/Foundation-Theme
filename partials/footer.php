<?php
if ( ! is_front_page() ) {
	get_template_part( 'partials/footer-int' );
}
?>
<footer class="site">
	<div class="row">
		<div class="column">
			<p class="copyright">&copy; <?php echo date( 'Y' ); ?> <?php echo bloginfo( 'name' ); ?></p>
		</div>
	</div>
</footer>
