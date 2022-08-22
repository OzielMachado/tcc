<html>
    <head>
        <title>Antirransomware</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div>
            <h1>Formulário de Postagens
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
                <a href="index.php">&larr; Voltar para a página principal</a>
            </div>
        </div>
    </body>
</html>