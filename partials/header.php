<header class="masthead contain-to-grid" role="banner">

<nav class="top-bar" data-topbar role="navigation">

	<ul class="title-area">
		<li class="name">
			<h2 class="logo">
				<a itemprop="url" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>

			</h2>
		</li>
		<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
	</ul>

	<section class="top-bar-section">

		<div class="right">
			<?php wp_nav_menu( array('menu' => 'Main') ); ?>
		</div>

	</section>

</nav>

</header><?php
if ( is_front_page() ) {
    get_template_part('partials/header-home');
}
else {
    get_template_part('partials/header-int');
}
