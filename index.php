<?php
ob_start();
require __DIR__ . "/vendor/autoload.php";
/**
 * BOOTSTRAP
 */
use Source\Core\Session;
use CoffeeCode\Router\Router;

$session = new Session();
$route = new Router(url(), ":");

/*
 * WEB ROUTER
 */
$route->namespace("source\App");
$route->get("/", "Web:home");
$route->get("/sobre", "Web:about");
$route->get("/sistemas-web", "Web:webSystem");
$route->get("/software-desktop", "Web:softwareDesktop");
$route->get("/sites", "Web:sites");
$route->get("/mobile", "Web:mobile");

//blog
$route->group("/blog");
$route->get("/", "Web:blog");
$route->get("/p/{page}", "Web:blog");
$route->get("/{uri}", "Web:blogPost");
$route->post("/buscar", "Web:blogSearch");
$route->get("/buscar/{terms}/{page}", "Web:blogSearch");

//BACKLOG APP LOGIN
$route->group('/tnn-backlog');
$route->get('/', "App:login");
$route->post('/', "App:loginPost");
$route->get('/sair', "App:logout");

//BACKLOG APP ADMIN
$route->group('/app');
$route->get('/', "App:home");

/*
 * ERROR ROUTES
 */
$route->namespace("Source\Error")->group("/ops");
$route->get("/{errcode}", "Error:error");
$route->get("/ops/problemas", "Error:problemas");

/*
 * ROUTE
 */
$route->dispatch();

/*
 * ERROR REDICT
 */
if($route->error()){
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();