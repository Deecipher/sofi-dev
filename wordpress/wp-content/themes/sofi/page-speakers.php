<?php
/*
Template Name: Speakers
*/
get_header(); ?>

<div id="page-title">
	<div class="row">
		<div class="small-12 columns">
			<h1><?php the_title(); ?></h1>
		</div>
	</div>
</div>

<div class="row">
		<?php 
		/* Arguments */
		$args = array(
			'post_type' => 'speaker',
			'posts_per_page' => 125,
			'meta_key' => '_speaker_l_name',
			'orderby' => 'meta_value',
			'order' => 'ASC',
			);

		// The Query
		$speaker_query = new WP_Query( $args );

		if ( $speaker_query->have_posts() ) {
			while ( $speaker_query->have_posts() ) {
				$speaker_query->the_post();
		
				$f_name = get_post_meta( get_the_ID(), '_speaker_f_name', true );
				$l_name = get_post_meta( get_the_ID(), '_speaker_l_name', true );
				$title = get_post_meta( get_the_ID(), '_speaker_title', true );
				$desc = get_post_meta( get_the_ID(), '_speaker_desc', true );
				$linkedin = get_post_meta( get_the_ID(), '_speaker_linkedin', true );
				$twitter = get_post_meta( get_the_ID(), '_speaker_twitter', true );
				$link = get_post_meta( get_the_ID(), '_speaker_link', true );
		?>
	<div class="speaker">
		<div class="medium-3 columns">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		</div>
		<div class="medium-8 columns end">
			<h2 class="name"><?php the_title(); ?></h2>
			<div class="title"><?php if ($title) { echo $title; } ?></div>
			<div class="desc"><?php if ($desc) { echo wpautop( $desc ); } ?></div>
		</div>
	</div>

	<?php }
	} else {
		echo "There are no speakers for this event yet.";
	}
	wp_reset_postdata();
	?>
</div>

<?php get_footer(); ?>