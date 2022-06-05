<?php

include 'Produto.php';
include 'Categoria.php';

$c1 = new Categoria('Roupas', 'Roupas em geral');
$c2 = new Categoria('Calçados', 'Calçados em geral');
$c3 = new Categoria('Acessórios', 'Acessórios em geral');

$p1 = new Produto('Tênis', 299, $c2);
$p1->setDescricao('Tênis para corrida');

$p2 = new Produto('Saia jeans', 79, $c1);
