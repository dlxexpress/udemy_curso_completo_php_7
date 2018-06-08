<?php

$json = '[{"nome":"Anderson","idade":31},{"nome":"Regina","idade":29}]';

$data = json_decode($json, true);

var_dump($data);