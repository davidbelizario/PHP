<?php

    SESSION_START();
    $login = isset($_POST["cxlogin"])?strtolower($_POST["cxlogin"]):"";
    $senha = isset($_POST["cxsenha"])?md5($_POST["cxsenha"]):"";
    
    include_once 'conexao.php';

    $log = mysqli_query($conn,"select *from tbfuncio where usuario= '$login' and senha = '$senha'") 
    or die(mysql_error());
   
    $linha = mysqli_fetch_array($log);


    if ($login == "" || $senha == ""){
        echo "Digite um usuario ou uma senha validas";
    }
    if ($login!=$linha["usuario"] || $senha != $linha["senha"]){
        echo "Digite um usuario ou uma senha validas";
    }

    if ($login==$linha["usuario"] && $senha == $linha["senha"]){

        $_SESSION["usuario"] = "David Belizario";
        echo "
            <script>
                window.location.href = '../menu.php';
            </script>";
    }
    else{
        echo "<script>
        alert('Acesso negado!');
            window.location.href = '../index.php';
        </script>";
    }


?>