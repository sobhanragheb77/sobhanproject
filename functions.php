<?php


function urlIs($value): bool{
    return $_SERVER["REQUEST_URI"] === $value; 
}

function dd($velue)
{
    print "<pre>";
    var_dump($velue);
    print "</pre>";
    die();
}

function abort($code = 404){
    http_response_code($code);
    require("views/{$code}.php");
    die();
}

function RouteToUri($uri , $routes){
    if(array_key_exists($uri , $routes)){
        require $routes[$uri];
    }else{
        abort();
    
    }
}