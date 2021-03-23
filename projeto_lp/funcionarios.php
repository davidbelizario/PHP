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
    <title>Dados Funcionarios</title>
</head>
<body>
    <h1>Inserção de dados:</h1>
    <form action = "inserirfuncionarios.php" method="POST">
<fieldset>
    Usuario: </br>
    <input type="text" name="cxusuario"> </br>
    Senha: </br>
    <input type="text" name="cxsenhaa"> </br>
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
    Departamento: </br>
    <input type="text" name="cxdepartamento"> </br>
    
    <input type="submit" value="Enviar">
        </fieldset>
        </form>

        <form action = "buscarfuncionario.php" method="POST">
    Digite o nome do funcionario:
    <input type="text" name="cxbuscanome">
    <button type = "submit"> Buscar </button>
        </form>



 <a href="listarfuncionarios.php"> Listar Funcionarios </a> <br>

  
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