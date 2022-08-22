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
                        echo "<span style='color:red'> - Todos os campos devem ser preenchidos</span>";

                    }
                ?>
            </h1>
            <form action="logar.php" method="POST">
                <input type="email" name="email" placeholder="E-mail">
                <input type="password" name="senha" placeholder="Senha">
                <div id="botoes">
                    <input type="submit" value="Logar" class="bt_cad">
                    <input type="reset" value="Limpar" class="bt_cad">
                </div>
            </form>

            <div class="botoes">
                <a href="index.php" class="form_link">&larr; Voltar para a página principal</a>
                <p class="p_form">Ainda não possui cadastro? Então clique no link abaixo para fazer o cadastro</p>
                <a href="form_cadastro.php" class="form_link">Cadastrar-se</a>
            </div>
        </div>
    </body>
</html>