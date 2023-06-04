<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/brands.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/regular.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/solid.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
    <script src="<?=ROOT?>/assets/js/bootstrap.bundle.min.js"></script>

    <title><?=PROJ_NAME?></title>

  </head>
  <body>

  <header class=" bg bg-dark fixed-top">
        <!-- Navbar -->
        <nav class="navbar container navbar-expand-lg navbar-dark bg-dark" >
            <div class="container-fluid">
            <a class="navbar-brand " href="<?=ROOT?>"><?=PROJ_NAME?></a>
            <!-- <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarExample01"
                aria-controls="navbarExample01"
                aria-expanded="false"
                aria-label="Toggle navigation"
            > -->

            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarExample01" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            

            <div class="collapse navbar-collapse" id="navbarExample01">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link text-warning" aria-current="page"href="<?=ROOT?>/"> <i class="fa-solid fa-house text-warning"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="">  <i class="fa-solid fa-star text-warning"></i> Estreias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="">  <i class="fa-solid fa-heart text-warning"></i> Populares </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="">  <i class="fa-solid fa-list text-warning"></i> Categorias </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="">  <i class="fa-solid fa-tasks text-warning"></i> Pedidos </a>
                    </li>
                </ul>
                <ul  class="navbar-nav  mb-2 mb-lg-0">
                    <?php if( !Auth::is_logged()) echo ' 
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="'. ROOT .'/user/register">  <i class="fa-solid fa-user-plus text-warning"></i> SignIn </a>
                    </li>
                    <li class="nav-item">
                        <a  class="text-warning nav-link" href="'. ROOT .'/user/login">  <i class="fa-solid fa-sign-in text-warning"></i> Login </a>
                    </li>
                    '; else echo '
                    <div class="dropdown">
                        <a class="nav-link text-warning dropdown-toggle" href="'. ROOT .'/user/login" data-bs-toggle="dropdown" aria-expanded="false">'. Auth::user()->name  .' <i class="fa-solid fa-user "></i>  </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#"> <i class="fa-solid fa-user-cog"></i> Perfil</a></li>
                            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-cart-shopping"></i>   Carrinha</a></li>
                            <li><a class="dropdown-item bg-danger text-white" href="'. ROOT . '/User/Logout"> <i class="fa-solid fa-power-off text-white"></i> Logout</a></li>
                        </ul>
                    </div>
                    ' ;
                    
                    ?>
                </ul>
            </div>
            </div>
        </nav>
        <!-- Navbar -->

    </header>
