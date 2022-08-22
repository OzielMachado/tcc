<?php
    include "connect.php";
    SESSION_START();
    $login = $_SESSION['login'];//email do usuário
    $senha_log = $_SESSION['password'];//password do usuário
    $sql = mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$login'");
    while($line = mysqli_fetch_array($sql)){
        $senha = $line['senha'];
        $nivel = $line['nivel'];
        $id = $line['id_user'];
    }
    
    if($senha_log == $senha && $nivel == 1){
        
        

    }else {
        header('location:index.php');
    }
?>