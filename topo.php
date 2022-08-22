<img src="img/logo.png" class="logo">
<?php
    include "connect.php";
    SESSION_START();
    @$email = $_SESSION['login'];
    @$sql = mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$email'");
    while($line = mysqli_fetch_array($sql)){
        $nivel = $line['nivel'];
    }

    if(@$nivel == 1){
        echo "<a href=logout.php>Sair</a>";
        echo "<a href=adm.php>Ir para Adm</a>";
    } else if(@$nivel == ""){
        echo "<a href=login.php>Logar</a>";
        echo "<a href=form_cadastro.php>Cadastre-se</a>";
    } else {
        echo "<a href=logout.php>Sair</a>";
        echo "<a href=cliente.php>Ir para Cliente</a>";
    }
?>

