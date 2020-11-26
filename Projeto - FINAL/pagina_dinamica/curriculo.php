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
        <title>Página inicial</title>
    </head>

    <body>
           
    <h1>Currículo dinâmico</h1>  
        
        <hr>

        <div id="menu" class="menu">
        
        <ul class="menu-list">
        <li> <a href="http://localhost/projeto/index.php">Home</a></li>
           <?php if($_SESSION['usuario']){?> 
           <li> <a href="http://localhost/projeto/sobre/sobre.php">Sobre</a></li>
           <li> <a href="http://localhost/projeto/habilidades/habilidades.php">Habilidades</a></li>
           <li><a href="http://localhost/projeto/formacao/formacao.php">Formação</a></li>
           <li> <a href="http://localhost/projeto/historico/historico.php">Histórico</a></li>
           <li> <a href="http://localhost/projeto/pagina_dinamica/curriculo.php">Currículo</a></li>
           <li><a href="http://localhost/projeto/login/logout.php">Logout</a>
           <?php } ?> 
           <?php if(!$_SESSION['usuario']){?> 
           <li> <a href="http://localhost/projeto/login/login.php">Login</a></li>
           <?php } ?>
        </ul>
        
      </div>
        <hr>

    <p><h2 id = "formularios">Milena Munhoz de Barros</h2></p>
    <hr>
        <div id="habilidades" class="infos">
        <div class="card">
            <h2>INFORMAÇÕES PESSOAIS</h2>
            <h4> 
            <?php
                include '../sobre/sobre_dinamico.php';
            ?>
            </h4>
            <br>
        </div>

        <hr>

        <div class="card">
            <h2>HABILIDADES E COMPETÊNCIAS</h2>
            <h4> 
            <?php
                include '../habilidades/habilidades_dinamico.php';
            ?>
            </h4>
            <br>
        </div>

        <hr>

        <div class="card">
            <h2>EXPERIÊNCIA PROFISSIONAL</h2>
            <h4> 
            <?php
                include '../historico/historico_dinamico.php';
            ?>
            </h4>
            <br>
        </div>

        <hr>

        <div class="card">
            <h2>FORMAÇÃO ACADÊMICA</h2>
            <h4> 
            <?php
                include '../formacao/formacao_dinamico.php';
            ?>
            </h4>
            <br>
        </div>

        <hr>

        </div>  
    </body>
</html>


