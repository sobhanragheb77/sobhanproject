<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];

$routes = [
    "/"=>"controller/index.php",
    "/about"=>"controller/about.php",
    "/contact"=>"controller/contact.php"
];

RouteToUri($uri , $routes);