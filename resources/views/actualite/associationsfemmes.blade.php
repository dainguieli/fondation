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
             <p class="lorem_text">La première journée du festival, a été consacrée à la cérémonie d’ouverture officielle du Festival en présence des représentants de Mme Kandia Camara, Ministre d'Etat, Ministre des affaires étrangères, de l'intégration africaine et de la diaspora ainsi que de M. Éric Taba, chef de protocole du président de la République.
              Par la suite plus de 300 dons de vivres et non vivres, chaque don était composée de sac de riz, d’huile, boîte de conserves etc… ont été distribués à plusieurs associations de femmes en situation fragile venus de toutes les communes d’Abidjan
              En ce moment se déroule dans le chapiteau dressé à cet effet, des panels et conférence sur le thème de l’entrepreneuriat…
              Ainsi que la demi finale du concours de l’entrepreneuriat
              La journée du jeudi 08 Novembre 2022, se terminera a 19h.
              Rendez vous demain pour la demi-finale des concours Karaoke, Danse & Mode et le concert Géant avec Nos artistes</div>
      <!-- article recent-->
@include('/layouts/ariclesrecents')
     
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
