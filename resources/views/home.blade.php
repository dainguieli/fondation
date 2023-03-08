<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fondation Glory Impact Group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
    @include('sweetalert::alert')

    <style>
       .carousel-inner {
  padding: 1em;
}
.card {
  margin: 0 0.5em;
  box-shadow: 2px 6px 8px 0 rgba(22, 22, 26, 0.18);
  border: none;
}
.carousel-control-prev,
.carousel-control-next {
  background-color: #e1e1e1;
  width: 6vh;
  height: 6vh;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
}
@media (min-width: 768px) {
  .carousel-item {
    margin-right: 0;
    flex: 0 0 33.333333%;
    display: block;
  }
  .carousel-inner {
    display: flex;
  }
}
.card .img-wrapper {
    max-width: 100%;
    height: 13em;
    display: flex;
    justify-content: center;
    align-items: center;
}
.card img {
    max-height: 100%;
}
@media (max-width: 767px) {
  .card .img-wrapper {
    height: 17em;
  }
}
       </style>
<!--
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img  src="{{ asset('assets/img/carousels/fondation.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img  src="{{ asset('assets/img/carousels/ecole.jpg') }}" class="d-block w-100" alt="...">
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="position-relative py-2 px-4 text-bg-dark  rounded-pill">
                        
                            <h1 class="display-1 text-white animated slideInDown position-absolute text-center top-100 start-50 translate-middle mt-1">Soutenez l'autonomie des jeunes en Côte d'Ivoire  <br> <a class="btn btn-primary py-3 px-5" href="">Faites un don</a></h1>

                    </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <img  src="{{ asset('assets/img/carousels/education.jpg') }}"  class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
          <--    <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>->
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div> -->
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('assets/img/carousels/fondation.jpg') }}'>">
                <img  src="{{ asset('assets/img/carousels/fondation.jpg') }}" class="d-block w-100" alt="...">
               
          
            </div>
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('assets/img/carousels/jeuness1.png') }}'>">
                <img class="img-fluid" src="{{ asset('assets/img/carousels/jeuness1.png') }}" class="d-block w-100" alt="...">
                    
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-18">
                                <h1 class="display-1 text-white animated slideInDown">Encourager La jeunesse à s'instruire et à se cultiver,c'est bâtir une socité meilleure. </h1>

                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative"
            data-dot="<img src='{{ asset('assets/img/carousels/ecole.jpg') }}'>">
            <img class="img-fluid" src="{{ asset('assets/img/carousels/ecole.jpg') }}" class="d-block w-100" alt="...">
                
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-1 text-white animated slideInDown">Soutenir l'autonomie des jeunes en Côte d'Ivoire</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                                Hic eveniet explicabo maiores provident iusto consequatur. Officiis voluptas reprehenderit,
                                 cupiditate autem pariatur dolore veritatis itaque nam. Necessitatibus unde non minus tenetur.</p>
                            <a href="{{ url('/don') }}"
                                class="btn btn-primary py-3 px-5 animated slideInLeft">Faite un don</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('assets/img/carousels/jeunesse.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('assets/img/carousels/jeunesse.jpg') }}"
                    alt="">
               
            </div>
            <div class="owl-carousel-item position-relative"
            data-dot="<img src='{{ asset('assets/img/carousels/benevo.jpg') }}'>">
            <img class="img-fluid" src="{{ asset('assets/img/carousels/benevo.jpg') }}" class="d-block w-100" alt="...">
                
            <div class="owl-carousel-inner">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-10 col-lg-8">
                            <h1 class="display-1 text-white animated slideInDown">Devenir bénévole</h1>
                            <p class="fs-5 fw-medium text-white mb-4 pb-3">Nous avons besoin de votre aide pour faire avancer notre mission !
                                 Si vous partagez nos valeurs et que vous souhaitez 
                                 vous engager pour la jeunesse en difficulté, devenez bénévole de 
                                 la Fondation Glory Impact Group.</p>
                            <a href="{{ url('/benevole') }}"
                                class="btn btn-primary py-3 px-5 animated slideInLeft">Rejoignez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Carousel End -->

   

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/dona.jpg') }}"
                            alt="">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/donation.jpg') }}"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">Fondation Glory Impact Group en quelque mots</h4>
                    <h1 class="display-5 mb-4">Une Fondation engagée pour l'autonomie des jeunes et le bien-être de la population</h1>
                    <p> Fondation Glory Impact Group est une organisation qui se consacre à la formation et à l'insertion socio-professionnelle des jeunes en difficulté. Forte de son expérience et de son expertise dans les domaines de l'aménagement foncier, de la communication, de la production et de l'événementiel, elle met en place des programmes innovants pour permettre aux jeunes de se développer et de devenir autonomes. La Fondation est animée par une équipe dynamique et engagée, dirigée par Monsieur Jules GOUHAN et Madame Becely GOUHAN. Elle est également reconnue pour sa transparence et sa responsabilité, et s'appuie sur des partenaires et des donateurs pour réaliser sa mission.
                    </p>
                    <p class="mb-4"></p>
                    <div class="d-flex align-items-center mb-5">
                        <a class="btn btn-primary py-3 px-5" href="{{ url('/about') }}">Savoir plus</a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
<!-- secteur counter-->
<section id="counter">
    <div class="counter-up">
        <div class="content">
            <div class="box">
                <div class="icon"><i class="bi bi-calendar-week"></i></div>
                <div class="counter" data-toggle="counter-up">724</div>
                <div class="text">Programmes Phares</div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="counter " data-toggle="counter-up">508</div>
                <div class="text">Volontaires</div>
            </div>
            <div class="box">
                <div class="icon"><i class="bi bi-easel"></i></div>
               
                <div class="counter"data-toggle="counter-up">724</div>
                <div class="text">Représentations</div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-gift"></i></div>
                <div class="counter" data-toggle="counter-up">72</div>
                <div class="text">Bénéficiaires</div>
            </div>
        </div>
    </div>
</section>
        <!-- programme Start -->
        
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">NOS RECENTES RÉALISATIONS</h4>
               
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
           
          
<!--
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/about/coachs.jpg') }}"
                                alt="">
                            
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">La Fondation Glory Impact Group à reçu les coachs José PINHEIRO et son collaborateur Paul-Alexandre MANIERE</span>
                            <p class="mt-2">Cette rencontre s'est tenue dans le cadre d'un stage de formation de football organisé par Bright Academy, dirigé par M. Patrick Asahia et sponsorisé par la Fondation Glory Impact.<br>Le stage de formation se tiendra du lundi 20 au samedi 25 février 2023 à Marcory Zone 4... </p>

                        

                            <a  href="{{ url('/coachs_Jos') }}"> <span class="text-primary">Savoir plus</span></a>  

                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/about/lentrepreneurM.jpg') }}"
                                alt="">
                          
                        </div>
                        <div class="bg-light text-center p-3">
                            <span class="text-primary" style="width: 600px;" > le président de la Fondation Glory Impact Group Monsieur Jules Gouhan a reçu l'entrepreneur M. Koutouan Djoro Leonard .</span>
                            <p class="mt-2">A cette rencontre la fondation a décidé de l'accompagner , l'encadrer , le coacher et le soutenir pour le développement de sa marque.Le président de la fondation a été très heureux de recevoir ce jeune créateur qui propose de beaux articles. Des engagements forts ont été pris pour…</p>
                            <a  href=""> <span class="text-primary">Savoir plus</span></a>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid"  width="500" height="400"src="{{ asset('assets/img/about/chronos.jpg') }}"
                                alt="">
                       
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">La Fondation Glory Impact Group a eu une fructueuse séance de travail avec M. Rolan LLAMAS Directeur Général Adjoint de Chronos Athletics</span>
                            <p class="mt-2">Depuis 2022, Glory Impact Group est le représentant exclusif du Group Chronos Athletics en Afrique. 
l'objectif final de ce partenariat est d'aboutir à l…</p>
                            <a  href=""> <span class="">Savoire plus</span></a>  
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/about/habitat/donation.jpg') }}"
                                alt="">
                        
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">La Fondation Glory Impact Group a eu une fructueuse séance de travail avec M. Rolan LLAMAS Directeur Général Adjoint de Chronos Athletics</span>
                            <p class="mt-2">Lorem Ipsa nulla, quas itasequi incidunt lcorrupti beatae id reiciendis a officiis voluptates expedita ipsam! Est.</p>
                            <a  href=""> <span class="text-primary">Savoir plus</span></a>  
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
-->

<div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active wow fadeInUp team-item">
            <div class="card">
                <div class="img-wrapper"><img src="{{ asset('assets/img/carousels/rencontre_comor/1.jpg') }}" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title text-primary">La contribution de la Fondation Glory Impact Group à l'insertion socio-professionnelle des jeunes comoriens à travers l'entrepreneuriat</h5>
                    <p class="card-text">Le lundi 27 février 2023, nous avons été reçus en audience par Son Excellence Monsieur DHOIHIR DHOULKAMAL, Ministre des Affaires Étrangères et de la Coopération Internationale… </p>
                   <a href="{{ url('/rencontre_comor') }}" class="btn btn-primary">Savoir plus</a>
                </div>
            </div>
        </div>
        <div class="carousel-item wow fadeInUp team-item ">
            <div class="card">
                <div class="img-wrapper"><img src="{{ asset('assets/img/about/lentrepreneurM.jpg') }}"  class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title text-primary">Le président de la Fondation Glory Impact Group Monsieur Jules Gouhan a reçu l'entrepreneur M. Koutouan Djoro Leonard .
                    </h5>
                    <p class="card-text">A cette rencontre la fondation a décidé de l'accompagner , l'encadrer , le coacher et le soutenir pour le développement de sa marque M. Gouhan s'est déclaré très heureux de recevoir ce jeune créateur...</p>
                   <a href="{{ url('/entrepreneurMs') }}" class="btn btn-primary">Savoir plus</a>
                </div>
            </div>
        </div>
        <div class="carousel-item  wow fadeInUp team-item">
            <div class="card">
                <div class="img-wrapper"><img src="{{ asset('assets/img/carousels/visiteGroup/1.jpg') }}"  class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title text-primary">La Fondation Glory Impact Group a encouragé et donné des conseils aux élèves présentant des lacunes</h5>
                    <p class="card-text">Lors de la Journée Internationale de L'éducation le mardi 24 Janvier 2023, la Fondation Glory Impact Group a encouragé et donné des conseils aux élèves présentant des lacunes. Tous unis pour bâtir une nation forte en formant les leaders de demain.</p>
                   <a href="{{ url('/visiteGroupe') }}" class="btn btn-primary">Savoir plus</a>
                </div>
            </div>
        </div>
        <div class="carousel-item wow fadeInUp team-item">
            <div class="card">
                <div class="img-wrapper"><img src="{{ asset('assets/img/carousels/jeunegrouilleur/1.jpg') }}" class="d-block w-100" alt="..."></div>
                <div class="card-body">
                    <h5 class="card-title text-primary">Déjeuner de Noel avec les jeunes battants et grouilleurs qui a eu lieu à Cocody II Plateaux.</h5>
                    <p class="card-text">Le dimanche 25 décembre 2022, La Fondation Glory Impact Group a organisé "Le Déjeuner de Noël avec des jeunes battants et grouilleurs". Il se décline donc en une cérémonie ouverte aux jeunes sans emploi formel. Ce déjeuner nous l'offrons surtout,...</p>
                   <a href="{{ url('/jeunegrouilleur') }}" class="btn btn-primary">Savoir plus</a>
                </div>
            </div>
        </div>
        <div class="carousel-item wow fadeInUp team-item">
            <div class="card">
                <div class="img-wrapper"><img src="{{ asset('assets/img/carousels/donFondationJC/1.jpg') }}" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title text-primary">Le Président de Fondation Glory Impact Group et la Présidente de la Fondation Francis CJ ont rendu une visite aux pensionnaires.</h5>
                    <p class="card-text">Le jeudi 15 décembre 2022, la Fondation Glory Impact Group et la Fondation Francis CJ ont fait une visite à l'orphelinat Oméga International+ situé à Bingerville pour apporter de l'aide et de la joie aux enfants...</p>
                   <a href="{{ url('/fondationFrancisCJ') }}" class="btn btn-primary">Savoir plus</a>
                </div>
            </div>
        </div>
        <div class="carousel-item wow fadeInUp team-item">
            <div class="card">
                <div class="img-wrapper"><img src="{{ asset('assets/img/about/coachs.jpg') }}" class="d-block w-100" alt="...">  </div>
                <div class="card-body">
                    <h5 class="card-title text-primary">La Fondation Glory Impact Group à reçu les coachs José PINHEIRO et son collaborateur Paul-Alexandre MANIERE</h5>
                    <p class="card-text">A cette rencontre la fondation a décidé de l'accompagner , l'encadrer , le coacher et le soutenir pour le développement de sa marque.Le président de la fondation a été très heureux de recevoir ce jeune créateur qui propose de beaux articles. Des engagements forts ont été pris pour…</p>
                   <a href="{{ url('/coachs_Jos') }}" class="btn btn-primary">Savoir plus</a>
                </div>
            </div>
        </div>
       
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

         <!-- Programme End -->

         <!-- Facts Start -->
         <!--
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ asset('assets/img/icons/collaboration.png') }}" alt="Icon" width="64" style="filter: invert(9%) sepia(93%) saturate(4930%) hue-rotate(358deg) brightness(95%) contrast(98%);">
                        </div>
                        <h3 class="mb-3">Union</h3>
                        <p class="mb-0">Face à toute épreuve, l'union est la force qui nous permet de vaincre</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ asset('assets/img/icons/humain.png') }}" alt="Icon" width="64" style="filter: invert(9%) sepia(93%) saturate(4930%) hue-rotate(358deg) brightness(95%) contrast(98%);">
                        </div>
                        <h3 class="mb-3">Humain</h3>
                        <p class="mb-0">Soutenir ceux qu'on aime, combattre à leur côté; l'amour est tout ce que nous avons, le seul moyen que chacun puisse aider l'autre</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="{{ asset('assets/img/icons/protecteur.png') }}" alt="Icon" width="64" style="filter: invert(9%) sepia(93%) saturate(4930%) hue-rotate(358deg) brightness(95%) contrast(98%);">
                        </div>
                        <h3 class="mb-3">Protecteur</h3>
                        <p class="mb-0"> Les personnes fragiles sont notre faiblesses, unissons nos forces pour les protéger. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- Facts End -->
