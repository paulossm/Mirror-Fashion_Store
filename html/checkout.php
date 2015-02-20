<?php
    // DataBase connection
    $id = $_POST["id"];
    $conexao = mysqli_connect("localhost","root","mirassol60","wd43");
    $dados = mysqli_query($conexao,"SELECT * FROM produtos WHERE id = $id");
    $produto = mysqli_fetch_array($dados);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Checkout Mirror Fashion</title>
        <meta name="viewport" content="width=device-width">
        <!-- links externos -->
        
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
        <style type="text/css">
            .form-control:invalid {
                color: rgba(155,0,0,.3);
                border: 1px solid rgba(155,0,0,.3);
            }
            .navbar {
                margin: 0;
            }
        </style>
        <!-- customização de mensagem de erro de validação do formulário -->
        <script type="text/javascript">
            document.querySelector('input[type=email]').oninvalid = function() {
                // remover mensagem de erro padrão do browser
                this.setCustomValidity("");
                
                //reexecuta validação
                if (!this.validity.valid) {
                    this.setCustomValidity("o e-mail fornecido é inválido!");
                }
            };
        </script>
    </head>
    <body>
        <!--
        <nav class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Mirror Fashion</a>
                <button type="button" class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse">
                    <span class="glyphicon glyphicon-align-justify"></span>
                    menu
                </button>
            </div>
            <ul class="nav navbar-nav collapse navbar-collapse">
                <li><a href="sobre.php">Sobre</a></li>
                <li><a href="#">Ajuda</a></li>
                <li><a href="#">Perguntas frequentes</a></li>
                <li><a href="#">Entre em contato</a></li>
            </ul>
        </nav>
        -->
        <!-- Destaque -->
        <div class="jumbotron">
            <div class="container">
                <h1>Ótima Escolha!</h1>
                <p>Obrigado por comprar na Mirror Fashion.<br>
                Preencha seus dados para completar a compra.</p>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-lg-3">
                    <!-- painel "suas compras" -->
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h2 class="panel-title">Sua Compra</h2>
                        </div>
                        <div class="panel-body">
                            <img src='img/produtos/foto<?= $_POST["id"] ?>-<?= $_POST["cor"] ?>.png' class="img-responsive img-thumbnail" />
                            <dl>
                                <dt>Produto:</dt>
                                <dd><?= $produto["nome"] ?></dd>
                                <dt>Preço:</dt>
                                <dd><?= $produto["preco"] ?></dd>
                                <dt>Código</dt>
                                <dd><?= $_POST["id"] ?></dd>
                                <dt>Cor:</dt>
                                <dd><?= $_POST["cor"] ?></dd>
                                <dt>Tamanho:</dt>
                                <dd><?= $_POST["tamanho"] ?></dd>
                            </dl>
                        </div>
                    </div>
                </div>
            
            
                <!-- **** formulário de Dados pessoais e informações de pagamento **** -->
                <form class="col-sm-8 col-lg-9">
                    <div class="row">
                        <!-- campos de dados pessoais -->
                        <fieldset class="col-md-6">
                        <legend>
                            <span class="glyphicon glyphicon-user"></span>
                            Dados Pessoais
                        </legend>

                            <div class="form-group">

                                <label for="nome">Nome completo</label>
                                <input type="text" class="form-control" id="nome" name="nome" autofocus required>
                            </div>

                            <div class="form-group">
                                <label for="email">e-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="nome@dominio.com.br">
                            </div>

                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" data-mask="999.999.999-99" required>
                            </div>

                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="sim" name="spam" checked>
                                    Quero receber spam da Mirror Fashion
                                </label>
                            </div>

                        </fieldset>
                        <!-- campos de dados do cartão de crétido -->
                        <fieldset class="col-md-6">
                            <legend>
                                <span class="glyphicon glyphicon-credit-card"></span>
                                Cartão de Crédito
                            </legend>

                            <div class="form-group">
                                <label for="numero-cartao">Número - CVV</label>
                                <input type="text" class="form-control" id="numero-cartao" name="numero-cartao" data-mask="9999 9999 9999 9999 - 999">
                            </div>

                            <div class="form-group">
                                <label for="bandeira-cartao">Bandeira</label>
                                <select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
                                    <option value="master">MasterCard</option>
                                    <option value="visa">Visa</option>
                                    <option value="amex">American Express</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="validade-cartao">Validade</label>
                                <input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
                            </div>
                        </fieldset>
                    </div>
                    <button type="submit" class="btn btn-success pull-right btn-md ">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                        confirmar pedido
                    </button>
                </form>
            </div>
        </div>
        
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script src="js/inputmask-plugin.js"></script>
    </body>
</html>