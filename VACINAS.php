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
            margin: 10px 5px 10px 5px;
            padding: 15px;
            background-color: white;
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
                    <div class="row">
                        <?php

                        function data($data)
                        {
                            return date("d/m/Y", strtotime($data));
                        }

                        include("CONEXAO.php");

                        $cpf = $_SESSION['cpf'];
                        $sql = "SELECT * FROM vacina WHERE cpf = '$cpf'";
                        $result = mysqli_query($conn, $sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<div class=\"col-md-3 vacina border-left-info\">";
                                echo "<form action=\"\" method=\"post\">";
                                echo "<div class=\"cabecalho\">";
                                echo "<p class=\"bold\">" . $row['nome'] . "</p>";
                                echo "</div>";
                                echo "<div class=\"conteudo\">";
                                echo "<input type='hidden' value='" . $row['ID'] . "' name='vacinaid' />"; //added                           
                                echo "<p><span class=\"bold\"> Data: </span>" .  data($row['dia']) . "</p>";
                                echo "<p><span class=\"bold\"> Lote: </span>" .  $row['codigo'] . "</p>";
                                echo "<p><span class=\"bold\"> Dose: </span>" . $row['dose'] . " dose(s)</p>";
                                echo "<p><span class=\"bold\"> Lugar: </span>" .  $row['lugar'] . "</p>";
                                echo "<a href='ALTERARVACINAS.php?id=" . $row['ID'] . "' class='btn btn-primary' name=\"id\">Editar</a>";
                                echo "<button type=\"submit\" class=\"btn btn-light\" name=\"delete\"> Excluir </button>";
                                echo "</div>";
                                echo "</form>";
                                echo "</div>";
                            }
                        }

                        if (isset($_POST['add'])) {
                            $vacina = $_POST['vacina'];
                            $data = $_POST['data'];
                            $local = $_POST['local'];
                            $dose = $_POST['dose'];
                            $lote = $_POST['lote'];
                            $cpf = $_SESSION['cpf'];

                            if ($vacina != null && $data != null && $local != null && $dose != null && $lote != null) {
                                $sql = "insert into vacina (nome, lugar, dia, codigo, dose, cpf) values ('$vacina','$local','$data' ,'$lote', '$dose', '$cpf');";

                                if (mysqli_query($conn, $sql)) {
                                    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=VACINAS.php'>";
                                } else {
                                    echo "<div class=\"alert alert-danger\" role=\"alert\"> Erro </div>";
                                }
                                mysqli_close($conn);
                            }
                        }

                        if (isset($_POST['delete'])) {
                            $cpf = $_SESSION['cpf'];
                            $sql = "delete from vacina where cpf = " . $cpf . " and ID = " . $_POST['vacinaid'] . ";";

                            if (mysqli_query($conn, $sql)) {
                                echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=VACINAS.php'>";
                            } else {
                                echo "<div class=\"alert alert-danger\" role=\"alert\"> Erro </div>";
                            }
                            mysqli_close($conn);
                        }
                        ?>
                        <div class="col-md-3 vacina border-left-info">
                            <form action="" class="form-group" method="post" target="_self">
                                <div class="cabecalho">
                                    <div class="form-group">
                                        <label for="vacina"><b> Nome da Vacina</b></label>
                                        <select class="custom-select" name="vacina" placeholder="Nome da Vacina">
                                            <option value="BCG (Tuberculose)">BCG (Tuberculose)</option>
                                            <option value="DTP">DTP</option>
                                            <option value="dTpa">dTpa</option>
                                            <option value="Dupla Adulto">Dupla Adulto</option>
                                            <option value="Dupla Viral">Dupla Viral</option>
                                            <option value="Febre Amarela">Febre Amarela</option>
                                            <option value="Gripe">Gripe</option>
                                            <option value="Hepatite A">Hepatite A</option>
                                            <option value="Hepatite B">Hepatite B</option>
                                            <option value="HPV">HPV</option>
                                            <option value="Meningocócica C<">Meningocócica C</option>
                                            <option value="Pentavalente">Pentavalente</option>
                                            <option value="Pneumocócica 10 Valente">Pneumocócica 10 Valente</option>
                                            <option value="Pneumocócica 23 Valente">Pneumocócica 23 Valente</option>
                                            <option value="Rotavírus">Rotavírus</option>
                                            <option value="Tetra viral">Tetra viral</option>
                                            <option value="Tríplice viral">Tríplice viral</option>
                                            <option value="Vacina Inativada Poliomielite (VIP)">Vacina Inativada Poliomielite (VIP)</option>
                                            <option value="Vacina Oral Poliomielite (VOP)">Vacina Oral Poliomielite (VOP)</option>
                                            <option value="Varicela atenuada">Varicela atenuada</option>
                                            <option value="Herpes">Herpes</option>
                                            <option value="Dengue">Dengue</option>
                                            <option value="Catapora">Catapora</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="conteudo">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="dose" name="dose" placeholder="Dose" min="0" max="15">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="lote" name="lote" placeholder="Lote">
                                    </div>

                                    <div class="form-group">
                                        <input type="date" class="form-control" id="data" name="data">
                                    </div>

                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Local" name="local" placeholder="Local">
                                    </div>

                                    <button type="submit" class="btn btn-primary" name="add" value="add"> Cadastrar
                                    </button>
                                    <button type="reset" class="btn btn-light">Limpar</button>
                                </div>
                            </form>
                        </div>
                    </div> <!-- Fim da row -->
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