<?php

$nome = 'Anderson';

function teste() {

	global $nome;

	echo $nome;
}

function teste2() {

	$nome = "Ricardo";
	echo $nome." agora no teste2";
}

teste();

echo "<br />";

teste2();

