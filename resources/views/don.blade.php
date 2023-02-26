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
                
                        <a class="btn btn-primary py-3 px-5" href="#don">SOUTENIR UN ENTREPRENEUR</a>
                    
                
                   
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
           
            

            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/don/IMG_0585.JPG') }}"
                                alt="">
                           
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">La construction et l'équipement de centres de formation professionnelle pour les jeunes en difficulté.</span>
                            <p class="mt-2">Lorem Ipsa nulla, quas itasequi incidunt lcorrupti beatae id reiciendis a officiis voluptates expedita ipsam! Est.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/don/IMG_0584.JPG') }}" 
                                alt="">
                          
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">L'organisation de sessions de formation et de mentorat pour les jeunes entrepreneurs.</span>
                            <p class="mt-2">Lorem Ipsa nulla, quas itasequi incidunt lcorrupti beatae id reiciendis a officiis voluptates expedita ipsam! Est.</p>
                           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/don/IMG_0594.jpg') }}"
                                alt="">
                           
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">La mise en place de programmes de sensibilisation et de prévention contre la drogue et la violence.</span>
                            <p class="mt-2">Lorem Ipsa nulla, quas itasequi incidunt lcorrupti beatae id reiciendis a officiis voluptates expedita ipsam! Est.</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="{{ asset('assets/img/don/IMG_0625.jpg') }}"
                                alt="">
                          
                        </div>
                        <div class="bg-light text-center p-4">
                            <span class="text-primary">L'octroi de bourses d'études et d'aides financières pour les jeunes défavorisés.</span>
                            <p class="mt-2">Lorem Ipsa nulla, quas itasequi incidunt lcorrupti beatae id reiciendis a officiis voluptates expedita ipsam! Est.</p>
                        
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <br>
        <div class="Donation Widget"><div class="CampaignWrapper Container"><!----> <div class="DonationContainer"><div class="donation-header"><div class="switch-lang donation-header__lang donation-header__lang--widget"><a href="/associations/heva/formulaires/2/widget" class="switch-lang__item"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACkAAAAbCAYAAADh0qZQAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAABZSURBVHgB7c4xDYBAFAXBB2LQgQUSBNCfASTggpISTRjAAmj4yTaX7CiYIdP6pWhb5pxHS9XT9rzXnaoxHTBJMUkxSTFJMUkxSTFJMUkxSTFJMUkxSeki+QMWUwg63FDXwQAAAABJRU5ErkJggg==" alt="Français" loading="lazy"></a> <a href="/associations/heva/formulaires/2/widget/en" class="switch-lang__item"><img src="/forms/img/en.17cafbe.png" alt="English" loading="lazy"></a></div> <!----></div> <div class="DonationPage"><section class="DonationPage__Block"><div class="SelectDonation Block"><div class="Block--Title Block--Title-Active"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-heart fa-w-16"><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" class=""></path></svg>
            Mon don
          </div> <div class="Block--Content"><p class="SelectDonation--OneTier">
              Je donne tous les mois
            </p> <div class="SelectDonation--Tiers"><!----> <button type="button" class="HaButton HaButton-Outline HaButton-Basic HaButton-Medium"><!----> 
                  10 €
                 <!----></button><button type="button" class="HaButton HaButton-Outline HaButton-Basic HaButton-Medium"><!----> 
                  20 €
                 <!----></button><button type="button" class="HaButton HaButton-Outline HaButton-Basic HaButton-Medium"><!----> 
                  30 €
                 <!----></button><button type="button" class="HaButton HaButton-Outline HaButton-Basic HaButton-Medium"><!----> 
                  40 €
                 <!----></button></div> <!----> <div class="HaFormField"><!----> <div class="HaFormField--Field"><div class="SelectDonation--CustomTier"><span>Montant libre</span> <div class="Input--Wrapper Input--Wrapper-Medium"><input type="text" data-testid="donation-monthly-free" placeholder="--,--" class="Input" id="HaFormFieldInput-1"> <!----> <!----> <!----></div> <span>€</span></div></div> <!----></div> <!----> <div class="select-donation-payment-date"><div class="select-donation-payment-date__field HaFormField"><!----> <div class="HaFormField--Field"><p>
                Vous serez prélevé tous les
                <div class="Input--Wrapper Input--Wrapper-Medium"><input type="number" maxlength="2" aria-describedby="HaTextArea-counter-5 HaFormFieldError-4" step="1" min="1" max="28" placeholder="5" class="Input" id="HaFormFieldInput-4"> <!----> <!----> <!----></div>
                de chaque mois.
              </p></div> <!----></div> <p class="select-donation-payment-date__field__desc">
            Afin de valider votre carte bancaire, votre premier prélèvement sera effectué aujourd'hui. Le prochain aura lieu le 
            <strong> 25 mars 2023. </strong></p></div></div></div> <!----></section> <section class="DonationPage__Block DonationPage__Block--MiddleBlock"><div class="Block Block-Personal-Informations"><div class="Block--Title"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="list" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-list fa-w-16"><path fill="currentColor" d="M80 368H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm0-320H16A16 16 0 0 0 0 64v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16V64a16 16 0 0 0-16-16zm0 160H16a16 16 0 0 0-16 16v64a16 16 0 0 0 16 16h64a16 16 0 0 0 16-16v-64a16 16 0 0 0-16-16zm416 176H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-320H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16V80a16 16 0 0 0-16-16zm0 160H176a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h320a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16z" class=""></path></svg>
            Mes coordonnées
          </div> <div class="Block--Content"><div class="HaToggle Block-Personal-Informations--Checkbox HaCheckbox HaCheckbox-Left"><input id="company-switch" type="checkbox" name="company-switch" class="HaToggle--Input visually-hidden"> <label for="company-switch" class="Label">
              Payer en tant qu'organisme
            </label></div> <!----> <p class="Block-Personal-Informations--Login"><span>J'ai déjà un compte HelloAsso :</span> <button type="button" class="HaButton HaButton-Link HaButton-Primary HaButton-Medium"><!----> 
                je me connecte
               <!----></button></p> <div class="Columns"><span><div class="Field Field-TextInput Column "><label for="field-firstName" class="Label Inline">
                Prénom *
                <!----></label> <div class="FieldWrapper"><div class="Input--Wrapper Input--Wrapper-Medium"><input type="text" maxlength="250" aria-describedby="HaTextArea-counter-6" id="field-firstName" name="firstName" class="Input"> <!----> <!----> <!----></div> <!----> <!----> <!----> <!----> <!---->  <!---->  </div> <!----> <!----></div></span> <span><div class="Field Field-TextInput Column "><label for="field-lastName" class="Label Inline">
                Nom *
                <!----></label> <div class="FieldWrapper"><div class="Input--Wrapper Input--Wrapper-Medium"><input type="text" maxlength="250" aria-describedby="HaTextArea-counter-7" id="field-lastName" name="lastName" class="Input"> <!----> <!----> <!----></div> <!----> <!----> <!----> <!----> <!---->  <!---->  </div> <!----> <!----></div></span></div> <span class="Block-Personal-Informations--Email
                  "><div class="Field Field-TextInput Column "><label for="field-email" class="Label Inline">
                Email *
                <!----></label> <div class="FieldWrapper"><div class="Input--Wrapper Input--Wrapper-Medium"><input type="text" maxlength="250" aria-describedby="HaTextArea-counter-8" id="field-email" name="email" class="Input"> <!----> <!----> <!----></div> <!----> <!----> <!----> <!----> <!---->  <!---->  </div> <!----> <!----></div> <!----></span> <div><span><div class="Field Field-Date Column "><label for="field-birthDate" class="Label Inline">
                Date de naissance *
                <!----></label> <div class="FieldWrapper"><!----> <!----> <!----> <!----> <!----> <!----> <div class="Datepicker"><div class="Input--Wrapper Input--Wrapper-Medium"><input type="text" maxlength="10" aria-describedby="HaTextArea-counter-12" id="field-birthDate" placeholder="jj/mm/aaaa" class="Input"> <!----> <!----> <!----></div></div> <!---->  </div> <!----> <!----></div></span></div> <span><div class="Field Field-TextInput Column "><label for="field-address" class="Label Inline">
                Adresse *
                <!----></label> <div class="FieldWrapper"><div class="Input--Wrapper Input--Wrapper-Medium"><input type="text" maxlength="250" aria-describedby="HaTextArea-counter-9" id="field-address" name="address" class="Input"> <!----> <!----> <!----></div> <!----> <!----> <!----> <!----> <!---->  <!---->  </div> <!----> <!----></div></span> <div class="Columns"><span><div class="Field Field-TextInput Column "><label for="field-zipCode" class="Label Inline">
                Code postal *
                <!----></label> <div class="FieldWrapper"><div class="Input--Wrapper Input--Wrapper-Medium"><input type="text" maxlength="250" aria-describedby="HaTextArea-counter-10" id="field-zipCode" name="zipCode" class="Input"> <!----> <!----> <!----></div> <!----> <!----> <!----> <!----> <!---->  <!---->  </div> <!----> <!----></div></span> <span><div class="Field Field-TextInput Column "><label for="field-city" class="Label Inline">
                Ville *
                <!----></label> <div class="FieldWrapper"><div class="Input--Wrapper Input--Wrapper-Medium"><input type="text" maxlength="250" aria-describedby="HaTextArea-counter-11" id="field-city" name="city" class="Input"> <!----> <!----> <!----></div> <!----> <!----> <!----> <!----> <!---->  <!---->  </div> <!----> <!----></div></span></div> <span><div class="Field Field-ChoiceList Column Is-Narrow"><label for="field-country" class="Label Inline">
                Pays *
                <!----></label> <div class="FieldWrapper"><!----> <!----> <select id="field-country" name="country" value="FRA" class="HaSelect"><option value="AFG">Afghanistan</option><option value="ALA">Îles Åland</option><option value="ALB">Albanie</option><option value="DZA">Algérie</option><option value="ASM">Samoa américaines</option><option value="AND">Andorre</option><option value="AGO">Angola</option><option value="AIA">Anguilla</option><option value="ATA">Antarctique</option><option value="ATG">Antigua-et-Barbuda</option><option value="ARG">Argentine</option><option value="ARM">Arménie</option><option value="ABW">Aruba</option><option value="AUS">Australie</option><option value="AUT">Autriche</option><option value="AZE">Azerbaïdjan</option><option value="BHS">Bahamas</option><option value="BHR">Bahreïn</option><option value="BGD">Bangladesh</option><option value="BRB">Barbade</option><option value="BLR">Biélorussie</option><option value="BEL">Belgique</option><option value="BLZ">Belize</option><option value="BEN">Bénin</option><option value="BMU">Bermudes</option><option value="BTN">Bhoutan</option><option value="BOL">Bolivie</option><option value="BIH">Bosnie-Herzégovine</option><option value="BWA">Botswana</option><option value="BVT">Île Bouvet</option><option value="BRA">Brésil</option><option value="VGB">British Virgin Islands</option><option value="IOT">Territoire britannique de l’Océan Indien</option><option value="BRN">Brunei Darussalam</option><option value="BGR">Bulgarie</option><option value="BFA">Burkina Faso</option><option value="BDI">Burundi</option><option value="KHM">Cambodge</option><option value="CMR">Cameroun</option><option value="CAN">Canada</option><option value="CPV">Cap-Vert</option><option value="CYM">Iles Cayman</option><option value="CAF">République centrafricaine</option><option value="TCD">Tchad</option><option value="CHL">Chili</option><option value="CHN">Chine</option><option value="HKG">Hong Kong</option><option value="MAC">Macao</option><option value="CXR">Île Christmas</option><option value="CCK">Îles Cocos</option><option value="COL">Colombie</option><option value="COM">Comores</option><option value="COG">République du Congo</option><option value="COD">République démocratique du Congo</option><option value="COK">Îles Cook</option><option value="CRI">Costa Rica</option><option value="CIV">Côte d’Ivoire</option><option value="HRV">Croatie</option><option value="CUB">Cuba</option><option value="CYP">Chypre</option><option value="CZE">République tchèque</option><option value="DNK">Danemark</option><option value="DJI">Djibouti</option><option value="DMA">Dominique</option><option value="DOM">République dominicaine</option><option value="ECU">Équateur</option><option value="EGY">Égypte</option><option value="SLV">Salvador</option><option value="GNQ">Guinée équatoriale</option><option value="ERI">Érythrée</option><option value="EST">Estonie</option><option value="ETH">Éthiopie</option><option value="FLK">Îles Falkland</option><option value="FRO">Îles Féroé</option><option value="FJI">Fidji</option><option value="FIN">Finlande</option><option selected="selected" value="FRA">France</option><option value="GUF">Guyane française</option><option value="PYF">Polynésie française</option><option value="ATF">Terres australes et antarctiques françaises</option><option value="GAB">Gabon</option><option value="GMB">Gambie</option><option value="GEO">Géorgie</option><option value="DEU">Allemagne</option><option value="GHA">Ghana</option><option value="GIB">Gibraltar</option><option value="GRC">Grèce</option><option value="GRL">Groenland</option><option value="GRD">Grenade</option><option value="GLP">Guadeloupe</option><option value="GUM">Guam</option><option value="GTM">Guatemala</option><option value="GGY">Guernesey</option><option value="GIN">Guinée</option><option value="GNB">Guinée-Bissau</option><option value="GUY">Guyane</option><option value="HTI">Haïti</option><option value="HMD">Îles Heard-et-MacDonald</option><option value="VAT">Saint-Siège (Vatican)</option><option value="HND">Honduras</option><option value="HUN">Hongrie</option><option value="ISL">Islande</option><option value="IND">Inde</option><option value="IDN">Indonésie</option><option value="IRN">Iran</option><option value="IRQ">Irak</option><option value="IRL">Irlande</option><option value="IMN">Ile de Man</option><option value="ISR">Israël</option><option value="ITA">Italie</option><option value="JAM">Jamaïque</option><option value="JPN">Japon</option><option value="JEY">Jersey</option><option value="JOR">Jordanie</option><option value="KAZ">Kazakhstan</option><option value="KEN">Kenya</option><option value="KIR">Kiribati</option><option value="PRK">Corée du Nord</option><option value="KOR">Corée du Sud</option><option value="KWT">Koweït</option><option value="KGZ">Kirghizistan</option><option value="LAO">Laos</option><option value="LVA">Lettonie</option><option value="LBN">Liban</option><option value="LSO">Lesotho</option><option value="LBR">Libéria</option><option value="LBY">Libye</option><option value="LIE">Liechtenstein</option><option value="LTU">Lituanie</option><option value="LUX">Luxembourg</option><option value="MKD">Macédoine</option><option value="MDG">Madagascar</option><option value="MWI">Malawi</option><option value="MYS">Malaisie</option><option value="MDV">Maldives</option><option value="MLI">Mali</option><option value="MLT">Malte</option><option value="MHL">Îles Marshall</option><option value="MTQ">Martinique</option><option value="MRT">Mauritanie</option><option value="MUS">Maurice</option><option value="MYT">Mayotte</option><option value="MEX">Mexique</option><option value="FSM">Micronésie</option><option value="MDA">Moldavie</option><option value="MCO">Monaco</option><option value="MNG">Mongolie</option><option value="MNE">Monténégro</option><option value="MSR">Montserrat</option><option value="MAR">Maroc</option><option value="MOZ">Mozambique</option><option value="MMR">Myanmar</option><option value="NAM">Namibie</option><option value="NRU">Nauru</option><option value="NPL">Népal</option><option value="NLD">Pays-Bas</option><option value="NCL">Nouvelle-Calédonie</option><option value="NZL">Nouvelle-Zélande</option><option value="NIC">Nicaragua</option><option value="NER">Niger</option><option value="NGA">Nigeria</option><option value="NIU">Niue</option><option value="NFK">Île Norfolk</option><option value="MNP">Îles Mariannes du Nord</option><option value="NOR">Norvège</option><option value="OMN">Oman</option><option value="PAK">Pakistan</option><option value="PLW">Palau</option><option value="PSE">Palestine</option><option value="PAN">Panama</option><option value="PNG">Papouasie-Nouvelle-Guinée</option><option value="PRY">Paraguay</option><option value="PER">Pérou</option><option value="PHL">Philippines</option><option value="PCN">Pitcairn</option><option value="POL">Pologne</option><option value="PRT">Portugal</option><option value="PRI">Puerto Rico</option><option value="QAT">Qatar</option><option value="REU">Réunion</option><option value="ROU">Roumanie</option><option value="RUS">Russie</option><option value="RWA">Rwanda</option><option value="BLM">Saint-Barthélemy</option><option value="SHN">Sainte-Hélène</option><option value="KNA">Saint-Kitts-et-Nevis</option><option value="LCA">Sainte-Lucie</option><option value="MAF">Saint-Martin (partie française)</option><option value="SXM">Saint-Martin (partie néerlandaise)</option><option value="SPM">Saint-Pierre-et-Miquelon</option><option value="VCT">Saint-Vincent-et-les Grenadines</option><option value="WSM">Samoa</option><option value="SMR">Saint-Marin</option><option value="STP">Sao Tomé-et-Principe</option><option value="SAU">Arabie Saoudite</option><option value="SEN">Sénégal</option><option value="SRB">Serbie</option><option value="SYC">Seychelles</option><option value="SLE">Sierra Leone</option><option value="SGP">Singapour</option><option value="SVK">Slovaquie</option><option value="SVN">Slovénie</option><option value="SLB">Îles Salomon</option><option value="SOM">Somalie</option><option value="ZAF">Afrique du Sud</option><option value="SGS">Géorgie du Sud et les îles Sandwich du Sud</option><option value="SSD">Sud-Soudan</option><option value="ESP">Espagne</option><option value="LKA">Sri Lanka</option><option value="SDN">Soudan</option><option value="SUR">Suriname</option><option value="SJM">Svalbard et Jan Mayen</option><option value="SWZ">Swaziland</option><option value="SWE">Suède</option><option value="CHE">Suisse</option><option value="SYR">Syrie</option><option value="TWN">Taiwan</option><option value="TJK">Tadjikistan</option><option value="TZA">Tanzanie</option><option value="THA">Thaïlande</option><option value="TLS">Timor-Leste</option><option value="TGO">Togo</option><option value="TKL">Tokelau</option><option value="TON">Tonga</option><option value="TTO">Trinité-et-Tobago</option><option value="TUN">Tunisie</option><option value="TUR">Turquie</option><option value="TKM">Turkménistan</option><option value="TCA">Îles Turques-et-Caïques</option><option value="TUV">Tuvalu</option><option value="UGA">Ouganda</option><option value="UKR">Ukraine</option><option value="ARE">Émirats Arabes Unis</option><option value="GBR">Royaume-Uni</option><option value="USA">États-Unis</option><option value="UMI">Îles mineures éloignées des États-Unis</option><option value="URY">Uruguay</option><option value="UZB">Ouzbékistan</option><option value="VUT">Vanuatu</option><option value="VEN">Venezuela</option><option value="VNM">Viêt Nam</option><option value="VIR">Îles Vierges américaines</option><option value="WLF">Wallis-et-Futuna</option><option value="ESH">Sahara occidental</option><option value="YEM">Yémen</option><option value="ZMB">Zambie</option><option value="ZWE">Zimbabwe</option></select> <!----> <!----> <!---->  <!---->  </div> <!----> <!----></div></span> <!----> <p class="Block-Personal-Informations--Required">
              * Champs obligatoires
            </p></div> <!----></div></section> <section class="DonationPage__Block"><div class="DonationSummary Block"><div class="Block--Title"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-square" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-check-square fa-w-14"><path fill="currentColor" d="M400 480H48c-26.51 0-48-21.49-48-48V80c0-26.51 21.49-48 48-48h352c26.51 0 48 21.49 48 48v352c0 26.51-21.49 48-48 48zm-204.686-98.059l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.248-16.379-6.249-22.628 0L184 302.745l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.25 16.379 6.25 22.628.001z" class=""></path></svg>
            Mon récapitulatif
          </div> <div class="Block--Content"><table><thead><tr><th>Sélection</th> <th>Don</th></tr></thead> <tbody><tr><td>Don</td> <td><b>0 €</b></td></tr> <tr><td>
                    Votre contribution au fonctionnement de HelloAsso
                    <div class="DonationSummary--ContributionLinks"><button type="button" data-ux="Forms_DONATIONWidget_StepSummary_Toggle_ModalContributionExplication" class="Toggle--Modal-WhyDonate HaButton HaButton-Link HaButton-Primary HaButton-Medium"><!----> 
                        Pourquoi ?
                       <!----></button>
                      -
                      <button type="button" data-ux="Forms_DONATIONWidget_StepSummary_Toggle_ModalContributionSelection" class="Toggle--Modal-UpdateDonation HaButton HaButton-Link HaButton-Primary HaButton-Medium"><!----> 
                        Modifier
                       <!----></button></div></td> <td><b>0 €</b></td></tr> <tr><td>
                    Total
                  </td> <td><b>0 €</b></td></tr></tbody></table> <span class="DonationSummary--Heart"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="heart" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-heart fa-w-16"><path fill="currentColor" d="M462.3 62.6C407.5 15.9 326 24.3 275.7 76.2L256 96.5l-19.7-20.3C186.1 24.3 104.5 15.9 49.7 62.6c-62.8 53.6-66.1 149.8-9.9 207.9l193.5 199.8c12.5 12.9 32.8 12.9 45.3 0l193.5-199.8c56.3-58.1 53-154.3-9.8-207.9z" class=""></path></svg></span> <div>
              HelloAsso est une entreprise sociale et solidaire, qui fournit gratuitement ses technologies de paiement à l'organisme
              <a target="_blank" data-ux="Forms_DONATION_ContributionNotice_OrganismPage" href="/associations/heva" class="HaButton HaButton-Link HaButton-Primary HaButton-Medium"><!----> 
                HEVA
               <!----></a>
              . Une contribution au fonctionnement de HelloAsso, modifiable et facultative, vous sera proposée avant la validation de votre paiement.
            </div></div> <div class="DonationSummary--Validation"><!----> <!----> <span><div direction="inline" class="Field Field-Checkbox Column Is-Full"><!----> <div class="FieldWrapper"><!----> <!----> <!----> <div class="HaToggle HaCheckbox HaCheckbox-Left"><input id="field-cgu-consent" type="checkbox" name="cgu-consent" class="HaToggle--Input visually-hidden"> <label for="field-cgu-consent" class="Label">
                  J'accepte les
                  <a target="_blank" data-ux="Forms_DONATION_StepSummary_AcceptTS" href="/cgu-utilisateur" class="HaButton HaButton-Link HaButton-Primary HaButton-Medium"><!----> 
                    Conditions Générales d’Utilisation
                   <!----></a>
                  du service et j'ai lu la
                  <a target="_blank" data-ux="Forms_DONATION_StepSummary_AcceptPrivacyPolicy" href="/confidentialite" class="HaButton HaButton-Link HaButton-Primary HaButton-Medium"><!----> 
                    charte de confidentialité
                   <!----></a>
                  *
                </label></div> <!----> <!---->  <!---->  </div> <!----> <!----></div></span> <span class="RequiredFields Column Field">
              * Champs obligatoires
            </span></div> <!----> <!----></div> <button type="button" disabled="disabled" class="DonationPage--Submit HaButton HaButton-Fill HaButton-Primary HaButton-Medium HaButton-Fluid"><!----> 
                Valider et payer
               <!----></button> <div class="Card CardSecurity"><h4 class="Card--Title"><span>Plateforme de paiement 100% sécurisée</span></h4> <div class="Card--Content"><p>Toutes les informations bancaires pour traiter ce paiement sont totalement sécurisées. Grâce au cryptage SSL de vos données bancaires, vous êtes assurés de la fiabilité de vos transactions sur HelloAsso.</p> <div class="CardSecurity--PaymentMethods"><img src="/forms/img/logo-visa.c8e5300.svg" alt="VISA" loading="lazy"> <img src="/forms/img/logo-mastercard.4e8fd74.svg" alt="MasterCard" loading="lazy"> <img src="/forms/img/logo-cb.6496e09.svg" alt="Carte Bleue" loading="lazy"> <img src="/forms/img/logo-pci.94cad3e.png" alt="PCI-DSS" loading="lazy"></div></div></div></section></div> <!----> <button type="button" data-ux="Forms_DONATION_Report_Toggle_ModalReport" class="DonationPage--Report HaButton HaButton-Flat HaButton-Basic HaButton-Medium HaButton-Fluid"><!----> 
            Signaler la page
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-triangle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="svg-inline--fa fa-exclamation-triangle fa-w-18"><path fill="currentColor" d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z" class=""></path></svg> <!----></button> <!----></div></div> <div class="Widget--Footer"><div class="MadeBy clear"><div class="MadeBy--Half"><p>Créé et diffusé avec</p></div> <div class="MadeBy--Half"><a href="https://www.helloasso.com/associations" target="_blank" rel="noopener noreferrer" data-ux="Forms_DONATIONWidget_MadeBy_BackToHelloAsso"><img src="/forms/img/logo-helloasso-midnight.fa8ffe7.svg" alt="HelloAsso" loading="lazy"></a></div></div></div></div>
            <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">LE BIEN QUE NOUS APPORTONS</h4>
                <h1 class="display-5 mb-4">EN UNE SEULE VIDEO</h1>
            </div>
            <div class="fondation">
            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F100086391491746%2Fvideos%2F525854432769621%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden;display:block;margin-left:auto; margin-right:auto" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>
            </div>
        </div>
    </div>
    <!-- Service End -->
        <strong><p class="text-center mx-auto mb-5 wow fadeInUp">Ces réalisations ont permis d'avoir un impact positif sur la vie de nombreux jeunes en Côte d'Ivoire et de les aider à surmonter les obstacles auxquels ils sont confrontés. Votre don peut aider la Fondation Glory Impact Group à continuer de réaliser ces actions importantes pour aider la jeunesse ivoirienne.</p></strong>
        <div class="bg-light text-center p-5.9">
        <p  id="don"class="text-primary grop-txt-block grop-box-txt text-center mx-auto mb-5 wow fadeInUp">Faites votre dépôt sur l'un des numéros suivants : +225 00 49 00 00 00 ou +225 00 00 00 00 00</p>
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
