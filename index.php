<?php $importarhtml = include("navegacao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vaccinus</title>
    <meta name="description" content="Carteira de vacinação online">
    <meta name="keywords" content="Carteira de vacinação">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="CSS/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link href="CSS/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php echo $importarhtml["headerINDEX"]; ?>
    <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="anchor_login">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-6">
                    <h2 class="heading mb-3">Vaccinus</h2>
                    <div class="sub-heading">
                        <p class="mb-4">Acesse suas vacinas em qualquer lugar, a qualquer momento!</p>
                    </div>
                </div>
                <div class="col-md-1"> </div>
                <div class="col-md-5 relative align-self-center">
                    <form action="" method="post" class="bg-white rounded pb_form_v1">
                        <h2 class="mb-4 mt-0 text-center">Cadastre-se</h2>
                        <div class="form-group">
                            <input type="text" class="form-control py-3 reverse" id="nome" name="nome" required placeholder="Nome completo">
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control py-3 reverse" id="datanasc" name="datanasc" required min="1920-01-01">
                        </div>
                        <div class="form-group">
                            <input type="tel" id="celular" class="form-control py-3 reverse" name="celular" pattern="[0-9]{11}" required placeholder="Celular">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control py-3 reverse" id="cep" name="cep" required placeholder="CEP">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control py-3 reverse" id="cpf" name="cpf" required placeholder="CPF">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control py-3 reverse" id="email" name="email" placeholder="SeuEmail@webmail.com" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control py-3 reverse" id="senha" name="senha" required minlength="5" placeholder="Senha">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control py-3 reverse" id="senha1" name="senha1" required minlength="5" placeholder="Confirme sua senha">
                        </div>
                        <button type="submit" class="btn btn-success" name="cadastrar">Cadastrar</button>
                        <button type="reset" class="btn btn-danger">Limpar</button>
                        <br> <br>
                        <p>Tem uma conta?<a href="LOGIN.php"> Faça o login!</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (isset($_POST['cadastrar'])) {
        $servidor = "localhost";
        $bancodedados = "vaccinus";
        $user = "root";
        $palavrapasse = "";
        $conn = mysqli_connect($servidor, $user, $palavrapasse, $bancodedados);
        $nome = $_POST['nome'];
        $datanasc = $_POST['datanasc'];
        $celular = $_POST['celular'];
        $cep = str_replace(array('-', '.'), '', $_POST['cep']);
        $cpf = str_replace(array('-', '.'), '', $_POST['cpf']);
        $email = $_POST['email'];
        $senha = MD5($_POST['senha']);
        $senha1 = MD5($_POST['senha1']);
        $permissao = true;
        if (empty($nome) || empty($datanasc) || empty($celular) || empty($cep) || empty($cpf) || empty($email) || empty($senha1) || empty($senha)) {
            $permissao = false;
        } else if ($senha != $senha1) {
            $permissao = false;
        }
        if ($permissao) {
            $sql = "insert into pessoa (nome, datanasc, celular, cep, cpf, email, senha) values ('$nome','$datanasc','$celular', '$cep', '$cpf', '$email', '$senha');";
            if (mysqli_query($conn, $sql)) {
                echo (" <div>Cadastrado</div>");
            } else {
                echo ("<div>Não foi possível cadastrá-lo</div>");
            }
        } else {
            echo "As senhas devem ser iguais";
        }
        mysqli_close($conn);
    }
    ?>

    <section class="pb_section bg-light pb_slant-white pb_pb-250" id="section-features">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 text-center mb-5">
                    <h1>Nossas Vantagens</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon">
                            <!-- Colocar um icone aqui -->
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3 heading">Accesibilidade</h5>
                            <p class="text-sans-serif">Acesse suas vacinas de onde você quiser, quando você quiser.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon">
                            <!-- Colocar um icone aqui -->
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3 heading">Facilidade</h5>
                            <p class="text-sans-serif">Tão simples quanto usar o papel, acessível para qualquer pessoa.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md- col-sm-6">
                    <div class="media d-block pb_feature-v1 text-left">
                        <div class="pb_icon">
                            <!-- Colocar um icone aqui -->
                        </div>
                        <div class="media-body">
                            <h5 class="mt-0 mb-3 heading">Modificação</h5>
                            <p class="text-sans-serif">Inclua, altere, exclua e consulte suas vacinas a vontade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END section -->
    <section class="pb_section pb_slant-white" id="anchor_sobre">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-6 text-center mb-5">
                    <h1>Sobre</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div id="pb_faq" class="pb_accordion" data-children=".item">
                        <div class="item">
                            <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq1" aria-expanded="true" aria-controls="pb_faq1" class="pb_font-22 py-4">O que é o Vaccinus?</a>
                            <div id="pb_faq1" class="collapse show" role="tabpanel">
                                <div class="py-3">
                                    <p>
                                        Desde o nascimento, os brasileiros devem receber as vacinas indicadas para cada
                                        etapa de suas vidas. O registro de vacinas é feito em uma caderneta de papel,
                                        que pode ser facilmente extraviada ou estragada, deixando a pessoa sem esse
                                        importante documento.
                                        Refletindo sobre esse problema, foi proposto desenvolver um projeto com a
                                        finalidade de repará-lo. Vaccinus é uma aplicação web que procura deixar mais
                                        prático e seguro o controle das vacinas tomadas por um
                                        indivíduo, através de uma caderneta online, que pode ser ser acessada por
                                        qualquer dispositivo online conectado à internet.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq2" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-22 py-4">O que são vacinas?</a>
                            <div id="pb_faq2" class="collapse" role="tabpanel">
                                <div class="py-3">
                                    <p> A vacina é uma importante forma de imunização ativa (quando o próprio corpo
                                        produz os anticorpos) e baseia-se na introdução do agente causador da doença
                                        (atenuado ou inativado) ou substâncias que esses agentes produzem
                                        no corpo de uma pessoa de modo a estimular a produção de anticorpos e células de
                                        memória pelo sistema imunológico. Por causa da produção de anticorpos e células
                                        de memória, a vacina garante que, quando o agente
                                        causador da doença infecta o corpo dessa pessoa, ela já esteja preparada para
                                        responder de maneira rápida, antes mesmo do surgimento dos sintomas da doença. A
                                        vacina é, portanto, uma importante forma de prevenção
                                        contra doenças. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq3" aria-expanded="false" aria-controls="pb_faq3" class="pb_font-22 py-4">Qual a história das vacinas?</a>
                            <div id="pb_faq3" class="collapse" role="tabpanel">
                                <div class="py-3">
                                    <p>A vacina surgiu em um importante momento histórico de combate à varíola, uma das
                                        doenças mais temidas no mundo no século XVIII, com taxa de mortalidade em torno
                                        de 10 a 40%. </p>
                                    <p> A descoberta de que os sobreviventes não contraiam a doença novamente, trouxe à
                                        tona a ideia de provocar a enfermidade de forma branda para evitar que ela fosse
                                        contraída de maneira mais potente.
                                    </p>
                                    <p> Essa prática ficou conhecida como variolação e acredita-se que ela tenha surgido
                                        inicialmente entre os chineses, mas era conhecida por diversos povos da África e
                                        da Ásia, como os hindus, egípcios, persas, circassianos,
                                        georgianos e árabes.</p>
                                    <p> Em 1798, vieram a público as investigações feitas pelo médico inglês Edward
                                        Jenner.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq4" aria-expanded="false" aria-controls="pb_faq4" class="pb_font-22 py-4">Qual a importância das vacinas?</a>
                            <div id="pb_faq4" class="collapse" role="tabpanel">
                                <div class="py-3">
                                    <p>A vacina é uma importante aliada no controle, combate e eliminação de doenças,
                                        pois protege não apenas quem a recebe, mas também a comunidade como um todo.
                                        Isso significa que quanto maior o número de pessoas protegidas
                                        pela vacina, menor será a chance de qualquer indivíduo de uma comunidade –
                                        vacinado ou não – ser contaminado.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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