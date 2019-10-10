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
    <!-- manter sempre por último -->
    <link rel="stylesheet" href="CSS/ancestral.css" type="text/css">
</head>

<body>
    <?php echo $importarhtml["headerINDEX"]; ?>

    <div>
        <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="anchor_login">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6">
                        <h2 class="heading mb-3">Vacinnus</h2>
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
                            <button type="submit" class="btn btn-primary" name="cadastrar">Cadastrar</button>
                            <button type="reset" class="btn bg-light">Limpar</button>
                            <br> <br>
                            <p>Tem uma conta?<a href="LOGIN.php"> Faça o login!</a></p>



                            <?php
                            if (isset($_POST['cadastrar'])) {
                                //Conectar com o banco de dados
                                $servidor = "localhost";
                                $bancodedados = "vacinnus";
                                $user = "root";
                                $palavrapasse = "";
                                $conn = mysqli_connect($servidor, $user, $palavrapasse, $bancodedados);

                                //Variáveis do usuário
                                $nome = $_POST['nome'];
                                $datanasc = $_POST['datanasc'];
                                $celular = $_POST['celular'];
                                $cep = str_replace(array('-', '.'), '', $_POST['cep']);
                                $cpf = str_replace(array('-', '.'), '', $_POST['cpf']);
                                $email = $_POST['email'];
                                $senha = MD5($_POST['senha']);
                                $senha1 = MD5($_POST['senha1']);

                                $permissao = true;
                                //Validação de campos vazios
                                if (empty($nome) || empty($datanasc) || empty($celular) || empty($cep) || empty($cpf) || empty($email) || empty($senha1) || empty($senha)) {
                                    $permissao = false;
                                    echo "<div class=\"alert alert-warning\" role=\"alert\"> Todos os campos devem ser preenchidos </div>";
                                } 
                                //Verificação de senhas iguais
                                else if ($senha != $senha1) {
                                    $permissao = false;
                                    echo "<div class=\"alert alert-warning\" role=\"alert\"> As senhas devem ser iguais </div>";
                                }
                                if ($permissao) {
                                    // Verificação de CPF exisente no banco de dados
                                    $sql = "select * from pessoa WHERE cpf = '$cpf';";
                                    $result = mysqli_query($conn, $sql);
                                    $linhasafetadas = mysqli_num_rows($result);
                                    if ($linhasafetadas > 0) {
                                        echo "<div class=\"alert alert-danger\" role=\"alert\"> CPF já cadastrado! </div>";
                                    } else {
                                        $sql = "insert into pessoa (nome, datanasc, celular, cep, cpf, email, senha) values ('$nome','$datanasc','$celular', '$cep', '$cpf', '$email', '$senha');";
                                        if (mysqli_query($conn, $sql)) {
                                            echo "<div class=\"alert alert-success\" role=\"alert\"> Cadastrado com sucesso! </div>";
                                        } else {
                                            echo "<div class=\"alert alert-danger\" role=\"alert\"> Não foi possível cadastrá-lo! </div>";
                                        }
                                    }
                                }
                                mysqli_close($conn);
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <section class="pb_section bg-light pb_slant-white">
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
                            <p class="text-sans-serif">Acesse suas vacinas de onde você estiver, quando você quiser.</p>
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
                            <p class="text-sans-serif">Tão simples quanto usar o papel, usável por qualquer pessoa.
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
                            <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq1" aria-expanded="false" aria-controls="pb_faq1" class="pb_font-16 py-4">O que é o Vacinnus?</a>
                            <div id="pb_faq1" class="collapse" role="tabpanel">
                                <div class="py-3">
                                    <p>
                                        Desde o nascimento, os brasileiros devem receber as vacinas indicadas para cada
                                        etapa de suas vidas. O registro de vacinas é feito em uma caderneta de papel,
                                        que pode ser facilmente extraviada ou estragada, deixando a pessoa sem esse
                                        importante documento.
                                        Refletindo sobre esse problema, foi proposto desenvolver um projeto com a
                                        finalidade de repará-lo. Vacinnus é uma aplicação web que procura deixar mais
                                        prático e seguro o controle das vacinas tomadas por um
                                        indivíduo, através de uma caderneta online, que pode ser ser acessada por
                                        qualquer dispositivo online conectado à internet.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq2" aria-expanded="false" aria-controls="pb_faq2" class="pb_font-16 py-4">O que são vacinas?</a>
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
                            <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq3" aria-expanded="false" aria-controls="pb_faq3" class="pb_font-16 py-4">Qual a história das vacinas?</a>
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
                            <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq4" aria-expanded="false" aria-controls="pb_faq4" class="pb_font-16 py-4">Qual a história das vacinas no Brasil?</a>
                            <div id="pb_faq4" class="collapse" role="tabpanel">
                                <div class="py-3">
                                    <p>O êxito das Campanhas de Vacinação contra a varíola na década dos anos sessenta mostrou que a vacinação em massa tinha o poder de erradicar a doença. O último caso de varíola notificado no Brasil foi em 1971 e, no mundo, em 1977 na Somália.</p>
                                    <p>Em 1973 foi formulado o Programa Nacional de Imunizações (PNI), por determinação do Ministério da Saúde, com o objetivo de coordenar as ações de imunizações que se caracterizavam, até então, pela descontinuidade, pelo caráter episódico e pela reduzida área de cobertura. A proposta básica para o Programa, constante de documento elaborado por técnicos do Departamento Nacional de Profilaxia e Controle de Doenças (Ministério da Saúde) e da Central de Medicamentos (CEME - Presidência da República), foi aprovada em reunião realizada em Brasília, em 18 de setembro de 1973, presidida pelo próprio Ministro Mário Machado Lemos e contou com a participação de renomados sanitaristas e infectologistas, bem como de representantes de diversas instituições.</p>
                                    <p>Em 1975 foi institucionalizado o PNI, resultante do somatório de fatores, de âmbito nacional e internacional, que convergiam para estimular e expandir a utilização de agentes imunizantes, buscando a integridade das ações de imunizações realizadas no país. O PNI passou a coordenar, assim, as atividades de imunizações desenvolvidas rotineiramente na rede de serviços e, para tanto, traçou diretrizes pautadas na experiência da Fundação de Serviços de Saúde Pública (FSESP), com a prestação de serviços integrais de saúde através de sua rede própria. A legislação específica sobre imunizações e vigilância epidemiológica (Lei 6.259 de 30-10-1975 e Decreto 78.231 de 30-12-76) deu ênfase às atividades permanentes de vacinação e contribuiu para fortalecer institucionalmente o Programa.</p>
                                    <p>Em seguimento à erradicação da varíola, inicia-se em 1980 a 1ª Campanha Nacional De Vacinação Contra A Poliomielite, com a meta de vacinar todas as crianças menores de 5 anos em um só dia. O último caso de poliomielite no Brasil ocorreu na Paraíba em março de 1989. Em setembro de 1994 o Brasil junto com os demais países da região das Américas, recebeu da Comissão Internacional para a Certificação da Ausência de Circulação Autóctone do Poliovírus Selvagem nas Américas, o Certificado que a doença e o vírus foram eliminados de nosso continente.</p>
                                    <p>De 1990 a 2003, o PNI fez parte da Fundação Nacional de Saúde. A partir de 2003, passou a integrar o DEVEP/SVS - Secretaria de Vigilância em Saúde, inserido na Coordenação Geral do Programa Nacional de Imunizações (CGPNI).</p>
                                    <p>Ao longo do tempo, a atuação do PNI alcançou consideráveis avanços ao consolidar a estratégia de vacinação nacional. As metas mais recentes contemplam a eliminação do sarampo e do tétano neonatal. A essas, se soma o controle de outras doenças imunopreveníveis como Difteria, Coqueluche e Tétano acidental, Hepatite B, Meningites, Febre Amarela, formas graves da Tuberculose, Rubéola e Caxumba em alguns Estados, bem como, a manutenção da erradicação da Poliomielite.</p>
                                    <p>O PNI adquire, distribui e normatiza também o uso dos imunobiológicos especiais, indicados para situações e grupos populacionais específicos que serão atendidos nos Centros de Referência para Imunobiológicos Especiais (CRIE). É também de responsabilidade desta coordenação a implantação do Sistema de Informação e a consolidação dos dados de cobertura vacinal em todo o país.</p>
                                    <p>Destacamos que o objetivo principal do Programa é de oferecer todas as vacinas com qualidade a todas as crianças que nascem anualmente em nosso país, tentando alcançar coberturas vacinais de 100% de forma homogênea em todos os municípios e em todos os bairros.</p>
                                    <p>O PNI é, hoje, parte integrante do Programa da Organização Mundial da Saúde, com o apoio técnico, operacional e financeiro da UNICEF e contribuições do Rotary Internacional e do Programa das Nações Unidas para o Desenvolvimento (PNUD). </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq5" aria-expanded="false" aria-controls="pb_faq5" class="pb_font-16 py-4">Qual a importância das vacinas?</a>
                            <div id="pb_faq5" class="collapse" role="tabpanel">
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

    <section class="pb_section bg-light pb_slant-white">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="text-center mb-5">
                    <h1>Calendário de Vacinação</h1>
                    <p class="legend"> Conteúdo gratuito oferecido pela SBIm</p>
                    <br>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-3 text-center calendario_vac">
                    <a href="DOC/calend-sbim-prematuro.pdf">
                        <img class="img-fluid" src="IMG/icon/pdf.png">
                        <p>Prematuro</p>
                    </a>
                </div>

                <div class="col-3 text-center calendario_vac">
                    <a href="DOC/calend-sbim-crianca.pdf">
                        <img class="img-fluid" src="IMG/icon/pdf.png">
                        <p>Criança</p>
                    </a>
                </div>

                <div class="col-3 text-center calendario_vac">
                    <a href="DOC/calend-sbim-adolescente.pdf">
                        <img class="img-fluid" src="IMG/icon/pdf.png">
                        <p>Adolescente</p>
                    </a>
                </div>

                <div class="col-3 text-center calendario_vac">
                    <a href="DOC/calend-sbim-adulto.pdf">
                        <img class="img-fluid" src="IMG/icon/pdf.png">
                        <p>Adulto</p>
                    </a>
                </div>

                <div class="col-3 text-center calendario_vac">
                    <a href="DOC/calend-sbim-idoso.pdf">
                        <img class="img-fluid" src="IMG/icon/pdf.png">
                        <p>Idoso</p>
                    </a>
                </div>

                <div class="col-3 text-center calendario_vac">
                    <a href="DOC/calend-sbim-gestante.pdf">
                        <img class="img-fluid" src="IMG/icon/pdf.png">
                        <p>Gestante</p>
                    </a>
                </div>

                <div class="col-3 text-center calendario_vac">
                    <a href="DOC/calend-sbim-ocupacional.pdf">
                        <img class="img-fluid" src="IMG/icon/pdf.png">
                        <p> Ocupacional </p>
                    </a>
                </div>

                <div class="col-3 text-center calendario_vac">
                    <a href="DOC/calend-sbim-unico.pdf">
                        <img class="img-fluid" src="IMG/icon/pdf.png">
                        <p>Único</p>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <?php echo $importarhtml["footerINDEX"]; ?>

    <script src="JS/jquery.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/jquery.easing.min.js"></script>
    <script src="JS/chart-area.demo.js"></script>
    <script src="JS/chart-pie.demo.js"></script>
    <script src="JS/Chart.min.js"></script>
    <script src="JS/sb-admin-2.min.js"></script>
</body>

</html>