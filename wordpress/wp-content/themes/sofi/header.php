<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php if ( is_category() ) {
		echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
	} elseif ( is_archive() ) {
		wp_title( '' ); echo ' Archive | '; bloginfo( 'name' );
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.esc_html( $s ).'&quot; | '; bloginfo( 'name' );
	} elseif ( is_home() || is_front_page() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' );
	} elseif ( is_single() ) {
		wp_title( '' );
	} else {
		echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
	} ?></title>

	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/favicon.ico" type="image/x-icon">
	<!-- <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/icons/apple-touch-icon-precomposed.png"> -->

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,900italic,400italic|Open+Sans:400,600,700,400italic,600italic,700italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
	<!-- END Google Fonts -->

	<!-- Share This -->
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript">
		stLight.options({"publisher":"1a51733b-670e-41e9-a1b1-b5cca8aa6b84","doNotCopy":true,"hashAddressBar":false,"doNotHash":true});
	</script>
		
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php do_action( 'foundationpress_after_body' ); ?>

		<div class="off-canvas-wrap" data-offcanvas>
			<div class="inner-wrap">

				<?php do_action( 'foundationpress_layout_start' ); ?>

				<nav class="tab-bar hide-for-large-up">
					<section class="left-small">
						<a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
					</section>
				</nav>

				<?php get_template_part( 'parts/off-canvas-menu' ); ?>

				<?php get_template_part( 'parts/top-bar' ); ?>

	<section class="container" role="document">
		<?php do_action( 'foundationpress_after_header' ); ?>
