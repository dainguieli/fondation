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
<<<<<<< HEAD
=======
   
>>>>>>> 5e5aa36 (	modified:   app/Http/Controllers/ContactController.php)
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
<<<<<<< HEAD
                data-dot="<img src='{{ asset('assets/img/carousels/fondation.jpg') }}'>">
                <img  src="{{ asset('assets/img/carousels/fondation.jpg') }}" class="d-block w-100" alt="...">
=======
                data-dot="<img src='https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/330080523_591476582832010_2895964468674220467_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH34rFb04kD9Lj4e1hXMze77xLlvMqdrF7vEuW8yp2sXoSDAsooWHfRe64CCsRPwr4dBrJawYC6uFXSJwuvXzwF&_nc_ohc=-d3qVBtI8EUAX-UVsmX&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfBvAu8DLiMxiUfc1Tf9Y0xPv4PKBWY5nC6vY-uFyNBPMw&oe=63FA1B4C'>">
                <img  src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/330080523_591476582832010_2895964468674220467_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH34rFb04kD9Lj4e1hXMze77xLlvMqdrF7vEuW8yp2sXoSDAsooWHfRe64CCsRPwr4dBrJawYC6uFXSJwuvXzwF&_nc_ohc=-d3qVBtI8EUAX-UVsmX&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfBvAu8DLiMxiUfc1Tf9Y0xPv4PKBWY5nC6vY-uFyNBPMw&oe=63FA1B4C" class="d-block w-100" alt="...">
>>>>>>> 5e5aa36 (	modified:   app/Http/Controllers/ContactController.php)
               
          
            </div>
            <div class="owl-carousel-item position-relative"
<<<<<<< HEAD
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
=======
                data-dot="<img src='https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/332027631_723862572477331_599335183062680629_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEqWTLTSQjLc3xuRER2GDYFmEGHjAvKp26YQYeMC8qnbnT7VmuyuCcjQ-ABp5jqHT2zMY-3-HRMag2EyWaDXUNN&_nc_ohc=eLiaAZckXWIAX8c81sP&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfApEZ4b4Tvxre671c6PXkmVsnzhfike-fnPdHyJn_sW_w&oe=63FB1415'>">
                <img class="img-fluid" src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/332027631_723862572477331_599335183062680629_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEqWTLTSQjLc3xuRER2GDYFmEGHjAvKp26YQYeMC8qnbnT7VmuyuCcjQ-ABp5jqHT2zMY-3-HRMag2EyWaDXUNN&_nc_ohc=eLiaAZckXWIAX8c81sP&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfApEZ4b4Tvxre671c6PXkmVsnzhfike-fnPdHyJn_sW_w&oe=63FB1415" class="d-block w-100" alt="...">
                    
          
            </div>
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/331245462_524297219816402_2556983193473060101_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHLCsUoN3WoHVqzmv71xXMtuZzp1caee9W5nOnVxp571ckl_Mro6oeXWRm-GQzJZkCmC8TBpXBYxThLN7A--1bm&_nc_ohc=0plsdBynpL8AX_55CFX&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfDI_tcKZFa3YQZmPF8ivH6IEjej4Vs9YUNKjMqV28m5Ag&oe=63FB0AEB'>">
                <img class="img-fluid" src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/331245462_524297219816402_2556983193473060101_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHLCsUoN3WoHVqzmv71xXMtuZzp1caee9W5nOnVxp571ckl_Mro6oeXWRm-GQzJZkCmC8TBpXBYxThLN7A--1bm&_nc_ohc=0plsdBynpL8AX_55CFX&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfDI_tcKZFa3YQZmPF8ivH6IEjej4Vs9YUNKjMqV28m5Ag&oe=63FB0AEB"
>>>>>>> 5e5aa36 (	modified:   app/Http/Controllers/ContactController.php)
                    alt="">
               
            </div>
            <div class="owl-carousel-item position-relative"
