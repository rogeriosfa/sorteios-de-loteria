<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php require("css.php"); ?>

    <title>API para Sorteios da Monetizze</title>
</head>

<body>
    <div class="container">
        <!-- Page Content goes here -->
        <div class="row">

            <h3 class="header center-align">Bem-vindo a API de Sorteios da Monetizze</h3>
            <br>
            <br>

            <form action="sorteio.php" method="GET">
                <h5 class="center-align">Quantas dezenas você deseja tripulante?</h5>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="dezenas" type="number" class="validate" min="6" max="10">
                        <label class="active" for="first_name2">Escolha entre 6 a 10:</label>
                    </div>

                    <?php if (isset($_GET['alert_dezena'])) : ?>
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card-panel red darken-1">
                                    <span class="white-text">Nº de dezenas não permitido, escolha novamente!
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

                <h5 class="center-align">e quantos bilhetes você vai desejar?</h5>

                <div class="row">
                    <div class="input-field col s12">
                        <input name="bilhetes" type="number" class="validate" min="1" max="50">
                        <label class="active" for="first_name2">Escolha entre 1 a 50:</label>
                    </div>

                    <?php if (isset($_GET['alert_bilhete'])) : ?>
                        <div class="row">
                            <div class="col s12 m12">
                                <div class="card-panel red darken-1">
                                    <span class="white-text">Nº de bilhetes não permitido, escolha novamente!
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                </div>

                <div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </div>

            </form>

        </div>
    </div>
</body>

<?php require("scripts.php") ?>

</html>