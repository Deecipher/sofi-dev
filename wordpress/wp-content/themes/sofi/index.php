<?php get_header(); ?>

<div id="page-title">
	<div class="row">
		<div class="small-12 columns">
			<h1><?php echo get_the_title( get_option( 'page_for_posts' ) ); ?></h1>
		</div>
	</div>
</div>

<div class="row">
	<div class="medium-8 columns" role="main">

	<?php if ( have_posts() ) : ?>

		<?php //do_action( 'foundationpress_before_content' ); ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>

		<?php //do_action( 'foundationpress_before_pagination' ); ?>

	<?php endif;?>





	<?php //do_action( 'foundationpress_after_content' ); ?>

	</div>
	<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>
