<?php

$idade = 21;
$salario = 1000.30;
$divisao = 10/3;
$texto = "Olá mundo!";
$verdadeiro = true;
$falso = false;

var_dump(
    gettype($idade), // integer
    gettype($salario), // double
    gettype($divisao), // double
    gettype($texto), // string
    gettype($verdadeiro), // boolean
    gettype($falso) // boolean
);die;
