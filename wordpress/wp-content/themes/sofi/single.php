<?php get_header(); ?>

<div id="page-title">
	<div class="row">
		<div class="small-12 columns">
			<div class="h1">Blog</div>
		</div>
	</div>
</div>

<!-- 
<div class="row">
	<div class="small-12 large-8 columns" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<?php foundationpress_entry_meta(); ?>
			</header>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="entry-content">

			<?php if ( has_post_thumbnail() ) : ?>
				<div class="row">
					<div class="column">
						<?php the_post_thumbnail( '', array('class' => 'th') ); ?>
					</div>
				</div>
			<?php endif; ?>

			<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'FoundationPress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_post_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_post_after_comments' ); ?>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>
</div> 
-->


<div class="row">
	<div class="medium-8 columns">
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
	</div>
</div>


















<?php get_footer(); ?>
