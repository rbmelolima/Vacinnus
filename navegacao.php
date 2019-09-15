<?php
return array(
    //Sidebar da área administrativa
    'sidebarADMIN' => '
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">
                <div class="sidebar-brand-text mx-3" style="color: white">Vaccinus</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="VACINAS.php">
                    <span>Vacinas</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="COMING.php">
                    <span>Perfil Médico</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="COMING.php">
                    <span>Enciclopédia</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link" href="COMING.php">
                    <span>Histórico</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>    
    ',

    //rodapé da área administrativa
    'footerADMIN' => '
    <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Vaccinus by Roger Bernardo</span>
        </div>
    </div>
    </footer>     
    ',

    //header da página inicial e afins
    'headerINDEX' => '    

    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
    <a class="navbar-brand" href="index.php">Vaccinus</a>
    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span><i class="ion-navicon"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="probootstrap-navbar">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item"><a class="nav-link" href="index.php#anchor_sobre">Sobre</a></li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown"> Doenças </a>
    <div class="dropdown-menu">
    <a class="dropdown-item" href="D-tuberculose.php">Tuberculose</a>
    <a class="dropdown-item" href="D-poliomelite.php">Poliomielite</a>
    <a class="dropdown-item" href="D-sarampo.php">Sarampo</a>
    <a class="dropdown-item" href="D-rubeola.php">Rubéola</a>
    <a class="dropdown-item" href="D-caxumba.php">Caxumba</a>
    <a class="dropdown-item" href="D-hepatite.php">Hepatite B</a>
    <a class="dropdown-item" href="D-febre.php">Febre Amarela</a>
    <a class="dropdown-item" href="D-difteria.php">Difteria</a>
    <a class="dropdown-item" href="D-coqueluche.php">Coqueluche</a>
    <a class="dropdown-item" href="D-meningite.php">Meningite</a>
    <a class="dropdown-item" href="D-gripe.php">Gripe</a>
    <a class="dropdown-item" href="D-pneumonia.php">Pneumonia</a>
    </div>
    <li class="nav-item"><a class="nav-link" href="index.php">Cadastre-se</a></li>
    <li class="nav-item"><a class="nav-link" href="LOGIN.php">Login</a></li>
    </ul>
    </div>
    </div>
    </nav>
    ',

    //footer da página inicial e afins
    'footerINDEX' => '   
    <footer class="pb_footer bg-light" role="contentinfo">
    <div class="container">
    <div class="row text-center">
    <div class="col">
    <ul class="list-inline">
    <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-facebook"></i></a></li>
    <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-github"></i></a></li>
    <li class="list-inline-item"><a href="#" class="p-2"><i class="fa fa-linkedin"></i></a></li>
    </ul>
    </div>
    </div>
    <div>
    <div class="row">
    <div class="col text-center">
    <p class="pb_font-14">Roger Bernardo de Melo Lima <br> 2019</p>
    </div>
    </div>
    </div>
    </footer>
   
    ',

);
