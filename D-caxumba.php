<?php $importarhtml = include("navegacao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vaccinus</title>
    <meta name="description" content="Carteira de vacinação online">
    <meta name="keywords" content="Carteira de vacinação">
    <link rel="stylesheet" href="CSS/bootstrap/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="CSS/style.css" type="text/css">
    <link rel="stylesheet" href="CSS/pattern.css" type="text/css">
    <link rel="stylesheet" href="CSS/ancestral.css" type="text/css">
    <link rel="stylesheet" href="CSS/fontawesome-free/css/all.css" type="text/css">
    <link rel="stylesheet" href="CSS/fontawesome-free/css/fontawesome.css" type="text/css">
    <link rel="stylesheet" href="CSS/ionicons/css/ionicons.css" type="text/css">
</head>

<body>

    <?php echo $importarhtml["headerINDEX"]; ?>


    <div class="container-head banner">
        <h1>Caxumba</h1>
        <p class="text-desc center"> Infecção viral que afeta as glândulas salivares. Pode ser facilmente prevenida por meio de vacinação. </p>
    </div>

    <div class="container-body">

        <section>
            <h3>O que é Caxumba</h3>
            <p> A caxumba é uma infecção viral aguda e contagiosa. Pode atingir qualquer tecido glandular e nervoso do
                corpo humano, mas é mais comum afetar as glândulas parótidas, que produzem a saliva, ou as
                submandibulares
                e sublinguais, próximas ao ouvido. A caxumba, também conhecida como Papeira, é uma doença de
                distribuição
                universal, de alta morbidade e baixa letalidade, aparecendo sob a forma endêmica ou surtos.
            </p>

            <p> É mais comum em crianças no período escolar e em adolescentes, mas também pode afetar adultos em
                qualquer idade.
                Normalmente, a caxumba tem evolução benigna, mas em alguns raros casos pode apresentar complicações
                resultando em internações e até mesmo em morte.
            </p>

        </section>

        <section>
            <h3>Sintomas</h3>
            <ul>
                <li>Inchaço e dor nas glândulas salivares, podendo ser em ambos os lados ou em apenas um deles;</li>
                <li>Febre;</li>
                <li>Dor de cabeça;</li>
                <li>Fadiga e fraqueza;</li>
                <li>Perda de apetite;</li>
                <li>Dor ao mastigar e engolir.</li>
            </ul>
        </section>

        <section>
            <h3>Complicações</h3>
            <p>Quase sempre possui evolução benigna e não deixa sequelas, mas raramente pode ocorrer:</p>
            <ul>
                <li>Inflamação no cérebro;</li>
                <li>Inflamação nos ovários;</li>
                <li>Inflamação aguda ou crônica do(s) testículo(s) (uni ou bilateral) que, se não tratada adequadamente
                    ou a tempo, pode levar à impotência ou à esterilidade;</li>
                <li>Meningite asséptica;</li>
                <li>Pancreatite;</li>
                <li>Tireoidite;</li>
                <li>Surdez.</li>
            </ul>
        </section>


        <section>
            <h3>Como é feito o diagnóstico?</h3>
            <p> O diagnóstico da caxumba é basicamente clínico, com avaliação médica nas glândulas. Para confirmar, o
                profissional de saúde pode coletar uma amostra de sangue para
                confirmar a presença do vírus. A confirmação laboratorial da caxumba vem no resultado desse exame de
                sangue, que apresenta anticorpos contra o paramixovírus, responsável por causar a doença.
                Dessa forma, é possível excluir com certeza a hipótese de outras enfermidades ou doenças que tenham
                sintomas parecidos.</p>
        </section>


        <section>
            <h3>Transmissão</h3>

            <p> A caxumba é causada por vírus da família Paramyxoviridae, gênero Paramyxovirus. A transmissão ocorre por
                via aérea, por meio da disseminação de gotículas, ou por
                contato direto com saliva de pessoas infectadas. Já a transmissão indireta é menos frequente, mas pode
                ocorrer pelo contato com objetos e/ou utensílios contaminados com secreção do nariz e/ou boca.
            </p>

            <p>
                O período de incubação (até o aparecimento dos sintomas) é de 12 a 25 dias, sendo, em média, 16 a 18
                dias. Já o período de transmissibilidade da doença varia entre 6 e 7 dias antes das manifestações
                clínicas, até 9 dias após o surgimento dos sintomas. O vírus da caxumba pode ser encontrado na urina até
                14 dias após o início da doença.

            </p>
        </section>


        <section>
            <h3>Prevenção</h3>
            <p> A vacinação é a única maneira de prevenir a caxumba. O Sistema Único de Saúde oferta gratuitamente as
                vacinas Tríplice Viral, que protegem
                contra sarampo, caxumba e rubéola, e Treta Viral, que adiciona a proteção contra varicela (catapora).

                Adultos que não foram infectados pelo vírus da caxumba na infância ou na adolescência têm indicação de
                ser imunizados, com exceção de gestantes e imunodeprimidos graves.
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