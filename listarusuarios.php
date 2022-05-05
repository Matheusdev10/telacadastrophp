<!-- salvando dados no banco 
$result = $mysqli->query("SELECT * FROM users");
if($result){
    while($row = mysqli_fetch_array($result)){
        $firstName = $row["firstName"];
        $lastName = $row["lastName"];
        echo "firstName: ".$firstName."<br/>";
        echo "lastName: ".$lastName."<br/>";
    }
} -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    listagem de usuarios
    <a href="index.php">Cadastrar novo usuário</a>
</body>
</html>