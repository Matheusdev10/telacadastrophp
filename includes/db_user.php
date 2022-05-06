<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dataBaseName="db_user";
$mysqli = new mysqli($hostName, $userName, $password, $dataBaseName);
if (!$mysqli) {
    die('Não foi possível conectar: ' . mysql_error());
};

?>