<<<<<<< HEAD
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
                            <a href="{{ url('') }}"
                                class="btn btn-primary py-3 px-5 animated slideInLeft">Rejoignez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Carousel End -->

    <div class="grop-sigl_content">
	
    <p>Le samedi 06 Novembre 2021 était exceptionnel pour l’organisation !<br>Comme je l’avais énoncé dans mon précédent poste , notre assemblée générale qui marque le début de notre année associative 2022.<br>Avec mon équipe nous l’avions tant préparé sur des mois et des mois , en dépit de mon état de santé, j’ai tenu à veiller au grin sur ce travail d’intelligence collective que nous avons mené.<br>En effet, nous l’avons voulu exceptionnelle cette assemblée parce qu’elle est symbolique, elle marque le début d’une nouvelle ère pour l’organisation.<br>Nous avons succinctement présenté :</p>
    
    
    
    <ul><li>Le manuel de procédure administratif et financier de l’organisation.</li><li>Les lignes stratégiques de l’organisation en terme de programmes et de fonctionnement administratif.</li><li>Notre nouvelle stratégie de fund raising qui va bientôt offrir un volet Assitance formations aux jeunes OnGs et à des jeunes .</li><li>La nouvelle procédure de recrutement mise en place des ressources humaines. Et un bon système d’évaluation de trois niveaux pour nos membres! Je ne ce cesserai de le dire , une organisation est une vocation à part entière ! ( militer au sein d’une organisation : c’est travailler pour elle ,Travailler pour ses axes d’interventions , mais c’est également travailler pour l’accomplissement de soi )</li></ul>
    
    
    
    <p>Tous ces documents seront disponibles sur le site officiel de Woman Leader dans quelques temps ! Comme j’ai l’habitude de le dire , Woman Leader c’est comme du Vin! On se bonifie au fil des années.</p>
    
    
    
    <p>NB: au passage, le bureau s’est refait une beauté ! Hors de question de rentrer dans 2022 avec un ancien décor. Vous pouvez me contacter pour vos décos </p>
    
    
    
    <h4>WL</h4>
    
    
    
    <h4>ONG</h4>
    
    
    
    <figure class="wp-block-gallery columns-3 is-cropped"><ul class="blocks-gallery-grid"><li class="blocks-gallery-item"><figure><img loading="lazy" width="1024" height="683" src="https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090928-1024x683.jpg" alt="" data-id="3528" data-full-url="https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090928-scaled.jpg" data-link="https://www.woman-leader.org/first-class-of-warrior/img_20211108_090928/" class="wp-image-3528" srcset="https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090928-1024x683.jpg 1024w, https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090928-300x200.jpg 300w, https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090928-768x512.jpg 768w, https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090928-1536x1025.jpg 1536w, https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090928-2048x1367.jpg 2048w" sizes="(max-width: 1024px) 100vw, 1024px"></figure></li><li class="blocks-gallery-item"><figure><img loading="lazy" width="1024" height="683" src="https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090955-1024x683.jpg" alt="" data-id="3529" data-full-url="https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090955-scaled.jpg" data-link="https://www.woman-leader.org/first-class-of-warrior/img_20211108_090955/" class="wp-image-3529" srcset="https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090955-1024x683.jpg 1024w, https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090955-300x200.jpg 300w, https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090955-768x512.jpg 768w, https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090955-1536x1024.jpg 1536w, https://www.woman-leader.org/wp-content/uploads/2021/11/IMG_20211108_090955-2048x1365.jpg 2048w" sizes="(max-width: 1024px) 100vw, 1024px"></figure></li><li class="blocks-gallery-item"><figure><img loading="lazy" width="1024" height="683" src="https://www.woman-leader.org/wp-content/uploads/2021/11/Ago-woman-leader-3-1024x683.jpg" alt="" data-id="3527" data-full-url="https://www.woman-leader.org/wp-content/uploads/2021/11/Ago-woman-leader-3-scaled.jpg" data-link="https://www.woman-leader.org/first-class-of-warrior/ago-woman-leader-3-2/" class="wp-image-3527" srcset="https://www.woman-leader.org/wp-content/uploads/2021/11/Ago-woman-leader-3-1024x683.jpg 1024w, https://www.woman-leader.org/wp-content/uploads/2021/11/Ago-woman-leader-3-300x200.jpg 300w, https://www.woman-leader.org/wp-content/uploads/2021/11/Ago-woman-leader-3-768x512.jpg 768w, https://www.woman-leader.org/wp-content/uploads/2021/11/Ago-woman-leader-3-1536x1025.jpg 1536w, https://www.woman-leader.org/wp-content/uploads/2021/11/Ago-woman-leader-3-2048x1367.jpg 2048w" sizes="(max-width: 1024px) 100vw, 1024px"></figure></li></ul></figure>
    </div>
