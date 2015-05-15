<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */
?>

<article class="blog-article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<div class="time-auth"><?php foundationpress_entry_meta(); ?></div>
	</header>
	<div class="content">
		<!-- <?php the_content( __( 'Continue reading...', 'FoundationPress' ) ); ?> -->
		<?php the_excerpt(); ?>
	</div>
	<footer>
		<!-- <?php $tag = get_the_tags(); if ( ! $tag ) { } else { ?><p><?php the_tags(); ?></p><?php } ?> -->
		<a href="<?php the_permalink(); ?>">Read More</a>
	</footer>
</article>