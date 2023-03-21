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
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="">
                     
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/fondaa.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">Pourquoi devenir Bénévole actif ?</h4>
                    <h1 class="display-5 mb-4">Une Fondation engagée pour l'autonomie des jeunes et le bien-être de la population
                    </h1>
                    <p>Devenir bénévole actif pour la Fondation Glory Impact Group peut être motivant pour plusieurs raisons.

                        Tout d'abord, cela permet de contribuer à une cause noble en aidant les populations vulnérables à travers le monde. En travaillant avec la Fondation Glory Impact Group, les bénévoles actifs ont l'opportunité de faire une différence positive dans la vie des autres en soutenant des projets liés à la santé, à l'éducation et au développement durable.<br>
                        
                        Ensuite, devenir bénévole actif pour la Fondation Glory Impact Group peut également offrir des avantages personnels, tels que le développement de compétences pertinentes pour les activités de l'organisation, la possibilité de rencontrer des gens partageant les mêmes idées et de se faire des amis, ainsi que la satisfaction de donner de son temps et de son énergie pour une cause importante.<br>
                        
                        De plus, travailler en tant que bénévole actif pour la Fondation Glory Impact Group peut offrir une expérience enrichissante et émouvante en ayant un contact direct avec les bénéficiaires de l'organisation et en voyant les résultats concrets des projets soutenus. <br>
                        
                        Enfin, devenir bénévole actif pour la Fondation Glory Impact Group peut offrir la possibilité de se sentir utile et de contribuer à un monde meilleur et plus juste, en soutenant une organisation qui s'engage à promouvoir le bien-être des populations vulnérables à travers le monde. <br>
                        
                        En somme, devenir bénévole actif pour la Fondation Glory Impact Group peut offrir des avantages personnels et professionnels tout en contribuant à une cause importante. Si vous êtes intéressé à rejoindre notre communauté engagée et à faire une différence positive dans la vie des autres, n'hésitez pas à nous contacter pour en savoir plus sur les opportunités de bénévolat disponibles.
                        
                     </p>
                    <p class="mb-4">   Rejoignez-nous dans notre mission et contribuez à rendre un avenir meilleur à notre jeunesse !
                    </p>
       
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment Start -->
    <form  method="post" action="{{ route('creerbenevole') }}" enctype="multipart/form-data" > 
        @csrf 
        @method('post') 
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
                                <img decoding="async" width="500" height="400" src="{{ asset('assets/img/carousels/benevo1.jpg') }}" class="attachment-large size-large" alt="" loading="lazy">
                               

                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="title-left">
                                @if(count($errors)>0)
                                <div class="alert alert-danger">
        <ul>
            @foreach ($errors ->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
                                </div>
                                    @endif

                                    @if(Session::has('status'))
                                    <div class="alert alert-success">
                                    {{Session::get('status')}}
                                    </div>
                                    @endif
                            </div>
                        
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input name="nom" type="text" class="form-control"
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
                                        <input name="metier" type="text" class="form-control"
                                            placeholder="Votre Métier" style="height: 55px;">
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
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-primary w-10 py-3" type="submit">Rejoignez-nous</button>
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