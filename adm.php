<?php
    include "connect.php";
    SESSION_START();
    $login = $_SESSION['login'];//email do usuário
    $senha_log = $_SESSION['password'];//password do usuário
    $sql = mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$login'");
    while($line = mysqli_fetch_array($sql)){
        $senha = $line['senha'];
        $nivel = $line['nivel'];
    }
    
    if($senha_log == $senha && $nivel == 1){
        echo "E-mail: $login";
    }else {
        header('location:index.php');
    }
?>

<html>
    <head>
        <title>Antirransomware</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div>
            <h1>Bem vido a tela de Administrador</h1>
        </div>
    </body>
</html>