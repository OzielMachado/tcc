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
        $id_user = $line['id_user'];
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

        $sql = mysqli_query($link, "SELECT * FROM tb_artigo ORDER BY id_artigo DESC LIMIT 1");

        while($line = mysqli_fetch_array($sql)){
            @$id = $line['id_artigo'];
        }
        
        if($registro) {
            @$id += 1;
            $pasta = "metodos/metodo$id";
            if(file_exists($pasta)){
                // echo "Pasta $pasta já existe";
            } else{
                mkdir($pasta, 0777);
            }
            $dt = date('Y-m-d');
            $hr = date('H:m:s');
            $page = 2;
            mysqli_query($link, "INSERT INTO tb_artigo (titulo, imagem, texto, dt, hr, `page`, id_user) VALUES ('$titulo', '$foto', '$conteudo', '$dt', '$hr', '$page', '$id_user')");
            move_uploaded_file($_FILES['foto']['tmp_name'], $pasta."/".$foto);
            header('location:form_metodos.php');
        } else {
            echo "Não foi possível cadastrar esse conteúdo.";
            echo "<a href='form_postar.php'>Voltar ao Formulário</a>";
        }


    }else {
        header('location:index.php');
    }
?>