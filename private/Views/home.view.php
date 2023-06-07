<?php include_once('layouts/header.php') ?>

        
    <section class="bgimage">
        <div class="container-fluid">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="container">
                    <div class="row justify-content-center mt-5">
                        <div class="col text-center text-light mt-5"  data-aos="fade-right ">
                            <h1>SESSÕES</h1>
                        </div>
                    </div>

                </div>
            </div>
            </div>
        </div>
    </section>

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-sm-12">
                <div class=" card  shadow bg-secondary">
                    <div class="card-header border-0">

                        <div class="row justify-content-between ">
                            <div class="col-9">
                                <h3 class="mb-0 p-2 text-uppercase text-white"> Agende já a sua sessão!</h3>
                            </div>
                            
                            <?php
                            if(Auth::is_logged())
                            echo '
                            <div class=" col-sm-2 col-3 col-md-2 col-lg-2" id="ex4">
                                <button type="button" class="btn btn-warning btn-sm rounded float-end"   data-bs-toggle="modal" data-bs-target="#cartModal">
                                    <h5> <i class="fa-solid fa-lg fa-cart-shopping text-dark"></i>  <span class="badge bg-danger rounded-pill">0</span></h5>
                                </button>
                            </div>
                            ';
                            ?>
                        </div>



                    </div>

                    <div class='card-body bg-dark'>


                        <div class="row  justify-content-center">
                            <?php if(!empty($movies)) { ?>
                            <?php foreach($movies as $movie) { ?>
                            <div class="col-md-4 col-lg-3 col-sm-6 hvr-grow mb-3">
                                <div class="card card-inverse card-primary text-centr">
                                    <img style="height: 20em;" class="card-img-top  " src=" <?= $movie->cover ?>" alt="<?= $movie->cover ?>">
                                    <div class="card-block bg-dark p-2 text-white">
                                        <h5 class="card-title text-light"> <?= $movie->title ?> </h5>
                                        <b>Gen: </b>Acçao, Comédia, Faroeste 
                                        <div>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star-half"></i>
                                        </div>
                                        <div class="d-none" id="<?=$movie->id?>">
                                            <p class="text-light"><b>Duração:</b>  <?= $movie->duration ?>min</p>
                                            <p class="text-light"><b>Classificação:</b>  <?= $movie->cla ?></p>
                                            <p class="text-light"><b>Lançamento:</b>  <?= $movie->year ?></p>
                                            <p class="align-text-left text-muted"><b>SINOPSE: </b> <?= $movie->sinopse ?></p>
                                        </div>
                                        <div class="text-center">
                                            <div class="row ">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary btn-sm" onclick="toggleDesc(<?=$movie->id?>)">Detalhes</button>
                                                </div>
                                                <div class="col-6">
                                                    <button id=" <?= $movie->id ?>c" class="btn btn-primary btn-sm">Aderir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php } ?>


                            <hr class='my-2' />
                            
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>


    <?php include_once('layouts/footer.php') ?>
    <script>
        function toggleDesc(id) {
            // alert('hi');
            var des = document.getElementById(id);
            des.classList.toggle('d-none');
            des.classList.toggle('d-block');
        }
    </script>

