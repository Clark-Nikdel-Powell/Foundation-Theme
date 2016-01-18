<header class="masthead contain-to-grid" role="banner">

	<nav class="top-bar" role="navigation">

		<div class="top-bar-left">
			<ul class="menu vertical medium-horizontal">
				<li class="name">
					<h2 class="logo">
						<a itemprop="url" href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
					</h2>
				</li>

			</ul>
		</div>

		<div class="top-bar-right">

			<div class="right">
				<?php wp_nav_menu( array( 'menu' => 'Main' ) ); ?>
			</div>

		</div>

	</nav>

</header><?php
if ( is_front_page() ) {
	get_template_part( 'partials/header-home' );
} else {
	get_template_part( 'partials/header-int' );
}
