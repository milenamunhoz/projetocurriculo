<?php
    session_start();
    include '/login/verificacao.php';
?>

<html>
    <head>
    <meta name="author" content="Milena Munhoz de Barros" />
        <link rel="stylesheet" type="text/css" href= "../css/home.css" />
        <link rel="stylesheet" type="text/css" href= "../css/menu.css" />
        <title>Histórico</title>
    </head>

    <body>

        <p><h1>Histórico profissional</h1>
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

                <div id="formacao" class="infos">
                    <h2>HISTÓRICO PROFISSIONAL</h2>
                        <dl>
                         <p><h3>Trabalho voluntário</h3>
                        
                            <p><h3><dt>III Encontro de Biomedicina de Sorocaba - 2020</h3></dt>
                            <dd><h4>organização, programação, design e transmissão da live do evento, para todo o Brasil. </h4></dd>              
                
                                 <p>&nbsp;
                        </dl>
                    
                </div>

                <hr>
                <h2>CADASTRO DO HISTÓRICO PROFISSIONAL</h2>

                <div id="cadastro_historico" class="row">    
                    <div class="card">
                        <form action="historico_processar.php" method="post">

                        <p>
                        <h4>instituição: <span style="color: red">*</span>
                        <input type="text" id="instituicao" name="instituicao"></h4> 
                        </p>

                        <p>
                        <h4>função exercida: <span style="color: red">*</span>
                        <input type="text" id="funcao" name="funcao"></h4> 
                        </p>     
                        
                        <p>
                        <h4>descrição sobre o cargo/função: <span style="color: red">*</span>
                        <p><textarea name="descricao" rows="5" cols="50">Digite aqui as observações e informações que deseja</textarea></p>
                        </p>
                        </h4>

                        <p>
                        <h4> situação: <span style="color: red">*</span>
                        <?php
                            include '../acesso/conexao.php';

                            $consulta_situacao = "SELECT * FROM historico_situacao";
                            $result = mysqli_query($db, $consulta_situacao);

                            echo "<select name = 'situacao'>";

                            while($linha = mysqli_fetch_array($result)) {
                                echo "<option value = '";
                                echo $linha['id_situacao'];
                                echo "'>";
                                echo $linha['situacao'];
                                echo "</option>";
                            }

                            echo "</select>";

                            mysqli_close($db);
                            ?>
                      
                        <p>
                        <h4>data de admissão: <span style="color: red">*</span>
                        <input type="date" id="dt_admissao" name="dt_admissao"></h4> 
                        </p>

                        <p>
                        <h4>data de demissão: <span style="color: red">*</span>
                        <input type="date" id="dt_demissao" name="dt_demissao"></h4> 
                        </p>
       
                        <p><h4><input type="submit" value="Enviar dados"></p>
                        <p><input type="reset" value="Limpar todos os campos"></h4></p>
        
                        </form>
                    <hr>
    </body>
</html>