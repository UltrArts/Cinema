<!doctype html>
<html lang="en">
  <head>
    <!-- meta tags -->
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
            <div id="formMovies" class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
                <div class=" card  shadow bg-secondary">
                    <div class="card-header border-0">

                        <div class="row justify-content-between ">
                            <div class="col-9">
                                <h5 class="mb-0 p-2 text-uppercase text-white"> Formulário de Filmes</h5>
                            </div>
                            <div class=" col-sm-2 col-3 col-md-2 col-lg-2" id="ex4">
                                <button  onclick="toggleDivs('listMovies', 'formMovies')"  class="btn btn-info btn-sm rounded float-end">
                                    <i class="fa fa-list">Listar</i>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class='card-body bg-dark'>


                            
                        <form enctype="multipart/form-data" action="<?=ROOT?>/Admin/Movies" method="POST" name="movies" id="moviesForm">
                        <input type="hidden" id="link" value="<?=ROOT?>/Admin/Movies">    
                        <div class="row ">
                                <div class=" col-12 col-lg-5 mb-4 col-md-4">
                                    <input type="text"  class="form-control form-contro" id="title" name="title" placeholder="Título">
                                    <small id="titleError" class='text-danger text-left d-none'> </small>
                                </div>
        
                                <div class=" col-12 col-lg-2 mb-4 col-md-4">
                                    <div class="input-group">
                                        <input name="duration"  type="number" class="form-control" id="duration" placeholder="Duração">
                                        <span class="input-group-text" >Min</span>
                                        <small id="durationError" class='text-danger text-left d-none'> </small>
                                    </div>
                                </div>

                                <div class=" col-12 col-lg-5  mb-4 col-md-4">
                                    <select class="form-select text-center" name="classification" id="classification">
                                        <option selected value="">-- CLASSIFICAÇÃO --</option>
                                        <?php if(!empty($classifications) > 0){ ?>
                                            <?php foreach($classifications as $cl){ ?>
                                                <option  value="<?=$cl->id ?>" ><?=$cl->name ?></option>
                                            <?php }?>
                                        <?php  }?>
                                    </select>
                                   <small id="classificationError" class='text-danger text-left d-none'></small>
                                </div>
                            </div>


                            <div class="row ">
                                <div class=" col-12 col-lg-5 mb-4 col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-text" >Capa do Filme</span>
                                        <input id="cover" name="cover"  type="file" class=" form-control" placeholder="Capa do filme">
                                        </div>
                                            <small id="coverError" class='text-danger text-left d-none'></small>
                                    
                                </div>
        
                                <div class=" col-12 col-lg-2 mb-4 col-md-4">
                                    <div class="input-group">
                                        <input name="year" type="number"  class="form-control" id="year" placeholder="Ano">
                                    </div>
                                    <small id="yearError" class='text-danger text-left d-none'></small>
                                </div>

                                <div class=" col-12 col-lg-5  mb-4 col-md-4">
                                    <select class="form-select text-center " name="gender" id="gender">
                                        <option selected value="" multiple>-- GÉNERO --</option>
                                        <?php if(!empty($genders) > 0){ ?>
                                            <?php foreach($genders as $gender){ ?>
                                                <option  value="<?=$gender->id ?>" multiple><?=$gender->name ?></option>
                                            <?php }?>
                                        <?php  }?>
                                    </select>
                                    <small id="genderError" class='text-danger text-left d-none'></small>
                                </div>
                            </div>

                            <div class="row ">
                                
                                <div class=" col-12 mb-4 col-md-4">
                                    <select class="form-select text-center" name="lang" id="lang">
                                        <option selected value="">-- IDIOMA --</option>
                                        <?php if(!empty($langs) > 0){ ?>
                                            <?php foreach($langs as $lang){ ?>
                                                <option  value="<?=$lang->id ?>"><?=$lang->name ?></option>
                                            <?php }?>
                                        <?php  }?>
                                    </select>
                                    <small id="langError" class='text-danger text-left d-none'></small>
                                </div>
                                
                                <div class=" col-12 mb-4 col-md-4">
                                    <select class="form-select text-center" name="sub" id="sub">
                                        <option selected value="">-- LEGENDA --</option>
                                        <?php if(! empty($langs) > 0){ ?>
                                            <?php foreach($langs as $lang){ ?>
                                                <option  value="<?=$lang->id ?>"><?=$lang->name ?></option>
                                            <?php }?>
                                        <?php  }?>
                                    </select>
                                    <small id="subError" class='text-danger text-left d-none'></small>
                                </div>
                                <div class=" col-12 mb-4 col-md-4">
                                    <textarea class="form-control" name="sinopse" id="sinopse" cols="30" placeholder="Sinopse" rows="1"></textarea>
                                </div>
                            </div>
                            <div class="float-end">
                                <button type="reset" class="btn btn-secondary   btn-s px-5 " type="submit">Limpar</button>
                                <button class="btn btn-primary pl-3  btn-s px-5" type="submit">Guardar</button>
                            </div>
                        </form>


                    </div>

                </div>
            </div>
        </div>

        <div class="row mb-4">
            <div id="listMovies" class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12 d-none">
                <div class="card  shadow bg-secondary">
                    <div class="card-header border-0">

                        <div class="row justify-content-between ">
                            <div class="col-9">
                                <h5 class="mb-0 p-2 text-uppercase text-white"> Lista De Filmes</h5>
                            </div>
                            <div class=" col-sm-2 col-3 col-md-2 col-lg-2" id="ex4">
                                <button  onclick="toggleDivs('formMovies', 'listMovies')" class="btn btn-info btn-sm p- rounded float-end">
                                    <i class="fa fa-plus">Novo</i>
                                </button>
                            </div>
                        </div>

                    </div>

                    <div class='card-body bg-light table-responsive'>
                    <?php if(! empty($movies)) { ?>
                        <table class="table table-striped table-sm">
                            <thead>
                                <tr>
                                <th scope="col">Título</th>
                                <th scope="col">Classifi.</th>
                                <th scope="col">Género</th>
                                <th scope="col">Duração</th>
                                <th scope="col">Ano</th>
                                <th scope="col">Idioma</th>
                                <th scope="col">Legenda</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Criaçao</th>
                                <th scope="col">Actualização</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                <?php foreach($movies as $movie){ ?>
                                <tr>
                                    <th scope="row"> <?= $movie->title ?> </th>
                                    <td> <?= $movie->cla ?> </td>
                                    <td> <?= $movie->gender ?> </td>
                                    <td> <?= $movie->duration ?>min </td>
                                    <td> <?= $movie->year ?> </td>
                                    <td> <?= $movie->lang_name?> </td>
                                    <td> <?= $movie->sub ?> </td>
                                    <td>
                                    <?php if($movie->status) {?>
                                        <a href="" class="btn btn-success btn-sm">Activo</a></td>
                                    <?php }else{ ?>
                                        <a href="" class="btn btn-warning btn-sm">Inactivo</a></td>
                                    <?php } ?>
                                    <td> <?= diffForHumans($movie->created_at) ?> </td>
                                    <td> <?= diffForHumans($movie->updated_at) ?> </td>
                                    <!-- <td>@mdo</td> -->
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
                <li class="has-subnav active">
                    <a href="#">
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
                var form = document.getElementById('moviesForm');
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
                var form = document.getElementById('moviesForm');
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




            $("#moviesForm").submit(function(event) {
                // swal("Registo Filme", "Filme gravado com suesso!", "success");
                event.preventDefault();
                var formData = new FormData(this);
                formData.append('cover', $('#cover')[0].files[0]);

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
                                swal("Registo Filme", "Filme gravado com suesso!", "success");
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