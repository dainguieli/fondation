<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Don</title>
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
            <h1 class="display-1 text-white animated slideInDown">SOUTIENT UN ENTREPRENEUR</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Accueil</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">SOUTIENT UN ENTREPRENEUR</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/about-1.jpg') }}" alt="">
                        <img class="img-fluid" src="{{ asset('assets/img/about/habitat/about-2.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">Pourquoi donner?</h4>
                    <h1 class="display-5 mb-4">Une Fondation engagée pour l'autonomie des jeunes et le bien-être de la population
                    </h1>
                    <p>En faisant un don à notre Fondation, vous contribuez à changer la vie des jeunes en situation de vulnérabilité en leur offrant la chance de s'insérer dans la vie active et de contribuer positivement au développement économique et social de leur communauté. Vous participez ainsi activement à la construction d'une société plus juste et plus équitable.

                        Votre don permettra également à la Fondation de poursuivre son travail auprès des jeunes, en leur offrant des formations adaptées, des programmes d'accompagnement, des stages en entreprise et des opportunités d'emploi. Ensemble, nous pouvons faire une différence dans la vie de ces jeunes et leur offrir un avenir meilleur.
                     </p>
                    <p class="mb-4">  Rejoignez-nous dans cette mission importante et faites un don dès maintenant pour soutenir la Fondation Glory Impact Group.
                    </p>
                
                       
                    
                
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">La Fondation Glory Impact Group a réalisé de nombreuses réalisations concrètes grâce aux dons précédents</h4>
               
            </div>

            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/team-1.jpg') }}" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div> -->
                </div>
           
            

                <div class="container-xxl py-5">
                    <div class="container">
                        <div class="row g-0 team-items">
                          
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item position-relative">
                                    <div class="position-relative">
                                        <img class="img-fluid"src="{{ asset('assets/img/carousels/visiteGroup/1.jpg') }}" 
                                            alt="">
                                        <div class="team-social text-center">
                                            <div class="grop-news_ps_date">
                                                <i class="bi bi-clock"></i> 24 Janv 2023	</div>
                                        </div>
                                    </div>
                                    <div class="bg-light text-center p-4">
                                        <span class="text-primary">Journée Internationale de l'Education avec les établissements primaires et secondaires.</span>
                                        <p class="mt-2" style="text-align: justify">Le mardi 24 janvier 2023, à l'occasion de la Journée Internationale de l'éducation, la Fondation Glory Impact Group a ...</p>
            
                                        <a href="{{ url('/VisiteGroupe') }}"> <span class="text-primary">Savoir plus</span></a>  
            
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item position-relative">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="{{ asset('assets/img/carousels/jeunegrouilleur/1.jpg') }}"
                                            alt="">
                                        <div class="team-social text-center">
                                            <div class="grop-news_ps_date">
                                                <i class="bi bi-clock"></i> 25 Déc 2022	</div>
                                        </div>
                                    </div>
                                    <div class="bg-light text-center p-4">
                                        <span class="text-primary"> La Fondation Glory Impact Group a organisé "Le Déjeuner de Noël avec des jeunes battants et grouilleurs".</span>
                                        <p class="mt-2" style="text-align: justify">Il se décline donc en une cérémonie ouverte aux jeunes sans emploi formel. Ce déjeuner nous l'offrons surtout, et cela à partir de cette année,... </p>
                                        <a  href="{{url('/jeunegroulleur')}}"> <span class="text-primary">Savoir plus</span></a>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item position-relative">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="{{ asset('assets/img/carousels/donFondationJC/1.jpg') }}"
                                            alt="">
                                        <div class="team-social text-center">
                                            <div class="grop-news_ps_date">
                                                <i class="bi bi-clock"></i> 15 Déc 2022	</div>
                                        </div>
                                    </div>
                                    <div class="bg-light text-center p-4">
                                        <span class="text-primary">le Président de Fondation Glory Impact Group et la Présidente de la Fondation Francis CJ ont rendu une visite aux pensionnaires.</span>
                                        <p class="mt-2" style="text-align: justify">Le jeudi 15 décembre 2022, le Président de Fondation Glory Impact Group et la Présidente de la Fondation Francis CJ ont rendu une visite ...</p>
                                        <a  href="{{url('/fondationFrancisCJ')}}"> <span class="text-primary">Savoir plus</span></a>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item position-relative">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="{{ asset('assets/img/carousels/kdoNoel2022/1.jpg') }}"
                                            alt="">
                                        <div class="team-social text-center">
                                            <div class="grop-news_ps_date">
                                                <i class="bi bi-clock"></i> 10 Déc 2022	</div>
                                        </div>
                                    </div>
                                    <div class="bg-light text-center p-4">
                                        <span class="text-primary">Remise de cadeaux pour la Noel aux enfants issus de différents établissements primaires.</span>
                                        <p class="mt-2" style="text-align: justify">Le samedi 10 décembre 2022, date de la 3ème journée du Festival Sel et Lumière, 
                                            la Fondation Glory Impact Group a célébré avant l'heure la fête de la Noël  avec 600 enfants...</p>
                                        <a  href="{{url('/cadeauxpourlaNoelauxenfants')}}"> <span class="text-primary">Savoir plus</span></a>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                                <div class="team-item position-relative">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="{{ asset('assets/img/don/IMG_0585.JPG') }}"
                                            alt="">
                                        <div class="team-social text-center">
                                            <div class="grop-news_ps_date">
                                                <i class="bi bi-clock"></i> 08 Déc 2022	</div>
                                        </div>
                                    </div>
                                    <div class="bg-light text-center p-4">
                                        <span class="text-primary">Remise de plus de 300 dons de vivre et non vivre à l'endroit de plusieurs associations de femmes et des veuves en situation vulnérable</span>
                                        <p class="mt-2" style="text-align: justify">Le jeudi 8 novembre 2022, la Fondation Glory Impact Group a ouvert le Festival Sel et Lumière en grande pompe,...</p>
                                        <a  href="{{url('/associationsfemmes')}}"> <span class="text-primary">Savoir plus</span></a>  
                                    </div>
                                </div>
                            </div>
                            
                      
            
             
            
                
            
               
        </div>
        <br>
   
    <!-- Service End -->
        <strong><p class="text-center mx-auto mb-5 wow fadeInUp">Ces réalisations ont permis d'avoir un impact positif sur la vie de nombreux jeunes en Côte d'Ivoire et de les aider à surmonter les obstacles auxquels ils sont confrontés. Votre don peut aider la Fondation Glory Impact Group à continuer de réaliser ces actions importantes pour aider la jeunesse ivoirienne.</p></strong>
        <div class="bg-light text-center p-5.9">
     <!--   <p  id="don"class="text-primary grop-txt-block grop-box-txt text-center mx-auto mb-5 wow fadeInUp">Faites votre dépôt sur l'un des numéros suivants : +225 00 49 00 00 00 ou +225 00 00 00 00 00</p>-->





        </div>
    </div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2">
            <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                <h2 id="heading">SOUTENIR UN ENTREPRENEUR</h2>
                <p>Remplissez tous les champs du formulaire pour passer à l'étape suivante.</p>
                <form id="msform" action="{{ route('faitDon') }}" method="POST">
                    @csrf 
                    @method('post') 
                    <!-- progressbar -->
                    <ul id="progressbar">
                         <li class="active bi bi-person-circle"><strong>Information personnelle</strong></li>
                       
                        <li class="bi bi-gift"><strong>Soutenir</strong></li> 
                        <li class="bi bi-hourglass-bottom"><strong>En cours</strong></li>
                        <li class="bi bi-check-circle-fill"><strong>Terminer</strong></li>
                    </ul>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> <br> <!-- fieldsets -->
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Information personnelle:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Étape 1 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Nom: *</label> <input type="text" name="name" placeholder="Nom" /> 
                            <label class="fieldlabels">Prénoms: *</label> <input type="text" name="prenom" placeholder="Prénoms" /> 
                            <label class="fieldlabels">Nom de l'entreprise: *</label> <input type="text" name="entreprise" placeholder="Entreprise" /> 
                            <label class="fieldlabels">Contact No.: *</label> <input type="text" name="contact" placeholder="Contact No." /> 
                          
                        </div> <input type="button" name="next" class="next action-button" value="Next" />                     </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Soutenir un entrepreneur:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Étape 2 - 4</h2>
                                </div>
                            </div> <label class="fieldlabels">Combien voulez-vous donner ?: *</label> <input type="text" name="don" placeholder="faite un don" /> 
                          
                            <label class="fieldlabels">Categorie de project a financier: *</label>     <select class="form-select"  aria-label="Default select example" name="CategorieDeProject" required>
                                <option selected>Categorie de project
                                </option>
                                <option value="Elevage">Elevage</option>
                                <option value="Transformation_agricol">Transformation agricol</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Pêche">Pêche</option>
                               <option value="Energie_renouvelable">Energie renouvelable</option>
                                <option value="Coiffure">Coiffure</option> 
                                 <option value="commerce">Commerce</option>
                                  <option value="coiffure">Coiffure</option>
                                  <option value="chanteur">Chanteur</option>
                                  <option value="arts">Arts</option>
                                  <option value="digital">Digital</option>
                            </select>
                            <label class="fieldlabels">Par quel moyen ?: *</label>     <select class="form-select"  aria-label="Default select example" name="reseauMoney" class="input" required>
                                <option selected>mobile money </option>
                                <option value="Orange">Orange</option>
                                <option value="Mtn">Mtn</option>
                                <option value="Moov">Moov</option>
                            </select>
                            <label class="fieldlabels">Numero de depôt: *</label> <input type="text" name="numerDepot" placeholder="Numero de depôt" /> 
                           
                          
                        </div>  <input type="button" name="next" class="next action-button" value="Next" /> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">En cours:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Étape 3 - 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>En cours </strong></h2>
                             
                            <div class="row justify-content-center">
                                <div class="col-3"> 
                                   <img class="img-fluid" src="https://media.tenor.com/-J3rO8bFMLsAAAAi/timer-sablier.gif"
                                    alt=""> 
                                </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                               
                                </div>
                            </div>
                        </div> <a href="https://pay.apaym.com/eagleinc" > <input type="button" name="next" class="next action-button" value="Submit" /></a> <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
                    </fieldset>
                    <fieldset>
                        <div class="form-card">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="fs-title">Terminer:</h2>
                                </div>
                                <div class="col-5">
                                    <h2 class="steps">Étape 4 - 4</h2>
                                </div>
                            </div> <br><br>
                            <h2 class="purple-text text-center"><strong>SUCCÈS !</strong></h2> <br>
                            <div class="row justify-content-center">
                                <div class="col-3"> 
                                   
                                     <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXstOeXEcnFJ0h_NGnrfE27N_XAFsr9T8tqw&usqp=CAU"
                                    alt="">
                                </div>
                            </div> <br><br>
                            <div class="row justify-content-center">
                                <div class="col-7 text-center">
                                    <h5 class="purple-text text-center">Merci pour le don</h5>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
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
</body>

</html>
