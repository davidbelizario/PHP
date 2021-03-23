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
    <title>Sapataria da Vila</title>
</head>
<body>
<h1>Sapataria da Vila</h1>
    <br>
<h4>Clique nos links abaixo para ter acesso ao seus respectivos banco de dados: </h4>
   <br>
<a href="funcionarios.php"> Funcionarios </a> <br>
<a href="cliente.php"> Clientes </a> <br>
<a href="produtos.php"> Produtos </a>

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