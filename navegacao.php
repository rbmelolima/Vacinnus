<?php
return array(
    //Sidebar da área administrativa
    'sidebarADMIN' => '
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-icon">
        <img src="IMG/drop.png"/>
    </div>
    <div class="sidebar-brand-text mx-3">Vaccinus</div>
    </a>
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
    <a class="nav-link" href="VACINAS.php">
    <img src="IMG/vaccine.png"/><span> Vacinas</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="COMING.php">
        <img src="IMG/doctor.png"/><span> Perfil Médico</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="COMING.php">
        <img src="IMG/book.png"/><span> Enciclopédia</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <li class="nav-item active">
        <a class="nav-link" href="COMING.php">
        <img src="IMG/history.png"/><span> Histórico</span></a>
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
            <span>Vaccinus© 2019</span>            
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
    <div class="row">
    <div class="col text-center">
    <p class="pb_font-14"><b>Vaccinus©</b><br> 2019</p>
    </div>
    </div>
    </footer>   
    ',

);
