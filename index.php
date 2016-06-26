<?php get_header(); ?>

	<div class="row">

		<div class="col-sm-8 blog-main">

			<?php get_template_part( 'content', get_post_format() ); ?>
            
            <!-- Wasn't sure which file this was supposed to go in so I kept it here -->
            <nav>
            <ul class="pager">
              <li><a href="#">Previous</a></li>
              <li><a href="#">Next</a></li>
            </ul>
            </nav>
            
		</div> <!-- /.blog-main -->

		<?php get_sidebar(); ?>

	</div> <!-- /.row -->

<?php get_footer(); ?>