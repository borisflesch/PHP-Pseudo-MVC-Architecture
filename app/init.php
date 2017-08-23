<?php
session_start();

function importClass($class) {
        $path = dirname(__FILE__)."/class/$class.php";
        //var_dump($path);
        if(file_exists($path)) {
                require_once $path;
        }
}

spl_autoload_register('importClass');

// db connection
$db = new PDO('mysql:host=host_of_the_db;dbname=name_of_the_db;charset=utf8', 'root', '');

// Initialize ALL manager classes like :
$articlesManager = new ArticlesManager($db);