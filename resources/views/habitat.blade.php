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
    @include('sweetalert::alert')


    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('assets/img/carousels/internet.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('assets/img/carousels/internet.jpg') }}"
                    alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Aménagement Foncier et
                                    Construction</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Découvrez une nouvelle manière de devenir
                                    propriétaire de biens immeubles à travers un développement innovants.</p>
                                <a href="{{ url('') }}"
                                    class="btn btn-primary py-3 px-5 animated slideInLeft">Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('assets/img/carousels/carousel-general-2.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('assets/img/carousels/carousel-general-2.jpg') }}"
                    alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Aménagement Foncier et
                                    Construction</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Découvrez une nouvelle manière de devenir
                                    propriétaire de biens immeubles à travers un développement innovants.</p>
                                <a href="{{ url('') }}"
                                    class="btn btn-primary py-3 px-5 animated slideInLeft">Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('assets/img/carousels/carousel-general-1.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('assets/img/carousels/carousel-general-1.jpg') }}"
                    alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Aménagement Foncier et
                                    Construction</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Découvrez une nouvelle manière de devenir
                                    propriétaire de biens immeubles à travers un développement innovants.</p>
                                <a href="{{ url('') }}"
                                    class="btn btn-primary py-3 px-5 animated slideInLeft">Plus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ asset('assets/img/icons/icon-2.png') }}" alt="Icon">
                        </div>
                        <h3 class="mb-3">Approche de Conception</h3>
                        <p class="mb-0">Des outils et des techniques de conception de dernière génération pour
                            de
                            meilleurs résultats très fins et réussis</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ asset('assets/img/icons/icon-3.png') }}" alt="Icon">
                        </div>
                        <h3 class="mb-3">Solutions Innovantes</h3>
                        <p class="mb-0">Trouvez au sein de Glory Impact Group des solutions adaptées à vos
                            besoins pour
                            projets immobiliers</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ asset('assets/img/icons/icon-4.png') }}" alt="Icon">
                        </div>
                        <h3 class="mb-3">Gestion de Projet</h3>
                        <p class="mb-0">Un calendrier strict et adapté élaboré pour une gestion optimale de
                            tous projets
                            immobiliers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/about-1.jpg') }}"
                            alt="">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/about-2.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">Glory Impact Group</h4>
                    <h1 class="display-5 mb-4">We Impact the world...</h1>
                    <p> Spécialisée dans l'Aménagement foncier, Glory Impact Group est une prestigieuse entreprise qui
                        fait ressortir la beauté cachée.
                        En s'inscrivant dans le cadre de l'Aménagement Foncier et de la Construction, Glory Impact Group
                        a su proposer et propose des produits immobiliers de haut standing.
                    </p>
                    <p class="mb-4"></p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary"
                            style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">12</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Plus de</h3>
                            <h3>Projets de</h3>
                            <h3 class="mb-0">Lotissements</h3>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Nos Services</h4>
                <h1 class="display-5 mb-4">Spécialisés dans l’Architecture Moderne et d'Architecture Intérieur</h1>
            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/img/services/service-general-1.jpg') }}"
                            alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon-6.png') }}" alt="Icon">
                            <h3 class="mb-3">Vente de terrains</h3>
                            <p class="mb-4">Des lotissements de terrains situé dans zones Résidentielles du
                                Grand
                                Abidjan pour une meilleure accessibilité au centre de la Capitale</p>
                            <a class="btn" href="{{ url('/service') }}"><i
                                    class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/img/services/service-general-2.jpg') }}"
                            alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon-5.png') }}" alt="Icon">
                            <h3 class="mb-3">Architecture</h3>
                            <p class="mb-4">Offrez-vous des services d’Architectes et Dessinateurs
                                professionnelles pour
                                donner vie à vos projets futuristes dans le plus grand confort.</p>
                            <a class="btn" href="{{ url('/architecture') }}"><i
                                    class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/img/services/service-general-3.jpg') }}"
                            alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon-7.png') }}" alt="Icon">
                            <h3 class="mb-3">House Planning</h3>
                            <p class="mb-4">Des plans et maquettes faits conçus pour une meilleure vision de
                                votre
                                projet de construction par des Architectes et techniciens qualifiés</p>
                            <a class="btn" href="{{ url('/house_planning') }}"><i
                                    class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/img/services/service-general-4.jpg') }}"
                            alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon-10.png') }}" alt="Icon">
                            <h3 class="mb-3">Construction</h3>
                            <p class="mb-4">Une équipe dynamique et professionnelle pour une construction
                                rapide et dans
                                le respect des normes en vigueur en Côte d’Ivoire</p>
                            <a class="btn" href="{{ url('/construction') }}"><i
                                    class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/img/services/service-general-5.jpg') }}"
                            alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon-8.png') }}" alt="Icon">
                            <h3 class="mb-3">Architecture d'Interieur</h3>
                            <p class="mb-4">Une touche d’aménagement culturel et de créativité d’expert dans
                                votre
                                maison pour un confort inégalable et un bien-être inestimable</p>
                            <a class="btn" href="{{ url('/architecture_interieur') }}"><i
                                    class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/img/services/service-general-6.jpg') }}"
                            alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon-9.png') }}" alt="Icon">
                            <h3 class="mb-3">Rénovation</h3>
                            <p class="mb-4">Refaite le décor interne et externe de vos habitations pour un
                                souffle
                                agréable et un air nouveau…</p>
                            <a class="btn" href="{{ url('/renovation') }}"><i
                                    class="fa fa-plus text-primary me-3"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Pourquoi Nous ?</h4>
                    <h1 class="display-5 mb-4">Pourquoi nous faire confiance ? Apprenez en d’avantage sur nous ?</h1>
                    <p class="mb-4">Existante depuis des années, Glory Impact Group s'est toujours assurée
                        d'offrir les
                        meilleurs produits et services
                        à sa clintèle. Ceci lui a valu d'être reconnu au niveau national dans le domaine de
                        l'Aménagement et la Construction...)
                    </p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="{{ asset('assets/img/icons/icon-2.png') }}"
                                    alt="Icon">
                                <div class="ms-4">
                                    <h3>Approches de Conception</h3>
                                    <p class="mb-0">Des outils et des techniques de conception de dernière
                                        génération...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="{{ asset('assets/img/icons/icon-3.png') }}"
                                    alt="Icon">
                                <div class="ms-4">
                                    <h3>Solutions Innovantes</h3>
                                    <p class="mb-0">Des solutions adaptées à vos besoins des projets
                                        immobiliers...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="{{ asset('assets/img/icons/icon-4.png') }}"
                                    alt="Icon">
                                <div class="ms-4">
                                    <h3>Gestion De Drojet</h3>
                                    <p class="mb-0">Des plans conçus pour une meilleure vision de votre
                                        projet...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/about-2.jpg') }}"
                            alt="">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/about-1.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Project Start -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Nos Projets</h4>
                <h1 class="display-5 mb-4">Visitez Nos Derniers Projets et ses Travaux Innovants</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h3 class="m-0">01. ERLION</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h3 class="m-0">02. LESDONS</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h3 class="m-0">03. CRISTALYS</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h3 class="m-0">04. PERLYS</h3>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('assets/img/projets/erlion/project-erlion-1.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Terrain Résidentiels avec ACD disponible ou en cours
                                    </h1>
                                    <p class="mb-4">Les lotissements ERLION offrent un vaste choix de
                                        terrains
                                        constructibles avec une documentation conforme conformement aux règlements
                                        ministèriels.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Bingerville</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Bassam</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Songon</p>
                                    <a href="{{ url('/service') }}" class="btn btn-primary py-3 px-5 mt-3">En
                                        savoir
                                        plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('assets/img/projets/lesdons/project-lesdons-1.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Nouveaux lotissements Lotissemnts en cours</h1>
                                    <p class="mb-4">Aux vues des capacités diverses de chaque personne à
                                        acquerir des
                                        biens immobiliers, Glory Impact Group donne la possibilité aux particuliers de
                                        s'offrir des terrains à travers son programme "LESDONS".</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Bingerville</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Songon</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Jacqueville</p>
                                    <a href="{{ url('/service') }}" class="btn btn-primary py-3 px-5 mt-3">En
                                        savoir
                                        plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('assets/img/projets/cristalys/project-cristalys-1.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Villa Triplex HS</h1>
                                    <p class="mb-4">
                                        Constrite sur une sperficie de 400 m², CRISTALYS vous se presnete en une villa
                                        de 3 niveaux avec une piscine exterieure.
                                    </p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Beauté</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Elégance</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Simplicité</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100"
                                            src="{{ asset('assets/img/projets/perlys/project-perlyse-1.jpg') }}"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">Villa Triplex</h1>
                                    <p class="mb-4">De très belle villa battie sur une surface de 200m². PERLYS fait
                                        partie de nos sublimes constructions en réalisation à Bingerville.</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Spacieuse</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Beauté</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Verdure</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">En savoir plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Team Members</h4>
                <h1 class="display-5 mb-4">We Are Creative Architecture Team For Your Dream Home</h1>
            </div>
            <div class="row g-0 team-items center">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/personnel/Dion.jpg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>

                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Régis DION</h3>
                            <span class="text-primary">Topographe</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('') }}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Ndri KOUAME</h3>
                            <span class="text-primary">Agent Commercial</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/personnel/Adjoumani.jpg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Jean-Fidèle ADJOUMANI</h3>
                            <span class="text-primary">Technicien</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/personnel/Brete.jpg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Maimouna Brété</h3>
                            <span class="text-primary">Agent Commercial</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/personnel/Jocelyne.jpeg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Jocelyne KOFFI</h3>
                            <span class="text-primary">Agent Commercial</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/personnel/Ange.jpeg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Ange NDA</h3>
                            <span class="text-primary">Agent Commercial</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/personnel/Yapo.jpeg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Jacqueline YAPO</h3>
                            <span class="text-primary">Agent Commercial</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('/assets/img/personnel/Ebah.jpeg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Noël EBAH</h3>
                            <span class="text-primary">Agent Commercial</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Appointment Start -->
    <form action="" method="POST">
        <div class="container-xxl py-5 mt-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class="section-title">Obtenez</h4>
                        <h1 class="display-5 mb-4">Un Rendez-vous pour demarrer votre projet</h1>
                        <p class="mb-4">
                        </p>
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                        style="width: 65px; height: 65px;">
                                        <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Appelez Maintenant</p>
                                        <h3 class="mb-0">+225 27 22 42 14 06</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                        style="width: 65px; height: 65px;">
                                        <i class="fa-2x fab fa-whatsapp text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">WhatsApp</p>
                                        <h3 class="mb-0">+225 07 59 25 29 12</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                        style="width: 65px; height: 65px;">
                                        <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-2">Email</p>
                                        <h3 class="mb-0">gloryimpactgroup@gmail.com</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <form action="/email-send'" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input name="name" type="text" class="form-control"
                                        placeholder="Votre Nom et Prénom(s)" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input name="email" type="email" class="form-control"
                                        placeholder="Votre Adresse mail" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="contact" class="form-control"
                                        placeholder="Votre Contact" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select" name="services" style="height: 55px;">
                                        <option selected>Choissisez le service</option>
                                        <option value="1">Vente de Terrain</option>
                                        <option value="2">Architecture</option>
                                        <option value="3">House Planning</option>
                                        <option value="4">Construction</option>
                                        <option value="5">Architecture d'Interieur</option>
                                        <option value="6">Renovation </option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Prendre un
                                        Rendez-vous</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <!-- Appointment End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Testimonial</h4>
                <h1 class="display-5 mb-4">Plusieurs clients ont confiance en nous et en nos services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('assets/img/temoignages/testimonial-1.jpg') }}' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo
                        labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                        justo sea clita.</p>
                    <h3>Client Name</h3>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('assets/img/temoignages/testimonial-2.jpg') }}' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo
                        labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                        justo sea clita.</p>
                    <h3>Client Name</h3>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item text-center"
                    data-dot="<img class='img-fluid' src='{{ asset('assets/img/temoignages/testimonial-3.jpg') }}' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo
                        labore sed
                        sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum
                        justo sea clita.</p>
                    <h3>Client Name</h3>
                    <span class="text-primary">Profession</span>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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
    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

</body>

</html>
