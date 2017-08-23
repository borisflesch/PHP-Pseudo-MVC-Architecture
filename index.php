<?php

require_once 'app/init.php';

// URL Rooter

$url = '';
$params = [];

if(isset($_GET['url'])) {
        $url = $_GET['url'];
} else {
        $url = $_SERVER['REQUEST_URI'];
}

$url = filter_var(ltrim(rtrim($url, '/'), '/'), FILTER_SANITIZE_URL);

if ($url == '') {
        $controller = 'home';
} elseif ($url == 'articles') { // Check URL with static value...
        $controller = 'articles';
} elseif (preg_match('#^([a-zA-Z0-9-]+)-([0-9])+$#', $url, $params)) { // ...or dynamic with Regex (params stored in $params var and available in the asked controller)
	$controller = 'article';
} else {
		// If no match, call 404 Error controller
        $controller = '404';
}

ob_start();
require_once 'app/controllers/'.$controller.'.php';
$content = ob_get_clean();

require_once 'app/views/layout.php';
