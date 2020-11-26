<?php
    include '../acesso/conexao.php';

    $consulta = 'SELECT * FROM historico';
    $result = mysqli_query($db, $consulta);

    while($linha = mysqli_fetch_array($result)) {
        
        echo 'instituição: ';
        echo $linha['instituicao'] . ' ';
        echo '<p>';
        echo 'função: ';
        echo $linha['funcao'] . ' ';
        echo '<p>';
        echo 'descrição: ';
        echo $linha['descricao'] . ' ';    
        echo '<p>';
        echo 'situação: ';     
        echo $linha['situacao'] . ' ';
        echo '<p>';
        echo 'data de admissão: ';  
        echo $linha['dt_admissao'] . ' ';
        echo '<p>';
        echo 'data de demissão: ';  
        echo $linha['dt_demissao'] . ' ';
        echo '<p>';
        echo '<p>';
               
    }
?>