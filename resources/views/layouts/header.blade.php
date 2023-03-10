<!-- le logo chargement début -->
<div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status">
    </div>
    <img class="position-absolute top-50 start-50 translate-middle "  style="width: 5.5rem; height: 4.5rem;"  src="{{ asset('assets/img/icons/logo.png') }}"
        alt="Icon">
</div>
<!-- le logo chargement Fin -->

<!-- section menu debut -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
        <div class="text-primary m-0 row">
            <div class="col"> <img class="me-3"  style="width: 2.52rem; height: 2.52rem;" src="{{ asset('assets/img/icons/logo.png') }}"
                    alt="Icon"></div>
            <div class="col" style="font-family: 'Open Sans', sans-serif; color: black;"><strong>FONDATION GLORY IMPACT
                GROUP</strong></div>
            <!--
                <p style="font-family: 'Open Sans', sans-serif; color: black;">
                    Glory Impact Group
                </p> -->
        </div>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ url('/') }}" class="nav-item nav-link @if ($PageName=="home")active @endif">Acceuil</a>
            <a href="{{ url('/about') }}" class="nav-item nav-link @if ($PageName=="about")active @endif">A Propos De Nous</a>
<<<<<<< HEAD
            <a href="{{ url('/programmes') }}" class="nav-item nav-link @if ($PageName=="")active @endif">Programmes</a>
=======
            <a href="{{ url('/programmes') }}" class="nav-item nav-link @if ($PageName=="")active @endif">PROJETS</a>
>>>>>>> c51a88772fba963b9acf31c3a44fdefe20bbf127
            <a href="{{ url('/actualite') }}" class="nav-item nav-link @if ($PageName=="")active @endif">Actualités</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Actions</a>
                <div class="dropdown-menu border-0 m-0">
                    <a href="{{ url('/action') }}" class="dropdown-item bouton">SEL FESTIVAL</a>


                </div>
            </div>
            
         
                
            <a href="{{ url('/contact') }}" class="nav-item nav-link @if ($PageName=="contact")active @endif">Contact</a>
        </div>
        <a href="{{ url('/don') }}" class="btn btn-primary py-2 px-4 d-none d-lg-block @if ($PageName=="don")active @endif">SOUTENIR</a>
    </div>
</nav>
<!-- section menu Fin -->
