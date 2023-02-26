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
    <!-- Page Header End -->

    <!-- Appointment Start -->
    <form action="" method="POST">
    <div class="container-xxl py-5 mt-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Contactez Nous</h4>
                <h1 class="display-5 mb-4">Pour toute autre question, N'hésitez pas à nous contacter</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    {{-- <h4 class="section-title">Obtenez</h4>
                    <h1 class="display-5 mb-4">Un Rendez-vous pour demarrer votre projet</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
                        diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat
                        amet
                    </p> --}}
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 55px; height: 55px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Adresse</p>
                                    <h3 class="mb-0"><a href="https://www.google.com/maps/dir/5.3914863,-3.9776399/glory+impact/@5.3904537,-3.9786809,17z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0xfc193710813014b:0x91118edfc3915d4a!2m2!1d-3.975563!2d5.3898923">Angré 8ème Tranche, Cocody</a> </h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 55px; height: 55px;">
                                    <i class="fa fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">WhatsApp</p>
                                    <h3 class="mb-0"><a href="https://wa.me/+2250768734728">+225 07 68 73 47 28</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 55px; height: 55px;">
                                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Appelez maintenat</p>
                                    <h3 class="mb-0">+225 27 22 42 14 06</a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="bg-light d-flex align-items-center w-100 p-4">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light"
                                    style="width: 55px; height: 55px;">
                                    <i class="fa fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Ecrivez-nous maintenant</p>
                                    <h3 class="mb-0">fondationgloryimpactgroup@gmail.com</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <p class="mb-4">Veuillez renseigner le formulaire ci-dessous en precisant vos préoccupations.
                        Notre équipe se chargera de vous repondre le plus rapidement possible.
                    </p>
                    <form action="/email-send'" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input name="name" type="text" class="form-control"
                                    placeholder="Votre Nom et Prénom(s)" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input name="email" type="email" class="form-control" placeholder="Votre Adresse mail"
                                    style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="text" name="contact" class="form-control" placeholder="Votre Contact"
                                    style="height: 55px;">
                            </div>
                
                            <div class="col-12">
                                <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Prendre un
                                    Rendez-vous</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    </form>
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

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- toastr js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>

</body>

</html>
