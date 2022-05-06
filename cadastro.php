
<!-- inserindo dados no banco mysql -->
<!-- INSERT INTO <nome_tabela> (coluna1, coluna2, ...., colunaN)
VALUES
(valor_coluna1, valor_coluna2, ..., valor_colunaN) -->



<?php
// conectando com o banco
include_once 'includes/db_user.php';


// pegando variaveis do html
$firstName = isset($_GET['firstName']) ? $_GET['firstName']: null;
$lastName = isset($_GET['lastName']) ? $_GET['lastName']: null;
$cpf = isset($_GET['cpf']) ? $_GET['cpf']: null;
$date = isset($_GET['date']) ? $_GET['date']: null;


// salvando dados no banco 
// mysqli Executa uma consulta no banco de dados
$query = "INSERT INTO users (firstName, lastName, cpf, date) VALUES ('$firstName', '$lastName', '$cpf', '$date');";
$result = $mysqli->query($query);



// redirecionando para a tela

header("Location: listarusuarios.php")


// echo "$firstName, $lastName, $cpf, $date";


?>
