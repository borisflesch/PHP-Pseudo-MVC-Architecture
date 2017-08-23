<?php
$meta_title = "Homepage";

$loadJS = ['jsFile', 'http://example.com/jsScript.js'];
// You can import JS files through controller:
// - Local script: just write the filename (without ".js") and it will be load from /public/js/
// - External script: write the full address of the script

require "app/views/home.php";