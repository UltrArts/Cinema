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
    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->
    <script src="<?=ROOT?>/assets/js/sweetalert.min.js"></script>
    <script src="<?=ROOT?>/assets/js/jquery-3.7.0.min.js"></script>

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
            <div id="formSessions" class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
                <div class=" card  shadow bg-secondary">
                    <div class="card-header border-0">

                        <div class="row justify-content-between ">
                            <div class="col-9">
                                <h5 class="mb-0 p-2 text-uppercase text-white"> Nova Sessão</h5>
                            </div>
                            <div class=" col-sm-2 col-3 col-md-2 col-lg-2" id="ex4">
                                <button   onclick="toggleDivs('listSessions', 'formSessions')"  class="btn btn-info btn-sm  rounded float-end">
                                    <i class="fa fa-list">Listar</i>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class='card-body bg-dark'>

                        <form  method="POST" name="sessionsForm" id="sessionsForm">
                        <input type="hidden" id="link" value="<?=ROOT?>/Admin/Rooms"> 

                            <div class="row ">

                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
                                    <select class="form-select text-center " name="movie" id="movie">
                                        <option selected value="" multiple>-- FILME --</option>
                                        <?php if(!empty($movies) > 0){ ?>
                                            <?php foreach($movies as $movie){ ?>
                                                <option  value="<?=$movie->id ?>" ><?=$movie->title ?></option>
                                            <?php }?>
                                        <?php  }?>
                                    </select>
                                    <small id="movieError" class='text-danger text-left d-none'></small>
                                </div>
                                
                                <div class=" col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
                                    <select class="form-select text-center " name="room" id="room">
                                        <option selected value="" >-- SALA DE PROJECÇÃO --</option>
                                        <?php if(!empty($rooms) > 0){ ?>
                                            <?php foreach($rooms as $room){ ?>
                                                <option  value="<?=$room->id ?>" multiple><?=$room->name ?></option>
                                            <?php }?>
                                        <?php  }?>
                                    </select>
                                    <small id="roomError" class='text-danger text-left d-none'></small>
                                </div>
                                
                            </div>
                            <div class="row ">
                                <div class=" col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
                                    <div class="input-group">
                                        <input name="price" type="number"  class="form-control" id="price" placeholder="Preço(Mt)">
                                    </div>
                                    <small id="priceError" class='text-danger text-left d-none'></small>
                                </div>
                                
        
                                <div class=" col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 mb-3">
                                    <div class=" input-group mb-3">
                                        <span class="input-group-text" id="basic-addon3">Data e hora</span>
                                        <input type="datetime-local" name="time_init"  class="form-control" id="time_init" aria-describedby="basic-addon3">
                                    </div>
                                    <small id="time_initError" class='text-danger text-left d-none'></small>
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

        <div class="row mb-4">
            <div id="listSessions" class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12 d-none">
                <div class=" card  shadow bg-secondary">
                    <div class="card-header border-0">

                        <div class="row justify-content-between ">
                            <div class="col-9">
                                <h5 class="mb-0 p-2 text-uppercase text-white"> Lista De Sessões</h5>
                            </div>
                            <div class=" col-sm-2 col-3 col-md-2 col-lg-2" id="ex4">
                                <button  onclick="toggleDivs('formSessions', 'listSessions')" class="btn btn-info btn-sm p- rounded float-end">
                                    <i class="fa fa-plus">Nova</i>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class='card-body bg-light table-responsive'>
                    <?php if(! empty($rooms)) { ?>
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Filme</th>
                                    <th scope="col">Sala</th>
                                    <th scope="col">Preço</th>
                                    <th scope="col">Dia e Hora</th>
                                    <th scope="col">Duração</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Criação</th>
                                    <th scope="col">Actualização</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php foreach($sessions as $session){ ?>
                                <tr>
                                    <th scope="row"> <?=$session->title ?></th>
                                    <td><?=$session->room ?></td>
                                    <td><?=$session->price ?>Mt</td>
                                    <td><?=dateTime($session->time_init) ?></td>
                                    <td><?=$session->duration ?></td>
                                    <td>
                                    <?php if($session->status) {?>
                                        <a href="" class="btn btn-success btn-sm">Activo</a></td>
                                    <?php }else{ ?>
                                        <a href="" class="btn btn-warning btn-sm">Inactivo</a></td>
                                    <?php } ?>
                                    <td><?=diffForHumans($session->created_at)?></td>
                                    <td><?=diffForHumans($session->updated_at) ?></td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    <?php } ?>
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
                <li class="has-subnav active">
                    <a href="#">
                        <i class="fa fa-book fa-2x"></i>
                        <span class="nav-text">
                           Sessões
                        </span>
                    </a>
                </li>
                <li class="">
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
                <li>
                   <a href="<?=ROOT?>/">
                        <i class="fa fa-arrow-left fa-2x"></i>
                        <span class="nav-text">
                            Página Inicial
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

        

    <script>
        function toggleDivs(showDivId, hideDivId) {
            var showDiv = document.getElementById(showDivId);
            var hideDiv = document.getElementById(hideDivId);
            
            showDiv.classList.remove('d-none');
            hideDiv.classList.add('d-none');
        }



        $(document).ready(function() {
            function inputError(errorList) {
                var form = document.getElementById('sessionsForm');
                var elementos = form.querySelectorAll("[id]");

                for (var i = 0; i < elementos.length; i++) {
                    var elemento = elementos[i];
                    var idField = elemento.id;
                    var smallElement = document.getElementById(idField + 'Error');

                    if (errorList.hasOwnProperty(idField)) {
                        elemento.classList.add('is-invalid');
                        elemento.classList.remove('is-valid');
                        if (smallElement) {
                            smallElement.classList.remove('d-none');
                            smallElement.innerHTML = errorList[idField];
                        }
                    } else {
                        elemento.classList.add('is-valid');
                        elemento.classList.remove('is-invalid');
                        if (smallElement) {
                            smallElement.classList.add('d-none');
                        }
                    }
                }
            }


            function clearForm() {
                var form = document.getElementById('sessionsForm');
                var elements = form.querySelectorAll("[id]");

                for (var i = 0; i < elements.length; i++) {
                    var element = elements[i];
                    var smallElement = document.getElementById(element.id + 'Error');

                    element.classList.remove('is-valid');
                    element.classList.remove('is-invalid');

                    if (smallElement) {
                    smallElement.classList.add('d-none');
                    }
                }

                // Limpar o formulário
                form.reset();
            }




            $("#sessionsFor").submit(function(event) {
                // swal("Registo Salas", "Sala gravada com suesso!", "success");
                event.preventDefault();
                var formData = new FormData(this);
                var link = document.getElementById("link").value;
                $.ajax({
                    url: link,
                    type: "POST",
                    data: formData,
                    dataType: "json", // Define o tipo de dados esperado como JSON
                    processData: false,
                    contentType: false,
                    success: function(response) {
                        if (response.error) {
                            inputError(response);
                        }else{
                            if(response.status){
                                swal("Registo Salas", "Sala gravada com suesso!", "success");
                                clearForm();
                            }else{
                                swal("ERRO", "ERRO: "+response.error, "error");
                            }
                        }

                        // Cria uma nova linha com os dados recebidos
                        // var novaLinha = "<tr><td>" + response.nome + "</td><td>" + response.idade + "</td></tr>";

                        // // Adiciona a nova linha no início da tabela
                        // $("#tabela_estudantes tbody").prepend(novaLinha);

                        // // Limpa os campos do formulário
                        // $("#nome").val("");
                        // $("#idade").val("");
                    }
                });
            });
        });


    </script>

        


        <script src="<?=ROOT?>/assets/js/bootstrap.js"></script>
  </body>
 </html>