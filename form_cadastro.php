<html>
    <head>
        <title>Antirransomware</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div>
            <h1>Cadastre-se</h1>
            <form action="cadastrar.php" method="POST" enctype="multipart/form-data">
                <input type="text" name="nome" placeholder="Nome">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
                <input type="password" name="repetesenha" placeholder="Confirmar senha">
                <input type="text" name="lembrete" placeholder="Lembrete">
                <input type="file" name="foto">
                <div id="botoes">
                    <input type="submit" value="Cadastrar">
                    <input type="reset" value="Limpar">
                </div>
            </form>

            <div>
                <a href="index.php">&larr; Voltar para a página principal</a>
                <p>Já possui cadastro? Então clique no link abaixo para fazer o login</p>
                <a href="login.php">Logar</a>
            </div>
        </div>
    </body>
</html>