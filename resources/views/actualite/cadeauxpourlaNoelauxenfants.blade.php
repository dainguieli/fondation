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
              <img src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/321468582_1240927749836771_1891665726572954080_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH04-RPg3Ycfqrqn_qRKRTtbgLI6vW-oSduAsjq9b6hJwQN9fM5jW6mkGQYmLV72Bk0KJ4eYOU018pOkWAU7n17&_nc_ohc=i4gI2hpyYwgAX8NPGA_&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfCf-jPZAike_F8FRSZ3vejrV2kcMMbYS1e3Mtfh72B3XQ&oe=63FD19A3" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/321484212_5941595175879766_7249186337466791470_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHC9AdtGVAJCEvGgMY6UKmqzo0eLLgfDlPOjR4suB8OU5Y_TYE25wwNby_L5dtWlkkUjLfYEWkTrnGUMrmvnVcW&_nc_ohc=MK3x0Jqhj2kAX9Pyikl&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfDJe6LIl0XTH1OkhzGtr-dMNXeg3sv9IOF9QKbLYW4s4w&oe=63FE5E29" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/321485011_1503774713450469_3746858205869983229_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFJXeHSrQU5oUwa01VymQGXseakfJG3Cl-x5qR8kbcKX12dR7N9xBPmt9ASXzaUwPsdJfZZdZfNnn8NaQ8FxZFO&_nc_ohc=geWTLceJLgkAX_CGFM_&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfB_-tlgsMFWutRHmAB10im_p_CFPKSPipOM62fM15uWnA&oe=63FE69DF" class="d-block w-100" alt="...">
            </div>
  
            <div class="carousel-item">
              <img src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/321383277_824929831947218_8609079719596369197_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFR8ikx3O9x9MNJYor8xa3_7_U_MhAuennv9T8yEC56eRb2zettbSWc93rovLmvl3IHjjBYMmwLlsca7PPEFeYB&_nc_ohc=m6bQmoFjLNwAX8_h_MM&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfBYtm2Vuq2pD9p9jAg-xFYvyFdz2Z4RyAnbFXgNbBrovg&oe=63FD899F" class="d-block w-100" alt="...">
            </div>
  
            <div class="carousel-item">
              <img src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/321433652_883014059511130_8205051305172004192_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEg0p_iMWSsDIFdtp7dgNuhfXYZ9wPYyuJ9dhn3A9jK4kxIHVVx8Y6zuIjYNvajNCQrBKiXE6NSXhXfbD4kuyMc&_nc_ohc=4mVMj3fpmJQAX-lWoOr&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfAhvsXJlTSWbheFMNlZqoYthvV6yC76Z1ls5DLbY5Vg8A&oe=63FCC61E"
               class="d-block w-100" alt="...">
            </div>
  
            <div class="carousel-item">
              <img src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/321093088_489385313183114_8189450940458422215_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeESoJQ-3J9QJJqQdHplCQjrAEToZ9pMDDQAROhn2kwMNN3KDx-qohSl6-wgy3WWmsxkzdcJS2q910eXE62eGQa0&_nc_ohc=_9OUsZGFAKsAX8zIOp8&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfCFkxfYUJLe5qTpjyO82CDP2Vyz83Z7BAdWEazmYgQnmw&oe=63FE09B0" class="d-block w-100" alt="...">
            </div>
  
            <div class="carousel-item">
              <img src="https://scontent.fabj2-1.fna.fbcdn.net/v/t39.30808-6/321564636_538410941662772_9021766722121831724_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH2-z-0oJTpxTeU2P-kExm2QGz_TzLIeNBAbP9PMsh40I-g3qv1oU7x5ncc7gFpKdBjua1-jxNwcLHftviALq4x&_nc_ohc=q019Wgh8hzUAX8AhUkO&_nc_zt=23&_nc_ht=scontent.fabj2-1.fna&oh=00_AfAyPmHEgEcmb0-UG4aJ6xNbdFNUdR99dX6ifcqVGogWMA&oe=63FCDD3F" class="d-block w-100" alt="...">
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

    <!-- Carousel End -->
   <div class="about_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-lg-8 col-sm-12">
    
             <span class="grop-post_date"><i class="bi bi-clock"></i> 10 Décembre 2022</span>
             <h2 class="text-primary">Remise de cadeaux pour la Noel aux enfants issus de différents établissements primaires. Aux 05 meilleurs pour les récompenser et aux enfants défavorisés. Plus de 600 cadeaux.</h2>
             <hr >
             <p class="lorem_text">Le samedi 10 décembre 2022, date de la 3ème journée du Festival Sel et Lumière, 
              la Fondation Glory Impact Group a célébré avant l'heure la fête de la Noël  avec 600 enfants. Parmi ces enfants, 300 sont les meilleurs élèves issus d' établissements d'enseignement primaire et secondaire; 300 autres sont issus  de familles démunies.
              La Fondation Glory Impact Group célèbre ainsi l'excellence et encourage les enfants à développer l'esprit de solidarité.</p>
          </div>
      
              <!-- article recent-->
      @include('/layouts/ariclesrecents')
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
