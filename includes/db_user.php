<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$dataBaseName="db_user";
$mysqli = new mysqli($hostName, $userName, $password, $dataBaseName);
if (!$mysqli) {
    die('Não foi possível conectar: ' . mysql_error());
};

// conecta ao banco de dados
// $mysqli = mysql_pconnect($hostName, $userName, $password) or trigger_error(mysql_error(),E_USER_ERROR);
// // seleciona a base de dados em que vamos trabalhar
// mysql_select_db($dataBaseName, $mysqli);

?>