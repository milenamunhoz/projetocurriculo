<?php
    include '../acesso/conexao.php';

    $consulta = 'SELECT * FROM sobre';
    $result = mysqli_query($db, $consulta);

    while($linha = mysqli_fetch_array($result)) {
        
        echo 'nome: ';
        echo $linha['nome'] . ' ';
        echo '<p>';
        echo 'identificação: ';
        echo $linha['identificacao'] . ' ';
        echo '<p>';
        echo 'estado civil: ';
        echo $linha['estado_civil'] . ' ';    
        echo '<p>';
        echo 'telefone: ';     
        echo $linha['telefone'] . ' ';
        echo '<p>';
        echo 'email: ';  
        echo $linha['email'] . ' ';
        echo '<p>';
        echo 'cidade: ';  
        echo $linha['cidade'] . ' ';
        echo '<p>';
        echo 'estado: ';  
        echo $linha['estado'] . ' ';     
        echo '<p>';
        echo '<p>'; 
        
    }
?>