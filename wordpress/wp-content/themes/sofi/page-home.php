<?php
/*
Template Name: Home
*/
get_header(); ?>

<div class="home">

	<ul class="slider" data-orbit>
		<?php
		$slides = get_post_meta( get_the_ID(), $prefix . '_sofi_slider_slide', true );

		foreach ( (array) $slides as $key => $slide ) {

			$alt = $img = $caption = '';

			if ( isset( $slide['alt'] ) )
				$alt = esc_html( $entry['alt'] );

			if ( isset( $slide['img'] ) )
				$img = esc_html( $entry['img'] );

			if ( isset( $slide['caption'] ) )
				$caption = esc_html( $entry['caption'] );

			?>
			<li>
				<img src="<?php echo $slide['img']; ?>" alt="<?php echo $slide['alt']; ?>" />
				<div class="orbit-caption">
					<?php echo $slide['caption']; ?>
				</div>
			</li>
		<?php }	?>
	</ul>

	<div id="connect" class="row">
		<div class="medium-8 medium-offset-2 columns">
			<h2 class="text-center">Stay Connected</h2>
			<div class="row">
				<div class="medium-6 columns">
					Stay connected. We’ll notify you when new materials are added to the site.
				</div>
				<div class="medium-6 columns">
					<form id="mc-embedded-subscribe-form" class="validate" action="http://mastercardnfdn.us3.list-manage2.com/subscribe/post?u=aeac0ea81c58b91326a78d8b9&amp;id=d071365a3a" method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
						<div class="stay_together">
							<input id="mce-EMAIL" class="email_submit2" name="EMAIL" type="text" value="" placeholder="enter your email" />
							<input id="mc-embedded-subscribe" class="submit3" name="subscribe" type="submit" value="&gt;" />
							<div id="mce-responses" class="clear"></div>
							<!--  real people should not fill this in and expect good things - do not remove this or risk form bot signups -->
							<div style="position: absolute; left: -5000px;">
								<input name="b_aeac0ea81c58b91326a78d8b9_d071365a3a" type="text" value="" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div id="clients">
		<div class="row">
			<div class="medium-8 medium-offset-2 columns">
				<div class="content">
					<h2>Clients At The Center</h2>
					<p>The 2015 MasterCard Foundation Symposium on Financial Inclusion, in partnership with the Boulder Institute of Microfinance, takes place November 19-20 in Cape Town, South Africa.</p>
					
					<p>The over-arching theme of “Clients at the Center” is central to the Symposium. At this invitation-only event, members of the global community dedicated to improving and scaling financial services to the poor will hear about best practices, share experiences, and deepen their understanding of issues and opportunities in the sector. They will also discuss how to quicken the pace of innovation in financial products, services, and systems to better meet the needs of the most economically vulnerable.</p>
					
					<p>For an overview of the 2014 Symposium, please go here. To see transcripts, videos, a final report, and other material, please go here.</p>
				</div>
			</div>
		</div>
	</div>

	<div id="speakers">
		<div class="row">
			<div class="medium-12 columns">
				<h2>Speakers</h2>
				<div class="row">
					<div class="medium-8 medium-offset-2 columns">
						<p>During the Symposium, global thought leaders explored together The Client Journey. Among those who spoke and shared the latest advances in research and emerging ideas were those listed below.</p>	
					</div>
				</div>
				<div class="row">
					<?php 
					/* Arguments */
					$args = array(
						'post_type' => 'speaker',
						'posts_per_page' => 4,
						'orderby' => 'rand',
						);
			
					// The Query
					$speaker_query = new WP_Query( $args );
			
					if ( $speaker_query->have_posts() ) {
						while ( $speaker_query->have_posts() ) {
							$speaker_query->the_post();
			
							$f_name = get_post_meta( get_the_ID(), '_speaker_f_name', true );
							$l_name = get_post_meta( get_the_ID(), '_speaker_l_name', true );
							$title = get_post_meta( get_the_ID(), '_speaker_title', true );
					?>
			
					<div class="large-3 medium-6 small-12 columns speaker">
						<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
						<div class="name"><?php echo the_title(); ?></div>
						<div class="org"><?php echo $title; ?></div>
					</div>
			
					<?php }
					} else {
						echo "There are no speakers for this event yet.";
					}
					wp_reset_postdata();
					?>
				</div>
				<a href="./speakers" class="button cta large">See More Speakers</a>
			</div>
		</div>
	</div>

	<?php 
	// Grab Partner metabox data
	$img1 = get_post_meta( get_the_ID(), '_home_partner_one', true );
	$alt1 = get_post_meta( get_the_ID(), '_home_partner_one_alt', true );

	$img2 = get_post_meta( get_the_ID(), '_home_partner_two', true );
	$alt2 = get_post_meta( get_the_ID(), '_home_partner_two_alt', true );

	?>

	<div id="partners">
		<div class="row">
			<div class="medium-8 medium-offset-2 columns">
				<h2 class="text-center">Proud Partners</h2>
				<div class="row">
					<div class="medium-6 columns partner">
						<img src="<?php echo $img1; ?>" alt="<?php echo $alt1; ?>">
					</div>
					<div class="medium-6 columns partner">
						<img src="<?php echo $img2; ?>" alt="<?php echo $alt2; ?>">
					</div>	
				</div>
			</div>
		</div>
	</div>

</div>

<?php get_footer(); ?>