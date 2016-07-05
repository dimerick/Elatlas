<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Page Title -->
  <title>@yield('title','Atlas del Afecto')</title>

  <meta name="keywords" content="Elatlas, afecto, comunidades, territorio" />


  <!-- Mobile Meta Tag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png') }}/">
  <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png') }}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('assets/favicon/android-icon-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png') }}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/ms-icon-144x144.png') }}">
  <meta name="theme-color" content="#ffffff">
  <meta name="csrf-token" content="{{csrf_token()}}">



  <!-- Google Web Font -->
  <link href="http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />

  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/new/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Template CSS -->
  <link href="{{ asset('assets/new/css/style.css') }}" rel="stylesheet">
  @yield('css')

  <!--Font Awesone-->
  <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">

</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-12 ">
      <div class="row">
        <div class="col-sm-12">
          <header>
            <div class="row">
              <div class="col-sm-4">
                <section id="cont-logo">
                  <a href="/"> <h1 id="logo"><img src="{{ asset('assets/images/logo.png') }}" class="img-responsive"></h1></a>
                </section>
              </div>
              <div class="col-sm-8">
                <div class="row">
                  <div class="col-sm-7">
                    <nav class="navbar navbar-inverse">
                      <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>

                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                          <ul class="nav navbar-nav">
                            </li>
                            <li><a id="icon-search" class="pull-left" title="Busqueda" href="#search"><i class="fa fa-search fa-2x"></i></a></li>
                            <li><a href="/">Inicio <span class="sr-only">(current)</span></a></li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mapas <span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="/map-groups">Grupos</a></li>
                                <li><a href="/map-activities">Actividades</a></li>
                              </ul>
                          </ul>
                        </div><!-- /.navbar-collapse -->
                      </div><!-- /.container-fluid -->
                    </nav>

                  </div>
                  <div class="col-sm-4">
                    <section id="options-user">

                      @yield('options-user')
                    </section>

                  </div>

                  <div class="col-sm-1"></div>

                </div>


                {{--<div class="row">--}}
                {{--<div class="col-sm-1">--}}

                {{--</div>--}}
                {{--<div class="col-sm-7">--}}
                {{--</div>--}}
                {{--<div class="col-sm-4">--}}



                {{--</div>--}}

                {{--<!--Hasta aca el codigo esta bueno-->--}}

                {{--<div class="row">--}}
                {{--<div class="col-sm-8">--}}

                {{----}}
                {{--</div>--}}
                {{--<div class="col-sm-4">--}}

                {{--</div>--}}

                {{--</div>--}}

                {{--<!--Hasta aca el codigo esta bueno-->--}}
                {{--</div>--}}

              </div>

            </div>
          </header>
        </div>
        <div class="col-sm-12">
          <section id="main-container">
              <section id="main-content">
                @if(Session::has('message'))
                  <div class="alert alert-info" role="alert">{{Session::get('message')}}</div>
                  @endif
              @yield('content')
              </section>

          </section>
        </div>
        <div class="col-sm-12">
          <footer>
            <div class="row">
              <div class="col-sm-4">
                <section id="cont-logo-footer">
                  <a href="/"> <h1 id="logo"><img src="{{ asset('assets/images/logo.png') }}" class="img-responsive"></h1></a>
                </section>
              </div>
              <div class="col-sm-6">
                <section id="footer-contact">
                  <p id="info-footer"><span>La base de datos de Elatlas está basada sobre un trabajo apoyado por National Science Foundation" (la fundación nacional de ciencia en los EE.UU) bajo la subvención #1452541. Las opiniones, resultados, conclusiones y recomendaciones expresadas en este sitio web son responsabilidad del autor y no necesariamente reflejan las visiones de "National Science Foundation" (la fundación nacional de ciencia en los EE.UU)</span></p>
                  <ul id="list-footer">
                    <li><i class="fa fa-map-marker fa-2x"></i> Philadelphia, USA | Medellín, Colombia</li>
                    <li><i class="fa fa-envelope fa-2x"></i> <a href="mailto:email@yourbusiness.com">info@elatlas.org </a> <a href="https://www.facebook.com/Atlas-del-Afecto-681367321998487" target="_blank"><i class="fa fa-facebook fa-2x pull-right"></i> </a></li>
                    <li></li>
                  </ul>
                </section>
              </div>
              <div class="col-sm-2">

              </div>

            </div>

          </footer>
        </div>

        <div class="col-sm-12">
          <section id="copyright">
            <span>&copy; 2016 Elatlas.org. All rights reserved. Developed by <a href="http://facebook.com/esaenz-2010" target="_blank">Erick Saenz</a></span>
          </section>
        </div>
      </div>
    </div>
  </div>


</div>



</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
<script src="{{ asset('assets/js/jquery-1.12.0.min.js') }}"></script>
<script src="{{ asset('assets/new/js/bootstrap.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsXhk_RpcpReEa1opVGaj0k_PZS19C7Y4&sensor=false"></script>
@yield('scripts')
</html>