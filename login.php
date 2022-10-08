<html>
    <head>
        <title>Antirransomware</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="jumbotron">
        <div class="container text-center">
            <h1>Entrar 
                <?php 
                    @$v = $_GET['valor'];
                    if($v){
                        echo "<span> - Todos os campos devem ser preenchidos</span>";
                    }
                ?>
            </h1>
            <img class="img-fluid" src="./img/light-logo.png">
            <form action="logar.php" method="POST" >
                <input type="email" name="email" placeholder="E-mail" class="form-control">
                <input type="password" name="senha" placeholder="Senha" class="form-control">
                <div>
                    <input type="submit" value="Logar" class="btn btn-dark">
                    <input type="reset" value="Limpar" class="btn btn-dark">
                </div>
            </form>

            <div>
                <a href="index.php">&larr; Voltar para a página principal</a>
                <p>Ainda não possui cadastro? Então clique no link abaixo para fazer o cadastro</p>
                <a href="form_cadastro.php">Cadastrar-se</a>
            </div>
        </div>
        
        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>