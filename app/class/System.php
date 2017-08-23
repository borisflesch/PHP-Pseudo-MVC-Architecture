<?php

class System {

	/* Generates a 404 error if called */
	public static function generate404() {
		header("HTTP/1.0 404 Not Found");
		require('app/views/404.php');
		exit();
	}

	/* Slugify a string (URL Friendly) */
	static public function slugify($text) {
	  $text = preg_replace('~[^\pL\d]+~u', '-', $text);
	  $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
	  $text = preg_replace('~[^-\w]+~', '', $text);
	  $text = trim($text, '-');
	  $text = preg_replace('~-+~', '-', $text);
	  $text = strtolower($text);
	  if (empty($text)) {
	    return 'n-a';
	  }

	  return $text;
	}

	//...
}