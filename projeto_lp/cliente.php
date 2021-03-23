<?php
    SESSION_START();
        if($_SESSION["usuario"]){
            $nomeusu = $_SESSION["usuario"];
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Clientes</title>
</head>
<body>
<h1>Inserção de dados dos clientes:</h1>
    <form action = "inserirclientes.php" method="POST">
<fieldset>
     Profissao:</br>
    <input type="text" name="cxprofissao"> </br>
     RG:</br>
    <input type="text" name="cxrg"> </br>
    Nome: </br>
    <input type="text" name="cxnome"> </br>
    CPF: </br>
    <input type="text" name="cxcpf"> </br>
    Bairro: </br>
    <input type="text" name="cxbairro"> </br>
    Estado: </br>
    <input type="text" name="cxestado"> </br>
    Cidade: </br>
    <input type="text" name="cxcidade"> </br>
    Telefone: </br>
    <input type="text" name="cxtelefone"> </br>
    Genêro: </br>
    <input type="text" name="cxgenero"> </br>
    
    <input type="submit" value="Enviar">
        </fieldset>
        </form>

        
<form action = "buscarcliente.php" method="POST">
    Digite o nome do cliente:
    <input type="text" name="cxbuscanome">
    <button type = "submit"> Buscar </button>
        </form>


        <a href="listarclientes.php"> Listar Clientes </a> <br>
        <br>
        <a href="menu.php"> Menu </a> <br>
</body>
</html>

<?php
        }
        else
        {
            echo "<script>
            window.location.href = 'index.php';
            </script> ";
        }
?>