

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de usuários cadastrados</title>
</head>
<style>
    button:hover{
        
        display: flex;
        justify-content:flex-end;
        background-color: black;

    }
    button a{
        text-decoration: none;
        color: red;    
    }
</style>
<body>
    
  <button><a href="index.php">Cadastrar novo usuário</a></button>  

 <table>
     <tbody>
         <tr>
             <td>
                 firstName
             </td>
             <td>
                 lastName
             </td>
             <td>
                 cpf
             </td>
             <td>
                 date
             </td>
         </tr>
         <tr> 
             <?php
             include_once 'includes/db_user.php';

             $result = $mysqli->query("SELECT * FROM users");
             if($result){
                 while($row = mysqli_fetch_array($result)){
                     $firstName = $row["firstName"];
                     $lastName = $row["lastName"];
                     $cpf = $row["cpf"];
                     $date = $row["date"];
                     echo "firstName: ".$firstName."<br/>";
                     echo "lastName: ".$lastName."<br/>";
                     echo "cpf: ".$cpf."<br/>";
                     echo "date: ".$date."<br/>";


                 }
             } 
             
         ?>
         </tr>
   
     </tbody>
 </table>
</body>
</html>