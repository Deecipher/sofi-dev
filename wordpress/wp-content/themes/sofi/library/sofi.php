<?php
// Custom SOFI Functions

// Custom Excerpt that allows videos to be shown in an excerpt - created to allow vids in blog listing page
function sofi_trim_excerpt($text) { // Fakes an excerpt if needed
  global $post;
  if ( '' == $text ) {
    $text = get_the_content('');
    $text = apply_filters('the_content', $text);
    $text = str_replace('\]\]\>', ']]&gt;', $text);
    // $text = strip_tags($text);
    $excerpt_length = 55;
    $words = explode(' ', $text, $excerpt_length + 1);
    if (count($words)> $excerpt_length) {
      array_pop($words);
      array_push($words, '[...]');
      $text = implode(' ', $words);
    }
  }
return $text;
}

remove_filter('get_the_excerpt', 'wp_trim_excerpt');
add_filter('get_the_excerpt', 'sofi_trim_excerpt');

// Remove content editor box on home page template
add_action( 'admin_init', 'hide_editor_on_home_template' );

function hide_editor_on_home_template() {
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	if( !isset( $post_id ) ) return;

	$template_file = get_post_meta($post_id, '_wp_page_template', true);
	
    if($template_file == 'page-home.php'){ // edit the template name
    	remove_post_type_support('page', 'editor');
    }
}

// Remove content editor box on agenda page template
add_action( 'admin_init', 'hide_editor_on_agenda_template' );

function hide_editor_on_agenda_template() {
  $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
  if( !isset( $post_id ) ) return;

  $template_file = get_post_meta($post_id, '_wp_page_template', true);
  
    if($template_file == 'page-agenda.php'){ // edit the template name
      remove_post_type_support('page', 'editor');
    }
}

?>
