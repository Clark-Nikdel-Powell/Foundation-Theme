<?php
// Content is based on post type or scenario partial files.
// E.g., content-tz_event.php for a singular event, or content-404.php
// for 404 page content.
$type = $post->post_type;

if ( is_search() ) {
	$type = 'search';
}
if ( is_404() ) {
	$type = '404';
}

if ( have_posts() ) { while ( have_posts() ) { the_post(); ?>

	<article <?php post_class(); ?>>

		<?php get_template_part('content/content', $type); ?>

	</article>

<?php } the_posts_pagination(); }
