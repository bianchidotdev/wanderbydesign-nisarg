<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Nisarg
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-content'); ?>>

	<?php nisarg_featured_image_disaplay(); ?>

	<header class="entry-header">
		<span class="screen-reader-text"><?php the_title();?></span>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta"></div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nisarg' ),
				'after'  => '</div>',
			) );
		?>
		
		<div class="about-us-flex-wrapper">
			<div class="about-us-flex-column">
				<div class="aspect-ratio-wrapper">
					<div class="aspect-ratio"></div>
				</div>
				<p>Brady's blurb</p>		
			</div>
			<div class="about-us-flex-column">
				<div class="aspect-ratio-wrapper">
					<div class="aspect-ratio"></div>
				</div>
				<p>Michael's blurb</p>			
			</div>
		</div><!-- .about-us-flex -->
		
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'nisarg' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

