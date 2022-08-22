<html>
    <head>
        <title>Antirransomware</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div>
            <h1>Tela de Login 
                <?php 
                    @$v = $_GET['valor'];
                    if($v){
                        echo "<span> - Todos os campos devem ser preenchidos</span>";
                    }
                ?>
            </h1>
            <form action="logar.php" method="POST">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
                <div>
                    <input type="submit" value="Logar">
                    <input type="reset" value="Limpar">
                </div>
            </form>

            <div>
                <a href="index.php">&larr; Voltar para a página principal</a>
                <p>Ainda não possui cadastro? Então clique no link abaixo para fazer o cadastro</p>
                <a href="form_cadastro.php">Cadastrar-se</a>
            </div>
        </div>
    </body>
</html>