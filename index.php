<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadastro</title>
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="/css/style.css">
    <style>
        .container{
           display:flex;
           align-items: center;
           justify-content:center;
           position: absolute;
           top: 50%;
           left: 50%;
           margin-top: -100px;
           margin-left: -100px;
           line-height: 30px;
           background-color: blue;
           height: 100%;
           width: 100%;
           background-color: #f0f6fc;

    
        
    
        }
        .box{
            background-color: green;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="box">
        <form action="cadastro.php" method="get">

            Tela de cadastro:<br/>
                <input type="email" name="login" placeholder="Email"> <br/>
                <input type="password" name="senha" placeholder="Senha"> <br/>
                <input type="checkbox" placeholder="Lembrar"><br/>
                <input type="submit" value="Entrar">

</form>

        </div>
        
    </div>
</body>
</html>