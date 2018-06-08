<?php

function soma(int ...$valores) {

	return array_sum($valores);

}

echo soma(1,2,3);
echo "<br />";

echo soma(4,5,1);
echo "<br />";

echo soma(1.5,'a');
echo "<br />";