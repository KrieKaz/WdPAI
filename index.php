 <?php

require "Routing.php";

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::get('index', 'DefaultController');
Routing::get('adverts', 'DefaultController');
Routing::post('login', 'SecurityController');
#Routing::post('addAvert', 'AdvertController');
Routing::run($path);