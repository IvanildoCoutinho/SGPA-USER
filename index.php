<?php

use CoffeeCode\Router\Router;


require './vendor/autoload.php';

$router = new Router(SITE['root']);

$router->namespace("App\Controllers");

/**
 * Web routes
 */
$router->group(null);
$router->get("/", "Pages:index", "web.index");
$router->get("/pedido", "Pages:request", "web.request");


/**
 * Forms routes
 */

$router->post("/make_request", "Request:make_request" , "make.request");
$router->post("/contact", "Forms:contact", "submit.contact");


/**
 * Error route
 */
$router->get("/404", "Pages:error404", "404");

$router->dispatch();

/**
 * If error redirect
 * to 404 custom page
 */
if($router->error()) $router->redirect("404");

