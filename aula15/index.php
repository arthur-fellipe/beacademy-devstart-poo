<?php

include 'Usuario3.php';
include 'Cliente3.php';
include 'Gestor3.php';

$c1 = new Cliente3('joao@email.com', '123456');
$c1->setNome('João');

$g1 = new Gestor3('fernando@email.com', '654321', 6500);
$g1->setNome('Fernando');