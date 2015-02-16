<?php 
        $current_title = 'Mirror Fashion';
        $current_scripts = '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/home.js" type="text/javascript"></script>'; 
        $current_fonts = "<!-- web fonts -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet' type='text/css'>"
    ?>
    <?php include("cabecalho-no-css.php"); ?>
        <div class="features container"> <!-- bloco de destaques -->
            <section class="search">
                <h2>Busca</h2>
                <form action="http://www.google.com.br/search" id="form-search" onsubmit="validaBusca()">
                    <input type="search" name="q" id="q" placeholder="busca...">
                    <input type="image" src="img/search-icon.png">
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
            <section class="banners">
                <img src="img/backstyle-pandoras-bleach-2.png" alt="Promoção Vintage 70% de Desconto" />
                <a id="control" class="pause" onClick="pauseBanner()"></a>
            </section>
        </div> <!-- fim do bloco de destaques e navegação -->
        
        <article class="container">
        <div class="panels"> <!-- Painéis de Novidades e os Mais vendidos -->
            <section class="panel featured"><!-- Novidades -->
                <h2><span>mais</span> novos</h2>
                <ol>
                    <?php
                        $conexao = mysqli_connect("127.0.0.1","root","mirassol60","WD43");
                        $dados = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY data DESC LIMIT 0, 4");

                    while ($produto = mysqli_fetch_array($dados)):
                    ?>
                    
                        <li>
                            <a href='produto.php?id=<?= $produto["id"] ?>'>
                               <figure>
                                    <img src='img/produtos/miniatura<?= $produto["id"] ?>.png'
                                        alt='<?= $produto["nome"] ?>'>

                                   <figcaption><p><?= $produto["nome"] ?></br><em><?= $produto["preco"] ?></em></p></figcaption>
                                </figure>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ol>
                <!-- mostrar mais botão 
                <button type="button">mostrar mais</button> -->
            </section>
            
            <section class="panel most-selled"><!-- Mais Vendidos -->
                <h2><span>mais</span> desejados</h2>
                <ol>
                <?php
                    $conexao = mysqli_connect("127.0.0.1","root","mirassol60","WD43");
                    $dados = mysqli_query($conexao,"SELECT * FROM produtos ORDER BY vendas DESC LIMIT 0, 4");
                

                    while ($produto = mysqli_fetch_array($dados)):
                    ?>
                    
                    <li>
                        <a href='produto.php?id=<?= $produto["id"] ?>'>
                            <figure>
                                <img src='img/produtos/miniatura<?= $produto["id"] ?>.png' />
                                <figcaption>
                                    <p><?= $produto["nome"] ?></p>
                                    <p><em><?= $produto["preco"] ?></em></p></figcaption>
                            </figure>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ol>
                <!-- mostrar mais botão 
                <button type="button">mostrar mais</button>-->
            </section>
            
        </div>
        <aside class="promotions">
            <h2>Edição 2015.2</h2>
            <figure>
                <img src="img/magazine.jpg" alt="Capa da Revista Mirror Magazine edição 2015.2">
            </figure>
            
            <a href=""><p class="shipping">Frete Grátis!<br />
            <span>Nas compras acima de R$ 80</span>
            </p></a>
            <a href=""><p class="gift-card">Cartão Presente<br/>
            <span>Para quem você ama</span>
            </p></a>
        </aside>
        <section class="partners container">
            <h2><span>Parceiros</span> Mirror</h2>
            <ol>
                <li>
                    <figure>
                        <img src="img/pressets/vera-wang.jpg" alt="Vera Wang" />
                    </figure>
                </li>
                
                <li>
                    <figure>
                        <img src="img/pressets/PS-JEANS-LOGO.jpg" alt="Paul Smith Jeans" />
                    </figure>
                </li>
                
                <li>
                    <figure>
                        <img src="img/pressets/Secret-Of-Fashion-520x384.jpg" alt="Secret of Fashion - India" />
                    </figure>
                </li>
                
                <li>
                    <figure>
                        <img src="img/pressets/LOGO-Lacoste-2500x1666.jpg" alt="Lacoste" />
                    </figure>
                </li>
            </ol>
        </section>
        <section class="social-media container">
            <div class="networks">
                <h2>Nas Redes</h2>
                <div class="youtube">
                    <video controls width="98%" height="230px" class="youtube-player">
                        <source src="https://www.youtube.com/watch?v=Tb06abHE4hY">
                        Seu navegador não suporta o formato de vídeo.
                    </video>
                    <p>Desfile mirror 2014</p>
                    <a>Confira os melhores momentos</a>
                    
                </div>
                <div class="instagram">
                    <ul class="pictures">
                        <li><figure><img src="img/pressets/social-network/15-bw-fashion-photographer1.jpg" alt="instagram one" /></figure></li>
                        <li><figure><img src="img/pressets/social-network/15-bw-fashion-photographer1.jpg" alt="instagram one" /></figure></li>
                        <li><figure><img src="img/pressets/social-network/15-bw-fashion-photographer1.jpg" alt="instagram one" /></figure></li>
                        <li><figure><img src="img/pressets/social-network/15-bw-fashion-photographer1.jpg" alt="instagram one" /></figure></li>
                        <li><figure><img src="img/pressets/social-network/15-bw-fashion-photographer1.jpg" alt="instagram one" /></figure></li>
                    </ul>
                    <a class="insta-link" href="instagram.com/mirrorfashion">@MirrorFashion</a>
                </div>
            </div>
            <div class="contact">
                <h2><span>Como</span> encontrar</h2>
                <h3>Estamos em:</h3>
                <address>Avenida sem nome, 774<br />
                Bloco II - 121 - 3º Andar<br />
                Jardim Sagrado - Jacarezinho - Paraná</address>
                
                <h3>Atendemos pelo:</h3>
                <p class="phones">+55 21 4005-9999 (SP)<br />
                    +55 34 4005-9999 (PR)</p>
                
                <h3>dúvidas ou sugestões:</h3>
                <p class="mail">contato@mirrorstore.hol.es</p>
            </div>
        </section>
        </article>
        <?php include("rodape.php"); ?>
</body>
</html>