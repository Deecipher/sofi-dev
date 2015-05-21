<?php get_header(); ?>
<div id="page-title">
	<div class="row">
		<div class="medium-8 columns">
			<h1><?php _e( 'Search Results', 'FoundationPress' ); ?></h1>
		</div>
		<div class="medium-4 columns">
			<div id="sb-search" class="sb-search">
				<form role="search" method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
					<input class="sb-search-input" placeholder="Search" value="" name="s" type="text">
					<input class="sb-search-submit" id="searchsubmit" value="" type="submit">
					<span class="sb-icon-search"><img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/assets/img/icons/search.png" alt=""></span>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-12 columns" role="main">

		<?php do_action( 'foundationpress_before_content' ); ?>

	<span class="results-for">Results for: "<?php echo get_search_query(); ?>"</span>

	<!-- Search Through Pages and Posts First -->
	<?php
	$searchterm = get_search_query();
	$args = array( 'post_type' => array( 'page', 'post' ), 's' => $searchterm );
	$loop = new WP_Query( $args );

	if ( have_posts() ) :

		while ( $loop->have_posts() ) : $loop->the_post();
			get_template_part( 'content', get_post_format() );
		endwhile;

		else :
			get_template_part( 'content', 'none' );

	endif; wp_reset_query();
	?>

	
	<!-- Now Speaker Custom Post Type -->
	<?php
	$searchterm = get_search_query();
	$args = array( 'post_type' => array( 'speaker', ), 's' => $searchterm );
	$loop = new WP_Query( $args );

	if ( have_posts() ) :

		while ( $loop->have_posts() ) : $loop->the_post();
		$title = get_post_meta( get_the_ID(), '_speaker_title', true ); ?>
			<article class="blog-article">
				<header>
					<h1><a href="./speakers"><?php the_title(); ?></a></h1>
					<div class="time-auth">
						<?php the_time('F jS, Y') ?> by <?php the_author() ?>
					</div>
				</header>
				<div class="content">
					<p><?php if ($title) { echo $title; } ?></p>
				</div>
			</article>
		<?php endwhile;
		
	endif; wp_reset_query();
	?>

	<!-- Now Resource Custom Post Type -->
	<?php
	$searchterm = get_search_query();
	$args = array( 'post_type' => array( 'resource', ), 's' => $searchterm );
	$loop = new WP_Query( $args );

	if ( have_posts() ) :

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<article class="blog-article">
				<header>
					<h1><a href="./resources"><?php the_title(); ?></a></h1>
					<div class="time-auth">
						<?php the_time('F jS, Y') ?> by <?php the_author() ?>
					</div>
				</header>
			</article>
		<?php endwhile;
		
	endif; wp_reset_query();
	?>

	<!-- Now agenda Custom Post Type -->
	<?php
	$searchterm = get_search_query();
	$args = array( 'post_type' => array( 'agenda', ), 's' => $searchterm );
	$loop = new WP_Query( $args );

	if ( have_posts() ) :

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<article class="blog-article">
				<header>
					<h1><a href="./agenda"><?php the_title(); ?></a></h1>
					<div class="time-auth">
						<?php the_time('F jS, Y') ?> by <?php the_author() ?>
					</div>
				</header>
			</article>
		<?php endwhile;
		
	endif; wp_reset_query();
	?>

	<!-- Now newsroom Custom Post Type -->
	<?php
	$searchterm = get_search_query();
	$args = array( 'post_type' => array( 'timeline', ), 's' => $searchterm );
	$loop = new WP_Query( $args );

	if ( have_posts() ) :

		while ( $loop->have_posts() ) : $loop->the_post(); ?>
			<article class="blog-article">
				<header>
					<h1><a href="./timeline"><?php the_title(); ?></a></h1>
					<div class="time-auth">
						<?php the_time('F jS, Y') ?> by <?php the_author() ?>
					</div>
				</header>
			</article>
		<?php endwhile;
		
	endif; wp_reset_query();
	?>


	<?php do_action( 'foundationpress_before_pagination' ); ?>

	<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>

		<nav id="post-nav">
			<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'FoundationPress' ) ); ?></div>
			<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'FoundationPress' ) ); ?></div>
		</nav>
	<?php } ?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>

<?php get_footer(); ?>
