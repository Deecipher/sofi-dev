<?php get_header(); ?>

<div id="page-title">
	<div class="row">
		<div class="small-12 columns">
			<h1>Newsroom</h1>
		</div>
	</div>
</div>

<?php while ( have_posts() ) : the_post(); ?>

<div class="row">
	<article class="medium-8 columns">
		<div class="news-single">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<div class="content">
				<?php the_content(); ?>
			</div>
			<footer></footer>
		</div>
	</article>

	<div class="medium-3 columns sidebar">
		<h2>Fact Sheet</h2>
		<a href="#" class="button arrow expand">Symposium: Fact Sheet</a>
		<div class="clearfix"></div>
		<h2>Media Contact</h2>
		Roger Morier<br>
		Senior Manager<br>
		Communications
		<a class="email" href="mailto:rmorier@mastercardfdn.org">rmorier@mastercardfdn.org</a>
	</div>
</div>

<?php endwhile;?>

<?php get_footer(); ?>