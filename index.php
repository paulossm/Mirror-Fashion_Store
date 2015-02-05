<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Mirror Fashion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=yes">
    <link rel="stylesheet" type="text/css" href="css/reset.css" />
    <link rel="stylesheet" href="css/mobile.css" media="screen and (max-width: 939px)" />
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <script src="js/home.js" type="text/javascript"></script>
    <!-- **** Hack que renderiza as tags do HTML5 nas versões anteriores ao IE9 **** -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
    <?php include("cabecalho.php"); ?>
        <div class="features container"> <!-- bloco de destaques -->
            <section class="search">
                <h2>Busca</h2>
                <form action="http://www.google.com.br/search" id="form-search" onsubmit="validaBusca()">
                    <input type="search" name="q" id="q">
                    <input type="image" src="img/busca.png">
                </form>
            </section><!-- fim campo de busca -->

            <section class="menu-department"> <!-- navegação estrutural/principal -->
                <h2>Departamentos</h2>
                <nav>
                    <ul>
                        <li><a href="#">Blusas e Camisas</a>
                            <ul>
                                <li><a href="#">Manga curta</a></li>
                                <li><a href="#">Manga comprida</a></li>
                                <li><a href="#">Camisa social</a></li>
                                <li><a href="#">Camisa casual</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Calças</a></li>
                        <li><a href="#">Saias</a></li>
                        <li><a href="#">Vestidos</a></li>
                        <li><a href="#">Sapatos</a></li>
                        <li><a href="#">Bolsas e Carteiras</a></li>
                        <li><a href="#">Acessórios</a></li>
                    </ul>
                </nav>
            </section><!-- fim menu de departamentos -->
            <img src="img/destaque-home.png" alt="Promoção Big City Night" />
            <a id="control" class="pause" onClick="pauseBanner()"></a>
        </div> <!-- fim do bloco de destaques e navegação -->
    
        <div class="panels container"> <!-- Painéis de Novidades e os Mais vendidos -->
            <section class="panel featured"><!-- Novidades -->
                <h2>Novidades</h2>
                <ol>
                    <?php
                        $conexao = mysqli_connect("127.0.0.1","root","mirassol60","WD43");
                        $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 4, 6");

                    while ($produto = mysqli_fetch_array($dados)):
                    ?>
                    
                        <li>
                            <a href='produto.php?id=<?= $produto["id"] ?>'>
                               <figure>
                                    <img src='img/produtos/miniatura<?= $produto["id"] ?>.png'
                                        alt='<?= $produto["nome"] ?>'>

                                   <figcaption><?= $produto["nome"] ?> por <strong><?= $produto["preco"] ?></strong></figcaption>
                                </figure>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ol>
            </section>
            
            <section class="panel most-selled"><!-- Mais Vendidos -->
                <h2>Mais Vendidos</h2>
                <ol>
                <?php
                    $conexao = mysqli_connect("127.0.0.1","root","mirassol60","WD43");
                    $dados = mysqli_query($conexao,"SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 6");
                

                    while ($produto = mysqli_fetch_array($dados)):
                    ?>
                    
                    <li>
                        <a href='produto.php?id=<?= $produto["id"] ?>'>
                            <figure>
                                <img src='img/produtos/miniatura<?= $produto["id"] ?>.png' />
                                <figcaption><?= $produto["nome"] ?> por <strong><?= $produto["preco"] ?></strong></figcaption>
                            </figure>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ol>
            </section>
            
        </div>        
        <?php include("rodape.php"); ?>
</body>
</html>