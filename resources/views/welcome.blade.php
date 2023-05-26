<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>ChatBot ABCsystem</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        

        
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>ChatBot Agartha</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link href="vendors/prism/prism.css" rel="stylesheet">
    <link href="assets/css/theme.css" rel="stylesheet" />
    <link href="assets/css/user.css" rel="stylesheet" />

  </head>


  <body>

    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="/"><span class="text-primary fs-3 ms-2 fw-bolder">ABC</span><span class="fw-thin text-300 fs-3">system</span></a>
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse pt-4 pt-lg-0" id="navbarSupportedContent">
            <p class="mb-0 ms-auto text-light fs-0 fw-normal"><i class="fas fa-phone-alt me-2"></i>Contactanos: <a class="text-light" href="tel:+56966957322">+(569)66957322</a></p>
            <ul class="navbar-nav ms-auto border-bottom border-lg-bottom-0 pt-2 pt-lg-0">
            <li class="nav-item px-2"><a class="nav-link active" aria-current="page" href="/">Inicio</a></li>

              <li class="nav-item px-2"><a class="nav-link" href="#contact">Contactanos</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Inicio Sesion') }}</a>
                                </li>
                            @endif
                            <a class="nav-link">|</a>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                </li>
                            @endif
                        @else
                        
              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Perfil') }}
                                    </a>
                                    <a  class="dropdown-item" href="nuevochat">Nuevo Chat
                                    </a>
                                    <a class="dropdown-item" href="modificarchat">Modificar Chat
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>


                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                                
                            </li>
                        @endguest
                    </ul>
                    
            <div class="d-flex mt-2 align-items-center mt-lg-0">
              <div class="dropdown">
                <button class="btn btn-sm d-flex mx-2" id="dropdownMenuButton1" type="submit" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-search text-primary"></i></button>
                <div class="dropdown-menu dropdown-menu-lg-end p-0 rounded" aria-labelledby="dropdownMenuButton1" style="top:55px">
                  <form>
                    <input class="form-control form-search-control border-100" type="search" placeholder="Search" aria-label="Search" />
                  </form>
                </div>
              </div><a href="#!"> <i class="fas fa-user text-primary"> </i></a>
            </div>
          </div>
        </div>
      </nav>

        <!--/.bg-holder-->
        <div class="container">
          <div class="row align-items-center min-vh-100">
            <div class="col-md-7 col-xl-7 pt-9 text-md-start text-center">
              <h1 class="display-2 text-light fw-thin">Has tus preguntas <br class="d-none d-xl-block" />para mejorar  <strong class="fw-bolder">ChatBot </strong></h1>
            <!--/  <p class="fs-2 text-400">Simple Steps You Can Take to Improve Your <br class="d-none d-xxl-block" />Financial Well-Being for the rest of Your Life </p><a class="btn btn-primary btn-ensurance mt-5" href="#!"><span class="fas fa-chevron-right fa-xs btn-icon"></span><span class="btn-text">Learn more</span></a>-->
            </div>
            <div class="col-md-5 col-xl-5 pe-xxl-0">
              <div class="card card-bg shadow hero-header-form">
                <div class="card-body p-4 p-xl-6">
                  <h2 class="text-100 text-center">Ingresa tus Preguntas:</h2>
                  <form class="mb-3">
                    <div class="form-floating mb-3">
                      <input class="form-control input-box form-ensurance-header-control" id="floatingEmail" type="email" placeholder="name@example.com" />
                      <label for="floatingName">Ingresa tu Correo:</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control input-box form-ensurance-header-control" id="floatingTextarea" type="tel" placeholder="name@example.com" />
                      <label for="floatingPhone">Pregunta 1</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control input-box form-ensurance-header-control" id="floatingTextarea" type="email" placeholder="name@example.com" />
                      <label for="floatingEmail">Pregunta 2</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control input-box form-ensurance-header-control" id="floatingTextarea" type="text" placeholder="Insurance Category" />
                      <label for="floatingCatrgory">Pregunta 3</label>
                    </div>
                    <div class="form-floating mb-3">
                      <textarea class="form-control input-box form-ensurance-header-control" id="floatingTextarea" placeholder="Leave a comment here"></textarea>
                      <label for="floatingTextarea">Pregunta 4</label>
                    </div>
                    <div class="col-12 d-grid">
                      <button class="btn btn-primary rounded-pill" type="submit">Enviar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


     


      <!-- <section> close ============================-->
      <!-- ============================================-->
      <section id="contact">

<div class="container">
  <div class="row">
    <h2 class="text-light text-center mb-8">Contactanos</h2>
    <div class="col-12 col-lg-6 col-xl-7 mb-4 order-0 order-sm-0"><a class="logo-footer fs-7" href="index.html"><span class="text-primary fw-bolder">ABC</span><span class="fw-thin text-300">system</span></a>
      <p class="text-light my-4"> <i class="fas fa-map-marker-alt me-3"></i><span class="text-light">1500 Treat Ave, Suite 200  &nbsp;</span><a class="text-light" href="tel:+604-680-9785">+(56) 9 xxx xxx xx</a><br />Chillan, Chile</p>
      <p class="text-light"> <i class="fas fa-envelope me-3 text-primary"> </i><a href="mailto:vctung@outlook.com">agartha@gmail.com </a></p>
      <p class="text-light"> <i class="fas fa-phone-alt me-3 text-primary"> </i><a href="tel:1-800-800-2299">+(56) 9 xxx xxx xx (Soporte)</a></p>
    </div>
    <div class="col-12 col-lg-6 col-xl-5">
      <h3 class="text-200 my-4">Subscribete Gratis: </h3>
      <form class="position-relative">
        <div class="input-group-icon">
          <input class="form-control form-ensurance-control" type="email" placeholder="Enter your email " aria-label="email" />
        </div>
        <button class="btn btn-primary btn-subscribe" type="submit">Subscribir ahora</button>
      </form>
    </div>
  </div>
</div>
<!-- end of .container-->

</section>

    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->




    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/prism/prism.js"></script>
    <script src="assets/js/theme.js"></script>

  </body>

</html>