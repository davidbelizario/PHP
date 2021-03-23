<?php

include_once 'crud/conexao.php';
$nome = $_POST["cxbuscanome"];
$consulta = "select *from tbfuncio where nome LIKE '%$nome%'";
$executar = mysqli_query($conn, $consulta);
$resultado = mysqli_num_rows($executar);
if($resultado != 0){
    echo "<script>alert('Cliente Localizado') </script>";
}
else 
{
    echo "<script>alert('Cliente não Localizado')  </script>";
}
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
    <a href = "excluirfuncionario.php ?id= <?php echo $lin['usuario'];?> "> excluir </a>
    <br>

    <a href="funcionarios.php"> Voltar </a> <br>
    
