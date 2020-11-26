<?php
    session_start();
    include '/login/verificacao.php';
?>

<html>

    <head>
    <meta name="author" content="Milena Munhoz de Barros" />
        <link rel="stylesheet" type="text/css" href= "../css/home.css" />
        <link rel="stylesheet" type="text/css" href= "../css/menu.css" />
        <title>Habilidades</title>
    </head>

    <body>

        <p><h1>Habilidades e competências</h1>
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
         <div id="habilidades" class="infos">

             <h2>HABILIDADES E COMPETÊNCIAS</h2>
                <h4> Proatividade<br>
                     Liderança<br>
                     organização<br>
                     gerenciamento de tempo<br>
                     criatividade<br>
                     receptvidade em feedback<br> 
                     facilidade de aprendizagem<br><br>
                     Pacote Office completo<br>
                     redes sociais<br>
                     inglês avançado<br>
                     Adobe Photoshop<br>
                     programação e design de transmissões ao vivo
                </h4>
                <br>
                    
        </div>
        <hr>
       
        <h2>CADASTRO DE HABILIDADES</h2>    
          
            <div id="cadastro_habilidades" class="row">                
                <div class="card">
                    <form method="post" action="habilidades_processar.php">
                        <h4>
                        <p>digite suas competências na caixa de texto abaixo<span style="color: red">*</span></p>

                        <textarea name="comp_hab" rows="5" cols="50">Digite aqui</textarea>

                        <p> <input type="submit" value="Enviar dados"> </p>
                        <p> <input type="reset" value="Limpar"> </p>                        
                        </h4>
           
                    </form>
                </div> 
            </div>             
        <hr>
    </body>
</html>