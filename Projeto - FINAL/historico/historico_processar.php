<?php
    include '../acesso/conexao.php';

    $instituicao = mysqli_real_escape_string($db, $_POST['instituicao']);
    $funcao = mysqli_real_escape_string($db, $_POST['funcao']);
    $descricao = mysqli_real_escape_string($db, $_POST['descricao']);
    $situacao = mysqli_real_escape_string($db, $_POST['situacao']);
    $dt_admissao = mysqli_real_escape_string($db, $_POST['dt_admissao']);
    $dt_demissao = mysqli_real_escape_string($db, $_POST['dt_demissao']);

    $insert = "INSERT INTO historico (instituicao, funcao, descricao, situacao, dt_admissao, dt_demissao) ".
                "values('$instituicao', '$funcao', '$descricao', '$situacao', '$dt_admissao', '$dt_demissao')";
    $result = mysqli_query($db, $insert);

    if($result){
        echo '<h4> DADO CADASTRADO! </h4>';
    }
    
?>