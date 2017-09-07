<?php get_header(); ?>

	<div id="blog" class="container scrollspy">
    	<div class="section">
		    <div class="row">
			    <div class="col s12">
				    <h4 class="titulos">Blog</h4>
			    </div>
		    </div>
			<div class="row">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				<div class="col s12 m4">
					<div class="card">
			            <div class="card-image">
			              <?php the_post_thumbnail('blog_preview'); ?> 
			              <span class="card-title"><?php the_title(); ?></span>
			            </div>
		            <div class="card-content">
		              <p class="truncate"><?php echo  get_the_excerpt(); ?></p>
		            </div>
		            <div class="card-action">
		              <a href="<?php the_permalink(); ?>">Leer más</a>
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
