<?php $importarhtml = include("navegacao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vacinnus</title>
    <meta name="description" content="Carteira de vacinação online">
    <meta name="keywords" content="Carteira de vacinação">
    <link rel="stylesheet" href="CSS/bootstrap/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/law-icons/font/flaticon.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/helpers.css">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/pattern.css" type="text/css">
    <link rel="stylesheet" href="CSS/ancestral.css" type="text/css">
</head>

<body>

    <?php echo $importarhtml["headerINDEX"]; ?>

    <div class="container-head banner">
        <h1>Difteria</h1>
        <p class="text-desc center"> Infecção grave do nariz e da garganta que pode ser facilmente evitada por meio de vacina. </p>
    </div>

    <div class="container-body">
        <div class="row">
            <div class="col-xl">
                <img class="img-fluid" src="IMG/doenca/difteria.jpg" />
            </div>

            <div class="col-xl">
                <section>
                    <h3>O que é Difteria</h3>
                    <p> A difteria, também conhecida como "crupe", é uma doença transmissível aguda, toxiinfecciosa e
                        imunoprevenível, causada por bactéria, que se aloja principalmente nas amígdalas, faringe, laringe,
                        nariz e, ocasionalmente, em outras mucosas do corpo, além da pele. A presença de placas
                        pseudomembranosas branco-acinzentadas, aderentes, que se instalam nas amígdalas e invadem estruturas
                        vizinhas, é a manifestação clínica típica da difteria. Em casos mais severos, que são raros, pode
                        ocorrer um inchaço grave no pescoço, com aumento dos gânglios linfáticos, gerando dificuldade
                        de respirar ou até mesmo bloqueio total da respiração.

                    </p>

                    <p> A difteria ocorre durante todos os períodos do ano e pode afetar todas as pessoas não imunizadas, de
                        qualquer idade, raça ou sexo. Observa-se um aumento de sua incidência nos meses frios e secos
                        (outono e inverno), quando é mais comum a ocorrência de infecções respiratórias, principalmente devido à
                        aglomeração em ambientes fechados, que facilitam a transmissão do bacilo. Contudo, não se
                        observa esse padrão sazonal nas regiões sem grandes oscilações de temperatura. A doença ocorre com maior
                        frequência em áreas com precárias condições socioeconômicas, onde a aglomeração de pessoas
                        é maior e onde se registram baixas coberturas vacinais. Os casos são raros quando as coberturas vacinais
                        atingem patamares de 80%.
                    </p>

                </section>
            </div>
        </div>

        <section>
            <h3>Sintomas</h3>
            <ul>
                <li>Membrana grossa e acinzentada, cobrindo as amígdalas e podendo cobrir outras estruturas da gargante;
                </li>
                <li>Dor de garganta discreta;</li>
                <li>Glânglios inchados (linfonodos aumentados) no pescoço;</li>
                <li>Dificuldade em respirar ou respiração rápida em casos graves;</li>
                <li>Palidez;</li>
                <li>Febre não muito elevada;</li>
                <li>Mal-estar geral.</li>
            </ul>
        </section>

        <section>
            <h3>Complicações</h3>
            <p>Em casos graves, a pessoa infectada por febre amarela pode desenvolver algumas complicações, como:</p>
            <ul>
                <li>Insuficiência respiratória;;</li>
                <li>Problemas cardíacos;</li>
                <li>Problemas neurológicos;</li>
                <li>Insuficiência dos rins.</li>
            </ul>
        </section>


        <section>
            <h3>Como é feito o diagnóstico?</h3>
            <p> O diagnóstico da difteria é clínico, após análise detalhada dos sintomas e características típicas da
                doença por um profissional de saúde.
                Para confirmação do diagnóstico, o médico deverá solicitar coleta de secreção de nasofrainge para
                cultura. Em casos de suspeita de difteria cutânea, devem
                ser coletadas amostras das lesões da pele.</p>
        </section>


        <section>
            <h3>Transmissão</h3>

            <p> A transmissão da difteria ocorre basicamente por meio da tosse, espirro ou por lesões na pele, ou seja,
                a bactéria da difteria é transmitida pelo contato direto
                da pessoa doente ou portadores com pessoa suscetível, por meio de gotículas de secreção respiratória,
                eliminadas por tosse, espirro ou ao falar.
                Em casos raros, pode ocorrer a contaminação por objetos capazes de absorver e transportar
                micro-organismos, como a bactéria causadora da difteria.

            </p>

            <p>
                O período de incubação da difteria, ou seja, o tempo que os sintomas começam a aparecer desde a infecção
                da pessoa, é, em geral, de 1 a 6 dias, podendo ser mais
                longo. Já o período de transmissibilidade da doença dura, em média, até 2 semanas após o início dos
                sintomas.
            </p>


        </section>


        <section>
            <h3>Prevenção</h3>
            <p> A vacinação é o principal meio de controle e prevenção da difteria. É preciso manter o esquema vacinal
                de crianças, adolescentes e adultos sempre atualizado.
            </p>
        </section>

    </div>

    <?php echo $importarhtml["footerINDEX"]; ?>

    <script src="JS/jquery.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/slick.min.js"></script>
    <script src="JS/jquery.mb.YTPlayer.min.js"></script>
    <script src="JS/jquery.waypoints.min.js"></script>
    <script src="JS/jquery.easing.1.3.js"></script>
    <script src="JS/main.js"></script>
</body>

</html>