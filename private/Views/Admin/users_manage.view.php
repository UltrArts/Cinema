<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style_sidebar.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/bootstrap.min.css.map">
    <link rel="stylesheet" href="<?=ROOT?>/assets/css/style.css">
    <script src="<?=ROOT?>/assets/js/bootstrap.bundle.min.js"></script>

    <title><?=PROJ_NAME?></title>
 
  </head>
  <body>
    <!-- MAIN ONTENT -->
    <div class="area">
        
                    
        <section class="bgimage" style="background: url('http://localhost/Cinema/public/img/bg.jpg') !important;">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <!-- <div class="col text-center text-light mt-5">
                            </div> -->
                            <div class="col-sm-12 col-md-4 py-3 px-4"  data-aos="fade-right">
                                <div class="rounded card bg-dark bg-gradient  border border-info ">
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <h5 class="card-title  text-info"> <i class="fa fa-filme" aria-hidden="true">Filmes</i></h5>
                                            </div>
                                            <div class="col-6 text-white">
                                                <h2 class="card-text text-end fw-bold text-info">67</h2>
                                            </div>
                                            <p class="text-white font-monospace">Total de Filmes Registados</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 py-3 px-4">
                                <div class="rounded card bg-secondary bg-gradient border border-light">
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-6 ">
                                                <h5 class="card-title "> <i class="fa fa-users" aria-hidden="true">Clientes</i></h5>
                                            </div>
                                            <div class="col-6 text-white">
                                                <h2 class="card-text text-end fw-bold">23</h2>
                                            </div>
                                            <p class="text-white font-monospace">Total de Clientes Registados</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4 py-3 px-4">
                                <div class="rounded card bg-light bg-gradient border border-danger">
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-6">
                                                <h5 class="card-title text-danger"> <i class="fa fa-shopping-cart" aria-hidden="true">Pedidos</i></h5>
                                            </div>
                                            <div class="col-6 text-white">
                                                <h2 class="card-text text-end fw-bold text-danger">0</h2>
                                            </div>
                                            <p class="text-black font-monospace">Pedidos Recentes</p>
                                        </div>                                    
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                </div>
            </div>
        </section>

            



    </div>

    <!-- END MAIN CONTENT -->
        <nav class="main-menu">
            <ul>
                <li>
                    <a class="" href="<?=ROOT?>/Admin">
                        <i class="fa fa-home fa-2x"></i>
                        <span class="nav-text">
                           Dashboard
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="<?=ROOT?>/Admin/Booking">
                        <i class="fa fa-shopping-cart fa-2x"></i>
                        <span class="nav-text">
                            Pedidos
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="<?=ROOT?>/Admin/Movies">
                       <i class="fa fa-film fa-2x"></i>
                        <span class="nav-text">
                            Filmes
                        </span>
                    </a>
                    
                </li>
                <li>
                    <a href="<?=ROOT?>/Admin/Sessions">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                           Sessòes
                        </span>
                    </a>
                </li>
                <li>
                    <a href="<?=ROOT?>/Admin/Rooms">
                        <i class="fa fa-laptop fa-2x"></i>
                        <span class="nav-text">
                            Salas De Projecção
                        </span>
                    </a>
                </li>
                <li class="has-subnav">
                    <a href="<?=ROOT?>/Admin/Tickets">
                       <i class="fa fa-ticket fa-2x"></i>
                        <span class="nav-text">
                            Tickets
                        </span>
                    </a>
                   
                </li>
                <li  class="has-subnav active">
                   <a href="#">
                       <i class="fa fa-users fa-2x"></i>
                        <span class="nav-text">
                            Usuários
                        </span>
                    </a>
                </li>
                <li>
                   <a href="<?=ROOT?>/Admin/Profile">
                        <i class="fa fa-cogs fa-2x"></i>
                        <span class="nav-text">
                            Perfil
                        </span>
                    </a>
                </li>
            </ul>

            <ul class="logout">
                <li>
                   <a class=" text-danger" href="<?=ROOT?>/User/logout">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Logout
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>

        <script src="<?=ROOT?>/assets/js/bootstrap.js"></script>
        <script src="<?=ROOT?>/assets/js/jquery-3.7.0.min"></script>
  </body>
 </html>