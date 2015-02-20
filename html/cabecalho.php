<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=yes">
        <!-- TITLE PROPERTIES -->
        <title><?php print @$current_title; ?></title>
        <!-- CSS STYLESHEETS -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 1200px)">
        <link rel="stylesheet" href="css/toggle-navigation/assets/css/menu.css">
        <?php print @$current_fonts; ?>
        <?php print @$current_styles; ?>
        <?php print @$current_scripts; ?>
        <!-- **** Hack que renderiza as tags do HTML5 nas versões anteriores ao IE9 **** -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <![endif]-->
    </head>
    <body>
    <!-- cabeçalho -->
    <header class="container">
    <!-- Conteúdo do Cabeçalho -->   
        <h1>
            <img src="img/pressets/Logo-Mirror-Store.png" alt="Logo Mirror Fashion" />
            <p><b>Mirror</b>Fashion</p>
        </h1>
        <nav class="options-menu mainMenu">
            <label for="toggleMenu" class="menuTitle">menu</label>
            <input type="checkbox" id="toggleMenu" />
            
            <ul class="nav-links menu">
                <li><a href="#">Sua Conta</a></li>
                <li><a href="#">Lista de Desejos</a></li>
                <li><a href="#">Cartão Fidelidade</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
            <!--</ul>
            <ul class="social-links">-->
                <li><h3>Siga a Mirror Store:</h3></li>
                <li><a href="http://facebook.com/mirrorfashion" title="Curta nossa fanpage">Facebook</a></li>
                <li><a href="http://twitter.com/mirrorfashion" title="Siga-nos no twitter">Twitter</a></li>
                <li><a href="http://plus.google.com/mirrorfashion" title="recomende-nos no Google+">Google+</a></li>
            </ul>
            <p class="wallet hidden">sacola vazia</p>
        </nav>
    </header>