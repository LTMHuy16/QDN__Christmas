<?php

define ( 'SITE_TITLE', 'CHRISTMAS' );

function site_title() {
	return SITE_TITLE;
}

// Get YouTube ID
function get_youtube_id( $youtube_url ) {
	preg_match( "#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#", $youtube_url, $matches );

	return $matches[0];
}

?>