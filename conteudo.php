<div>
    <!-- <div>
        <h1>Título da postagem</h1>
        <img src="img/postagem.jpeg">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos molestiae distinctio eaque officiis earum, voluptatum natus iste doloremque similique, ullam debitis. Aliquam corrupti sunt veritatis quidem iure distinctio quasi hic!</p>
        <span>21/08/2022</span>
    </div>

    <div>
        <h1>Título da postagem</h1>
        <img src="img/postagem.jpeg">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti architecto praesentium, nesciunt repellat voluptate quisquam amet similique illum voluptates necessitatibus nam, provident quam ipsam. Ipsa temporibus explicabo aliquid. Est, quae?</p>
        <span>21/08/2022</span>
    </div> -->

    <?php
        include "connect.php";
        $qtd_registros = 1;
        @$page = $_GET['pag'];
        if(!$page) {
            $pagina = 1;
        } else {
            $pagina = $page;
        }

        $inicio = $pagina - 1; //0
        $inicio *= $qtd_registros;
        $sel_parcial = mysqli_query($link, "SELECT * FROM tb_artigo WHERE `page` = 1 LIMIT $inicio, $qtd_registros");
        $sel_total = mysqli_query($link, "SELECT * FROM tb_artigo WHERE `page` = 1");

        $contar = mysqli_num_rows($sel_total); // Quantidade de registros da tabela
        $contar_pages = $contar / $qtd_registros;
        echo $contar_pages;

        while($line = mysqli_fetch_array($sel_parcial)) {
            $titulo = $line['titulo'];
            $imagem = $line['imagem'];
            $conteudo = $line['texto'];
            $data = $line['dt'];
            $id_artigo = $line['id_artigo'];
    ?>
            <h1><?= $titulo ?></h1>
            <img src="postagens/<?= "post$id_artigo/$imagem" ?>">
            <!-- postagens/post1/nome_imagem.extensão -->
            <p><?= $conteudo ?></p>
            <span><?= date('d/m/Y',strtotime($data))?></span>
    <?php
        }
        

        $anterior = $pagina - 1;
        $proximo = $pagina + 1;

        echo "<br><br>";

        if($pagina > 1) {
            echo "<a href=?pag=$anterior>&larr; Anterior</a>";
        }

        for($i = 1; $i < $contar_pages+1; $i++){
            echo "<a href=?pag=$i>$i</a>";
        }

        if($pagina < $contar_pages) {
            echo "<a href=?pag=$proximo>Próximo &rarr;</a>";
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