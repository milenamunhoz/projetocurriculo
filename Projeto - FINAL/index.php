<!-- 
                    ENTREGA FINAL DO PROJETO
    MILENA MUNHOZ DE BARROS - RA: 84846 - ENGENHARIA DA COMPUTAÇÃO
 -->

<html>

    <head>
        <meta charset="utf-8" />
        <meta name="author" content="Milena Munhoz de Barros" />
        <link rel="stylesheet" type="text/css" href= "css/home.css" />
        <link rel="stylesheet" type="text/css" href= "css/menu.css" />
        <title>Página inicial</title>
    </head>

    <body>
      
        <h1>Apresentação pessoal</h1>  
        
        <hr>
        <!-- <?php 
            session_start(); print_r($_SESSION);
        ?> -->

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
        
        <h2>MILENA MUNHOZ DE BARROS</h2>
              
        <div id="apresentacao" class="infos">
           
        <h4>
        <a href="imagens/mi.jpeg" target="_blank"> <img src="imagens/mi.jpeg" alt="Foto"  width="470" height="350"/></a>
        <p>
            Estudante de Engenharia da Computação, cursando o 7º semestre.<br>
            trabalhou como voluntária na organização de alguns projetos da Universidade de Sorocaba. <br>
            <br>todos os detalhes de histórico profissional, formação acadêmica e habilidades e competências estão em suas devidas páginas.
        </p>
        </h4>

        </div>

        <hr>
    </body>
</html>


