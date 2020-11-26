<?php 
    $db = mysqli_connect('localhost: 3306', 'root', 'usbw', 'projeto_final');
    mysqli_set_charset($db, 'utf8');
    
    if(!$db){
        echo '<h4> ERRO DE CONEXÃO COM O BANCO DE DADOS! </h4>';
    }
?>