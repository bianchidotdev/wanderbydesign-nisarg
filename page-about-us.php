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
				<div class="entry-content">
					<?php
						the_content( sprintf(
							/* translators: %s: Name of current post. */
							wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wander' ), array( 'span' => array( 'class' => array() ) ) ),
							the_title( '<span class="screen-reader-text">"', '"</span>', false )
						) );
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wander' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->

    				<p> custom page TEST (page-about-us.php) </p>
    
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
