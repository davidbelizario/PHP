<?php

include_once 'crud/conexao.php';
$nome = $_POST["cxbuscanome"];
$consulta = "select *from tbprodutos where nomeprod LIKE '%$nome%'";
$executar = mysqli_query($conn, $consulta);
$resultado = mysqli_num_rows($executar);

if($resultado != 0){
    echo "<script>alert('Cliente Localizado') </script>";
}
else 
{
    echo "<script>alert('Cliente Localizado')  </script>";
}
while ($lin = mysqli_fetch_array($executar)) {
 ?>

    
    Nome do produto:  <input type="text" value="<?php echo $lin['nomeprod']; ?>" readonly> </br>
    cor:  <input type="text" value="<?php echo $lin['cor']; ?>" readonly> </br>
    material: <input type="text" value="<?php echo $lin['material']; ?>" readonly> </br>
    quantidade: <input type="text" value="<?php echo $lin['quantidade']; ?>" readonly> </br>
    preco: <input type="text" value="<?php echo $lin['preco']; ?>" readonly> </br>
    genero: <input type="text" value="<?php echo $lin['genero']; ?>" readonly> </br>
    marca: <input type="text" value="<?php echo $lin['marca']; ?>" readonly> <br>
    <br>
    <br>
    <br>

    <?php } ?>

    <a href="produtos.php"> Voltar </a> <br>