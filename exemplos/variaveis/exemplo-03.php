<?php

$nome = "Hcode";
$site = 'wwww.hcode.com.br';

$ano = 1990;

$salario = 5500.99;

$bloqueado = false;
/////////////////////////////////////////////

$frutas = array('laranja', 'banana', 'melão');

echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);

////////////////////////////////////////////

$arquivo = fopen(__DIR__.DIRECTORY_SEPARATOR."exemplo-03.php", "r");
//var_dump($arquivo);

$nulo = NULL;
$vazio = "";