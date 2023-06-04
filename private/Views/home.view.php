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
                                <button type="button" class="btn btn-warning btn-sm p- rounded float-end">
                                    <h5> <i class="fa-solid fa-lg fa-cart-shopping text-dark"></i>  <span class="badge bg-danger rounded-pill">0</span></h5>
                                </button>
                            </div>
                            ';
                            ?>
                        </div>



                    </div>

                    <div class='card-body bg-dark'>


                        <div class="row  justify-content-center">
                            <div class="col-md-4 col-lg-3 col-sm-6 hvr-grow mb-3">
                                <div class="card card-inverse card-primary text-centr">
                                    <img style="height: 20em;" class="card-img-top  " src="<?=ROOT?>/img/mv1.jpg" alt="Card image cap">
                                    <div class="card-block bg-dark p-2">
                                        <h5 class="card-title text-light">Título Completo do Filme </h5>
                                        <b>Gen: </b>Acçao, Comédia, Faroeste 
                                        <div>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star-half"></i>
                                        </div>
                                        <div class="d-none" id="1">
                                            <p class="text-light"><b>Duração:</b> 120min</p>
                                            <p class="text-light"><b>Autor:</b> Chris Evans</p>
                                            <p class="text-light"><b>Lançamento:</b> 2021</p>
                                            <p class="align-text-left text-muted"><b>SINOPSE: </b>sdfnjdsf djfk sdj fjs f sdfjds fj sdjf sd fjks fs fjsd f dsjf sjdf sdfjsd f dskjfsd fjsdfiownfoiids ds rwf wdkjf wfbsd vsd bvsd vjsd vsd v sdjv sdv sdv dsv sdj vkjsd vsd vkjsd vsd vds vjks dvjk dsvjs vjs DFDSv</p>
                                        </div>
                                        <div class="text-center">
                                            <div class="row ">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary btn-sm" onclick="toggleDesc(1)">Detalhes</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary btn-sm">Aderir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-3 col-sm-6 hvr-grow mb-3">
                                <div class="card card-inverse card-primary text-center">
                                    <img style="height: 20em;" class="card-img-top  " src="<?=ROOT?>/img/mv2.jpg" alt="Card image cap">
                                     <div class="card-block bg-dark p-2">
                                        <h5 class="card-title text-light">Título Completo do Filme </h5>
                                        <b>Gen: </b>Acçao, Comédia, Faroeste 
                                        <div>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star-half"></i>
                                        </div>
                                        <div class="d-none" id="1">
                                            <p class="text-light"><b>Duração:</b> 120min</p>
                                            <p class="text-light"><b>Autor:</b> Chris Evans</p>
                                            <p class="text-light"><b>Lançamento:</b> 2021</p>
                                            <p class="align-text-left text-muted"><b>SINOPSE: </b>sdfnjdsf djfk sdj fjs f sdfjds fj sdjf sd fjks fs fjsd f dsjf sjdf sdfjsd f dskjfsd fjsdfiownfoiids ds rwf wdkjf wfbsd vsd bvsd vjsd vsd v sdjv sdv sdv dsv sdj vkjsd vsd vkjsd vsd vds vjks dvjk dsvjs vjs DFDSv</p>
                                        </div>
                                        <div class="text-center">
                                            <div class="row ">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary btn-sm" onclick="toggleDesc(1)">Detalhes</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary btn-sm">Aderir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-3 col-sm-6 hvr-grow mb-3">
                                <div class="card card-inverse card-primary text-center">
                                    <img style="height: 20em;" class="card-img-top  " src="<?=ROOT?>/img/mv10.jpg" alt="Card image cap">
                                     <div class="card-block bg-dark p-2">
                                        <h5 class="card-title text-light">Título Completo do Filme </h5>
                                        <b>Gen: </b>Acçao, Comédia, Faroeste 
                                        <div>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star-half"></i>
                                        </div>
                                        <div class="d-none" id="1">
                                            <p class="text-light"><b>Duração:</b> 120min</p>
                                            <p class="text-light"><b>Autor:</b> Chris Evans</p>
                                            <p class="text-light"><b>Lançamento:</b> 2021</p>
                                            <p class="align-text-left text-muted"><b>SINOPSE: </b>sdfnjdsf djfk sdj fjs f sdfjds fj sdjf sd fjks fs fjsd f dsjf sjdf sdfjsd f dskjfsd fjsdfiownfoiids ds rwf wdkjf wfbsd vsd bvsd vjsd vsd v sdjv sdv sdv dsv sdj vkjsd vsd vkjsd vsd vds vjks dvjk dsvjs vjs DFDSv</p>
                                        </div>
                                        <div class="text-center">
                                            <div class="row ">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary btn-sm" onclick="toggleDesc(1)">Detalhes</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary btn-sm">Aderir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-3 col-sm-6 hvr-grow mb-3">
                                <div class="card card-inverse card-primary text-center">
                                    <img style="height: 20em;" class="card-img-top  " src="<?=ROOT?>/img/mv12.jpg" alt="Card image cap">
                                     <div class="card-block bg-dark p-2">
                                        <h5 class="card-title text-light">Título Completo do Filme </h5>
                                        <b>Gen: </b>Acçao, Comédia, Faroeste 
                                        <div>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star-half"></i>
                                        </div>
                                        <div class="d-none" id="1">
                                            <p class="text-light"><b>Duração:</b> 120min</p>
                                            <p class="text-light"><b>Autor:</b> Chris Evans</p>
                                            <p class="text-light"><b>Lançamento:</b> 2021</p>
                                            <p class="align-text-left text-muted"><b>SINOPSE: </b>sdfnjdsf djfk sdj fjs f sdfjds fj sdjf sd fjks fs fjsd f dsjf sjdf sdfjsd f dskjfsd fjsdfiownfoiids ds rwf wdkjf wfbsd vsd bvsd vjsd vsd v sdjv sdv sdv dsv sdj vkjsd vsd vkjsd vsd vds vjks dvjk dsvjs vjs DFDSv</p>
                                        </div>
                                        <div class="text-center">
                                            <div class="row ">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary btn-sm" onclick="toggleDesc(1)">Detalhes</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary btn-sm">Aderir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-3 col-sm-6 hvr-grow mb-3">
                                <div class="card card-inverse card-primary text-center">
                                    <img style="height: 20em;" class="card-img-top  " src="<?=ROOT?>/img/mv5.jpg" alt="Card image cap">
                                     <div class="card-block bg-dark p-2">
                                        <h5 class="card-title text-light">Título Completo do Filme </h5>
                                        <b>Gen: </b>Acçao, Comédia, Faroeste 
                                        <div>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star-half"></i>
                                        </div>
                                        <div class="d-none" id="1">
                                            <p class="text-light"><b>Duração:</b> 120min</p>
                                            <p class="text-light"><b>Autor:</b> Chris Evans</p>
                                            <p class="text-light"><b>Lançamento:</b> 2021</p>
                                            <p class="align-text-left text-muted"><b>SINOPSE: </b>sdfnjdsf djfk sdj fjs f sdfjds fj sdjf sd fjks fs fjsd f dsjf sjdf sdfjsd f dskjfsd fjsdfiownfoiids ds rwf wdkjf wfbsd vsd bvsd vjsd vsd v sdjv sdv sdv dsv sdj vkjsd vsd vkjsd vsd vds vjks dvjk dsvjs vjs DFDSv</p>
                                        </div>
                                        <div class="text-center">
                                            <div class="row ">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary btn-sm" onclick="toggleDesc(1)">Detalhes</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary btn-sm">Aderir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-3 col-sm-6 hvr-grow mb-3">
                                <div class="card card-inverse card-primary text-center">
                                    <img style="height: 20em;" class="card-img-top  " src="<?=ROOT?>/img/mv14.jpg" alt="Card image cap">
                                     <div class="card-block bg-dark p-2">
                                        <h5 class="card-title text-light">Título Completo do Filme </h5>
                                        <b>Gen: </b>Acçao, Comédia, Faroeste 
                                        <div>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star-half"></i>
                                        </div>
                                        <div class="d-none" id="1">
                                            <p class="text-light"><b>Duração:</b> 120min</p>
                                            <p class="text-light"><b>Autor:</b> Chris Evans</p>
                                            <p class="text-light"><b>Lançamento:</b> 2021</p>
                                            <p class="align-text-left text-muted"><b>SINOPSE: </b>sdfnjdsf djfk sdj fjs f sdfjds fj sdjf sd fjks fs fjsd f dsjf sjdf sdfjsd f dskjfsd fjsdfiownfoiids ds rwf wdkjf wfbsd vsd bvsd vjsd vsd v sdjv sdv sdv dsv sdj vkjsd vsd vkjsd vsd vds vjks dvjk dsvjs vjs DFDSv</p>
                                        </div>
                                        <div class="text-center">
                                            <div class="row ">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary btn-sm" onclick="toggleDesc(1)">Detalhes</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary btn-sm">Aderir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-3 col-sm-6 hvr-grow mb-3">
                                <div class="card card-inverse card-primary text-center">
                                    <img style="height: 20em;" class="card-img-top  " src="<?=ROOT?>/img/mv7.jpg" alt="Card image cap">
                                     <div class="card-block bg-dark p-2">
                                        <h5 class="card-title text-light">Título Completo do Filme </h5>
                                        <b>Gen: </b>Acçao, Comédia, Faroeste 
                                        <div>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star-half"></i>
                                        </div>
                                        <div class="d-none" id="1">
                                            <p class="text-light"><b>Duração:</b> 120min</p>
                                            <p class="text-light"><b>Autor:</b> Chris Evans</p>
                                            <p class="text-light"><b>Lançamento:</b> 2021</p>
                                            <p class="align-text-left text-muted"><b>SINOPSE: </b>sdfnjdsf djfk sdj fjs f sdfjds fj sdjf sd fjks fs fjsd f dsjf sjdf sdfjsd f dskjfsd fjsdfiownfoiids ds rwf wdkjf wfbsd vsd bvsd vjsd vsd v sdjv sdv sdv dsv sdj vkjsd vsd vkjsd vsd vds vjks dvjk dsvjs vjs DFDSv</p>
                                        </div>
                                        <div class="text-center">
                                            <div class="row ">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary btn-sm" onclick="toggleDesc(1)">Detalhes</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary btn-sm">Aderir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-lg-3 col-sm-6 hvr-grow mb-3">
                                <div class="card card-inverse card-primary text-center">
                                    <img style="height: 20em;" class="card-img-top  " src="<?=ROOT?>/img/mv8.jpg" alt="Card image cap">
                                     <div class="card-block bg-dark p-2">
                                        <h5 class="card-title text-light">Título Completo do Filme </h5>
                                        <b>Gen: </b>Acçao, Comédia, Faroeste 
                                        <div>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star"></i>
                                            <i class="text-warning fa-solid  fa-star-half"></i>
                                        </div>
                                        <div class="d-none" id="1">
                                            <p class="text-light"><b>Duração:</b> 120min</p>
                                            <p class="text-light"><b>Autor:</b> Chris Evans</p>
                                            <p class="text-light"><b>Lançamento:</b> 2021</p>
                                            <p class="align-text-left text-muted"><b>SINOPSE: </b>sdfnjdsf djfk sdj fjs f sdfjds fj sdjf sd fjks fs fjsd f dsjf sjdf sdfjsd f dskjfsd fjsdfiownfoiids ds rwf wdkjf wfbsd vsd bvsd vjsd vsd v sdjv sdv sdv dsv sdj vkjsd vsd vkjsd vsd vds vjks dvjk dsvjs vjs DFDSv</p>
                                        </div>
                                        <div class="text-center">
                                            <div class="row ">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary btn-sm" onclick="toggleDesc(1)">Detalhes</button>
                                                </div>
                                                <div class="col-6">
                                                    <button class="btn btn-primary btn-sm">Aderir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


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
            var des = document.getElementById(id);
            des.classList.toggle('d-none');
            des.classList.toggle('d-block');
        }
    </script>

