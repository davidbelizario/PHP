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
    <title>Insercao de Produtos</title>
</head>
<body>
<form action = "inserirprodutos.php" method="POST">
<fieldset>
     Nome do produto:</br>
    <input type="text" name="cxnomeprod"> </br>
     cor:</br>
    <input type="text" name="cxcor"> </br>
    material: </br>
    <input type="text" name="cxmaterial"> </br>
    quantidade: </br>
    <input type="text" name="cxquantidade"> </br>
    preço: </br>
    <input type="text" name="cxpreco"> </br>
    genero: </br>
    <input type="text" name="cxgenero"> </br>
    marca: </br>
    <input type="text" name="cxmarca"> </br>
    
    <input type="submit" value="Enviar">
        </fieldset>
        </form>

<form action = "buscarproduto.php" method="POST">
    Digite o nome do produto:
    <input type="text" name="cxbuscanome">
    <button type = "submit"> Buscar </button>
        </form>





        <a href="listarprodutos.php"> Listar Produtos </a> <br>
        <br>
        <a href="menu.php"> Voltar </a> <br>
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