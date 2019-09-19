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
    <link rel="stylesheet" href="CSS/ancestral.css" type="text/css">
    <link rel="stylesheet" href="CSS/fontawesome-free/css/all.css" type="text/css">
    <link rel="stylesheet" href="CSS/fontawesome-free/css/fontawesome.css" type="text/css">
    <link rel="stylesheet" href="CSS/ionicons/css/ionicons.css" type="text/css">
</head>

<body>
    <header>
        <?php echo $importarhtml["headerINDEX"]; ?>
    </header>
    <section class="pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light" id="anchor_login">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-5 relative align-self-center">
                    <form action="" method="post" class="bg-white rounded pb_form_v1">
                        <h2 class="mb-4 mt-0 text-center">Login</h2>
                        <div class="form-group">
                            <input type="text" class="form-control pb_height-50 reverse" placeholder="CPF" name="cpf">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control pb_height-50 reverse" placeholder="Senha" name="senha">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue" value="Entrar" name="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    if (isset($_POST['login'])) {
        include("CONEXAO.php");
        $cpf = $_POST['cpf'];
        $senha = MD5($_POST['senha']);
        $verificar = $cpf / 2;
        if (empty($cpf) || empty($senha)) {
            echo "<div class=\"alert alert-danger\" role=\"alert\">";
            echo "Erro";
            echo "</div>";
        } else {
            if (is_numeric($verificar)) {
                $sql = "select * from pessoa WHERE cpf = '$cpf' and senha = '$senha';";
                $result = mysqli_query($conn, $sql);
                $linhasafetadas = mysqli_num_rows($result);
                if ($linhasafetadas > 0) {
                    $_SESSION['cpf'] = $cpf;
                    $_SESSION['senha'] = $senha;
                    header("Location: PERFIL.php");
                } else {
                    session_destroy();
                    header("Location: INDEX.php");
                }
            }
        }
    }
    ?>

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