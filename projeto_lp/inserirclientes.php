<?php

if($_POST['cxnome']!= "")
{
    include_once 'crud/conexao.php';

    $profissao = $_POST['cxprofissao'];
    $rg = $_POST['cxrg'];
    $nome = $_POST['cxnome'];
    $cpf = $_POST['cxcpf'];
    $bairro = $_POST['cxbairro'];
    $estado = $_POST['cxestado'];
    $cidade = $_POST['cxcidade'];
    $telefone = $_POST['cxtelefone'];
    $genero = $_POST['cxgenero'];

    $sql = "insert into tbclientes (profissao,rg,nome,cpf,bairro, estado, cidade, telefone, genero) 
    values ('$profissao', '$rg', '$nome', '$cpf', '$bairro', '$estado', '$cidade', '$telefone', '$genero')";

    $query = mysqli_query($conn, $sql);
    echo 'Dados cadastrados com sucesso';
}
else {
    echo 'Dados não cadastrados';
}
?>