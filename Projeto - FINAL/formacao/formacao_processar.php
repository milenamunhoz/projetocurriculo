<?php
    include '../acesso/conexao.php';

    $grau_escolaridade = mysqli_real_escape_string($db, $_POST['grau_escolaridade']);
    $nome_curso = mysqli_real_escape_string($db, $_POST['nome_curso']);
    $instituicao = mysqli_real_escape_string($db, $_POST['instituicao']);
    $duracao = mysqli_real_escape_string($db, $_POST['duracao']);
    $dt_inicio = mysqli_real_escape_string($db, $_POST['dt_inicio']);
    $dt_conclusao = mysqli_real_escape_string($db, $_POST['dt_conclusao']);

    $insert = "INSERT INTO formacao (grau_escolaridade, nome_curso, instituicao, duracao, dt_inicio, dt_conclusao) ".
                "values('$grau_escolaridade', '$nome_curso', '$instituicao', '$duracao', '$dt_inicio', '$dt_conclusao')";
    $result = mysqli_query($db, $insert);

    if($result){
        echo '<h4> DADO CADASTRADO! </h4>';
    }
    
?>