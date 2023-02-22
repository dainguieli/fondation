<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Actions</title>
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
            <h1 class="display-1 text-white animated slideInDown">Actions</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Actions</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h4 class="section-title">Les ations de la fondation glory impact</h4>
               
            </div>
            <div class="row g-4">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/326974274_699334385216641_6172747720031798573_n.jpg?stp=dst-jpg_p526x395&_nc_cat=107&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeFoOS9SlQtHcAR1k5GkZiBuAOnYeoxa0LMA6dh6jFrQs8fzkTFo2h-zePUSLSccPWEq5QDzXaf4MlmM5q6SG_Kr&_nc_ohc=InwtAy-n87gAX8Ones2&_nc_ht=scontent.fabj3-2.fna&oh=00_AfAfato4kzStn0Tx12TRwDptNnFUne6G4LatrDzCLDtxBQ&oe=63FB204B" alt="">
                        <div class="service-text p-5">
                         
                            <h3 class="mb-3">  </h3>
                            <p class="mb-4">La Fondation Glory Impact Group a apporté son soutien aux élèves en difficulté lors 
                                de la Journée Internationale de l'éducation le 24 janvier 2023. </p>
                            <a class="btn" href="{{ url('/VisiteGroupe') }}"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324336702_551774317013368_7468461429840857096_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE99aWvjDNdFSCD2vYFKwCgTB0BxM6H6oNMHQHEzofqg0by1YeHA121rBL0VlEki7_hJETGIcrD0ay0QCdVrnJ_&_nc_ohc=Wi_TqTESR38AX-tXlaL&_nc_ht=scontent.fabj3-2.fna&oh=00_AfAIyPlT1qvd1OJzrWFM2qYKn_TttZ0eTybMXRmau8LjBA&oe=63FB9BAA" alt="">
                        <div class="service-text p-5">
                         
                            <h3 class="mb-3">  </h3>
                            <p class="mb-4"> La Fondation Glory Impact Group a organisé "Le Déjeuner de Noël avec des jeunes battants et grouilleurs". </p>
                            <a class="btn" href="{{ url('/VisiteGroupe') }}"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324336702_551774317013368_7468461429840857096_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE99aWvjDNdFSCD2vYFKwCgTB0BxM6H6oNMHQHEzofqg0by1YeHA121rBL0VlEki7_hJETGIcrD0ay0QCdVrnJ_&_nc_ohc=Wi_TqTESR38AX-tXlaL&_nc_ht=scontent.fabj3-2.fna&oh=00_AfAIyPlT1qvd1OJzrWFM2qYKn_TttZ0eTybMXRmau8LjBA&oe=63FB9BAA" alt="">
                        <div class="service-text p-5">
                         
                            <h3 class="mb-3">  </h3>
                            <p class="mb-4"> La Fondation Glory Impact Group a organisé "Le Déjeuner de Noël avec des jeunes battants et grouilleurs". </p>
                            <a class="btn" href="{{ url('/jeunegroulleur') }}"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="https://gloryimpactgroup.org/assets/img/services/service-general-4.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="https://gloryimpactgroup.org/assets/img/icons/icon-10.png" alt="Icon">
                            <h3 class="mb-3">Construction</h3>
                            <p class="mb-4">Une équipe dynamique et professionnelle pour une construction
                                rapide et dans
                                le respect des normes en vigueur en Côte d’Ivoire</p>
                            <a class="btn" href="https://gloryimpactgroup.org/construction"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="https://gloryimpactgroup.org/assets/img/services/service-general-5.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="https://gloryimpactgroup.org/assets/img/icons/icon-8.png" alt="Icon">
                            <h3 class="mb-3">Architecture d'Interieur</h3>
                            <p class="mb-4">Une touche d’aménagement culturel et de créativité d’expert dans
                                votre
                                maison pour un confort inégalable et un bien-être inestimable</p>
                            <a class="btn" href="https://gloryimpactgroup.org/architecture_interieur"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="https://gloryimpactgroup.org/assets/img/services/service-general-6.jpg" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="https://gloryimpactgroup.org/assets/img/icons/icon-9.png" alt="Icon">
                            <h3 class="mb-3">Rénovation</h3>
                            <p class="mb-4">Refaite le décor interne et externe de vos habitations pour un
                                souffle
                                agréable et un air nouveau…</p>
                            <a class="btn" href="https://gloryimpactgroup.org/renovation"><i class="fa fa-plus text-primary me-3"></i>Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">
                    
                   Les actions de Fondation Glory Impact Group </h4>

                   <div class="container-xxl py-5">
                    <div class="container">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                            <h4 class="section-title">Nos Services</h4>
                            <h1 class="display-5 mb-4">Spécialisés dans l’Architecture Moderne et d'Architecture Intérieur</h1>
                        </div>
                        <div class="row g-4">
            
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="service-item d-flex position-relative text-center h-100">
                                    <img class="bg-img" src="https://gloryimpactgroup.org/assets/img/services/service-general-1.jpg" alt="">
                                    <div class="service-text p-5">
                                        <img class="mb-4" src="https://gloryimpactgroup.org/assets/img/icons/icon-6.png" alt="Icon">
                                        <h3 class="mb-3">Vente de terrains</h3>
                                        <p class="mb-4">Des lotissements de terrains situé dans zones Résidentielles du
                                            Grand
                                            Abidjan pour une meilleure accessibilité au centre de la Capitale</p>
                                        <a class="btn" href="https://gloryimpactgroup.org/service"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <div class="service-item d-flex position-relative text-center h-100">
                                    <img class="bg-img" src="https://gloryimpactgroup.org/assets/img/services/service-general-2.jpg" alt="">
                                    <div class="service-text p-5">
                                        <img class="mb-4" src="https://gloryimpactgroup.org/assets/img/icons/icon-5.png" alt="Icon">
                                        <h3 class="mb-3">Architecture</h3>
                                        <p class="mb-4">Offrez-vous des services d’Architectes et Dessinateurs
                                            professionnelles pour
                                            donner vie à vos projets futuristes dans le plus grand confort.</p>
                                        <a class="btn" href="https://gloryimpactgroup.org/architecture"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <div class="service-item d-flex position-relative text-center h-100">
                                    <img class="bg-img" src="https://gloryimpactgroup.org/assets/img/services/service-general-3.jpg" alt="">
                                    <div class="service-text p-5">
                                        <img class="mb-4" src="https://gloryimpactgroup.org/assets/img/icons/icon-7.png" alt="Icon">
                                        <h3 class="mb-3">House Planning</h3>
                                        <p class="mb-4">Des plans et maquettes faits conçus pour une meilleure vision de
                                            votre
                                            projet de construction par des Architectes et techniciens qualifiés</p>
                                        <a class="btn" href="https://gloryimpactgroup.org/house_planning"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <div class="service-item d-flex position-relative text-center h-100">
                                    <img class="bg-img" src="https://gloryimpactgroup.org/assets/img/services/service-general-4.jpg" alt="">
                                    <div class="service-text p-5">
                                        <img class="mb-4" src="https://gloryimpactgroup.org/assets/img/icons/icon-10.png" alt="Icon">
                                        <h3 class="mb-3">Construction</h3>
                                        <p class="mb-4">Une équipe dynamique et professionnelle pour une construction
                                            rapide et dans
                                            le respect des normes en vigueur en Côte d’Ivoire</p>
                                        <a class="btn" href="https://gloryimpactgroup.org/construction"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                                    </div>
                                </div>
            
                            </div>
            
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                <div class="service-item d-flex position-relative text-center h-100">
                                    <img class="bg-img" src="https://gloryimpactgroup.org/assets/img/services/service-general-5.jpg" alt="">
                                    <div class="service-text p-5">
                                        <img class="mb-4" src="https://gloryimpactgroup.org/assets/img/icons/icon-8.png" alt="Icon">
                                        <h3 class="mb-3">Architecture d'Interieur</h3>
                                        <p class="mb-4">Une touche d’aménagement culturel et de créativité d’expert dans
                                            votre
                                            maison pour un confort inégalable et un bien-être inestimable</p>
                                        <a class="btn" href="https://gloryimpactgroup.org/architecture_interieur"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                                <div class="service-item d-flex position-relative text-center h-100">
                                    <img class="bg-img" src="https://gloryimpactgroup.org/assets/img/services/service-general-6.jpg" alt="">
                                    <div class="service-text p-5">
                                        <img class="mb-4" src="https://gloryimpactgroup.org/assets/img/icons/icon-9.png" alt="Icon">
                                        <h3 class="mb-3">Rénovation</h3>
                                        <p class="mb-4">Refaite le décor interne et externe de vos habitations pour un
                                            souffle
                                            agréable et un air nouveau…</p>
                                        <a class="btn" href="https://gloryimpactgroup.org/renovation"><i class="fa fa-plus text-primary me-3"></i>Read
                                            More</a>
                                    </div>
                                </div>
                            </div>
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
