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
        <title>Sobre mim</title>
    </head>

    <body>

        <p><h1>Sobre</h1>
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

        <br>
                <h2>INFORMAÇÕES PESSOAIS</h2>
                
                        <div id="sobre" class="table-wrapper">
                            <table class="fl-table">
                                <thead>
                                <tr>
                                    
                                    <th></th>
                                    <th>Nome</th>
                                    <th>Telefone</th>
                                    <th>E-mail</th>
                                    <th>LinkedIn</th>
                                    <th>Cidade</th>
                                    <th>Estado</th>
                                    
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                            
                                    <td><a href="../imagens/mi.jpeg" target="_blank"> <img src="../imagens/mi.jpeg" alt="Foto"  width="200" height="150"/></a></td>
                                    <td>Milena Munhoz de Barros</td>
                                    <td>(15)91234-1234</td>
                                    <td>barrosmilenaa@gmail.com</td>
                                    <td><a href="https://www.linkedin.com/in/milena-munhoz-de-barros-a64b431b6/" target="_blank">Perfil</a></td>
                                    <td>Sorocaba</td>
                                    <td>São Paulo</td>
                                </tr>
                               
                                <tbody>
                            </table>
                        </div>
                            <hr>
                        <h2>CADASTRO DE INFORMAÇÕES PESSOAIS</h2>
                       
                        <div id="cadastro_sobre" class="row">    
                            <div class="card">
                                <form method="post" action="sobre_processar.php" >
                                                  
                                    <p>
                                    <h4>nome completo: <span style="color: red">*</span>
                                    <input type="text" id="nome_completo" name="nome_completo"></h4>
                                    </p>

                                    <p>
                                    <h4>identificação: <span style="color: red">*</span>
                                    <?php
                                        include '../acesso/conexao.php';

                                        $consulta_identificacao = "SELECT * FROM sobre_identificacao";
                                        $result = mysqli_query($db, $consulta_identificacao);

                                        echo "<select name = 'identificacao'>";

                                           while($linha = mysqli_fetch_array($result)) {
                                                echo "<option value = '";
                                                echo $linha['id_identificacao'];
                                                echo "'>";
                                                echo $linha['identificacao'];
                                                echo "</option>";
                                           }

                                        echo "</select>";

                                        mysqli_close($db);
                                    ?>
                                    </p>
                                      
                                    <p>
                                    <h4>estado Civil: <span style="color: red">*</span>
                                    <?php
                                        include '../acesso/conexao.php';

                                        $consulta_estadocivil = "SELECT * FROM sobre_estadocivil";
                                        $result = mysqli_query($db, $consulta_estadocivil);

                                        echo "<select name = 'estado_civil'>";

                                           while($linha = mysqli_fetch_array($result)) {
                                                echo "<option value = '";
                                                echo $linha['id_estadocivil'];
                                                echo "'>";
                                                echo $linha['estado_civil'];
                                                echo "</option>";
                                           }

                                        echo "</select>";

                                        mysqli_close($db);
                                    ?>
                                                 
                                    <h4>telefone: <span style="color: red">*</span>
                                    <input type="text" id="telefone" name="telefone"></h4> 
                                    </p>

                                    <p>
                                    <h4>e-mail: <span style="color: red">*</span>
                                    <input type="text" id="email" name="email"></h4>   
                                    </p>

                                    <p>
                                    <h4>cidade: <span style="color: red">*</span>
                                    <input type="text" id="cidade" name="cidade"></h4>
                                    </p>

                                    <p>
                                    <h4>estado: <span style="color: red">*</span>

                                    <?php
                                        include '../acesso/conexao.php';

                                        $consulta_estado = "SELECT * FROM sobre_estado";
                                        $result = mysqli_query($db, $consulta_estado);

                                        echo "<select name = 'estado'>";

                                           while($linha = mysqli_fetch_array($result)) {
                                                echo "<option value = '";
                                                echo $linha['id_estado'];
                                                echo "'>";
                                                echo $linha['estados'];
                                                echo "</option>";
                                           }

                                        echo "</select>";

                                        mysqli_close($db);
                                    ?>

                                    <br><br>
                                        
                            <p><input type="submit" value="Enviar dados"></p>
                            <p><input type="reset" value="Limpar todos os campos"></p>

                            </form>
                        </div>
            <hr>
    </body>
</html>