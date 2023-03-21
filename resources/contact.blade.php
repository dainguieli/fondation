<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Glory Impact Group</title>
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
            <h1 class="display-1 text-white animated slideInDown">Contacts</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Contacts</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
  
             <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Contactez Nous</h4>
                <h1 class="display-5 mb-4">Pour toute autre question, N'hésitez pas à nous contacter</h1>
            </div>
  
          <div class="row gx-lg-0 gy-4">
  
            <div class="col-lg-4">
  
              <div class="info-container d-flex flex-column align-items-center justify-content-center">
                <div class="info-item d-flex">
                  <i class="bi bi-geo-alt flex-shrink-0"></i>
                  <div>
                    <h4>Localisation:</h4>
                    <h4><a  style="color: #ffff" href="https://www.google.com/maps/dir/5.3914863,-3.9776399/glory+impact/@5.3904537,-3.9786809,17z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0xfc193710813014b:0x91118edfc3915d4a!2m2!1d-3.975563!2d5.3898923">Angré 8ème Tranche, Cocody</a> </h4>
             
                  </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-envelope flex-shrink-0"></i>
                  <div>
                    <h4>Email:</h4>
                    <h4 style="color: #ffff">fondationgloryimpactgroup@gmail.com </h4>
                     </div>
                </div><!-- End Info Item -->
  
                <div class="info-item d-flex">
                  <i class="bi bi-phone flex-shrink-0"></i>
                  <div>
                    <h4>WhatsApp:</h4>
                    <h4> <a style="color: #ffff" href="https://wa.me/+2250768734728">+225 07 68 73 47 28</a></h4>
                  </div>
                </div><!-- End Info Item -->
                <div class="info-item d-flex">
                    <i class="fa fa-phone-alt flex-shrink-0"></i>
                    <div>
                      <h4>Contact:</h4>
                      <h4 style="color: #ffff">
                        +225 27 22 42 14 06
                    </h4>  
                    </div>
                  </div><!-- End Info Item -->
  <!--
                <div class="info-item d-flex">
                  <i class="bi bi-clock flex-shrink-0"></i>
                  <div>
                    <h4>Open Hours:</h4>
                    <p>Mon-Sat: 11AM - 23PM</p>
                  </div>
                </div>
            -->
                <!-- End Info Item -->
              </div>
  
            </div>
  
            <div class="col-lg-8">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Votre nom et prenoms" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet" required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="message" rows="7" placeholder="Message" required></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit"><strong>Envoyer un message</strong></button></div>
              </form>
            </div><!-- End Contact Form -->
  
          </div>
  
        </div>
      </section><!-- End Contact Section -->









    <!-- Page Header End -->

    <!-- Appointment Start -->
  
    <!-- Appointment End -->

        <!-- Google Map Start -->
        <div class="container-xxl pt-5 px-0 mt-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
            <!-- <iframe class="w-100 mb-n2" style="height: 450px;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
            <iframe class="w-100 mb-n2" style="height: 450px;"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15888.70984155363!2d-3.9755113!3d5.3899048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x91118edfc3915d4a!2sGLORY%20IMPACT%20GROUP%20-%20C%C3%B4te%20d&#39;Ivoire!5e0!3m2!1sfr!2sci!4v1653756036370!5m2!1sfr!2sci"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" frameborder="0" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
        <!-- Google Map End -->


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


        <script src="{{ asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

</body>

</html>
