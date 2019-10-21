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
        <h1>Meningite</h1>
        <p class="text-desc center"> Inflamação das membranas que revestem o cérebro e a medula espinhal, geralmente causada por uma infecção. </p>
    </div>

    <div class="container-body">
        <div class="row">
            <div class="col-xl">
                <figure>
                    <img class="img-fluid" src="IMG/doenca/meningite.jpg" />
                    <figcaption>Fonte: http://www.testonoticias.com.br/sa%C3%BAde/a-meningite-pode-matar-1.2157512</figcaption>
                </figure>
            </div>

            <div class="col-xl">
                <section>
                    <h3>O que é Meningite</h3>
                    <p> A meningite é um processo inflamatório das meninges, membranas que envolvem o cérebro e a medula
                        espinhal. Pode ser causada por diversos agentes infecciosos, ou também por processos não infecciosos
                        como,
                        por exemplo, medicamentos e neoplasias. Entre os agentes infecciosos, as meningites bacterianas e virais
                        são as mais importantes do ponto de vista da saúde pública e clinico, devido a sua magnitude, capacidade
                        de causar surtos e, no caso da meningite bacteriana, a gravidade.
                    </p>

                    <p> No Brasil, a meningite é considerada uma doença endêmica, deste modo, casos da doença são esperados ao
                        longo de todo o ano, com a ocorrência de surtos e epidemias ocasionais. A ocorrência das meningites
                        bacterianas
                        é mais comum no outono-inverno, e das virais na primavera-verão.
                    </p>
                </section>
            </div>
        </div>

        <section>
            <h3>Sintomas</h3>
            <ul>
                <li>Dor de cabeça e na nuca;</li>
                <li>Rigidez no pescoço;</li>
                <li>Febre;</li>
                <li>Vômito;</li>
                <li>Confusão mental;</li>
                <li>Gangrena de pés, pernas, braços e mãos;</li>
                <li>Paralisia;</li>
                <li>Surdez;</li>
            </ul>
        </section>

        <section>
            <h3>Complicações</h3>
            <ul>
                <li>Problemas com memória e concentração;</li>
                <li>Problemas de curto ou a longo prazo com coordenação e balanço;</li>
                <li>Perda parcial ou completa de visão;</li>
                <li>Perda parcial ou completa da audição;</li>
                <li>Infecção do córrego do septicaemia ou do sangue.</li>
            </ul>
        </section>

        <section>
            <h3>Diagnóstico</h3>
            <p> Se o médico suspeita de meningite, ele solicita a coleta de amostras de sangue e líquido cerebroespinhal
                (líquor).
                O laboratório então testa as amostras para detectar o agente que está causando a infecção. A
                identificação específica
                do agente é importante para o médico saber exatamente como deve tratar a infecção.
            </p>
            <p>
                O aspecto do líquor, embora não considerado um exame, funciona como um indicativo. O líquor normal é
                límpido e incolor.
                Nos processos infecciosos, ocorre o aumento de elementos figurados (células), causando turvação, cuja
                intensidade varia
                de acordo com a quantidade e o tipo desses elementos.
            </p>
        </section>

        <section>
            <h3>Transmissão</h3>

            <p> Na meningite bacteriana, geralmente, a transmissão é de pessoa a pessoa, por meio das vias
                respiratórias, por gotículas
                e secreções das vias aéreas superiores (do nariz e da garganta). Já na meningite viral a transmissão
                fecal-oral é de grande
                importância, especialmente nas infecções por enterovírus.
            </p>
        </section>

        <section>
            <h3>Prevenção</h3>
            <p> A meningite é uma síndrome que pode ser causada por diferentes agentes infecciosos. Para alguns destes,
                existem medidas de
                prevenção primária, tais como vacinas e quimioprofilaxia. As vacinas estão disponíveis para prevenção
                das principais causas
                de meningite bacteriana. As vacinas disponíveis no calendário de vacinação da criança do Programa
                Nacional de Imunização são:

                <ul>
                    <li><b>Vacina meningocócica conjugada sorogrupo C:</b> protege contra a Doença Meningocócica causada
                        pelo sorogrupo C;</li>
                    <li><b>Vacina pneumocócica 10-valente (conjugada):</b> protege contra as doenças invasivas causadas
                        pelo <i>Streptococcus pneumoniae</i>, incluindo meningite;</li>
                    <li><b>Pentavalente:</b> protege contra as doenças invasivas causadas pelo <i>Haemophilus
                            influenzae</i> sorotipo b, como meningite, e também contra a difteria, tétano, coqueluche e
                        hepatite B;</li>
                    <li><b>BCG:</b> protege contra as formas graves da tuberculose.</li>
                </ul>
            </p>
        </section>

        <section class="fonte">
            <p> Fonte: http://saude.gov.br/saude-de-a-z/meningites </p>
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