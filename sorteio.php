<?php

namespace App\Sorteio;

use App\Sorteio\Controllers\RegrasDeNegocio;
use App\Sorteio\RedirectValidation;

require('RegrasDeNegocio.php');
require('RedirectValidation.php');

$dezenas = $_GET["dezenas"];
$bilhetes = $_GET["bilhetes"];

/**Validar se dados de entrada estão corretos */
$redi = new RedirectValidation;
$redi->redirectAlert($dezenas, $bilhetes);

/**Aplicando toda regra de sorteio e gerando dados */
$service = new RegrasDeNegocio($dezenas, $bilhetes);

$bilhetePremiado = $service->criarDezenas(6);
$service->criarBilhetes();
$bilhetesTripulante = $service->sorteios;
?>

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
        <div class="row">

            <h3 class="header center-align">Bem-vindo a API de Sorteios da Monetizze</h3>
            <br>

            <h5 class="center-align sorteio_1 pulsate">Dedos cruzados! Estamos realizando o sorteio tripulante.</h5>

            <div class="row premiado" style="display: none;">
                <h3 class="center-align">RESULTADO DO SORTEIO</h3>
                <div class="row">
                    <div class="col s1 offset-s2"></div>
                    <?php foreach ($bilhetePremiado as $result) { ?>
                        <div class="col s1 grid-example"><?php echo $result; ?></div>
                    <?php } ?>
                </div>
            </div>

            <div class="row">
                <h4 class="center-align bilhetes" style="display: none;">RESULTADO DOS SEUS BILHETES</h4>

                <?php foreach ($bilhetesTripulante as $k => $b) { ?>
                    <div class="col offset-m3 s12 m7 <?php echo "bilhete".$k ?>" style="display: none;">
                        <div class="card horizontal">
                            <div class="card-stacked">
                                <div class="card-content center-align">
                                    Bilhete <?php echo $k+1 ?>
                                </div>
                                <div class="card-action">
                                    <?php foreach ($b as $numero) { ?>
                                        <div class="col s1 grid-example <?php if(in_array($numero, $bilhetePremiado)) echo "active"; ?> ">
                                            <?php echo $numero ?>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="row center-align">
                <a href="/" class="waves-effect waves-light btn">FAZER NOVO SORTEIO</a>
            </div>

        </div>
    </div>
</body>

<?php require("scripts.php") ?>

<script>
    execTime('.sorteio_1', 'UAU!! Sorteio realizado!', 'text', 4000);
    execTime('.sorteio_1', 'Preparando seus bilhetes!', 'text', 7000);
    execTime('.sorteio_1', '', 'hide', 10000);
    execTime('.premiado', '', 'show', 10000);
    execTime('.bilhetes', '', 'show', 10000);

    let total = <?php echo count($bilhetesTripulante) ?>;
    let time = 11000;

    for(i = 0; i < total; i++ ) {
        execTime('.bilhete' + i, '', 'show', time);
        time = time + 1000;
    }
    
    function execTime(identificador, text, tipo, tempo) {
        setTimeout(() => {
            if(tipo == 'text')
            $(identificador).text(text);

            if(tipo == 'hide')
            $(identificador).hide(text);

            if(tipo == 'show')
            $(identificador).show(text);
         },tempo);
    }
</script>

</html>