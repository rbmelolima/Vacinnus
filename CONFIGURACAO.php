<?php $importarhtml = include("navegacao.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Vaccinus</title>
    <meta name="description" content="Carteira de vacinação online">
    <meta name="keywords" content="Carteira de vacinação">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600|Montserrat:200,300,400" rel="stylesheet">
    <link rel="stylesheet" href="CSS/bootstrap/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="CSS/sb-admin-2.css">

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
                        <i class="fa fa-bars"></i>
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
                                <i class="fas fa-bell fa-fw"></i>
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
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
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
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <a class="dropdown-item" href="CONFIGURACAO.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configurações
                                </a>
                                <a class="dropdown-item" href="LOGOUT.php">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
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
                            echo "O email antigo e o novo não podem ser iguais.";
                        } else {
                            $sql = "update pessoa set email = '$novo' where cpf = " . $cpf . ";";
                            if (mysqli_query($conn, $sql)) {
                                echo "<h3> Alterado com sucesso </h3>";
                            } else {
                                echo " <h3> Erro ao alterar: </h3>" . $sql . "<br>" . mysqli_error($conn);
                            }
                            mysqli_close($conn);
                        }
                    } else if (isset($_POST['alterarsenha'])) {
                        $antigo = $_POST['senha1'];
                        $novo = $_POST['senha2'];
                        $criptografar = MD5($novo);
                        if ($antigo == $novo) {
                            echo "A senha antiga e a nova não podem ser iguais.";
                        } else {
                            $sql = "update pessoa set senha = '$criptografar' where cpf = " . $cpf . ";";
                            if (mysqli_query($conn, $sql)) {
                                echo "<h3> Alterado com sucesso </h3>";
                            } else {
                                echo " <h3> Erro ao alterar: </h3>" . $sql . "<br>" . mysqli_error($conn);
                            }
                            mysqli_close($conn);
                        }
                    } else if (isset($_POST['excluirconta'])) {
                        $ok1 = $_POST['confirm1'];
                        $ok2 = $_POST['confirm2'];
                        $sql = "delete from pessoa where cpf = " . $cpf . ";";
                        $sql2 = "delete from vacina where cpf = " . $cpf . ";";
                        if (mysqli_query($conn, $sql2)) {
                            if (mysqli_query($conn, $sql)) {
                                session_destroy();
                                header("Location: index.php");
                            }
                        } else {
                            echo " <h3> Erro ao alterar: </h3>" . $sql . "<br>" . mysqli_error($conn);
                        }
                        mysqli_close($conn);
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

                                        <button type="submit" class="btn btn-success" name="excluirconta"> Excluir
                                        </button>
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

        <script src="JS/jquery.min.js"></script>
        <script src="JS/popper.min.js"></script>
        <script src="JS/bootstrap.min.js"></script>
        <script src="JS/slick.min.js"></script>
        <script src="JS/jquery.mb.YTPlayer.min.js"></script>
        <script src="JS/jquery.waypoints.min.js"></script>
        <script src="JS/jquery.easing.1.3.js"></script>
        <script src="JS/main.js"></script>
        <script src="JS/sb-admin-2.min.js"></script>
</body>

</html>