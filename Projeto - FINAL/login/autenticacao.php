<?php
    include '../acesso/conexao.php';

   if(empty($_POST['usuario']) || empty($_POST['senha']) ){
        header('Location: login.php');
        exit();
    }

    $usuario = mysqli_real_escape_string($db, $_POST['usuario']);
    $senha = mysqli_real_escape_string($db, $_POST['senha']);

    
    $busca = "SELECT usuario, senha FROM usuarios WHERE usuario = '$usuario' AND senha=md5('$senha')";
    $result = mysqli_query($db, $busca);
    $qtd_registros = mysqli_num_rows($result);

   if($qtd_registros == 1){
        session_start();
        $_SESSION['usuario'] = $usuario;
        header('Location: /projeto/index.php');
        exit();
    }

    else{  
        header('Location: login.php');    
        exit();
    }
?>