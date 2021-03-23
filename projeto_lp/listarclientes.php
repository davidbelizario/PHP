<?php

include_once 'crud/conexao.php';

$consulta = "select *from tbclientes";
$executar = mysqli_query($conn, $consulta);
while ($lin = mysqli_fetch_array($executar)) {
    ?>

    
    Profissão:  <input type="text" value="<?php echo $lin['profissao']; ?>" readonly> </br>
    RG:  <input type="text" value="<?php echo $lin['rg']; ?>" readonly> </br>
    Nome: <input type="text" value="<?php echo $lin['nome']; ?>" readonly> </br>
    CPF: <input type="text" value="<?php echo $lin['cpf']; ?>" readonly> </br>
    Bairro: <input type="text" value="<?php echo $lin['bairro']; ?>" readonly> </br>
    Estado: <input type="text" value="<?php echo $lin['estado']; ?>" readonly> </br>
    Cidade: <input type="text" value="<?php echo $lin['cidade']; ?>" readonly> <br>
    Telefone: <input type="text" value="<?php echo $lin['telefone']; ?>" readonly> </br>
    Genêro: <input type="text" value="<?php echo $lin['genero']; ?>" readonly> 
    <br>
    <br>
    <br>

    <?php } ?>

    <a href="cliente.php"> Voltar </a> <br>