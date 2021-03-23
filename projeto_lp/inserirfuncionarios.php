<?php

if($_POST['cxnome']!= "")
{
    include_once 'crud/conexao.php';

    $usuarioo = $_POST['cxusuario'];
    $senha = $_POST['cxsenhaa'];
    $nome = $_POST['cxnome'];
    $cpf = $_POST['cxcpf'];
    $bairro = $_POST['cxbairro'];
    $estado = $_POST['cxestado'];
    $cidade = $_POST['cxcidade'];
    $telefone = $_POST['cxtelefone'];
    $departamento = $_POST['cxdepartamento'];

    $sql = "insert into tbfuncio (usuario,senha,nome,cpf,bairro, estado, cidade, telefone, departamento) 
    values ('$usuarioo', '$senha', '$nome', '$cpf', '$bairro', '$estado', '$cidade', '$telefone', '$departamento')";

    $query = mysqli_query($conn, $sql);
    echo 'Dados cadastrados com sucesso';
}
else {
    echo 'Dados não cadastrados';
}

?>
<br>
<a href="funcionarios.php"> Voltar </a> 