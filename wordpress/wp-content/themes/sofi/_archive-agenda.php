<?php get_header(); ?>
<div id="page-title">
	<div class="row">
		<div class="small-12 columns">
			<h1><?php post_type_archive_title(); ?></h1>
		</div>
	</div>
</div>

<div class="row">
	<div class="agenda">
		<div class="medium-3 columns">
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

				<div class="agenda-day-title" day="<?php echo $day; ?>">
				<?php the_title(); ?> - Day <?php echo $day; ?>
				</div>
				<?php
					}

					echo '<hr>';

					while ( $agenda_query->have_posts() ) {
						$agenda_query->the_post();

						$day = get_post_meta( get_the_ID(), '_agenda_single_day', true );

				?>


				<div class="agenda-filter-day" day="<?php echo $day; ?>"><?php echo get_the_title(); ?> - Day <?php echo $day; ?></div>

				<?php
					}
				}
				wp_reset_postdata();
			?>
			<a href="#" class="button">Download PDF Version</a>
		</div>

		<div class="medium-8 columns end">
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
						<div class="time"><?php echo $entry['time']; ?></div>
						<div class="title"><?php echo $entry['title']; ?></div>
						<div class="pres"><?php echo $entry['pres']; ?></div>
						<div class="desc"><?php echo $entry['desc']; ?></div>
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