=======
            data-dot="<img src='https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/331673282_1306977216700712_7206991906506382451_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHGaDk7AzSqpWLnG6_K2Lbmj-JkssoGTuqP4mSyygZO6o8KnXR6ocV9zHhYeA_pX6cTwnZGQ25z6W8BAUosoYPc&_nc_ohc=1k0Fe4PEohQAX-g9GlP&tn=mc-xjTzR46K2Jven&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfBeULofPTSDMLPxzpCyZ9HMVBaLPbkBE6dvJex-kHSDaA&oe=63FAA78E'>">
            <img class="img-fluid" src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/331673282_1306977216700712_7206991906506382451_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHGaDk7AzSqpWLnG6_K2Lbmj-JkssoGTuqP4mSyygZO6o8KnXR6ocV9zHhYeA_pX6cTwnZGQ25z6W8BAUosoYPc&_nc_ohc=1k0Fe4PEohQAX-g9GlP&tn=mc-xjTzR46K2Jven&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfBeULofPTSDMLPxzpCyZ9HMVBaLPbkBE6dvJex-kHSDaA&oe=63FAA78E" class="d-block w-100" alt="...">
                

        </div>

        <div class="owl-carousel-item position-relative"
        data-dot="<img src='https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/331368077_1573856973134891_311187597379034400_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGwf_vsB7lAc6wxB-ftS3kCeC7UlaH0nOZ4LtSVofSc5sG2Q_4mxQhf2Bt_wGc-GLBJASvGNuCM_TBc_vn-mTf5&_nc_ohc=qZ_L7Zv98kMAX_0GmSJ&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfAu0W7ruOwlGTj51gCMbaVEJyDm9XzO9uS_Udd1ZFP8Wg&oe=63F97591'>">
        <img class="img-fluid" src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/331368077_1573856973134891_311187597379034400_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGwf_vsB7lAc6wxB-ftS3kCeC7UlaH0nOZ4LtSVofSc5sG2Q_4mxQhf2Bt_wGc-GLBJASvGNuCM_TBc_vn-mTf5&_nc_ohc=qZ_L7Zv98kMAX_0GmSJ&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfAu0W7ruOwlGTj51gCMbaVEJyDm9XzO9uS_Udd1ZFP8Wg&oe=63F97591" class="d-block w-100" alt="...">
            

    </div>

    <div class="owl-carousel-item position-relative"
    data-dot="<img src='https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/331302672_712500757245530_8679612838238336412_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEtQUJlSVt7lYhSMp0zLrvf5gsiQ39qqUvmCyJDf2qpSymb6JtGLhUDL2F74vR2ppFnRl437zkGJX6ZvZdfBNPR&_nc_ohc=JtpCIzhSKPgAX-AF9k2&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfD8E8qRG03sEn43iJ04ujkTa1IX_L_U075pyYoObXej5A&oe=63FB17A8'>">
    <img class="img-fluid" src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/331302672_712500757245530_8679612838238336412_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEtQUJlSVt7lYhSMp0zLrvf5gsiQ39qqUvmCyJDf2qpSymb6JtGLhUDL2F74vR2ppFnRl437zkGJX6ZvZdfBNPR&_nc_ohc=JtpCIzhSKPgAX-AF9k2&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfD8E8qRG03sEn43iJ04ujkTa1IX_L_U075pyYoObXej5A&oe=63FB17A8" class="d-block w-100" alt="...">
        

</div>

<div class="owl-carousel-item position-relative"
data-dot="<img src='https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/330080523_591476582832010_2895964468674220467_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH34rFb04kD9Lj4e1hXMze77xLlvMqdrF7vEuW8yp2sXoSDAsooWHfRe64CCsRPwr4dBrJawYC6uFXSJwuvXzwF&_nc_ohc=-d3qVBtI8EUAX-UVsmX&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfBvAu8DLiMxiUfc1Tf9Y0xPv4PKBWY5nC6vY-uFyNBPMw&oe=63FA1B4C'>">
<img class="img-fluid" src="https://scontent.fabj1-1.fna.fbcdn.net/v/t39.30808-6/330080523_591476582832010_2895964468674220467_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeH34rFb04kD9Lj4e1hXMze77xLlvMqdrF7vEuW8yp2sXoSDAsooWHfRe64CCsRPwr4dBrJawYC6uFXSJwuvXzwF&_nc_ohc=-d3qVBtI8EUAX-UVsmX&_nc_zt=23&_nc_ht=scontent.fabj1-1.fna&oh=00_AfBvAu8DLiMxiUfc1Tf9Y0xPv4PKBWY5nC6vY-uFyNBPMw&oe=63FA1B4C" class="d-block w-100" alt="...">
    

</div>
        </div>
    </div>
    <!-- Carousel End -->
   <!-- about section start --> 
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
   
>>>>>>> 5e5aa36 (	modified:   app/Http/Controllers/ContactController.php)
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
