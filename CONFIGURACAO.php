<?php $importarhtml = include("navegacao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

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
    <link rel="stylesheet" href="CSS/sb-admin-2.css">
    <link rel="stylesheet" href="CSS/ancestral.css" type="text/css">

    <?php
    include('segurança.php');
    proteger();
    ?>

    <style>
        /* Layout das vacinas */
        .vacina {
            padding: 15px;
            margin: 10px;
            background-color: #212121;
            color: whitesmoke;
        }

        .red {
            background-color: #DC353C;
            color: white;
        }

        .bold {
            font-weight: bold;
            text-align: center;
        }

        .cabecalho {
            text-align: center;
        }
    </style>
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php echo $importarhtml["sidebarADMIN"]; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="ion-navicon"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="IMG/icon/smallbell.png" />
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">0</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Central de alertas
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <img src="IMG/icon/notification.png" />
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Exibir data dinamicamente</div>
                                        <span class="font-weight-bold">Nenhuma notificação atual</span>
                                    </div>
                                </a>

                                <a class="dropdown-item text-center small text-gray-500" href="#">Mostrar todas as
                                    notificações</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="img-profile rounded-circle" src="IMG/icon/user.png" />
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                    <?php
                                    include("CONEXAO.php");
                                    $cpf = $_SESSION['cpf'];
                                    $sql = "SELECT nome FROM pessoa WHERE cpf ='$cpf'";
                                    $result = mysqli_query($conn, $sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            echo $row['nome'];
                                        }
                                    }
                                    ?>
                                </span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="PERFIL.php">
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="CONFIGURACAO.php">
                                    Configurações
                                </a>
                                <a class="dropdown-item" href="LOGOUT.php">
                                    Sair
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <!-- Conteúdo da página -->
                <div class="container-fluid">
                    <?php
                    include("CONEXAO.php");
                    $cpf = $_SESSION['cpf'];

                    if (isset($_POST['alteraremail'])) {
                        $antigo = $_POST['email1'];
                        $novo = $_POST['email2'];
                        if ($antigo == $novo) {
                            echo "<div class=\"alert alert-warning\" role=\"alert\"> O email antigo e o novo não podem ser iguais!  </div>";
                        } else if ($antigo != null && $novo != null) {
                            echo "<div class=\"alert alert-warning\" role=\"alert\"> Os campos não podem estar vazios! </div>";
                        } else {
                            $sql = "update pessoa set email = '$novo' where cpf = " . $cpf . ";";
                            if (mysqli_query($conn, $sql)) {
                                echo "<div class=\"alert alert-success\" role=\"alert\"> Sucesso </div>";
                            } else {
                                echo "<div class=\"alert alert-danger\" role=\"alert\"> Erro ao alterar </div>";
                            }
                            mysqli_close($conn);
                        }
                    }

                    if (isset($_POST['alterarsenha'])) {
                        $antigo = $_POST['senha1'];
                        $novo = $_POST['senha2'];
                        $criptografar = MD5($novo);
                        if ($antigo != $novo && $antigo != null && $novo != null) {
                            $sql = "update pessoa set senha = '$criptografar' where cpf = " . $cpf . ";";
                            if (mysqli_query($conn, $sql)) {
                                echo "<div class=\"alert alert-success\" role=\"alert\"> Sucesso </div>";
                            } else {
                                echo "<div class=\"alert alert-danger\" role=\"alert\"> Erro ao alterar </div>";
                            }
                            mysqli_close($conn);
                        }
                    }

                    if (isset($_POST['excluirconta'])) {
                        $ok1 = $_POST['confirm1'];
                        $ok2 = $_POST['confirm2'];

                        if ($ok1 != null && $ok2 != null && ($ok1 == $ok2)) {
                            $sql2 = "delete from vacina where cpf = " . $cpf . ";";
                            $sql = "delete from pessoa where cpf = " . $cpf . ";";                            
                            if (mysqli_query($conn, $sql2)) {
                                if (mysqli_query($conn, $sql)) {
                                    session_destroy();            
                                    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=CONFIGURACAO.php'>";                        
                                }
                            } else {
                                echo "<div class=\"alert alert-danger\" role=\"alert\"> Erro ao excluir </div>";
                            }
                            mysqli_close($conn);
                        }
                    }
                    ?>

                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                        Alterar email
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email1" name="email1" placeholder="Insira seu antigo email">
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email2" name="email2" placeholder="Insira seu novo email">
                                        </div>

                                        <button type="submit" class="btn btn-success" name="alteraremail"> Alterar
                                        </button>
                                        <button type="reset" class="btn btn-danger">Limpar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Alterar senha
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="senha1" name="senha1" placeholder="Insira sua antiga senha">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" id="senha2" name="senha2" placeholder="Insira sua nova senha">
                                        </div>

                                        <button type="submit" class="btn btn-success" name="alterarsenha"> Alterar </button>
                                        <button type="reset" class="btn btn-danger">Limpar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Excluir conta
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="confirm1" name="confirm1" placeholder="Insira sua senha">
                                        </div>

                                        <div class="form-group">
                                            <input type="password" class="form-control" id="confirm2" name="confirm2" placeholder="Confirme sua senha">
                                        </div>

                                        <button type="submit" class="btn btn-success" name="excluirconta"> Excluir </button>
                                        <button type="reset" class="btn btn-danger">Limpar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fim do conteúdo da página -->

                <?php echo $importarhtml["footerADMIN"]; ?>
            </div>
        </div>
    </div>


    <script src="JS/jquery.min.js"></script>
    <script src="JS/popper.min.js"></script>
    <script src="JS/bootstrap.min.js"></script>
    <script src="JS/slick.min.js"></script>
    <script src="JS/jquery.mb.YTPlayer.min.js"></script>
    <script src="JS/jquery.waypoints.min.js"></script>
    <script src="JS/jquery.easing.1.3.js"></script>
    <script src="JS/main.js"></script>
    <script src="JS/sb-admin-2.js"></script>
</body>

</html>