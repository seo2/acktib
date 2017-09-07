<?php get_header(); ?>

	<div id="blog" class="container scrollspy">
    	<div class="blog">
			<div class="row">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="col s12 m10 offset-m1">
					<div class="card">
			            <div class="card-image">
			              <?php the_post_thumbnail('blog'); ?> 
			            </div>
		            <div class="card-content">
			          <span class="card-title"><?php the_title(); ?></span>
		              <?php the_content(); ?>
		            </div>
		          </div>
				</div>   
				<?php endwhile; ?>
				<?php // Navegación ?>
				<?php else : ?>
				<?php // Cuando no hay post ?>
				<?php endif; ?>
			</div><!-- /row -->
		</div><!-- /section -->
	</div><!-- /blog -->	
	
<?php get_footer(); ?>
