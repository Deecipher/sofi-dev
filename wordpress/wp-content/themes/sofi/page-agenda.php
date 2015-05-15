<?php
/*
Template Name: Agenda
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
	<div id="agenda">
		<div class="medium-3 columns">
			<div id="agenda-filters">
				<?php 
				/* Arguments */
				$args = array(
					'post_type' => 'agenda',
					'posts_per_page' => 25,
					'meta_key' => '_agenda_single_day',
					'orderby' => 'meta_value',
					'order' => 'ASC',
					);

				// The Query
				$agenda_query = new WP_Query( $args );

				if ( $agenda_query->have_posts() ) {
					echo '<div class="titles">';
					while ( $agenda_query->have_posts() ) {
						$agenda_query->the_post();

						$day = get_post_meta( get_the_ID(), '_agenda_single_day', true );

						?>

						<div class="agenda-day-title" day="<?php echo $day; ?>">
							<?php the_title(); ?>
						</div>
						<?php
					}
					echo '</div>';

					echo '<div class="filters">';
					while ( $agenda_query->have_posts() ) {
						$agenda_query->the_post();

						$day = get_post_meta( get_the_ID(), '_agenda_single_day', true );

						?>


						<div class="agenda-filter-day <?php echo $agenda_query->current_post === 0 ? ' active' : '' ?>" day="<?php echo $day; ?>">
							<?php echo get_the_title(); ?>
						</div>

						<?php
					}
					echo '</div>';
				}
				wp_reset_postdata();
				?>
				<div class="download">
					<?php 

					// General Loop
					while ( have_posts() ) : the_post();

						// Get the download link for the agenda
						$dl = get_post_meta( get_the_ID(), '_agenda_page_dl', true );

						if ($dl) {			
						?>
						<a href="<?php echo $dl; ?>" class="button arrow expand">Download PDF Version</a>
						<?php 
						}
					endwhile; // end loop
					wp_reset_postdata();
					?>
				</div>
			</div>
		</div>

		<div class="medium-8 columns end spacer">
			<?php 

			/* Arguments */
			$args = array(
				'post_type' => 'agenda',
				'posts_per_page' => 25,
				'meta_key' => '_agenda_single_day',
				'orderby' => 'meta_value',
				'order' => 'ASC',
				);

			// The Query
			$agenda_query = new WP_Query( $args );

			if ( $agenda_query->have_posts() ) {
				while ( $agenda_query->have_posts() ) {
					$agenda_query->the_post();

					$day = get_post_meta( get_the_ID(), '_agenda_single_day', true );

					?>

					<div class="agenda-content-day" day="<?php echo $day; ?>">
					
					<?php

					//////////////////////////////////////////////

					$entries = get_post_meta( get_the_ID(), $prefix . '_agenda_agenda_item', true );

					foreach ( (array) $entries as $key => $entry ) {

						$time = $title = $pres = $desc = '';

						if ( isset( $entry['time'] ) )
							$time = esc_html( $entry['time'] );

						if ( isset( $entry['title'] ) )
							$title = esc_html( $entry['title'] );

						if ( isset( $entry['pres'] ) )
							$pres = esc_html( $entry['pres'] );

						if ( isset( $entry['desc'] ) )
							$desc = esc_html( $entry['desc'] );

					?>
						<div class="agenda-item">
							<div class="time"><?php echo $entry['time']; ?></div>
							<h2 class="title"><?php echo $entry['title']; ?></h2>
							<h3 class="pres"><?php echo $entry['pres']; ?></h3>
							<div class="desc"><?php echo $entry['desc']; ?></div>
						</div>
					<?php 
					}
					echo '</div>';
				}
			}
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>