<?php

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRoute(string $controllerName, string $methodName) {
    return [
        'controller' => $controllerName,
        'method' => $methodName,
    ];
}

$routes = [
    '/' => createRoute(IndexController::class, 'indexAction'),
    '/login' => createRoute(IndexController::class, 'loginAction'),
    '/product' => createRoute(ProductController::class, 'listAction'),
    '/product/new' => createRoute(ProductController::class, 'addAction'),
    '/product/edit' => createRoute(ProductController::class, 'editAction'),
    '/category' => createRoute(CategoryController::class, 'listAction'),
    '/category/new' => createRoute(CategoryController::class, 'addAction'),
    '/category/edit' => createRoute(CategoryController::class, 'editAction'),

    // '/' => [
    //     'controller' => IndexController::class,
    //     'method' => 'indexAction'
    // ],
    // '/produtos' => [
    //     'controller' => ProductController::class,
    //     'method' => 'listAction'
    // ],
];

if (false === isset($routes[$url])) {
    (new ErrorController())->notFoundAction();
    exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();

// $i = new IndexController();
// $i->indexAction();
// $i->loginAction();

// $p = new ProductController();
// $p->listAction();
// $p->addAction();
// $p->editAction();

// $c = new CategoryController();
// $c->listAction();
// $c->addAction();
// $c->editAction();