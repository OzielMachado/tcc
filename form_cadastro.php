<html>
    <head>
        <title>Antirransomware</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body class="jumbotron">
        <div class="container text-center">
            <h1>Cadastre-se</h1>
            <img class="img-fluid" src="./img/light-logo.png">
            <form action="cadastrar.php" method="POST" enctype="multipart/form-data" >
                <input type="text" name="nome" placeholder="Nome" class="form-control">
                <input type="email" name="email" placeholder="E-mail" class="form-control">
                <input type="password" name="senha" placeholder="Senha" class="form-control">
                <input type="password" name="repetesenha" placeholder="Confirmar senha" class="form-control">
                <input type="text" name="lembrete" placeholder="Lembrete" class="form-control">
                <input type="file" name="foto" class="form-control">
                <div id="botoes">
                    <input type="submit" value="Cadastrar" class="btn btn-dark">
                    <input type="reset" value="Limpar" class="btn btn-dark">
                </div>
            </form>

            <div>
                <a href="index.php">&larr; Voltar para a página principal</a>
                <p>Já possui cadastro? Então clique no link abaixo para fazer o login</p>
                <a href="login.php">Logar</a>
            </div>
        </div>

        <script src="js/bootstrap.bundle.min.js"></script>
    </body>
</html>