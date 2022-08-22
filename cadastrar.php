<?php
    // Arquivo de cadastro

    //Incluindo o arquivo de conexão
    include "connect.php";
    date_default_timezone_set('America/Sao_Paulo');

    //Pegando os valores do formulario e colocando em variáveis
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $resenha = md5($_POST['repetesenha']);
    $lembrete = $_POST['lembrete'];
    $foto = $_FILES['foto']['name'];
    $tipo = $_FILES['foto']['type'];

    //Validando informações do formulário antes de cadastrar
    $registro = false;
    if(!empty($nome) && !empty($email) && !empty($senha) && !empty($lembrete) && !empty($foto)){
        if($senha != $resenha){
            echo "<script>alert('Senhas diferentes'); window.history.go(-1);</script>";
        } else{
            $registro = true;
        }
    } else {
        echo "<script>alert('É necessário preencher todos os campos'); window.history.go(-1);</script>";
    }

    //Fazendo uma consulta para pegar o id do último usuário cadastrado
    $sql = mysqli_query($link, "SELECT * FROM tb_user ORDER BY id_user DESC LIMIT 1");
    while($line = mysqli_fetch_array($sql)){
        $id = $line['id_user'];
        $email_user = $line['email'];
    }

    //Criando a pasta para o novo usuário se ela não existir
    $id = $id + 1;
    $pasta = "user".$id;
    if(file_exists("users/".$pasta)){
        //echo "<script>alert('Essa pasta já existe');</script>";
        //rmdir($pasta);
    }else{
        mkdir("users/".$pasta, 0777);
        //echo "<script>alert('A pasta ".$pasta." foi criada com sucesso!');</script>";
    }

    //Substituindo caracteres indesejados
    include "substituicao.php"; 

    //Verificando se o arquivo é uma imagem e colocando na pasta do usuário
    $formatos = array(1=>'image/png', 2=>'image/jpeg', 3=>'image/jpg', 4=>'image/gif');
    $teste = array_search($tipo, $formatos);
    if($teste){
        move_uploaded_file($_FILES['foto']['tmp_name'], "users/".$pasta."/".$foto);
    } else {
        echo "<script>alert('Imagem inválida');</script>";
    }

    //Pegando data e hora do computador
    $dt = date('Y-m-d');
    $hr = date('H:i:s');

    //Cadastrando o novo usuário e o direcionando para o home
    if($registro && $email != $email_user){
        mysqli_query($link, "INSERT INTO tb_user (nome, email, senha, lembrete, foto, nivel, dt, hr) VALUES
        ('$nome', '$email', '$senha', '$lembrete', '$foto', 5, '$dt', '$hr');");
        echo "<p style='text-align:center; color:#333; padding:5px; '>Usuário cadastrado com sucesso!<br>";
        echo "<a href='index.php'>Ir para home</a> | <a href='login.php'>Login</a>";
        echo "</p>";
    } else{
        echo "<script>window.history.go(-1);</script>";
    }
?>