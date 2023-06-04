<?php
session_start(); // Inicia a sessão


?>


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


    <style>
        .gradient-custom {
        /* fallback for old browsers */
        background: #6a11cb;

        /* Chrome 10-25, Safari 5.1-6 */
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
        }
    </style>
  </head>
  <body class="vh-100 gradient-custom">
    <section>
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white mb-4" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                        <?php
                            if (isset($_SESSION['response'])) {
                                // session_start();
                            $flashMessage = $_SESSION['response'];
                            $message = $flashMessage['message'];
                            $status = $flashMessage['status'];
                            if($status == 1){
                            // Exibe as informações
                                echo "<div class='alert alert-primary' role='alert'> " . $message . "</div>";
                            }else{
                            }
                            echo "<div class='alert alert-danger' role='alert'> " . $errors . "</div>";
                            unset($_SESSION['response']);
                            }
                        ?>
                                

                                

                                    <h2 class="fw-bold mb-1 text-uppercase"><i class="fas fa-id-card fa-xl btn-outline-success"></i> Registo - <a class="text-decoration-none" href="<?=ROOT?>">Cine<span class="text-success">Arts</span></a></h2>
                                    <p class="text-white-50 mb-5">Registe-se e desfrute do noso melhor...</p>
                                    <form  method="POST" name="register" id="register">
                                        <div class="form-floating  mb-4">
                                            <input  autocapitalize="on" type="text" value="<?=get_var('name')?>" class="form-control <?php 
                                                if(!(isset($errors['name'])) && isset($errors))
                                                    echo 'is-valid';
                                                else if(isset($errors['name']))
                                                    echo 'is-invalid'; 
                                            ?>
                                             " id="name" name="name" placeholder="Nome">
                                            <label for="name" class="text-dark">Nome</label>
                                            <?php if(isset($errors['name'])){ echo"<small class='text-danger text-left'>".$errors['name']."</small>";} ?>
                                        </div>

                                        <div class="form-floating  mb-4">
                                            <input  autocapitalize="on" type="text" value="<?=get_var('last_name')?>"  class="form-control 
                                            <?php 
                                                if(!(isset($errors['last_name'])) && isset($errors))
                                                    echo 'is-valid';
                                                else if(isset($errors['last_name']))
                                                    echo 'is-invalid'; 
                                            ?>
                                             " id="last_name" name="last_name" placeholder="Apelido">
                                            <label for="last_name" class="text-dark">Apelido</label>
                                            <?php if(isset($errors['last_name'])){ echo"<small class='text-danger text-left'>".$errors['last_name']."</small>";} ?>
                                        </div>

                                        <div class="form-floating  mb-4">
                                            <input name="tel" minlength="9" value="<?=get_var('tel')?>"   maxlength="13" type="tel" class="form-control <?php 
                                                if(!(isset($errors['tel'])) && isset($errors))
                                                    echo 'is-valid';
                                                else if(isset($errors['tel']))
                                                    echo 'is-invalid'; 
                                            ?>
                                             " id="tel" placeholder="Telefone">
                                            <label for="tel" class="text-dark">Telefone: 82 123 4567</label>
                                            <?php if(isset($errors['tel'])){ echo"<small class='text-danger text-left'>".$errors['tel']."</small>";} ?>
                                        </div>

                                        <div class="form-floating  mb-4">
                                            <input autocapitalize="on" autocomplete="off" name="email" type="email" value="<?=get_var('email')?>"  class="form-control  
                                            <?php 
                                                if(!(isset($errors['email'])) && isset($errors))
                                                    echo 'is-valid';
                                                else if(isset($errors['email']))
                                                    echo 'is-invalid'; 
                                            ?>
                                            " id="email" placeholder="name@example.com">
                                            <label for="email" class="text-dark">Email: exemplo@email.com</label>
                                            <?php if(isset($errors['email'])){ echo"<small class='text-danger text-left'>".$errors['email']."</small>";} ?>
                                        </div>

                                        <!-- <div class="form-floating form-outline  mb-3">
                                            <input  type="email" class="form-control " id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput" class="text-danger">Email address</label>
                                        </div> -->

                                        <div class="form-outline form-floating form-white mb-4">
                                            <input  name="password" type="password" value="<?=get_var('password')?>" id="password" class="form-control <?php 
                                                if(!(isset($errors['password'])) && isset($errors))
                                                    echo 'is-valid';
                                                else if(isset($errors['password']))
                                                    echo 'is-invalid'; 
                                            ?>
                                              form-control-lg" placeholder="Password"/>
                                            <label for="password" class="text-dark">Password</label>
                                            <?php if(isset($errors['password'])){ echo"<small class='text-danger text-left'>".$errors['password']."</small>";} ?>
                                        </div>

                                        <div class="form-outline form-floating form-white mb-3">
                                            <input  name="passConf"  value="<?=get_var('passConf')?>" type="password" id="passConf" class="form-control <?php 
                                                if(!(isset($errors['passConf']) || isset($errors['password'])) && isset($errors))
                                                    echo 'is-valid';
                                                else if(isset($errors['passConf']))
                                                    echo 'is-invalid'; 
                                            ?>
                                              form-control-lg" placeholder="Password"/>
                                            <label for="passConf" class="text-dark">Confirmar Password</label>
                                            <?php if(isset($errors['passConf'])){ echo"<small class='text-danger text-left'>".$errors['passConf']."</small>";} ?>
                                        </div>

                                        <button class="btn btn-outline-success btn-lg px-5" type="submit">Registar</button>
                                    </form>

                                    <div>
                                        <p class="mt-3">Já tens conta? <a href="<?=ROOT?>/User/login" class="text-white-50 fw-bold">Login</a>
                                        </p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <script src="<?=ROOT?>/assets/js/bootstrap.js"></script>
        <script src="<?=ROOT?>/assets/js/fontawesome.js"></script>
        <script src="<?=ROOT?>/assets/js/brands.js"></script>
        <script src="<?=ROOT?>/assets/js/solid.js"></script>
        <script src="<?=ROOT?>/assets/js/brands.js"></script>
        <script src="<?=ROOT?>/assets/js/jquery-3.7.0.min"></script>
  </body>
</html>
