<html>
    <head>
        <title>Antirransomware</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div>
            <div>
                <?php include "topo.php";?>
            </div>
            <div>
                <?php include "menu.php";?> 
            </div>
            <div>
                <form action="cad_contato.php" method="POST">
                    <label>Nome:</label>
                    <input type="text" name="nome" placeholder="Preencha este campo com o seu nome completo" required>

                    <label>E-mail:</label>
                    <input type="email" name="email" placeholder="Digite o seu e-mail aqui" required><br>

                    <label>Assunto:</label>
                    <input type="text" name="assunto" placeholder="Sobre o que você deseja falar?" required>

                    <label>Conteúdo:</label>
                    <textarea name="conteudo" placeholder="Digite o conteúdo..."></textarea>
                    <input type="submit" value="Enviar" class="bt_enviar">

                </form>
            </div>
            <div>
                <?php include "rodape.php";?>
            </div>
        </div>
    </body>
</html>