<header class="masthead row" role="banner">

    <div class="small-3 columns">
        <h2 class="logo">
            <a itemprop="url" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <meta itemprop="logo" content="<?php echo get_template_directory_uri() . '/img/logo.svg'; ?>">
        </h2>
    </div>

    <div class="small-9 columns">
        <?php wp_nav_menu( array('menu' => 'Main') ); ?>
    </div>

</header><?php
if ( is_front_page() ) {
    get_template_part('partials/header-home');
}
else {
    get_template_part('partials/header-int');
}
