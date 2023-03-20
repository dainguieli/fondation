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
   

   
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('assets/img/don/IMG_0585.JPG') }}"class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/don/IMG_0591.JPG') }}" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="{{ asset('assets/img/don/IMG_0594.JPG') }}" class="d-block w-100" alt="...">
              </div>
              
              <div class="carousel-item">
                <img src="{{ asset('assets/img/don/IMG_0610.JPG') }}" class="d-block w-100" alt="...">
              </div>
    
              <div class="carousel-item">
                <img src="{{ asset('assets/img/don/IMG_0585.JPG') }}"
                 class="d-block w-100" alt="...">
              </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      
    </div>
    <!-- Carousel End -->
    <br>

    <div class="about_section layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 col-sm-12">
      
              <span class="grop-post_date"><i class="bi bi-clock"></i> 08 Décembre 2022</span>
              <h2 class="text-primary">Remise de plus de 300 dons de vivre et non vivre à l'endroit de plusieurs associations de femmes et des veuves en situation vulnérable</h2>
              <hr >
              <p style="text-align: justify">Le jeudi 8 novembre 2022, la Fondation Glory Impact Group a ouvert le Festival Sel et Lumière en grande pompe, en présence de représentants du gouvernement, des partenaires et des bénéficiaires de ses actions. Cette première journée du festival a été marquée par une cérémonie d'ouverture officielle, suivie de la remise de plus de 300 dons de vivres et de non-vivres à plusieurs associations de femmes et de veuves en situation vulnérable.
              <br><br>
              Les dons étaient composés de sacs de riz, d'huile, de boîtes de conserves, de produits d'hygiène, de matériel scolaire, et bien plus encore. Chaque association a reçu un don adapté à ses besoins et à sa situation. Les représentants de ces associations ont exprimé leur gratitude envers la Fondation Glory Impact Group, qui les soutient depuis plusieurs années dans leur lutte contre la précarité.
              <br><br>
              Le chapiteau dressé à cet effet a également accueilli des panels et des conférences sur le thème de l'entrepreneuriat, animés par des experts et des entrepreneurs confirmés. Ces panels ont abordé des sujets tels que la création d'entreprise, la gestion financière, le marketing et la communication, l'innovation, l'économie sociale et solidaire, etc. Les participants ont posé des questions, échangé des idées, et découvert des opportunités pour se lancer dans l'entrepreneuriat.
              <br><br>      
              Le festival se poursuit avec la demi-finale des concours Karaoke, Danse & Mode, qui ont attiré des candidats de tous âges et de tous horizons. Les participants ont montré leur talent, leur créativité, leur originalité, et leur passion pour la musique, la danse et la mode. Les jurys ont sélectionné les meilleurs pour la finale, qui aura lieu le samedi 11 novembre 2022.
              <br><br>  
              Le festival se clôturera par un grand concert avec des artistes renommés, qui réunira des milliers de spectateurs dans une ambiance festive et conviviale. La Fondation Glory Impact Group espère que ce festival inspirera les jeunes et les moins jeunes à croire en leurs rêves, à se former, à s'engager, et à contribuer à la construction d'un monde meilleur.
                <hr >
                <div class="d-flex ">
                  <a class="btn btn-square btn-outline-body me-1" href="" style="color: #de1a20 "><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-square btn-outline-body me-1"  style="color: #de1a20 " href="https://web.facebook.com/profile.php?id=100086391491746&_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-square btn-outline-body me-1" style="color: #de1a20 " href=""><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-square btn-outline-body me-0"  style="color: #de1a20 " href=""><i class="fab fa-linkedin-in"></i></a>
                  <br><br>
              </div>
        
                <!-- article recent-->
       
         </div>
         @include('/layouts/ariclesrecents')
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





