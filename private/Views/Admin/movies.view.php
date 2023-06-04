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
    <script src="<?=ROOT?>/assets/js/jquery-3.7.0.min"></script>

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
                                <a href="#listMovies" class="btn btn-info btn-sm rounded float-end">
                                    <i class="fa fa-list">Listar</i>
                                </a>
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
                                        <option value="1">SEM SENSURA</option>
                                        <option value="2">+6</option>
                                        <option value="3">+8</option>
                                        <option value="3">+12</option>
                                        <option value="3">+12</option>
                                        <option value="3">+18</option>
                                    </select>
                                   <small id="classificationError" class='text-danger text-left'></small>
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
                                        <input name="year" type="number" min="1900" class="form-control" id="year" placeholder="Ano">
                                    </div>
                                    <small id="yearError" class='text-danger text-left d-none'></small>
                                </div>

                                <div class=" col-12 col-lg-5  mb-4 col-md-4">
                                    <select class="form-select text-center " name="gender" id="gender">
                                        <option selected value="" multiple>-- GÉNERO --</option>
                                        <?php if(count($genders) > 0){ ?>
                                            <?php foreach($genders as $gender){ ?>
                                                <option  value="<?=$gender->short_name ?>" multiple><?=$gender->name ?></option>
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
                                        <?php if(count($langs) > 0){ ?>
                                            <?php foreach($langs as $lang){ ?>
                                                <option  value="<?=$lang->short_name ?>"><?=$lang->name ?></option>
                                            <?php }?>
                                        <?php  }?>
                                    </select>
                                    <small id="langError" class='text-danger text-left d-none'></small>
                                </div>
                                
                                <div class=" col-12 mb-4 col-md-4">
                                    <select class="form-select text-center" name="sub" id="sub">
                                        <option selected value="">-- LEGENDA --</option>
                                        <?php if(count($langs) > 0){ ?>
                                            <?php foreach($langs as $lang){ ?>
                                                <option  value="<?=$lang->short_name ?>"><?=$lang->name ?></option>
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

        <div class="row mt-3 mb-4">
            <div id="listMovies" class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
                <div class=" card  shadow bg-secondary">
                    <div class="card-header border-0">

                        <div class="row justify-content-between ">
                            <div class="col-9">
                                <h5 class="mb-0 p-2 text-uppercase text-white"> Lista De Filmes</h5>
                            </div>
                            <div class=" col-sm-2 col-3 col-md-2 col-lg-2" id="ex4">
                                <a href="#formMovies" class="btn btn-info btn-sm p- rounded float-end">
                                    <i class="fa fa-plus">Novo</i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class='card-body bg-light table-responsive'>
                    <?php if(count($movies) >0 ){ ?>
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
                            <tbody>
                                <?php foreach($movies as $movie){ ?>
                                <tr>
                                    <th scope="row"> <?= $movie->title ?> </th>
                                    <td> <?= $movie->title ?> </td>
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

        $(document).ready(function() {
            
            // function manageErrors(id, valor) {
            //     var errorDesc = document.getElementById(id+'Error');
            //     var inputError = document.getElementById(id);
            //     if (errorDesc) {
            //         errorDesc.classList.remove('d-none'); // Define o estado da tag como visível
            //         errorDesc.innerHTML = valor; // Injeta o valor fornecido no conteúdo da tag
            //         inputError.classList.remove('is-valid'); 
            //         if (inputError.classList.contains('is-valid')) {
            //             inputError.classList.remove('is-valid');
            //         }
            //         inputError.classList.add('is-invalid');
                    
            //     }

                
            // }

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



            $("#moviesForm").submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();
                var link = document.getElementById("link").value;
                $.ajax({
                    url: link,
                    type: "POST",
                    data: formData,
                    dataType: "json", // Define o tipo de dados esperado como JSON
                    success: function(response) {
                        // Atualiza a tabela com os dados do estudante
                        // if()
                        // console.log(response);
                        if (response.error) {
                            
                            console.log(response);
                            inputError(response);
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