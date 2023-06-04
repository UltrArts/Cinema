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
  <body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <?php
                                    if (! empty($errors['message'])) {
                                        echo "<div class='alert alert-danger' role='alert'> " . $errors['message'] . "</div>";
                                    }
                                ?>
                                    

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase"><i class="fa-solid fa-key fa-xl text-success"></i> Login -  <a class="text-decoration-none" href="<?=ROOT?>">Cine<span class="text-success">Arts</span></a></h2>
                                    <p class="text-white-50 mb-5">Insira suas Credenciais Para Continuar...</p>
                                    <form  method="post">
                                        <div class="form-floating  mb-4">
                                            <input type="email" value="<?=get_var('email')?>"  name="email" class="form-control  
                                            <?php 
                                                if(!(isset($errors['email'])) && isset($errors))
                                                    echo 'is-valid';
                                                else if(isset($errors['email']))
                                                    echo 'is-invalid'; 
                                            ?>
                                            " id="email" placeholder="name@example.com">
                                            <label for="text" class="text-dark">Email: exemplo@email.com</label>
                                            <?php if(isset($errors['email'])){ echo"<small class='text-danger text-left'>".$errors['email']."</small>";} ?>
                                        </div>


                                        <div class="form-outline form-floating form-white mb-4">
                                            <input required name="password" type="password" id="password" class="form-control form-control-lg" placeholder="Password"/>
                                            <label for="password" class="text-dark">Password</label>
                                        </div>


                                        <button class="btn btn-outline-success btn-lg px-5" type="submit">Login</button>
                                    </form>
                                    <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                        <a href="#!" class="text-white"><i class="fab fa-whatsapp fa-lg"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-github fa-lg mx-4 px-2"></i></a>
                                        <a href="#!" class="text-white"><i class="fab fa-telegram fa-lg"></i></a>
                                    </div>

                                </div>

                                <div>
                                    <p class="mb-0">Não tens uma conta? <a href="<?=ROOT?>/User/Register" class="text-white-50 fw-bold">Cadastre-se</a>
                                    </p>
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