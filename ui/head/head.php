<?php
/**
 * The site head.
 *
 * @package CLIENT_NAMESPACE
 */

?>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title( '&lsaquo;', true, 'right' ); ?></title>

	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="alternate" type="application/rss+xml" href="<?php esc_attr( get_option( 'rss_url', get_bloginfo( 'rss2_url' ) ) ); ?>">

	<?php wp_head(); ?>

</head>
