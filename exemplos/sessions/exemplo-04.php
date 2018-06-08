<?php

session_id('ctrtq9evvmm570ek6bkf6l0db7');

require_once 'config.php';

session_regenerate_id();

echo session_id();

var_dump($_SESSION);