<?php
    session_start();
    include '/login/verificacao.php';
?>
<html>
    <head>
    <meta charset="utf-8" />
        <meta name="author" content="Milena Munhoz de Barros" />
        <link rel="stylesheet" type="text/css" href= "../css/home.css" />
        <link rel="stylesheet" type="text/css" href= "../css/menu.css" />

        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script type="text/javascript" src="../javascript/helper.js"></script>
       <!-- <script type="text/javascript" src="../javascript/index.js"></script> -->
    </head>

    <body>

    <h1>Login</h1>       
        
        <hr>
        <form action="/projeto/login/autenticacao.php" method="post">

            <p>    
            <h4>usuário: <input type="text" name="usuario"></h4>
            </p>

            <p> 
            <h4>senha: <input type="password" name="senha"></h4>
            </p>

            <p>
            <h4><input type="submit" value="Entrar"></h4>
            </p>
        
        </form>
    </body>
</html>