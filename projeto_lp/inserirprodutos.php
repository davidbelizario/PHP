<?php

if($_POST['cxnomeprod']!= "")
{
    include_once 'crud/conexao.php';

    $nomeprod = $_POST['cxnomeprod'];
    $cor = $_POST['cxcor'];
    $material = $_POST['cxmaterial'];
    $quantidade = $_POST['cxquantidade'];
    $preco = $_POST['cxpreco'];
    $genero = $_POST['cxgenero'];
    $marca = $_POST['cxmarca'];
    
    $sql = "insert into tbprodutos (nomeprod,cor,material,quantidade,preco, genero, marca) 
    values ('$nomeprod', '$cor', '$material', '$quantidade', '$preco', '$genero', '$marca')";

    $query = mysqli_query($conn, $sql);
    echo 'Dados cadastrados com sucesso';
}
else {
    echo 'Dados não cadastrados';
}
?>