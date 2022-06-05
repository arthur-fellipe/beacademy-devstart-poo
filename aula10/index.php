<?php

include 'Curso.php';
include 'Professor.php';
include 'Disciplina.php';

$cursoPHP = new Curso('PHP', 'Aulas de introdução ao PHP', 90);

$professor1 = new Professor('Alessandro Feitoza', '111.111.111-11', 3500.00);

$disciplina1 = new Disciplina('Programação Orientada a Objetos', $professor1, 5);