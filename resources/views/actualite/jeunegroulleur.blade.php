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
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324025221_691718725948921_6188488201690019399_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEiW3Jgs2gChDxsH_zj5JPe6FKikJq6AWnoUqKQmroBaS2lxd7eXqPQVasT1Qegzxe_7fRb0DcuvD3JUteKEMBB&_nc_ohc=Gp_aeCWzyCQAX95Bz_1&_nc_oc=AQnTROcyk0ehJWCJuHwjLLW2OGk-NHHbcUx5xWhmKl7TYep0WDoXyPuL1eBbTZ9U_jw&tn=9za5LyBrVSqEjS7J&_nc_ht=scontent.fabj3-2.fna&oh=00_AfBxk8DMtDQX_K5L08tCRPlRtqy4uuxqWPSw5G6pCfZFeg&oe=63FA46BA" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324234600_724596755634385_352276825538067850_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeGs-A_fO6Bsjtitdjv409y4KSyhYEIY7T8pLKFgQhjtP83s7KWYNddW1pS7QZcKrwcrajiiR5YgMIKattpdmM2N&_nc_ohc=ZTcPT2MUF-cAX9rEJ0x&_nc_ht=scontent.fabj3-2.fna&oh=00_AfApHAXPAz-shdS0C5LkU7J1F_xKLPH5tcQPwXfybVtiYQ&oe=63FBD54E" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324336702_551774317013368_7468461429840857096_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE99aWvjDNdFSCD2vYFKwCgTB0BxM6H6oNMHQHEzofqg0by1YeHA121rBL0VlEki7_hJETGIcrD0ay0QCdVrnJ_&_nc_ohc=Wi_TqTESR38AX-tXlaL&_nc_ht=scontent.fabj3-2.fna&oh=00_AfAIyPlT1qvd1OJzrWFM2qYKn_TttZ0eTybMXRmau8LjBA&oe=63FB9BAA" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324231907_1132147707501527_6963184197378064226_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeFcN58cXM3e0M5BOZL-UT1Cn10H3YA1gCOfXQfdgDWAIwFbNSYvqagBy9BWK54tjzg2LF8COwuWLLIDqQklwf8T&_nc_ohc=UeRvVjWOH70AX-cYEDL&tn=9za5LyBrVSqEjS7J&_nc_ht=scontent.fabj3-2.fna&oh=00_AfC6BZmQWYuy2hFnyrxWvFZUQW9GRAHL3fZlG5_cxCFaOA&oe=63FC1579" class="d-block w-100" alt="...">
              </div>
    
              <div class="carousel-item">
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324405874_474889404834326_3154636120638280182_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEIOmHW6FSYHXDwK3rSMTONeaML3LwbEgF5owvcvBsSAS-IY7wMpmoOsn6XkZpbQ4HAFv0lB9-xoiu1700sf3LL&_nc_ohc=ZapVk5Ff84gAX_zu1gH&_nc_ht=scontent.fabj3-2.fna&oh=00_AfACo3QlODCwFN_jji-3tPXbTqmd7atZ0rvw0KcSOrEnhA&oe=63FA500F" class="d-block w-100" alt="...">
              </div>
    
              <div class="carousel-item">
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324183611_1502519400318124_5742857151693714607_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHKjkm1n8MxaVMxb23bJKKLxTgnaSjWjWHFOCdpKNaNYVdR-lLKGpQivgOZ56Rl2ReHEQiRzMiFKHzrxn4Nz_qW&_nc_ohc=m9xjwssPiGAAX-Zw9jT&_nc_ht=scontent.fabj3-2.fna&oh=00_AfByXC5UnS2G2UqhIHgVvScZaecwE92IeN0Z8E7PKG0xnA&oe=63FBBD10"
                 class="d-block w-100" alt="...">
              </div>
    
              <div class="carousel-item">
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324195573_1373504546721097_4100279660311032765_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeE4cEZrBjRGnJNEV1-eGljRxGvUlf-6rKTEa9SV_7qspPgZK1dNQPh_UgSCxmjzGyFP4GO03FJUoyftKagVo1Im&_nc_ohc=waq4_0L_TsEAX8i4MI7&tn=9za5LyBrVSqEjS7J&_nc_ht=scontent.fabj3-2.fna&oh=00_AfAhYe1pgM3sUhiRCwEivKWDejcsQdkZYZfZZnZiUG97RQ&oe=63FA5FA3" class="d-block w-100" alt="...">
              </div>
    
              <div class="carousel-item">
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/322501060_1547320225730914_3146973071962083462_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHBCNjUC4ACMKbseDA4gqUbETdwmgoX03QRN3CaChfTdFxDFKTqHJiW4Zbo0dTBme4a-y7Exj4KNdgo_qXmWozE&_nc_ohc=67lfJkPb8dYAX8-Uwh8&tn=9za5LyBrVSqEjS7J&_nc_ht=scontent.fabj3-2.fna&oh=00_AfCtAVNpf5dbeEJtlal6cekyVgrhkzHEW5qB8DAs72RDlQ&oe=63FC1312" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/321841839_849901369646080_4887133831738230611_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHnAMrCDIGnPlS5sUp4qc3s48cunmaGWovjxy6eZoZai_YAjGf6P8MMEZDLdO_ZzjMsYx_NXnzyHnWpvywp2wy5&_nc_ohc=Zgh006Eibh4AX-fT6Lf&_nc_ht=scontent.fabj3-2.fna&oh=00_AfBp7u-6-l5bDj3qNbo3GY_Cpee5igCJcsOFT9tvIoKklQ&oe=63FB912C" class="d-block w-100" alt="...">
              </div>
    
              <div class="carousel-item">
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324469467_878939596479867_2627706869563558438_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeHmc_S0CXBuYj2hnFAlcJwhZ3FpXsBDzKpncWlewEPMquYLk33FFueaQG1-oH7gFisYEB9YATybFHpKYuIs6xBH&_nc_ohc=s2TzN89fRQwAX8LAL53&_nc_ht=scontent.fabj3-2.fna&oh=00_AfDnthgbzxXL-1ElK9bEiExSlmtldzFrzOox73O-02gY2g&oe=63FB0A88" class="d-block w-100" alt="...">
              </div>
    
              <div class="carousel-item">
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/324258818_554410299896740_3573159732451073768_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=8bfeb9&_nc_eui2=AeEjWrnx9sNUlOaP9ihrTbcnh2C7mVvRTi6HYLuZW9FOLmcuDa8Iwcq48uSplgUlAgL5LLYWKiveH2MvIqIAkfN-&_nc_ohc=wO7uoKfpjhIAX-wDqW1&_nc_ht=scontent.fabj3-2.fna&oh=00_AfCdMuKeJ4Ib9LSREC5Zsz6LsFI-xRzzitC5rVpVkPdb7w&oe=63FB2563" class="d-block w-100" alt="...">
              </div>
            </div>
            <div class="carousel-item">
                <img src="https://scontent.fabj3-2.fna.fbcdn.net/v/t39.30808-6/327093864_725702815856462_8199604525974655938_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=730e14&_nc_eui2=AeHXZWYivDZQvXMW5p8xLA4q1ABAuWwUSGzUAEC5bBRIbD_LKZlrXPZHj-O0tzvvjyc_XykHeWVpzpsUL-Rks-Qh&_nc_ohc=S0pfGTWZyTgAX96O5h4&_nc_oc=AQlsI4O0UokO-D6ZMCwe9TRep7eAs0QhpbVMWX-6b1gxhlnO-sZaYBkqbrfsTIWU_Io&tn=9za5LyBrVSqEjS7J&_nc_ht=scontent.fabj3-2.fna&oh=00_AfAi5BLi-zl79J2RFqBQGuEa6DQqEGXYd9h3D8nrGSy7XA&oe=63FBBE29" class="d-block w-100" alt="...">
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
    
             <span class="grop-post_date"><i class="bi bi-clock"></i> 25 Décembre 2022</span>
             <h2 class="text-primary">Déjeuner de Noel avec les jeunes battants et grouilleurs qui a eu lieu à Cocody II Plateaux.</h2>
             <hr >
             <p class="lorem_text">Le dimanche 25 décembre 2022, La Fondation Glory Impact Group a organisé "Le Déjeuner de Noël avec des jeunes battants et grouilleurs". 
              Il se décline donc en une cérémonie ouverte aux jeunes sans emploi formel. Ce déjeuner nous l'offrons surtout, et cela à partir de cette année, aux jeunes vendeurs ambulants, les "djosseurs de namman" les "aide-maçons" , les vendeuses de fruits, les coiffeuses, les couturières, les restauratrices etc... issus de familles défavorisées ou démunies. Il est donc destiné à ces jeunes gens conscients de la précarité sociale dans laquelle ils vivent mais qui se débrouillent tant bien que mal pour en sortir. 
              Le president de la Fondation  M Jules Ekanza Gouhan, accompagné de son épouse Becely Kecys Gouhan, vice-présidente de la Fondation Glory Impact Group, ont partagé un repas avec une centaine de jeunes. Ils sont venus de différentes communes du District d’Abidjan.  
              Au cours de cette agréable cérémonie, ils ont eu à les sensibiliser sur la nécessité pour eux d'avoir une idée novatrice à mettre en oeuvre : UN PROJET. Il est pour eux une voie qui leur permettra de sortir de la précarité, car forts de leurs bonnes dispositions d'esprit, ils sont capables de créer des entreprises, de vraies. Ils ont notamment eu à leur révéler leurs débuts, de lycéen et entrepreneur qui ont vendu du lait "caillé", du savon liquide, et bien d'autres expériences. 
              Sans langue de bois, ils les ont exhorté à développer un mental fort et à vivre tels des "orphelins" qui n'ont que Dieu pour se réaliser. 
              Nombreux sont ceux parmi eux qui nous ont exprimé leur désire de bien formaliser leurs activités mais qu'ils ne savent pas comment y arriver. 
              La Fondation Glory Impact Group est la bonne adresse pour l'écoute, le suivi, l'assistance des jeunes désireux d'entreprendre, nous les avons ainsi rassurés. 
              Cette petite fête que nous avons énormément appréciée pour sa sobriété, son sens et la mobilisation des jeunes est une institution: Rdv est pris pour 2023... Elle s'est terminée dans la joie. Nous avons posé ensemble pour une photo de famille. "Le Déjeuner de Noël des jeunes battants et grouilleurs" s'est tenu sur le terrain de basket des 2 plateaux, non loin de Sococé, à Cocody.
              Fondation Glory Impact Group, Ensemble pour une jeunesse plus forte !!!
              Bonne et Glorieuse année 2023 à toutes et à tous !!!</p>
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
