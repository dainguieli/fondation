<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Don</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="{{asset('assets/img/carousels/logo7.png')}}" rel="icon">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    @include('/layouts/header')


    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" class="img-fluid"
        style="background: url({{ asset('assets/img/autres/formation.jpeg') }});
                background-repeat:no-repeat;
                background-position:center;">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">SOUTIENT UN ENTREPRENEUR</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">SOUTIENT UN ENTREPRENEUR</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/about-1.jpg') }}" alt="">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/about-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">Pourquoi donner?</h4>
                    <h1 class="display-5 mb-4">Une Fondation engagée pour l'autonomie des jeunes et le bien-être de la population
                    </h1>
                    <p>En faisant un don à notre Fondation, vous contribuez à changer la vie des jeunes en situation de vulnérabilité en leur offrant la chance de s'insérer dans la vie active et de contribuer positivement au développement économique et social de leur communauté. Vous participez ainsi activement à la construction d'une société plus juste et plus équitable.

                        Votre don permettra également à la Fondation de poursuivre son travail auprès des jeunes, en leur offrant des formations adaptées, des programmes d'accompagnement, des stages en entreprise et des opportunités d'emploi. Ensemble, nous pouvons faire une différence dans la vie de ces jeunes et leur offrir un avenir meilleur.
                     </p>
                    <p class="mb-4">  Rejoignez-nous dans cette mission importante et faites un don dès maintenant pour soutenir la Fondation Glory Impact Group.
                    </p>
                
                        <a class="btn btn-primary py-3 px-5" href="#don">SOUTENIR UN ENTREPRENEUR</a>
                    
                
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">La Fondation Glory Impact Group a réalisé de nombreuses réalisations concrètes grâce aux dons précédents</h4>
               
            </div>

            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/team-1.jpg') }}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div> -->
                </div>
           
            

            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/don/IMG_0585.JPG') }}"
                                alt="">
                           
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">La construction et l'équipement de centres de formation professionnelle pour les jeunes en difficulté.</span>
                            <p class="mt-2">Lorem Ipsa nulla, quas itasequi incidunt lcorrupti beatae id reiciendis a officiis voluptates expedita ipsam! Est.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/don/IMG_0584.JPG') }}" 
                                alt="">
                          
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">L'organisation de sessions de formation et de mentorat pour les jeunes entrepreneurs.</span>
                            <p class="mt-2">Lorem Ipsa nulla, quas itasequi incidunt lcorrupti beatae id reiciendis a officiis voluptates expedita ipsam! Est.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/don/IMG_0594.jpg') }}"
                                alt="">
                           
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">La mise en place de programmes de sensibilisation et de prévention contre la drogue et la violence.</span>
                            <p class="mt-2">Lorem Ipsa nulla, quas itasequi incidunt lcorrupti beatae id reiciendis a officiis voluptates expedita ipsam! Est.</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/don/IMG_0625.jpg') }}"
                                alt="">
                          
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">L'octroi de bourses d'études et d'aides financières pour les jeunes défavorisés.</span>
                            <p class="mt-2">Lorem Ipsa nulla, quas itasequi incidunt lcorrupti beatae id reiciendis a officiis voluptates expedita ipsam! Est.</p>
                        
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <br>
       <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">LE BIEN QUE NOUS APPORTONS</h4>
                <h1 class="display-5 mb-4">EN UNE SEULE VIDEO</h1>
            </div>
            <div class="fondation">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F100086391491746%2Fvideos%2F525854432769621%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden;display:block;margin-left:auto; margin-right:auto" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            </div>
        </div>
    </div>
    <!-- Service End -->
        <strong><p class="text-center mx-auto mb-5 wow fadeInUp">Ces réalisations ont permis d'avoir un impact positif sur la vie de nombreux jeunes en Côte d'Ivoire et de les aider à surmonter les obstacles auxquels ils sont confrontés. Votre don peut aider la Fondation Glory Impact Group à continuer de réaliser ces actions importantes pour aider la jeunesse ivoirienne.</p></strong>
        <div class="bg-light text-center p-5.9">
     <!--   <p  id="don"class="text-primary grop-txt-block grop-box-txt text-center mx-auto mb-5 wow fadeInUp">Faites votre dépôt sur l'un des numéros suivants : +225 00 49 00 00 00 ou +225 00 00 00 00 00</p>-->





        </div>
    </div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">SOUTENIR UN ENTREPRENEUR</h2>
                <p>Remplissez tous les champs du formulaire pour passer à l'étape suivante.</p>
                <form id="msform">
                    <!-- progressbar -->
                    <ul id="progressbar">
                         <li class="active bi bi-person-circle"><strong>Information personnelle</strong></li>
                       
                        <li class="bi bi-gift"><strong>soutenir</strong></li>
                        <li class="bi bi-check-circle-fill"><strong>Finish</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Information personnelle:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Étape 1 - 3</h2>
                                </div>
                            </div> <label class="fieldlabels">Nom: *</label> <input type="text" name="name" placeholder="Nom" /> 
                            <label class="fieldlabels">Prénoms: *</label> <input type="text" name="prenom" placeholder="prenom" /> 
                            <label class="fieldlabels">Nom de l'entreprise: *</label> <input type="text" name="entreprise" placeholder="entreprise" /> 
                            <label class="fieldlabels">Contact No.: *</label> <input type="text" name="phno" placeholder="Contact No." /> 
                          
                        </div> <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Soutenir un entrepreneur:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Étape 2 - 3</h2>
                                </div>
                            </div> <label class="fieldlabels">Combien voulez-vous donner ?: *</label> <input type="text" name="don" placeholder="faite un don" /> 
                            <label class="fieldlabels">Par quel moyen ?: *</label>     <select class="form-select"  aria-label="Default select example" name="mobile" class="input" required>
                                <option selected>mobile money </option>
                                <option value="Orange">Orange</option>
                                <option value="Mtn">Mtn</option>
                                <option value="Moov">Moov</option>
                            </select>
                            <label class="fieldlabels">Numero: *</label> <input type="text" name="numero" placeholder="numero" /> 
                           
                          
                        </div> <input type="button" name="next" class="next action-button" value="Submit" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Terminer:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Étape 3 - 3</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCÈS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> 
                                    <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXstOeXEcnFJ0h_NGnrfE27N_XAFsr9T8tqw&usqp=CAU"
                                alt="">
                                </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">Merci pour le don</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Section Bas de page debut -->
    @include('/layouts/footer')
    <!-- Section Bas de page Fin -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('assets/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
