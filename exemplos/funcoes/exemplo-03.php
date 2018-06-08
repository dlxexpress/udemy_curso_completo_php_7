<?php

function ola($texto = "mundo", $periodo="Bom Dia") {
	return "Ola $texto! $periodo!<br />";
}

echo ola('', "Bom Dia");
echo ola("Glaucio", "Boa Noite");
echo ola("João", "Boa Tarde");