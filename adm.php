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
            <h1>Usuário logado como: <?php echo $login;?></h1>
            <a href="index.php">Ir para Home</a> | <a href="form_postar.php">Criar uma postagem</a> | <a href="form_metodos.php">Alterar métodos de proteção</a> | <a href="logout.php">Sair</a>
            <img src="<?php echo "users/user$id/$foto";?>">
        </div>
    </body>
</html>