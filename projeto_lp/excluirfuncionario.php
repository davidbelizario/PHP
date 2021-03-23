<?php


    include_once 'crud/conexao.php';

    $cod = $_GET["id"];

    $excluir = "delete from tbfuncio where usuario = '$cod'";
    $executar = mysqli_query($conn, $excluir);
    
?>

<a href="funcionarios.php"> Voltar </a> <br>
    