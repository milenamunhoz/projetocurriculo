<?php
    include '../acesso/conexao.php';

    $consulta = 'SELECT * FROM habilidades';
    $result = mysqli_query($db, $consulta);

    while($linha = mysqli_fetch_array($result)) {
        
        echo 'descrição: ';
        echo '<p>';
        echo $linha['competencias'] . ' '; 
        echo '<p>';    
        echo '<p>';
        
    }
?>