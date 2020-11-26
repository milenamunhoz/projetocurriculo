<?php
    include '../acesso/conexao.php';

    $competencias = mysqli_real_escape_string($db, $_POST['comp_hab']);
       
    $insert = "INSERT INTO habilidades (competencias)".
                "values('$competencias')";

    $result = mysqli_query($db, $insert);

    if($result){
       echo '<h4> DADO CADASTRADO! </h4>';
    }
?>