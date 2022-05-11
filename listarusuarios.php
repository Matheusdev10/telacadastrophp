

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários cadastrados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles/listarusuarios.css">

</head>

<body>
    
  <button><a href="index.php">Cadastrar novo usuário</a></button>  



 <?php
 include_once 'includes/db_user.php'; 





// -----------------------montagem da tabela-----------------------
$table  = '<table class="table table-success table-striped">';
$table .= '<thead>';
$table .= '<tr>';
$table .= '<td>Primeiro Nome</td>';
$table .= '<td>Segundo Nome</td>';
$table .= '<td>CPF</td>';
$table .= '<td>Data de Aniversário</td>';
$table .= '<td>Data de Cadastro</td>';
$table .= '<td>Data de Edição</td>';
$table .= '</tr>';
$table .= '</thead>';
$table .= '<tbody>';

// ------------------populando a tabela-----------------------
$results = $mysqli->query("SELECT * FROM users");
if ($results) {
    while ($row = mysqli_fetch_array($results)) {
        $firstName = $row["firstName"];
        $lastName = $row["lastName"];
        $cpf = $row["cpf"];
        $date = $row["date"];
        $dataCadastro = $row["dataCadastro"];
        $dataEdicao = $row["dataEdicao"];

        
        $table .= '<tr>';
        $table .= "<td>{$firstName}</td>";
        $table .= "<td>{$lastName}</td>";
        $table .= "<td>{$cpf}</td>";
        $table .= "<td>{$date}</td>";
        $table .= "<td>{$dataCadastro}</td>";
        $table .= "<td>{$dataEdicao}</td>";
        $table .= '</tr>';
    }
}





// ---------------------fechando tabela-------------------
$table .= '</tbody>';
$table .= '</table>';
echo $table;
                
?>


                 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
            
</body>
</html>