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

  <!-- Carousel Start -->
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

                data-dot="<img src='https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/330080523_591476582832010_2895964468674220467_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH34rFb04kD9Lj4e1hXMze77xLlvMqdrF7vEuW8yp2sXoSDAsooWHfRe64CCsRPwr4dBrJawYC6uFXSJwuvXzwF&_nc_ohc=-d3qVBtI8EUAX-UVsmX&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfBvAu8DLiMxiUfc1Tf9Y0xPv4PKBWY5nC6vY-uFyNBPMw&oe=63FA1B4C'>">
              <img  src="{{ asset('assets/img/about/habitat/about-2.jpg') }}" class="d-block w-100" alt="...">
            </div>
      
            <div class="owl-carousel-item position-relative"
               
                data-dot="<img src='https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/332027631_723862572477331_599335183062680629_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEqWTLTSQjLc3xuRER2GDYFmEGHjAvKp26YQYeMC8qnbnT7VmuyuCcjQ-ABp5jqHT2zMY-3-HRMag2EyWaDXUNN&_nc_ohc=eLiaAZckXWIAX8c81sP&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfApEZ4b4Tvxre671c6PXkmVsnzhfike-fnPdHyJn_sW_w&oe=63FB1415'>">
                <img class="img-fluid" src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/332027631_723862572477331_599335183062680629_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEqWTLTSQjLc3xuRER2GDYFmEGHjAvKp26YQYeMC8qnbnT7VmuyuCcjQ-ABp5jqHT2zMY-3-HRMag2EyWaDXUNN&_nc_ohc=eLiaAZckXWIAX8c81sP&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfApEZ4b4Tvxre671c6PXkmVsnzhfike-fnPdHyJn_sW_w&oe=63FB1415" class="d-block w-100" alt="...">
                    
          
            </div>
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/331245462_524297219816402_2556983193473060101_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHLCsUoN3WoHVqzmv71xXMtuZzp1caee9W5nOnVxp571ckl_Mro6oeXWRm-GQzJZkCmC8TBpXBYxThLN7A--1bm&_nc_ohc=0plsdBynpL8AX_55CFX&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfDI_tcKZFa3YQZmPF8ivH6IEjej4Vs9YUNKjMqV28m5Ag&oe=63FB0AEB'>">
                <img class="img-fluid" src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/331245462_524297219816402_2556983193473060101_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHLCsUoN3WoHVqzmv71xXMtuZzp1caee9W5nOnVxp571ckl_Mro6oeXWRm-GQzJZkCmC8TBpXBYxThLN7A--1bm&_nc_ohc=0plsdBynpL8AX_55CFX&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfDI_tcKZFa3YQZmPF8ivH6IEjej4Vs9YUNKjMqV28m5Ag&oe=63FB0AEB"

                    alt="">
               
            </div>
           
        </div>
    </div>
    <!-- Carousel End -->
   <div class="about_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-sm-12">
    
             <span class="grop-post_date"><i class="bi bi-clock"></i> 18 Février 2023</span>
             <h2 class="text-primary">La Fondation Glory Impact Group à reçu les coachs José PINHEIRO et son collaborateur Paul-Alexandre MANIER</h2>
             <hr >
             <p class="lorem_text">Ce samedi 18 Février 2023, nous avons reçu les coachs José PINHEIRO, ex coach pour l'académie de la Fondation du Real Madrid et actuel Directeur de football de l'AS Casinca en France
                et son collaborateur Paul-Alexandre MANIERE, diplômé de l’UEFA B et Éducateur (U11 - U14) de l’AS Casinca en France.<br>
                Cette rencontre s'est tenue dans le cadre d'un stage de formation de football organisé par Bright Academy, dirigé par M. Patrick Asahia et sponsorisé par la Fondation Glory Impact Group. <br>
                Le stage de formation se tiendra du lundi 20 au samedi 25 février 2023 à Marcory Zone 4.<br>
                Durant cet échange, C'est avec une grande passion que les coachs nous ont partagé le contenu des activités et ateliers qui meubleront les séances d'entrainement.<br>
                La Fondation Glory Impact Group, soucieuse de l'épanouissement et de la promotion des jeunes talents offre également l'opportunité à des jeunes footballeurs orphelins et des jeunes footballeurs présentant des difficultés financières à participer gratuitement à ce stage.<br>
                Aussi, la Fondation Glory Impact Group permettra à des jeunes coachs locaux qui désirent apprendre d'assister à ce stage afin de bénéficier de l'expérience et du savoir-faire des deux coachs internationaux.<br>
                A la suite de ce premier stage de formation, d'autres projets d'envergures sont prévus dans le but de professionnaliser et rendre compétitifs nos talents locaux.</p>
          </div>
      
          <div class="col-lg-4 col-sm-12">
             
             <h1 class="text-primary">ARTICLES RÉCENTS</h1>
             <div class="read_bt_1"><a href="#">La Fondation Glory Impact Group à reçu les coachs José PINHEIRO et son collaborateur Paul-Alexandre MANIER</a></div>
             <hr >
             <div class="read_bt_1"><a href="#">le président de la Fondation Glory Impact Group Monsieur Jules Gouhan a reçu l'entrepreneur M. Koutouan Djoro Leonard .</a></div>
             <hr >
             <div class="read_bt_1"><a href="#">La Fondation Glory Impact Group a eu une fructueuse séance de travail avec M. Rolan LLAMAS Directeur Général Adjoint de Chronos Athletics</a></div>
             <hr >
            
          </div>
       </div>
    </div>
 </div>
 <!-- about section end --> 
   

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
