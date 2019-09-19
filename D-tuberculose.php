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
        <h1>Tuberculose</h1>
        <p class="text-desc center"> Doença bacteriana infecciosa. Afeta principalmente os pulmões e pode ser grave. </p>

    </div>

    <div class="container-body">

        <section>
            <h3>O que é Tuberculose</h3>
            <p>A tuberculose é uma doença infecciosa e transmissível que afeta prioritariamente os pulmões, embora
                possa
                acometer outros órgãos e/ou sistemas. A doença é causada pelo Mycobacterium tuberculosis ou bacilo
                de
                Koch. </p>

            <p> No Brasil, a doença é um sério problema da saúde pública, com profundas raízes sociais. A epidemia
                do
                HIV e a presença de bacilos resistentes tornam o cenário ainda mais complexo. A cada ano, são
                notificados aproximadamente 70 mil casos novos e ocorrem cerca de 4,5 mil mortes em decorrência da
                tuberculose.
            </p>

        </section>

        <section>
            <h3>Sintomas</h3>
            <ul>
                <li>Tosse, com ou sem secreção, que pode ser espessa ou até sanguinolenta.</li>
                <li>Cansaço excessivo</li>
                <li>Falta de ar.</li>
                <li>Febre baixa, mais comum à tarde.</li>
                <li>Sudorese noturna.</li>
                <li>Falta de apetite.</li>
                <li>Perda de peso.</li>
                <li>Rouquidão.</li>
                <li>Fraqueza </li>
            </ul>
        </section>

        <section>
            <h3>Complicações</h3>
            <ul>
                <li>Falta de ar limitante.</li>
                <li>Expectoração de grande quantidade de sangue.</li>
                <li>Colapso do pulmão.</li>
                <li>Acúmulo de pus na pleura (membrana que reveste o pulmão).</li>
                <li>Dor no peito.</li>
            </ul>
        </section>


        <section>
            <h3>Como é feito o diagnóstico?</h3>
            <p>O diagnóstico pode ser feito por baciloscopia (exame que detecta a presença da bactéria causadora na
                secreção expelida pelo o doente) ou radiografia do tórax.</p>
        </section>


        <section>
            <h3>Transmissão</h3>

            <p>A tuberculose é uma doença de transmissão aérea e ocorre a partir da inalação de aerossóis oriundos
                das
                vias aéreas, durante a fala, espirro ou tosse das pessoas com tuberculose ativa (pulmonar ou
                laríngea),
                que lançam no ar partículas em forma de aerossóis que contêm bacilos.
                Calcula-se que, durante um ano, numa comunidade, um indivíduo que tenha baciloscopia positiva pode
                infectar, em média, de 10 a 15 pessoas.
                Bacilos que se depositam em roupas, lençóis, copos e outros objetos dificilmente se dispersam em
                aerossóis e, por isso, não têm papel importante na transmissão da doença.
            </p>

            <p>
                Com o início do tratamento, a transmissão tende a diminuir gradativamente e, em geral, após 15 dias
                de
                tratamento, ela encontra-se muito reduzida.
                No entanto, o ideal é que as medidas de controle sejam implantadas até que haja a negativação da
                baciloscopia, tais como cobrir a boca com o braço ou lenço ao tossir, manter o ambiente bem
                ventilado e
                com bastante luz solar.
                O bacilo é sensível à luz solar, e a circulação de ar possibilita a dispersão de partículas
                infectantes.
                Com isso, ambientes ventilados e com luz natural direta diminuem o risco de transmissão.

            </p>
        </section>


        <section>
            <h3>Prevenção</h3>
            <p>A principal maneira de prevenir a tuberculose em crianças é com a vacina BCG (Bacillus
                Calmette-Guérin),
                ofertada gratuitamente no Sistema Único de Saúde (SUS). Essa vacina deve ser dada às crianças ao
                nascer,
                ou, no máximo, até 04 anos, 11 meses e 29 dias.

                A vacina BCG protege a criança das formas mais graves da doença, como a tuberculose miliar e a
                meníngea.
                A vacina está disponível nas salas de vacinação das unidades básicas de saúde e maternidades.

                Outra maneira de prevenir a doença é a avaliação de contatos de pessoas com tuberculose, que permite
                identificar a Infecção Latente pelo Mycobacterium tuberculosis, o que possibilita prevenir o
                desenvolvimento de tuberculose ativa. Em outras situações específicas, pessoas que são diagnósticas
                com
                a infecção latente da tuberculose também tem indicação de receber tratamento para prevenir o
                adoecimento. Neste caso, é necessário procurar uma unidade de saúde para avaliação.

                Além disso, outra medida de prevenção da doença, é manter ambientes bem ventilados e com entrada da
                luz
                solar.
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