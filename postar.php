<?php
    include "connect.php";
    date_default_timezone_set('America/Sao_Paulo');
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
        $titulo = $_POST['titulo'];
        $foto = $_FILES['foto']['name'];
        $tipo = $_FILES['foto']['type'];
        $conteudo = $_POST['conteudo'];
        include "substituicao.php";
        
        $registro = false;
        if(!empty($titulo) && !empty($foto) && !empty($conteudo)){
            $registro = true;
        } else {
            echo "<script>window.history.go(-1);</script>";
        }
    }else {
        header('location:index.php');
    }
?>