<br>



    <!-- Testimonial End -->
    <div class="bg-light text-center p-4">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Rejoignez-nous !</h4>
                    <h1 class="">Nous sommes toujours à la recherche de personnes qui partagent notre engagement à aider
                         les jeunes en situation de vulnérabilité en Côte d'Ivoire.
                         Si vous voulez contribuer à notre mission et faire une différence dans la vie des jeunes</h1>
                </div>
                <img  data-wow-delay="0.1s" src="{{ asset('assets/img/carousels/benevo.jpg') }}" class="card-img-top" alt="...">
               
            </div>
          
        </div>

 

    <a href="{{ url('/benevole') }}" style="text-align:center" class="btn btn-primary   py-3 px-5  ">Rejoignez-nous</a>

    </div>
  
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h4 class="section-title">Ils nous font confiance, ils ont soutenu notre travail</h4>
    </div>
    <div class="bg-light text-center container-xxl py-5">
        <div class="container">
            <div class="row g-0 team-items">
            
                <br>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class=" position-relative">
                        <div class="position-relative">
                            <img  width="100" height="100" src="{{ asset('assets/img/partenaire/1.png') }}"
                                alt="">
                            
                        </div>
                   
                    </div>
                </div>
                <br>
                <div class="col-lg-3 col-md-8 wow fadeInUp" data-wow-delay="0.3s">
                    <div class=" position-relative">
                        <div class="position-relative">
                            <img  width="100" height="100" src="{{ asset('assets/img/partenaire/2.png') }}"
                            alt="">
                          <br>
                        </div>
                     
                    </div>
                </div>
                <br>
                <div class="col-lg-3 col-md-6 " data-wow-delay="0.3s">
                    <div class=" position-relative">
                        <div class="position-relative">
                            <img  width="100" height="100" src="{{ asset('assets/img/partenaire/3.png') }}"
                            alt="">
                        </div>
                     
                    </div>
                </div> 
    
                  <div class="col-lg-3 col-md-6 " data-wow-delay="0.3s">
                    <div class=" position-relative">
                        <div class="position-relative">
                            <img  width="100" height="100" src="{{ asset('assets/img/partenaire/4.png') }}"
                            alt="">
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class=" position-relative">
                        <div class="position-relative">
                            <img width="200" height="200"  src="{{ asset('assets/img/partenaire/5.png') }}" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy">
                        
                       
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class=" position-relative">
                        <div class="position-relative">
                            <img width="100" height="100" src="{{ asset('assets/img/partenaire/6.png') }}" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy">
                        
                       
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class=" position-relative">
                        <div class="position-relative">
                         <img width="100" height="100" src="{{ asset('assets/img/partenaire/7.jpg') }}" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy">
                        
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class=" position-relative">
                        <div class="position-relative">
                         <img width="100" height="100" src="{{ asset('assets/img/partenaire/8.png') }}" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy">
                        
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class=" position-relative">
                        <div class="position-relative">
                         <img width="100" height="100" src="{{ asset('assets/img/partenaire/9.png') }}" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy">
                        
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class=" position-relative">
                        <div class="position-relative">
                         <img width="100" height="100" src="{{ asset('assets/img/partenaire/10.png') }}" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy">
                        
                        </div>
                    
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
      
    </div>
  

    <!-- Section Bas de page debut -->
  

    <!-- Section Bas de page Fin -->

    @include('/layouts/footer')
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
<script >
var carouselWidth = $(".carousel-inner")[0].scrollWidth;
var cardWidth = $(".carousel-item").width();
var scrollPosition = 0;
$(".carousel-control-next").on("click", function () {
  if (scrollPosition < (carouselWidth - cardWidth * 4)) { //check if you can go any further
    scrollPosition += cardWidth;  //update scroll position
    $(".carousel-inner").animate({ scrollLeft: scrollPosition },600); //scroll left
  }
});
$(".carousel-control-prev").on("click", function () {
  if (scrollPosition > 0) {
    scrollPosition -= cardWidth;
    $(".carousel-inner").animate(
      { scrollLeft: scrollPosition },
      600
    );
  }
});
var multipleCardCarousel = document.querySelector(
    "#carouselExampleControls"
  );
  if (window.matchMedia("(min-width: 768px)").matches) {
    //rest of the code
    var carousel = new bootstrap.Carousel(multipleCardCarousel, {
      interval: false
    });
  } else {
    $(multipleCardCarousel).addClass("slide");
  }
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false,
    wrap: false,
  });</script>
    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

</body>

</html>
 