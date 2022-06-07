<?php

include 'Usuario2.php';
include 'Cliente2.php';
include 'Gestor2.php';

$c1 = new Cliente2('joao@email.com', '123456');
$c1->setNome('João');

$g1 = new Gestor2('fernando@email.com', '654321', 6500);
$g1->setNome('Fernando');
