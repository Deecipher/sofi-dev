<?php
/*
Template Name: Resources
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
	<div id="resources">
		<div class="medium-3 columns">
			<div id="filters">
				<?php 
				/* Arguments */
				$args = array(
					'post_type' => 'resource',
					'order' => 'DESC',
					);

				$categories = get_categories( $args );
				$i = 0;
				foreach($categories as $category) { 
					if ($category->cat_name != 'Uncategorized') { ?>

						<div class="resource-filter <?php if ( $i === 0 ) { echo 'active'; } ?>" cat="<?php echo $category->slug; ?>"><?php echo $category->name; ?></div>
					
					<?php 
					$i++;
					}
				}
				?>
			</div>
		</div>

		<div class="medium-8 columns end spacer">
			<div class="row">
				<?php 
				/* Arguments */
				$args = array(
					'post_type' => 'resource',
					'posts_per_page' => 100,
					'order' => 'DESC',
					);

				// The Query
				$resource_query = new WP_Query( $args );

				if ( $resource_query->have_posts() ) {
					$counter = 0;
					while ( $resource_query->have_posts() ) {
						$resource_query->the_post();

						$type = get_post_meta( get_the_ID(), '_resource_type', true );
						$doc = get_post_meta( get_the_ID(), '_resource_doc', true );
						$vid = get_post_meta( get_the_ID(), '_resource_video', true );
						$img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );						
						?>

						<?php if($type == 'vid') {
							?>
							<div class="resource columns <?php echo $type; ?> <?php foreach(get_the_category() as $category) { echo $category->slug . ' '; } ?>medium-6 end">
								<div class="content">
									<div class="feat-img">
										<a href="#" data-reveal-id="video-<?php echo $counter ;?>">
											<img class="<?php echo $type; ?>" src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
										</a>
									</div>
									<div class="resource-title">
										<a href="#" data-reveal-id="video-<?php echo $counter ;?>">
											<?php the_title(); ?>
										</a>
									</div>
								</div>

								<div id="video-<?php echo $counter ;?>" class="reveal-modal" data-reveal aria-labelledby="<?php the_title(); ?>" aria-hidden="true" role="dialog">
									<?php echo wp_oembed_get( $vid ); ?>
									<a class="close-reveal-modal" aria-label="Close">&#215;</a>
								</div>
							</div>

							<?php $counter++ ?>

							<?php }
							else if($type == 'doc') { ?>
							<div class="resource columns <?php echo $type; ?> <?php foreach(get_the_category() as $category) { echo $category->slug . ' '; } ?>medium-6 end">
								<div class="content">
									<div class="feat-img">
										<a href="<?php echo $doc; ?>">
											<img class="<?php echo $type; ?>" src="<?php echo $img[0]; ?>" alt="<?php the_title(); ?>">
										</a>
									</div>
									<div class="resource-title">
										<a href="<?php echo $doc; ?>">
											<?php the_title(); ?>
										</a>
									</div>
									
								</div>
							</div>
							<?php } ?>

							<?php }
						} else {
							echo "At this time, there are no resource for this event.";
						}
						wp_reset_postdata();
						?>
					</div>
				</div>
			</div>
		</div>

		<?php get_footer(); ?>