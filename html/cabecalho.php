<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <!-- TITLE PROPERTIES -->
        <title><?php print @$current_title; ?></title>
        <!-- CSS STYLESHEETS -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/mobile.css" media="(max-width: 939px)">
        <?php print @$current_styles; ?>
    </head>
    <body>    
    <!-- cabeçalho -->
    <header class="container">
    <!-- Conteúdo do Cabeçalho -->   
        <h1><img src="img/logo.png" alt="Logo Mirror Fashion" /></h1>
        <p class="wallet">nenhum item na sacola de compras.</p>
        <nav class="options-menu">
            <ul>
                <li><a href="#">Sua Conta</a></li>
                <li><a href="#">Lista de Desejos</a></li>
                <li><a href="#">Cartão Fidelidade</a></li>
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
            </ul>
        </nav>
    </header>