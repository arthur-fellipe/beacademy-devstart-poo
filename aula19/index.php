<?php

include 'Usuario5.php';
include 'Cliente5.php';
include 'Gestor5.php';
include 'GestorGeral5.php';
include 'Validar5.php';
include 'Login5.php';
include 'LoginNome5.php';
include 'LoginEmail5.php';
include 'LoginCpf5.php';

$c1 = new Cliente5('joao@email.com', '123456');
$c1->setNome('João');

$g1 = new Gestor5('fernando@email.com', '654321', 6500);
$g1->setNome('Fernando');

$gG1 = new GestorGeral5('amanda@email.com', '010101', 22000);

$l1 = new LoginNome5();
$l1->loginUsuario('Diogo Cerqueira', '123456');
