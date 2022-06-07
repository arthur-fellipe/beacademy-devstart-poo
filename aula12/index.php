<?php

include 'Usuario.php';
include 'Cliente.php';
include 'Gestor.php';

$c1 = new Cliente();
$c1->setNome('João Alves');

$g1 = new Gestor();
$g1->setNome('Fernando Hora');