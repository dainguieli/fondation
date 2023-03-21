<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Galérie</title>
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
            <h1 class="display-1 text-white animated slideInDown">Galérie</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Galérie</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio sections-bg">
    <div class="container" data-aos="fade-up">
      
      <div class="section-header">
        <h2>NOS VIDÉOS ET REPORTAGES</h2>
        <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia reprehenderit sunt deleniti</p>
      </div>

      <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order" data-aos="fade-up" data-aos-delay="100">

        <div>
          <ul class="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Sel festival</li>
            <li data-filter=".filter-product">Product</li>
            <li data-filter=".filter-branding">Branding</li>
            <li data-filter=".filter-books">Books</li>
          </ul><!-- End Portfolio Filters -->
        </div>

        <div class="row gy-4 portfolio-container">

          <div class="col-xl-4 col-md-6 portfolio-item filter-app wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <div class="ratio ratio-16x9">
                <iframe src="https://gloryimpactgroup.org/assets/videos/new.mp4" title="YouTube video" allowfullscreen></iframe>
              </div>
        
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">App 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <div class="ratio ratio-16x9">
                <iframe src="https://gloryimpactgroup.org/assets/videos/new.mp4" title="YouTube video" allowfullscreen></iframe>
              </div>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Product 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <div class="ratio ratio-16x9">
                <iframe src="https://gloryimpactgroup.org/assets/videos/new.mp4" title="YouTube video" allowfullscreen></iframe>
              </div>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <a href="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img class="img-fluid" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}"
                alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-app wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <a href="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img class="img-fluid" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}"
                alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <a href="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img class="img-fluid" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}"
                alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <a href="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img class="img-fluid" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}"
                alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <a href="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img class="img-fluid" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}"
                alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-app wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <a href="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img class="img-fluid" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}"
                alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-product wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <a href="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img class="img-fluid" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}"
                alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-branding wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <a href="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img class="img-fluid" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}"
                alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

          <div class="col-xl-4 col-md-6 portfolio-item filter-books wow fadeInUp team-item">
            <div class="portfolio-wrap">
              <a href="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}" data-gallery="portfolio-gallery-app" class="glightbox"><img class="img-fluid" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}"
                alt=""></a>
              <div class="portfolio-info">
                <h4><a href="portfolio-details.html" title="More Details">Books 1</a></h4>
                <p>Lorem ipsum, dolor sit amet consectetur</p>
              </div>
            </div>
          </div><!-- End Portfolio Item -->

        </div><!-- End Portfolio Container -->

      </div>

    </div>
  </section><!-- End Portfolio Section -->

  <!-- ======= Our Team Section ======= -->
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

    <script>

          /**
   * Porfolio isotope and filter
   */
  let portfolionIsotope = document.querySelector('.portfolio-isotope');

if (portfolionIsotope) {

  let portfolioFilter = portfolionIsotope.getAttribute('data-portfolio-filter') ? portfolionIsotope.getAttribute('data-portfolio-filter') : '*';
  let portfolioLayout = portfolionIsotope.getAttribute('data-portfolio-layout') ? portfolionIsotope.getAttribute('data-portfolio-layout') : 'masonry';
  let portfolioSort = portfolionIsotope.getAttribute('data-portfolio-sort') ? portfolionIsotope.getAttribute('data-portfolio-sort') : 'original-order';

  window.addEventListener('load', () => {
    let portfolioIsotope = new Isotope(document.querySelector('.portfolio-container'), {
      itemSelector: '.portfolio-item',
      layoutMode: portfolioLayout,
      filter: portfolioFilter,
      sortBy: portfolioSort
    });

    let menuFilters = document.querySelectorAll('.portfolio-isotope .portfolio-flters li');
    menuFilters.forEach(function(el) {
      el.addEventListener('click', function() {
        document.querySelector('.portfolio-isotope .portfolio-flters .filter-active').classList.remove('filter-active');
        this.classList.add('filter-active');
        portfolioIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        if (typeof aos_init === 'function') {
          aos_init();
        }
      }, false);
    });

  });

}

/**
 * Animation on scroll function and init
 */
function aos_init() {
  AOS.init({
    duration: 1000,
    easing: 'ease-in-out',
    once: true,
    mirror: false
  });
}
window.addEventListener('load', () => {
  aos_init();
});

    </script>
    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
