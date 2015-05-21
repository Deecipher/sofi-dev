<?php get_header(); ?>

<div id="page-title">
	<div class="row">
		<div class="small-12 columns">
			<div class="h1">Blog</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="medium-8 columns">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="blog-single">
			<header>
				<h1><?php the_title(); ?></h1>
				<div class="time-auth"><?php foundationpress_entry_meta(); ?></div>
			</header>
			<div class="content">
				<?php the_content(); ?>
			</div>
			<footer>
				<!-- Share This Links -->
				<div id="sharethis">
					<span class="sharethisTxt">SHARE</span>
					<span class='st_facebook' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
					<span st_username='MCFoundation' class='st_twitter' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
					<span class='st_linkedin' st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>'></span>
					<span st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' class='st_googleplus'></span>
					<span st_title='<?php the_title(); ?>' st_url='<?php the_permalink(); ?>' class='st_email'></span>
				</div>

				<!-- Author -->
				<div class="author row">
					<div class="small-2 columns">
						<div class="avatar"><?php echo get_avatar(get_the_author_meta( 'ID' )); ?></div>	
					</div>
					<div class="small-10 columns">
						<div class="name"><?php echo get_the_author_link(); ?></div>
						<div class="desc"><?php echo get_the_author_meta('description'); ?></div>	
					</div>
				</div>

			</footer>
		</div>
		<?php endwhile;?>
	</div>
</div>

<?php get_footer(); ?>
