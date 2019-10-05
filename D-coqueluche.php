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
        <h1>Coqueluche</h1>
        <p class="text-desc center"> Infecção altamente contagiosa do trato respiratório, de fácil prevenção por meio de vacina. </p>
    </div>

    <div class="container-body">
        <div class="row">
            <div class="col-xl">
                <img class="img-fluid" src="IMG/doenca/coqueluche.jpg" />
            </div>

            <div class="col-xl">
                <section>
                    <h3>O que é Coqueluche</h3>
                    <p> A coqueluche é uma doença infecciosa aguda, transmissível e de distribuição universal. É provocada pelo
                        bacilo Bordetella pertussis e compromete especificamente o aparelho respiratório da pessoa,
                        o que inclui traqueia e brônquios. A principal característica é a tosse seca.

                    </p>

                    <p> O ser humano é o único reservatório natural do bacilo causador da coqueluche. Apesar de ainda não ter
                        sido constatada a existência de portadores crônicos da doença, podem ocorrer casos sem sintomas
                        e/ou com pouca importância na disseminação da infecção.
                    </p>

                </section>
            </div>
        </div>
        
        <section>
            <h3>Sintomas</h3>
            <ul>
                <li>Mal-estar geral;</li>
                <li>Corrimento nasal;</li>
                <li>Tosse seca;</li>
                <li>Febre baixa;</li>
            </ul>
        </section>

        <section>
            <h3>Complicações</h3>
            <p>Em casos graves, a pessoa infectada por febre amarela pode desenvolver algumas complicações, como:</p>
            <ul>
                <li>Infecções de ouvido;</li>
                <li>Pneumonia;</li>
                <li>Parada respiratória;</li>
                <li>Desidratação;</li>
                <li>Convulsão;</li>
                <li>Lesão cerebral;</li>
                <li>Morte.</li>
            </ul>
        </section>


        <section>
            <h3>Como é feito o diagnóstico?</h3>
            <p> O diagnóstico da coqueluche em estágios iniciais é difícil, uma vez que os sintomas podem parecer como
                resfriado ou até mesmo outras doenças respiratórias. A tosse seca é um forte indicativo da coqueluche,
                mas
                para confirmar o diagnóstico o médico pode pedir os seguintes exames:

                <ul>
                    <li>Coleta de material de nasofaringe para cultura;</li>
                    <li>PCR em tempo real.</li>
                </ul>
            </p>
            <p>
                Como exames complementares, podem ser realizados hemograma e raio-x de tórax.
            </p>
        </section>


        <section>
            <h3>Transmissão</h3>

            <p> A transmissão da coqueluche ocorre, principalmente, pelo contato direto do doente com uma pessoa
                suscetível,
                por meio de gotículas de secreção eliminadas por tosse, espirro ou até mesmo ao falar.Em alguns casos, a
                transmissão pode ocorrer por objetos recentemente contaminados com secreções de pessoas doentes. Isso é
                pouco
                frequente, porque é difícil o agente causador da doença sobreviver fora do corpo humano, mas não é
                impossível.

            </p>

            <p>
                O período de incubação do bacilo, ou seja, o tempo que os sintomas começam a aparecer desde o momento da
                infecção,
                é de, em média, 5 a 10 dias podendo variar de 4 a 21 dias e, raramente, até 42 dias. A maior
                transmissibilidade da doença ocorre na fase catarral.
            </p>


        </section>


        <section>
            <h3>Prevenção</h3>
            <p> A vacinação é o principal meio de prevenção da coqueluche. Crianças de até 6 anos, 11 meses e 29 dias
                devem ser vacinadas contra a coqueluche. O
                Sistema Único de Saúde (SUS) também oferta vacina específica para gestantes e profissionais de saúde que
                atuam em maternidades e em unidades de
                internação neonatal, atendendo recém-nascidos e crianças menores de um ano de idade.
            </p>

            <p> Gestantes devem fazer uma dose da vacina do tipo adulto (dTpa) a partir da 20ª semana a cada gestação. A
                imunidade não é permanente, após 5 a 10
                anos, em média, da última dose da vacina, a proteção pode ser pouca ou inexistente.
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