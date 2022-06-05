<?php

include '../aula04/Curso.php';
include '../aula04/Professor.php';
include '../aula04/Disciplina.php';

$cursoPHP = new Curso();
$cursoPHP->nome = 'PHP';
$cursoPHP->descricao = 'Aulas de introdução ao PHP';
$cursoPHP->cargaHoraria = 90;

$professor1 = new Professor();
$professor1->nome = 'Alessandro Feitoza';
$professor1->cpf = '111.111.111-11';
$professor1->salario = 3500.00;

$disciplina1 = new Disciplina();
$disciplina1->nome = 'Programação Orientada a Objetos';
$disciplina1->professor = $professor1;
$disciplina1->cargaHoraria = 5;