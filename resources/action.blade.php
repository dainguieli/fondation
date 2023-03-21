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
    <link href="{{ asset('assets/img/icons/logo.png') }}" rel="icon">

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
    @include('/layouts/background/backgroundaction')
    <!-- Page Header End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px; visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h4 class="section-title">Les actions de La Fondation Glory Impact Group</h4>
               
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/img/carousels/visiteGroup/1.jpg') }}"  alt="">
                        <div class="service-text p-5">
                         
                            <h3 class="mb-3">  </h3>
                            <p class="mb-4"><br><br><br> Le 24 janvier 2023: Journée Internationale de l'Education avec les établissements primaires et secondaires. </p>
                            <a class="btn" href="{{ url('/VisiteGroupe') }}"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
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
                        <img class="bg-img" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}" alt="">
                        <div class="service-text p-5">
                         
                            <h3 class="mb-3">  </h3>
                            <p class="mb-4"> Le 10 décembre 2022 Remise de cadeaux pour la Noel aux enfants issus de différents établissements primaires. Aux 05 meilleurs pour les récompenser et aux enfants défavorisés. Plus de 600 cadeaux.</p>
                            <a class="btn" href="{{ url('/cadeauxpourlaNoelauxenfants') }}"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>

               <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/img/carousels/donFondationJC/1.jpg') }}" alt="">
                        <div class="service-text p-5">
                         
                            <h3 class="mb-3">  </h3>
                            <p class="mb-4">Le 15 décembre 2022: Remise de vivre et non vivre et une somme d'argent de 200.000 FCFA en compagnie de la présidente de la fondation Francis CJ à l'endroit des pensionnaires de l'orphelinat Oméga International + situé à Bingerville.</p>
                            <a class="btn" href="{{ url('/fondationFrancisCJ') }}"><i class="fa fa-plus text-primary me-3"></i>Voir plus</a>
                        </div>
                    </div>
                </div>
             
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="service-item d-flex position-relative text-center h-100">
                        <img class="bg-img" src="{{ asset('assets/img/carousels/jeunegrouilleur/2.jpg') }}" alt="">
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

    @include('/posts/show')

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