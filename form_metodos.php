<?php
    include "connect.php";
    SESSION_START();
    $login = $_SESSION['login'];//email do usuário
    $senha_log = $_SESSION['password'];//password do usuário
    $sql = mysqli_query($link, "SELECT * FROM tb_user WHERE email = '$login'");
    while($line = mysqli_fetch_array($sql)){
        $senha = $line['senha'];
        $nivel = $line['nivel'];
        $foto = $line['foto'];
        $id = $line['id_user'];
    }
    
    if($senha_log == $senha && $nivel == 1){
        
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
            <h1>Criar Métodos de Proteção
            </h1>
            <form action="postar.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="titulo" placeholder="Digite o título da postagem">
                <input type="file" name="foto">
                <textarea name="conteudo" placeholder="Digite aqui o conteúdo..."></textarea>
                <div>
                    <input type="submit" value="Publicar">
                    <input type="reset" value="Limpar">
                </div>
            </form>

            <div>
                <a href="index.php">&larr; Home</a>
                <a href="form_postar.php">Postar Artigo &rarr;</a>
            </div>
        </div>
    </body>
</html>