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
        <title>Formação</title>
    </head>

    <body>
        
        <div id="cabecalho" class="header">
          
            
                  
        </div>
        <h1>Formação acadêmica</h1>  
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

    <p><h2>FORMAÇÃO ACADÊMICA</h2>

        <ol>

        <p><h3><li><dt>Escola Estadual Senador Vergueiro</dt></h3></li>
                
                <h4>Ensino médio completo
                <br>Conclusão em dezembro de 2013</h4>

      <p><h3><li>Serviço Nacional de Aprendizagem Comercial - SENAC</h3></li>
                <h4>Curso de Inglês Avançado e Conversação
                <br>Conclusão em 2013</h4>

      <p><h3><li>Universidade de Sorocaba - UNISO</h3></li>
                 <h4>Bacharel em Engenharia da Computação
                <br>Conclusão em dezembro de 2021</h4>

                <p>&nbsp;
                </ol>      
    </div>

        <hr>

        <h2>CADASTRO DO HISTÓRICO ACADÊMICO</h2>
       
            <div id="cadastro_formacao" class="row">    
                <div class="card">
                    <form action="formacao_processar.php" method="post">

                    <p>
                    <h4> grau de escolaridade: <span style="color: red">*</span>
                        <?php
                            include '../acesso/conexao.php';

                            $consulta_grau = "SELECT * FROM formacao_grau";
                            $result = mysqli_query($db, $consulta_grau);

                            echo "<select name = 'grau_escolaridade'>";

                            while($linha = mysqli_fetch_array($result)) {
                                echo "<option value = '";
                                echo $linha['id_grau'];
                                echo "'>";
                                echo $linha['grau_escolaridade'];
                                echo "</option>";
                            }

                            echo "</select>";

                            mysqli_close($db);
                            ?>
                        </p>
        
                    <p>
                    <h4>nome do curso: <span style="color: red">*</span>
                    <input type="text" id="nome_curso" name="nome_curso"></h4>   
                    </p>

                    <p>
                    <h4>instituição: <span style="color: red">*</span>
                    <input type="text" id="instituicao" name="instituicao"></h4>
                    </p>

                    <p>
                    <h4> duração do curso: <span style="color: red">*</span>
                    <?php
                        include '../acesso/conexao.php';

                        $consulta_duracao = "SELECT * FROM formacao_duracao";
                        $result = mysqli_query($db, $consulta_duracao);

                        echo "<select name = 'duracao'>";

                        while($linha = mysqli_fetch_array($result)) {
                            echo "<option value = '";
                            echo $linha['id_duracao'];
                            echo "'>";
                            echo $linha['duracao'];
                            echo "</option>";
                        }

                        echo "</select>";

                        mysqli_close($db);
                        ?>
                    </p>

                    <p>
                    <h4>data de início: <span style="color: red">*</span>
                    <input type="date" id="dt_inicio" name="dt_inicio"></h4> 
                    </p>

                    <p>
                    <h4>data de conclusão: <span style="color: red">*</span>
                    <input type="date" id="dt_conclusao" name="dt_conclusao"></h4> 
                    <p>
           
                    <h4><p><input type="submit" value="Enviar dados"> </p>
                    <p><input type="reset" value="Limpar todos os campos"> </p></h4>

                    </form>
                <hr>
    </body>
</html>
