<?php

include '../vendor/autoload.php';

use App\Controller\IndexController;

$c = new IndexController();
$c->indexAction();

echo 'Olá, mundo!';