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
        
             <!-- HERO        -->
        <section class="bgimage" style="background: url('http://localhost/Cinema/public/img/bg.jpg') !important;">
            <div class="container-fluid">
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="container">
                        <div class="row justify-content-center mt-5">
                            <!-- <div class="col text-center text-light mt-5">
                            </div> -->
                        </div>

                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- END HERO -->
            
        <!-- BODY -->

        <div class="container-fluid mt--11 px-5">
        <div class="row">
            <div id="formRooms" class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
                <div class=" card  shadow bg-secondary">
                    <div class="card-header border-0">

                        <div class="row justify-content-between ">
                            <div class="col-9">
                                <h5 class="mb-0 p-2 text-uppercase text-white"> Form. de Salas de Projeção</h5>
                            </div>
                            <div class=" col-sm-2 col-3 col-md-2 col-lg-2" id="ex4">
                                <a href="#listRooms" class="btn btn-info btn-sm p- rounded float-end">
                                    <i class="fa fa-list">Listar</i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class='card-body bg-dark'>

                        <form action="../Models/Database.php" method="POST" name="register" id="register">
                            <div class="row ">
                                <div class=" col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
                                    <input required type="text" required class="form-control form-contro" id="name" name="name" placeholder="Nome">
                                </div>
        
                                <div class=" col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="input-group">
                                        <input required name="capacity" value="1" min="5" type="number" class="form-control" id="capacity" placeholder="Capacidade Máxima">
                                    </div>
                                </div>
                            </div>


                            <div class="float-end">
                                <button type="reset" class="btn btn-secondary   btn-s px-5 mb-2 " type="submit">Limpar</button>
                                <button class="btn btn-primary pl-3  btn-s px-5 mb-2" type="submit">Guardar</button>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </div>

        <div class="row mt-3 mb-4">
            <div id="listRooms" class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
                <div class=" card  shadow bg-secondary">
                    <div class="card-header border-0">

                        <div class="row justify-content-between ">
                            <div class="col-9">
                                <h5 class="mb-0 p-2 text-uppercase text-white"> Lista De Sala</h5>
                            </div>
                            <div class=" col-sm-2 col-3 col-md-2 col-lg-2" id="ex4">
                                <a href="#formRooms" class="btn btn-info btn-sm p- rounded float-end">
                                    <i class="fa fa-plus">Nova</i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class='card-body bg-light table-responsive'>

                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Capacidade</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Criação</th>
                                    <th scope="col">Actualização</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Nome</th>
                                    <td>Mark</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm">Activo</a></td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

    </div>



        <!-- END BODY -->




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
                    <a href="<?=ROOT?>/Admin/Bookings">
                        <i class="fa fa-shopping-cart fa-2x"></i>
                        <span class="nav-text">
                            Pedidos
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav ">
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
                <li class="has-subnav active">
                    <a href="#">
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
                <li>
                   <a href="<?=ROOT?>/Admin/UsersManage">
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