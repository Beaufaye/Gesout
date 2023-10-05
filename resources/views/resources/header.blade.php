<header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.jpg" class="rounded-circle" >
        <span class="d-none d-lg-block">Univ Tech</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <h1>Bienvenue à l'Université Tech </h1>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" >
            <span class="d-none d-md-block  ps-2">{{Auth::user()->name}}</span>
            <img src="assets/img/vert.jpeg" style="width: 15px" alt="" class="rounded-circle" >
           
          </a><!-- End Profile Iamge Icon -->
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="{{route('logout')}}">
            <span>Se déconnecter</span>
          </a><!-- End Profile Iamge Icon -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->
  @include('resources.js')