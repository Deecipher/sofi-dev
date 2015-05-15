<?php
if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		echo '<time class="updated" datetime="'. get_the_time( 'c' ) .'">'. get_the_date() .'</time> by <span rel="author">' . get_the_author() . '</span>';
	}
endif;
?>