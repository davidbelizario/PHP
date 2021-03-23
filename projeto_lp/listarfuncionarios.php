<?php

include_once 'crud/conexao.php';

$consulta = "select *from tbfuncio";
$executar = mysqli_query($conn, $consulta);
while ($lin = mysqli_fetch_array($executar)) {
 ?>

    
    Usuario:  <input type="text" value="<?php echo $lin['usuario']; ?>" readonly> </br>
    Senha:  <input type="text" value="<?php echo $lin['senha']; ?>" readonly> </br>
    Nome: <input type="text" value="<?php echo $lin['nome']; ?>" readonly> </br>
    CPF: <input type="text" value="<?php echo $lin['cpf']; ?>" readonly> </br>
    Bairro: <input type="text" value="<?php echo $lin['bairro']; ?>" readonly> </br>
    Estado: <input type="text" value="<?php echo $lin['estado']; ?>" readonly> </br>
    Cidade: <input type="text" value="<?php echo $lin['cidade']; ?>" readonly> <br>
    Telefone: <input type="text" value="<?php echo $lin['telefone']; ?>" readonly> </br>
    Departamento: <input type="text" value="<?php echo $lin['departamento']; ?>" readonly> 
    <br>
    <br>
    <br>

    <?php } ?>

    <a href="funcionarios.php"> Voltar </a> <br>
    
