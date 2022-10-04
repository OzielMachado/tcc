<div>
    <h1>Página de Artigos</h1>
    <?php
        include "connect.php";
        $sql = mysqli_query($link, "SELECT * FROM tb_artigo WHERE `page` = 1 ORDER BY id_artigo DESC");

        while($line = mysqli_fetch_array($sql)){
            $titulo = $line['titulo'];
            $imagem = $line['imagem'];
            $conteudo = $line['texto'];
            $data = $line['dt'];
            $id_artigo = $line['id_artigo'];
            $hora = $line['hr'];
    ?>
            <div>
                <h1><?= $titulo ?></h1>
                <img src="postagens/<?= "post$id_artigo/$imagem" ?>">
                <!-- postagens/post1/nome_imagem.extensão -->
                <p><?= $conteudo ?></p>
                <span><?php echo date('d/m/Y',strtotime($data)); echo "<br>".date('H:i',strtotime($hora)); ?></span>
            </div>
    <?php 
        } 
    ?>

</div>

<div>
    <h1>Recentes</h1>
    <div>
        <?php
            $contar = 0;
            $sql = mysqli_query($link, "SELECT * FROM tb_artigo WHERE `page` = 1 ORDER BY id_artigo DESC");

            while($line = mysqli_fetch_array($sql) and $contar < 5){
                $titulo = $line['titulo'];
                $data = $line['dt'];
        ?>
                <h1><?= $titulo ?></h1>
                <span><?= date('d/m/Y',strtotime($data)) ?></span>
        <?php
            $contar++;
            }
        ?>
    </div>
</div>