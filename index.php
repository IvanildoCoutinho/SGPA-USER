<?php

session_start();

use CoffeeCode\Router\Router;


require './vendor/autoload.php';

$router = new Router(SITE['root']);

$router->namespace("App\Controllers");

/**
 * Web routes
 */
$router->group(null);
$router->get("/", "Pages:index", "web.index");
$router->get("/pedidos", "Pages:request", "web.request");
$router->get("/pedido/{code}", "Pages:request_track", "web.track");

/**
 * Forms routes
 */

$router->post("/make_request", "Request:make_request" , "request.make");
$router->post("/track_request", "Request:get", "request.track");


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

