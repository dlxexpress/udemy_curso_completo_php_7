<?php

function soma(float ...$valores):float {

	return array_sum($valores);

}

echo var_dump(soma(1,2,3));
echo "<br />";

echo soma(4,5,1);
echo "<br />";

echo soma(1.5, 3.2);
echo "<br />";