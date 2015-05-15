<?php get_header(); ?>

<div id="page-title">
	<div class="row">
		<div class="small-12 columns">
			<h1><?php post_type_archive_title(); ?></h1>
		</div>
	</div>
</div>

<div class="row">
	<div class="medium-8 columns">
		<?php 
		/* Arguments */
		$args = array(
			'post_type' => 'timeline',
			'posts_per_page' => 25,
			'order' => 'DESC',
			);

		// The Query
		$speaker_query = new WP_Query( $args );

		if ( $speaker_query->have_posts() ) {
			while ( $speaker_query->have_posts() ) {
				$speaker_query->the_post();
				
				$title = get_post_meta( get_the_ID(), '_newsroom_title', true );
				$content = get_post_meta( get_the_ID(), '_speaker_content', true );
		?>

		<article class="news">
			<header>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</header>
			<div class="content"><?php the_excerpt(); ?></div>
			<footer>
				<a href="<?php the_permalink(); ?>">Read More</a>
			</footer>
		</article>
			
		<?php }
		} else {
			echo "Currently, there are no newsroom articles for this event.";
		}
		wp_reset_postdata();
		?>
	</div>

	<div class="medium-3 columns">
		Fact Sheet
		<a href="#" class="button">Symposium: Fact Sheet</a>
		Media Contact
		Roger Morier 
		Senior Manager 
		Communications 
		rmorier@mastercardfdn.org
	</div>
</div>


<?php get_footer(); ?>