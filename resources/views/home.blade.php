<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fondation Glory Impact Group</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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
                data-dot="<img src='{{ asset('assets/img/carousels/ecole.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('assets/img/carousels/ecole.jpg') }}" class="d-block w-100" alt="...">
                    
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Soutenez l'autonomie des jeunes en Côte d'Ivoire</h1>
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
                            <h1 class="display-1 text-white animated slideInDown">Devenez bénévole</h1>
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
                <div class="counter">724</div>
                <div class="text">Programmes Phares</div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-users"></i></div>
                <div class="counter">508</div>
                <div class="text">Volontaires</div>
            </div>
            <div class="box">
                <div class="icon"><i class="bi bi-easel"></i></div>
               
                <div class="counter">724</div>
                <div class="text">Représentations</div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-gift"></i></div>
                <div class="counter">72</div>
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

<!--
    <-- Service Start ->
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
    <-- Service End -->


    <!-- Feature Start -->
    <!--
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">NOTRE OBJECTIF</h4>
                    <p class="mb-4">La Fondation Glory Impact Group a pour mission de participer
                     à l'autonomie et à l'insertion socio-professionnelle des jeunes déscolarisés
                      en situation de vulnérabilités et à contribuer au bien-être de la population.
                    </p>
                    <h1 class="display-5 mb-4">Avez vous besoin d'aide ?</h1> 
                    <h1> Souhaitez vous nous contacter ?</h1>
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
                                        <h3 class="mb-0"><a href="https://wa.me/+2250768734728">+225 07 68 73 47 28</a></h3>
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
                                        <h3 class="mb-0">fondationgloryimpactgroup@gmail.com</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/ecole.jpg') }}"
                            alt="">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/ecol.jpg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
-->
    <!-- Feature End -->

    <!-- Appointment End -->
 <!-- Rejoin nous Start -->
 
     
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
    <br>
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h4 class="section-title">Ils nous font confiance, ils ont soutenu notre travail</h4>
       
    </div>
    <div class="bg-light text-center container-xxl py-5">
        <div class="container">
           
            

            <div class="row g-0 team-items">
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
                            <img  width="100" height="100" src="{{ asset('assets/img/partenaire/fondationjs.png') }}"
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
                            <img width="100" height="100" src="https://scontent.fabj7-1.fna.fbcdn.net/v/t39.30808-6/296734966_635127788185801_1636939761000945103_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeFLYaeJQIy3IbZOiP3NCFy_TWEz-QzkYAxNYTP5DORgDMkF2CmksAbQw9SWRw1j3WMsd3GcM1CUldauxa1l5OLz&_nc_ohc=1eaVqyR-Ww8AX91xGTr&_nc_ht=scontent.fabj7-1.fna&oh=00_AfDTPPPVlNYT0hKZbPLKHiXRh3YniEUzRe9Gfl54SxwqFw&oe=63FF5456" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy">
                        
                       
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class=" position-relative">
                        <div class="position-relative">
                            <img width="100" height="100" src="https://scontent.fabj7-1.fna.fbcdn.net/v/t39.30808-6/326055544_5765127286928238_8934736117882148358_n.png?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_eui2=AeEmsP_RHEYqUMSqUlNALzvJZ7XqCn0Pus5nteoKfQ-6znPskSwfxc0qbYRjWvNhH092zrV9b7PF27hnhPXwevgR&_nc_ohc=lHN0rgVtx-AAX-tEvE1&tn=mc-xjTzR46K2Jven&_nc_ht=scontent.fabj7-1.fna&oh=00_AfDCQcjBw76wm98CDiGu7X1wKl6X3_MESJeQhXJr4CKvbg&oe=63FF3E3E" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy">
                        
                       
                        </div>
                     
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class=" position-relative">
                        <div class="position-relative">
                         <img width="100" height="100" src="https://www.agenceemploijeunes.ci/site/themes/refonteaej/assets/images/logo_aej_new.png" class="vc_single_image-img attachment-thumbnail" alt="" loading="lazy">
                        
                        </div>
                    
                    </div>
                </div>

            </div>
        </div>
    </div>
 
<br><br>
  

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
