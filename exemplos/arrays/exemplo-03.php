<?php

$pessoas = array();

array_push($pessoas, array(
	'nome' => "Anderson",
	'idade' => 31
));

array_push($pessoas, array(
	'nome' => "Regina",
	'idade' => 29
));

print_r($pessoas[1]['nome']);