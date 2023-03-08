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

   
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img  src="{{ asset('assets/img/carousels/donFondationJC/1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/img/carousels/donFondationJC/2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('assets/img/carousels/donFondationJC/3.jpg') }}" class="d-block w-100" alt="...">
            </div>
  
            <div class="carousel-item">
              <img src="{{ asset('assets/img/carousels/donFondationJC/4.jpg') }}" class="d-block w-100" alt="...">
            </div>
  
            <div class="carousel-item">
              <img src="{{ asset('assets/img/carousels/donFondationJC/5.jpg') }}"
               class="d-block w-100" alt="...">
            </div>
  
            <div class="carousel-item">
              <img src="{{ asset('assets/img/carousels/donFondationJC/6.jpg') }}" class="d-block w-100" alt="...">
            </div>
  
            <div class="carousel-item">
              <img src="{{ asset('assets/img/carousels/donFondationJC/7.jpg') }}" class="d-block w-100" alt="...">
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
      
               <span class="grop-post_date"><i class="bi bi-clock"></i> 15 Décembre 2022</span>
               <h2 class="text-primary">Le Président de Fondation Glory Impact Group et la Présidente de la Fondation Francis CJ ont rendu une visite aux pensionnaires de l'orphelinat Oméga International+ sis à Bingerville. </h2>
               <hr >
               <p style="text-align: justify">Le jeudi 15 décembre 2022, la Fondation Glory Impact Group et la Fondation Francis CJ ont fait une visite à l'orphelinat Oméga International+ situé à Bingerville pour apporter de l'aide et de la joie aux enfants qui y résident.<br><br>

                En entrant dans l'orphelinat, nous avons été accueillis par des enfants souriants et pleins de vie. Les bénévoles de la Fondation Glory Impact Group et de la Fondation Francis CJ ont remis des vivres et des non-vivres, ainsi qu'une somme d'argent pour permettre aux enfants de célébrer les fêtes de fin d'année avec dignité et bonheur.<br><br>
                
                La joie était palpable sur le visage des enfants, qui ont exprimé leur gratitude envers les donateurs. Les bénévoles ont également passé du temps avec les enfants, jouant avec eux, leur racontant des histoires et partageant des moments de rire et de complicité.<br><br>
                
                La visite a été un moment rempli d'émotions pour tous ceux qui y ont participé. Les bénévoles ont été touchés par la résilience des enfants, leur capacité à trouver de la joie dans les moments les plus difficiles et leur détermination à construire un avenir meilleur.<br><br>
                
                En fin de compte, la visite à l'orphelinat Oméga International+ a été un rappel poignant de l'importance de donner aux plus vulnérables de notre société. Les enfants de l'orphelinat ont reçu plus qu'un simple soutien matériel ; ils ont reçu l'espoir et l'amour qui leur permettront de grandir et de réussir malgré les obstacles qu'ils rencontreront sur leur chemin.</p>
          
                <div class="d-flex ">
                  <a class="btn btn-square btn-outline-body me-1" href="" style="color: #de1a20 "><i class="fab fa-twitter"></i></a>
                  <a class="btn btn-square btn-outline-body me-1"  style="color: #de1a20 " href="https://web.facebook.com/profile.php?id=100086391491746&_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                  <a class="btn btn-square btn-outline-body me-1" style="color: #de1a20 " href=""><i class="fab fa-youtube"></i></a>
                  <a class="btn btn-square btn-outline-body me-0"  style="color: #de1a20 " href=""><i class="fab fa-linkedin-in"></i></a>
                  <br><br>
              </div>
        
        
         </div>
         @include('/layouts/ariclesrecents')
      </div>
   </div>

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
