<?php
    include '../acesso/conexao.php';

    $nome = mysqli_real_escape_string($db, $_POST['nome_completo']);
    $identificacao = mysqli_real_escape_string($db, $_POST['identificacao']);
    $estado_civil =mysqli_real_escape_string($db, $_POST['estado_civil']);
    $telefone = mysqli_real_escape_string($db, $_POST['telefone']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $cidade = mysqli_real_escape_string($db, $_POST['cidade']);
    $estado = mysqli_real_escape_string($db, $_POST['estado']);
    
    $insert = "INSERT INTO sobre (nome, telefone, email, cidade, estado, estado_civil, identificacao) ".
                "values('$nome', '$telefone', '$email', '$cidade', $estado, '$estado_civil', '$identificacao')";
    $result = mysqli_query($db, $insert);

    if($result){
       echo '<h4> DADO CADASTRADO! </h4>';
    }
    
?>