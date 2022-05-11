<?php
include_once 'erro.php';


?>

<!doctype html>
<html lang="pt-br">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="./styles/index.css">
   <script src="./js/jquery-3.6.0.min.js" type="text/javascript"></script>
   <script src="./js/jquery.mask.min.js" type="text/javascript"></script>
   <script type="text/javascript">
      $(document).ready(function () {
         $("#cpf").mask("000.000.000-00");
      })
   </script>

</head>


<body>

   <form method="get" action="listarusuarios.php" name="listaUsuario">
      <div class=" container text-white">
         <div class="lista ">
            <button type="submit" class="btn btn-dark ">Clique aqui para ver a lista de usuários cadastrados</button>
         </div>

   </form>

   <!-- -------------------------código-------------------------- -->
   <form id="form-input" method="get" action="cadastro.php" name="formulario">
      <div id="card-input" class="card">
         <div class="card-body">
            <h2 class="card-title">Tela de cadastro</h2>
            <div class="card-content mt-5">
               <div class="row">
                  <div class="input-group col">
                     <input type="text" class="form-control" placeholder="Nome" name="firstName" id="primeiroNome">
                  </div>
                  <div class="input-group col">
                     <input type="text" class="form-control" placeholder="Sobrenome" name="lastName" id="segundoNome">
                  </div>
               </div>
               <div class="row">
                  <div class="input-group col">
                     <input type="text" class="form-control" placeholder="CPF" name="cpf" id="cpf">
                  </div>
                  <div class="input-group col">
                     <input type="date" class="form-control" placeholder="Data de nascimento" name="date"
                        id="dataDeNascimento">
                  </div>
               </div>
               <div class="row">
                  <div class="col">
                     <button id="btn" type="submit" class="btn btn-primary">Cadastrar</button name="btn">
                  </div>
               </div>

               <div class="row">
                  <div class="col">
                     <?php
                     if($erro){
                        echo "<div class='alert alert-danger' role='alert'>This is a primary alert—check it out!</div>";
                     };
                  ?>

                  </div>



               </div>


            </div>


         </div>
      </div>
   </form>
   </div>

   <!-- Optional JavaScript; choose one of the two! -->
   <!-- Option 1: Bootstrap Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"></script>
   <!-- Option 2: Separate Popper and Bootstrap JS -->
   <!--
         <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
         -->


</body>

</html>