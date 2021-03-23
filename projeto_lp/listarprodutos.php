<?php

include_once 'crud/conexao.php';

$consulta = "select *from tbprodutos";
$executar = mysqli_query($conn, $consulta);
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
    
