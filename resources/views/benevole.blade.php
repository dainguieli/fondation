<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bénévole</title>
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

    <!-- Page Header Start -->
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
        style="background: url({{ asset('assets/img/autres/autres-img-static.jpg') }});
                background-repeat:no-repeat;
                background-position:center;">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Bénévole</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Bénévole</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Appointment Start -->
    <form action="" method="POST">
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Rejoignez nous</h4>
               
            </div>
            <div class="container">
                <p class="text-ini" style="text-align: initial">     Nous sommes toujours à la recherche de personnes qui partagent notre engagement à aider les jeunes en situation de vulnérabilité en Côte d'Ivoire. Si vous voulez contribuer à notre mission et faire une différence dans la vie des jeunes, voici quelques façons de nous rejoindre :

                    Devenez bénévole : nous avons besoin de personnes dévouées pour nous aider à organiser des événements, collecter des fonds et soutenir nos programmes.
                    
                    Faites un don : chaque petit geste compte et peut aider à changer la vie d'un jeune en difficulté. Nous acceptons les dons de toutes tailles et sommes reconnaissants de toute aide que vous pouvez nous apporter.
                    
                    Partagez notre histoire : aidez-nous à sensibiliser les gens à notre cause en partageant notre histoire et notre travail sur les réseaux sociaux et avec vos amis et votre famille.
                    
                    Nous sommes impatients de travailler avec vous pour faire une différence dans la vie des jeunes en Côte d'Ivoire. Rejoignez-nous dès aujourd'hui !
               </p>
            </div>







            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                     
                      
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="about-img" style="background: color:#4169E1;">
                                <img decoding="async" width="500" height="400" src="{{ asset('assets/img/carousels/benevo.jpg') }}" class="attachment-large size-large" alt="" loading="lazy">
                                <img decoding="async" width="500" height="400" src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/329698996_1457998751671310_8904306350743599836_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH9irZHZBsqeqhw-CHNqcHvABEJotlMgPEAEQmi2UyA8eMOb4CR8lR2pW8kkshjIPk4LCu3-XJSkTACFN77J-mW&_nc_ohc=UkcbQdb1kPoAX_Njj3A&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfDSUUeU1294916wD_6LjSN4nAXlmaLvY_T7piXwAHdlnw&oe=63FAC3A0" class="attachment-large size-large" alt="" loading="lazy">
                               

                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <form action="/email-send'" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input name="name" type="text" class="form-control"
                                            placeholder="Votre Nom " style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input name="prenom" type="text" class="form-control"
                                            placeholder=" Prénom(s)" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="text" name="contact" class="form-control" placeholder="Votre Contact"
                                            style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input name="adresse" type="text" class="form-control"
                                            placeholder="Votre adresse" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input name="adresse" type="text" class="form-control"
                                            placeholder="Votre adresse" style="height: 55px;">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input name="email" type="email" class="form-control" placeholder="Votre  mail"
                                            style="height: 55px;">
                                    </div>
                                   
                        
                                    <div class="col-12">
                                        <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Rejoignez-nous</button>
                                    </div>
                                </div>
                            </form>
                        
                            
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
    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

</body>

</html>