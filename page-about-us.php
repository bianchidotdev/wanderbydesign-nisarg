<?php
/**
 * The template for displaying the ----About Us---- page. The slug is "about-us"
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wander
 */
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!-- from content.php -->
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wander_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content();
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php wander_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
    
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
