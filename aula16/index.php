<?php

include 'Usuario4.php';
include 'Cliente4.php';
include 'Gestor4.php';
include 'GestorGeral4.php';
include 'Validar4.php';

$c1 = new Cliente4('joao@email.com', '123456');
$c1->setNome('João');

$g1 = new Gestor4('fernando@email.com', '654321', 6500);
$g1->setNome('Fernando');

$gG1 = new GestorGeral4('amanda@email.com', '010101', 22000);

$cpf = '0123456789';

Validar4::validarCpf($cpf);