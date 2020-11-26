<?php
    include '../acesso/conexao.php';

    $consulta = 'SELECT * FROM formacao';
    $result = mysqli_query($db, $consulta);

    while($linha = mysqli_fetch_array($result)) {
        
        echo 'grau de escolaridade: ';
        echo $linha['grau_escolaridade'] . ' ';
        echo '<p>';
        echo 'nome do curso: ';
        echo $linha['nome_curso'] . ' ';
        echo '<p>';
        echo 'instituição: ';
        echo $linha['instituicao'] . ' ';    
        echo '<p>';
        echo 'duração: ';     
        echo $linha['duracao'] . ' ';
        echo '<p>';
        echo 'data de início: ';  
        echo $linha['dt_inicio'] . ' ';
        echo '<p>';
        echo 'data de conclusão: ';  
        echo $linha['dt_conclusao'] . ' ';
        echo '<p>';
        echo '<br> <br>';
               
    }
?>