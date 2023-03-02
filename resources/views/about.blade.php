<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Glory Impact Group</title>
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
            <h1 class="display-1 text-white animated slideInDown">À propos de nous</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">À propos de nous</li>
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
                    <h4 class="section-title">Qui Sommes-Nous ?</h4>
                    <h1 class="display-5 mb-4">Une Fondation engagée pour l'autonomie des jeunes et le bien-être de la population
                    </h1>
                    <p>La Fondation Glory Impact Group est une organisation à but non lucratif qui a pour mission de participer à l'autonomie et à l'insertion socio-professionnelle des jeunes déscolarisés en situation de vulnérabilité et à contribuer au bien-être de la population en général.

                        Notre Fondation est dirigée par un duo dynamique,<strong> Monsieur Jules GOUHAN</strong> et <strong> Madame Becely GOUHAN</strong>, qui ont su faire de l'entrepreneuriat leur moteur pour lutter contre le chômage des jeunes et pour rendre forte les personnes fragiles.
                        
                        Nous croyons que chaque jeune mérite une chance de réussir et nous mettons tout en oeuvre pour les aider à atteindre leur plein potentiel grâce à des programmes de formation, d'accompagnement et d'insertion professionnelle adaptés à leurs besoins.
                        
                     </p>
                    <p class="mb-4">   Rejoignez-nous dans notre mission et contribuez à rendre un avenir meilleur à notre jeunesse !
                    </p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary"
                            style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">300</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Plus de </h3>
                            <h3>soutient</h3>
                            <h3 class="mb-0">Fait</h3>
                        </div>
                    </div>
                    <div class="col">
                        <a class="btn btn-primary py-3 px-5" href="{{ url('/don') }}">SOUTIENT UN ENTREPRENEUR</a>
                      
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Pourquoi Nous ?</h4>
                    <h1 class="display-5 mb-4">Pourquoi nous faire confiance ?</h1>
                    <p class="mb-4">Vous vous demandez peut-être pourquoi faire confiance à la Fondation Glory Impact Group pour soutenir ses actions sociales et caritatives. Voici quelques raisons :
                    </p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" width="64" style="filter: invert(9%) sepia(93%) saturate(4930%) hue-rotate(358deg) brightness(95%) contrast(98%);"src="{{ asset('assets/img/icons/experience.png') }}"
                                    alt="Icon">
                                <div class="ms-4">
                                    <h3>Une expérience solide</h3>
                                    <p class="mb-0">Forts de plusieurs années d'expérience dans l'amélioration des conditions de vie des jeunes en difficulté, nous avons acquis une expertise solide dans le domaine.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" width="64" style="filter: invert(9%) sepia(93%) saturate(4930%) hue-rotate(358deg) brightness(95%) contrast(98%);" src="{{ asset('assets/img/icons/collaboration.png') }}"
                                    alt="Icon">
                                <div class="ms-4">
                                    <h3>Une équipe compétente</h3>
                                    <p class="mb-0">Notre équipe, dirigée par le Président Directeur Général, Monsieur Jules GOUHAN et la Directrice Générale, Madame Becely GOUHAN, est composée de professionnels qualifiés et compétents dans leur domaine d'expertise.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" width="64" style="filter: invert(9%) sepia(93%) saturate(4930%) hue-rotate(358deg) brightness(95%) contrast(98%);" src="{{ asset('assets/img/icons/engagement.png') }}"
                                    alt="Icon">
                                <div class="ms-4">
                                    <h3>Un engagement fort</h3>
                                    <p class="mb-0">Nous sommes engagés à faire une différence dans la vie des jeunes en difficulté en leur offrant des opportunités de formation et d'insertion socioprofessionnelle.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" width="64" style="filter: invert(9%) sepia(93%) saturate(4930%) hue-rotate(358deg) brightness(95%) contrast(98%);" src="{{ asset('assets/img/icons/resultats.png') }}"
                                    alt="Icon">
                                <div class="ms-4">
                                    <h3>Un engagement fort</h3>
                                    <p class="mb-0">Nous avons obtenu des résultats tangibles dans nos actions sociales et caritatives, en contribuant à l'amélioration des conditions de vie des jeunes en difficulté et en favorisant leur développement personnel.</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('assets/img/about/enfant.jpg') }}"
                            alt="">
                        <img class="img-fluid" src="{{ asset('assets/img/about/enfant.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Notre Dynamique Equipe</h4>
                <h1 class="display-5 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h1>
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
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="https://gloryimpactgroup.org/assets/img/personnel/pdg.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Jules R. GOUHAN</h3>
                            <span class="text-primary">Président Directeur Général</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="https://gloryimpactgroup.org/assets/img/personnel/dg.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">B. Kecys GOUHAN</h3>
                            <span class="text-primary">Directrice Générale</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <!-- <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/team-4.jpg') }}" alt="">
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
            </div>

            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/personnel/Lyne.jpeg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Lyne KOUADIO</h3>
                            <span class="text-primary">Responsable Habitat</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/personnel/rodrigue.jpeg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Rodrigue GOUHAN</h3>
                            <span class="text-primary">Responsable Technique</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/personnel/levi.jpg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Levi GAHOU</h3>
                            <span class="text-primary">Responsable Technique</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/personnel/zinsou.jpeg') }}"
                                alt="">
                                <div class="team-social text-center">
                                    <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Serges ZINSOU</h3>
                            <span class="text-primary">Responsable Event</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Team End -->



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