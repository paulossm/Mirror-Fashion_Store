<?php 
    // DataBase connection
    $conexao = mysqli_connect("127.0.0.1","root","mirassol60","WD43");
    $dados = mysqli_query($conexao, "SELECT * FROM produtos WHERE id = $_GET[id]");
    $produto = mysqli_fetch_array($dados);
    
    // Standards for page 
    $current_title = "Produto da Mirror Fashion"; 
    $current_styles = '<link rel="stylesheet" href="css/products.css" />';
    $current_scripts = '<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>';
    $current_fonts = "<!-- web fonts -->
    <link href='http://fonts.googleapis.com/css?family=PT+Sans|Bad+Script' rel='stylesheet' type='text/css'>"
?>
        <!-- including header and footer -->
        <?php include("cabecalho.php"); ?>
        <div class="produto-back">
            <div class="container">    
                <div class="produtos">
                    <h1><?= $produto["nome"] ?></h1>
                    <p>Por apenas <?= $produto["preco"] ?></p>
                    <form action="checkout.php" method="post">
                        <!--
                        <input type="hidden" name="nome" value='<?= $produto["nome"] ?>'>
                        <input type="hidden" name="preco" value='<?= $produto["preco"] ?>'>
                        -->
                        <input type="hidden" name="id" value='<?= $produto["id"] ?>'>
                        
                        <fieldset class="cores"> <!-- agrupamento de inputs relacionados no formulário-->
                            <legend>Escolha a cor:</legend> <!-- legenda para o fieldset -->
                            <input type="radio" name="cor" value="verde" id="verde" checked>
                                <label for="verde">
                                    <img src="img/produtos/foto<?= $produto["id"] ?>-verde.png" alt="Verde" />
                                </label>
                            <input type="radio" name="cor" value="rosa" id="rosa">
                                <label for="rosa">
                                    <img src="img/produtos/foto<?= $produto["id"] ?>-rosa.png" alt="Rosa" />
                                </label>
                            <input type="radio" name="cor" value="azul" id="azul">
                                <label for="azul">
                                    <img src="img/produtos/foto<?= $produto["id"] ?>-azul.png" alt="Azul" />
                                </label>
                        </fieldset>
                        <fieldset class="tamanhos">
                            <legend>Escolha o tamanho:</legend>
                            <input type="range" min="36" max="46" value="40" step="2" name="tamanho" id="tamanho">
                            <output for="tamanho" name="numerotamanho">40</output>
                        </fieldset>
                        <input type="submit" class="comprar" value="comprar">                    
                    </form>
                    <!-- facebook like button -->
                    <div class="fb-like" data-href="http://mirrorfashion.net/loja" data-send="false" data-layout="box_count" data-width="58" data-show-faces="false"></div>
                    <!-- Twitter tweet button -->
                    <a class="twitter-share-button" href="https://twitter.com/share" 
                       data-url="http://mirrorfashion.net/loja/produto.php?id=9" data-text="Gostei de <?php print $produto['nome']; ?> na @mirrorFashion"
                       data-count="vertical">
                        Tweet
                    </a>
                    <!-- google plus +1 button -->
                    <div class="g-plusone" data-size="tall" data-href="http://mirrorfashion.net/loja/produto.php?id=9"></div>
                </div>
                <div class="detalhes">
                    <h2>Detalhes do produto</h2>
                    <p><?= $produto["descricao"] ?></p>
                    <table>
                        <thead>
                            <tr>
                                <th>Característica</th>
                                <th>Detalhe</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Modelo</td>
                                <td>Cardigã 7845</td>
                            </tr>
                            <tr>
                                <td>Material</td>
                                <td>Algodão e Poliéster</td>
                            </tr>
                            <tr>
                                <td>Lavagem</td>
                                <td>Lavar à mão</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <?php include("rodape.php"); ?>
        <script>
                $('[name=tamanho]').on('change input',function(){
                    $('[name=numerotamanho]').text(this.value);
                });
        </script>
        <!-- facebook like button -->
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "http://connect.facebook.net/pt_BR/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- twitter share button -->
        <script>
        window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
        </script>
        <!-- google plus +1 button -->
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
    </body>
</html>