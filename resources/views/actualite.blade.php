<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Actualités</title>
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
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" class="img-fluid"
        style="background: url({{ asset('assets/img/autres/formation.jpeg') }});
                background-repeat:no-repeat;
                background-position:center;">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Actualités</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Actualités</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">
                    
                    ACTUAlités Fondation Glory Impact Group </h4>
               
            </div>

            <div class="row g-0 team-items">
              
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid"src="{{ asset('assets/img/carousels/rencontre_comor/1.jpg') }}"
                                alt="">
                             
                            <div class="team-social text-center">
                                <div class="grop-news_ps_date">
                                    
                                    <i class="bi bi-clock"></i> 27 Fév 2023	</div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">La contribution de la Fondation Glory Impact Group à l'insertion socio-professionnelle des jeunes comoriens à travers l'entrepreneuriat</span>
                            <p class="mt-2" style="text-align: justify">Le lundi 27 février 2023, nous avons été reçus en audience par Son Excellence Monsieur DHOIHIR DHOULKAMAL…</p>

                            <a href="{{ url('/rencontre_comor') }}"> <span class="text-primary">Savoir plus</span></a>  

                        </div>
                    </div>
                </div>
                  <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/about/coachs.jpg') }}"
                                alt="">
                             
                            <div class="team-social text-center">
                                <div class="grop-news_ps_date">
                                    
                                    <i class="bi bi-clock"></i> 18 Fev 2023	</div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">La Fondation Glory Impact Group à reçu les coachs José PINHEIRO et son collaborateur</span>
                            <p class="mt-2" style="text-align: justify">Cette rencontre s'est tenue dans le cadre d'un stage de formation de football organisé par Bright Academy, dirigé par M. Patrick Asahia et sponsorisé par la Fondation Glory Impact... </p>

                            <a href="{{ url('/coachs_Jos') }}"> <span class="text-primary">Savoir plus</span></a>  

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/about/lentrepreneurM.jpg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <div class="grop-news_ps_date">
                                    <i class="bi bi-clock"></i>  13 Fev 2023	</div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-3">
                            <span class="text-primary" style="width: 600px;" > Le président de la Fondation Glory Impact Group Monsieur Jules Gouhan a reçu l'entrepreneur M. Koutouan Djoro Leonard .</span>
                            <p class="mt-2" style="text-align: justify" style="text-align: justify">A cette rencontre la fondation a décidé de l'accompagner , l'encadrer , le coacher et le soutenir pour le développement de sa marque...</p>
                            <a  href="{{url('/entrepreneurMs')}}"> <span class="text-primary">Savoir plus</span></a>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/about/chronos.jpg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <div class="grop-news_ps_date">
                                    <i class="bi bi-clock"></i> 10 Fev 2023</div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">La Fondation Glory Impact Group a eu une fructueuse séance de travail avec M. Rolan LLAMAS </span>
                            <p class="mt-2" style="text-align: justify">Depuis 2022, Glory Impact Group est le représentant exclusif du Group Chronos Athletics en Afrique...</p>
                            <a href="{{url('/Chronos')}}"> <span class="">Savoire plus</span></a>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid"src="{{ asset('assets/img/carousels/visiteGroup/1.jpg') }}" 
                                alt="">
                            <div class="team-social text-center">
                                <div class="grop-news_ps_date">
                                    <i class="bi bi-clock"></i> 24 Janv 2023	</div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">Journée Internationale de l'Education avec les établissements primaires et secondaires.</span>
                            <p class="mt-2" style="text-align: justify">Le mardi 24 janvier 2023, à l'occasion de la Journée Internationale de l'éducation, la Fondation Glory Impact Group a ...</p>

                            <a href="{{ url('/VisiteGroupe') }}"> <span class="text-primary">Savoir plus</span></a>  

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/carousels/jeunegrouilleur/1.jpg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <div class="grop-news_ps_date">
                                    <i class="bi bi-clock"></i> 25 Déc 2022	</div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary"> La Fondation Glory Impact Group a organisé "Le Déjeuner de Noël avec des jeunes battants et grouilleurs".</span>
                            <p class="mt-2" style="text-align: justify">Il se décline donc en une cérémonie ouverte aux jeunes sans emploi formel. Ce déjeuner nous l'offrons surtout, et cela à partir de cette année,... </p>
                            <a  href="{{url('/jeunegroulleur')}}"> <span class="text-primary">Savoir plus</span></a>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/carousels/donFondationJC/1.jpg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <div class="grop-news_ps_date">
                                    <i class="bi bi-clock"></i> 15 Déc 2022	</div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">le Président de Fondation Glory Impact Group et la Présidente de la Fondation Francis CJ ont rendu une visite aux pensionnaires.</span>
                            <p class="mt-2" style="text-align: justify">Le jeudi 15 décembre 2022, le Président de Fondation Glory Impact Group et la Présidente de la Fondation Francis CJ ont rendu une visite ...</p>
                            <a  href="{{url('/fondationFrancisCJ')}}"> <span class="text-primary">Savoir plus</span></a>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}"
                                alt="">
                            <div class="team-social text-center">
                                <div class="grop-news_ps_date">
                                    <i class="bi bi-clock"></i> 10 Déc 2022	</div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">Remise de cadeaux pour la Noel aux enfants issus de différents établissements primaires.</span>
                            <p class="mt-2" style="text-align: justify">Le samedi 10 décembre 2022, date de la 3ème journée du Festival Sel et Lumière, 
                                la Fondation Glory Impact Group a célébré avant l'heure la fête de la Noël  avec 600 enfants...</p>
                            <a  href="{{url('/cadeauxpourlaNoelauxenfants')}}"> <span class="text-primary">Savoir plus</span></a>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/don/IMG_0585.JPG') }}"
                                alt="">
                            <div class="team-social text-center">
                                <div class="grop-news_ps_date">
                                    <i class="bi bi-clock"></i> 08 Déc 2022	</div>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">Remise de plus de 300 dons de vivre et non vivre à l'endroit de plusieurs associations de femmes et des veuves en situation vulnérable</span>
                            <p class="mt-2" style="text-align: justify">Le jeudi 8 novembre 2022, la Fondation Glory Impact Group a ouvert le Festival Sel et Lumière en grande pompe,...</p>
                            <a  href="{{url('/associationsfemmes')}}"> <span class="text-primary">Savoir plus</span></a>  
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