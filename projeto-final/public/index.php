<?php

include '../vendor/autoload.php';

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;

$i = new IndexController();
$i->indexAction();
$i->loginAction();

$p = new ProductController();
$p->listAction();
$p->addAction();
$p->editAction();

$c = new CategoryController();
$c->listAction();
$c->addAction();
$c->editAction();