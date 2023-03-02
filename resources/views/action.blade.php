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
                        <img class="bg-img" src="{{ asset('assets/img/don/IMG_0585.JPG') }}" alt="">
                        <div class="service-text p-5">
                         
                            <h3 class="mb-3">  </h3>
                            <p class="mb-4">Le 08 décembre 2022 Remise de plus de 300 dons de vivre et non vivre à l'endroit de plusieurs associations de femmes et des veuves en situation vulnérable issues de villages Atchan de Cocody, d'Abobo, de Williamsville et de Yopougon. </p>
                            <a class="btn" href="{{ url('/associationsfemmes') }}"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/321468582_1240927749836771_1891665726572954080_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH04-RPg3Ycfqrqn_qRKRTtbgLI6vW-oSduAsjq9b6hJwQN9fM5jW6mkGQYmLV72Bk0KJ4eYOU018pOkWAU7n17&_nc_ohc=i4gI2hpyYwgAX8NPGA_&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfCf-jPZAike_F8FRSZ3vejrV2kcMMbYS1e3Mtfh72B3XQ&oe=63FD19A3" alt="">
                        <div class="service-text p-5">
                         
                            <h3 class="mb-3">  </h3>
                            <p class="mb-4"> Le 10 décembre 2022 Remise de cadeaux pour la Noel aux enfants issus de différents établissements primaires. Aux 05 meilleurs pour les récompenser et aux enfants défavorisés. Plus de 600 cadeaux.</p>
                            <a class="btn" href="{{ url('/cadeauxpourlaNoelauxenfants') }}"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>

               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/320057391_831400751409496_410963620903755201_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeH8yNULmd2s4B4jyuO-PilftFXF4Z-Ti8y0VcXhn5OLzGnCBtyXpxFUBrXgTX1_xUYSWiqUexOsM9apOHdHAV6W&_nc_ohc=dZJj4FSdmNgAX8Y1XVr&tn=9za5LyBrVSqEjS7J&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfAhW9awYtZA57qzt9npKCdZjqZi4dXtlaZ-tIQ1NckriA&oe=63FD0DCD" alt="">
                        <div class="service-text p-5">
                         
                            <h3 class="mb-3">  </h3>
                            <p class="mb-4">Le 15 décembre 2022: Remise de vivre et non vivre et une somme d'argent de 200.000 FCFA en compagnie de la présidente de la fondation Francis CJ à l'endroit des pensionnaires de l'orphelinat Oméga International + situé à Bingerville.</p>
                            <a class="btn" href="{{ url('/fondationFrancisCJ') }}"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/326812707_5757004994414159_62176097382528420_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeGvQajT1RgFpoizpY2A1KithXuvbgRsBI2Fe69uBGwEja5fx1zmjGdJA7rcO4MB0oiSIBBsCvuEXmzCz8a8pNdD&_nc_ohc=cGmDVHkCt-cAX-SWOvn&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfBSNtg93tvKFtUCIX4yCyoe71-M104hNusakcqLG7iAxg&oe=63FD450F" alt="">
                        <div class="service-text p-5">
                         
                            <h3 class="mb-3">  </h3>
                            <p class="mb-4"> Le 24 janvier 2023: Journée Internationale de l'Education avec les établissements primaires et secondaires. </p>
                            <a class="btn" href="{{ url('/VisiteGroupe') }}"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324336702_551774317013368_7468461429840857096_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE99aWvjDNdFSCD2vYFKwCgTB0BxM6H6oNMHQHEzofqg0by1YeHA121rBL0VlEki7_hJETGIcrD0ay0QCdVrnJ_&_nc_ohc=Wi_TqTESR38AX-tXlaL&_nc_ht=scontent.fabj3-2.fna&oh=00_AfAIyPlT1qvd1OJzrWFM2qYKn_TttZ0eTybMXRmau8LjBA&oe=63FB9BAA" alt="">
                        <div class="service-text p-5">
                         
                            <h3 class="mb-3">  </h3>
                            <p class="mb-4"> Le 25 décembre 2022: Déjeuner de Noel avec les jeunes battants et grouilleurs qui a eu lieu à Cocody II Plateaux. </p>
                            <a class="btn" href="{{ url('/jeunegroulleur') }}"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
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