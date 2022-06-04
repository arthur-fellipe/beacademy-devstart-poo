<?php

include 'Curso.php';
include 'Professor.php';
include 'Disciplina.php';

$cursoPHP = new Curso();
$cursoPHP->setNome('PHP');
$cursoPHP->setDescricao('Aulas de introdução ao PHP');
$cursoPHP->setCargaHoraria(90);

$professor1 = new Professor();
$professor1->setNome('Alessandro Feitoza');
$professor1->setCpf('111.111.111-11');
$professor1->setSalario(3500.00);

$disciplina1 = new Disciplina();
$disciplina1->setNome('Programação Orientada a Objetos');
$disciplina1->setProfessor($professor);
$disciplina1->setCargaHoraria(5);