
<!-- inserindo dados no banco mysql -->
<!-- INSERT INTO <nome_tabela> (coluna1, coluna2, ...., colunaN)
VALUES
(valor_coluna1, valor_coluna2, ..., valor_colunaN) -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<link rel="stylesheet" href="./styles/cadastro.css">
<body>
    
</body>
</html>

<?php

// conectando com o banco
include_once 'includes/db_user.php';

include_once 'erro.php';


// pegando variaveis do html
$firstName = isset($_GET['firstName']) ? $_GET['firstName']: null;
$lastName = isset($_GET['lastName']) ? $_GET['lastName']: null;
$cpf = isset($_GET['cpf']) ? $_GET['cpf']: null;
$date = isset($_GET['date']) ? $_GET['date']: null;



if($firstName == "" || $cpf == ""){
// header("Location: index.php");
$erro = '<script>alert("nome e cpf são campos obrigatórios");</script>';

}else{
$dataCadasto = date ('d/m/Y');
$query = "INSERT INTO users (firstName, lastName, cpf, date, dataCadastro) VALUES ('$firstName', '$lastName', '$cpf', '$date', '$dataCadastro');";
$result = $mysqli->query($query);
header("Location: listarusuarios.php");
}

// }



// salvando dados no banco 
// mysqli Executa uma consulta no banco de dados




// redirecionando para a tela


// query params php ( passagem de parametros ( passar uma varivel de um arquivo para outro))
?>
