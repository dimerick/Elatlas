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

  <meta name="keywords" content="real estate, responsive, retina ready, modern html5 template, bootstrap, css3" />
  <meta name="description" content="Cozy - Responsive Real Estate HTML5 Template" />
  <meta name="author" content="Wisely Themes - www.wiselythemes.com" />

  <!-- Mobile Meta Tag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav_touch_icons/favicon.ico') }}" />
  <!--<link rel="apple-touch-icon" href="images/fav_touch_icons/apple-touch-icon.png" />-->
  <!--<link rel="apple-touch-icon" sizes="72x72" href="images/fav_touch_icons/apple-touch-icon-72x72.png" />-->
  <!--<link rel="apple-touch-icon" sizes="114x114" href="images/fav_touch_icons/apple-touch-icon-114x114.png" />-->

  <!-- IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Google Web Font -->
  <link href="http://fonts.googleapis.com/css?family=Raleway:300,500,900%7COpen+Sans:400,700,400italic" rel="stylesheet" type="text/css" />

  <!-- Bootstrap CSS -->
  <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Template CSS -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/css/mystyle.css') }}" rel="stylesheet">
  @yield('css')

  <!--Font Awesone-->
  <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">

</head>
<body>
<!-- BEGIN WRAPPER -->
<div id="wrapper">

  <!-- BEGIN HEADER -->
  <header id="header">



    <div id="top-bar" class="navbar-fixed-top">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">

            @yield('top-bar')

          </div>
        </div>
      </div>
    </div>



    <div id="nav-section">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <a href="/" class="nav-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo" /></a>

            <!--&lt;!&ndash; BEGIN SEARCH &ndash;&gt;-->
            <!--<form class="navbar-form navbar-right" role="search" method="get" action="index.html">-->
            <!--<div class="form-group">-->
            <!--<input type="text" class="form-control" placeholder="Buscar">-->
            <!--</div>-->
            <!--<button type="submit" class="btn btn-default" value="Buscar">Buscar</button>-->
            <!--</form>-->
            <!--&lt;!&ndash; END SEARCH &ndash;&gt;-->

            <!-- BEGIN MAIN MENU -->
            <nav class="navbar pull-right">
              <ul class="nav navbar-nav">
                <li><a href="/">Inicio</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeria <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                    {{--<li><a href="#" >Digitales</a></li>--}}
                    {{--<li><a href="#">Artisticos</a></li>--}}
                    <li><a href="/recorridos" >Recorridos</a></li>
                    {{--<li class="divider"></li>--}}
                    {{--<li><a href="#">Otro link</a></li>--}}
                  </ul>
                </li>
              </ul>



            </nav>
            <!-- END MAIN MENU -->

          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END HEADER -->


  <!-- BEGIN PAGE TITLE/BREADCRUMB -->
  <div class="parallax colored-bg pattern-bg" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="page-title">@yield('pagina')</h2>

          <!--<ul class="breadcrumb">-->
          <!--<li>Inicio</li>-->
          <!--&lt;!&ndash;<li><a href="#">Pages</a></li>&ndash;&gt;-->
          <!--&lt;!&ndash;<li><a href="register.html">Register</a></li>&ndash;&gt;-->
          <!--</ul>-->
        </div>
      </div>
    </div>
  </div>
  <!-- END PAGE TITLE/BREADCRUMB -->

  <div class="content">
    <div class="container">
      <div class="row">
        <div class="login-info col-sm-10 col-sm-offset-1">

          @if (Session::has('message'))
            <p class="alert alert-success">{{Session::get('message')}}</p>
          @endif

  @yield('content')

        </div>

      </div>
      <!-- END MAIN CONTENT -->

    </div>
  </div>

  <!-- BEGIN FOOTER -->
  <footer id="footer">
    <div id="footer-top" class="container">
      <div class="row">
        <div class="block col-sm-4 col-sm-offset-1">
          <a href="/"><img class="footer-logo" src="{{ asset('assets/images/logo.png') }}" alt="Cozy Logo" /></a>
          </br>

        </div>
        <div class="block col-sm-6">
          <h3>Contact Info</h3>
          <ul class="footer-contacts">
            <li><i class="fa fa-map-marker"></i> Philadelphia, USA | Medellín, Colombia</li>
            <li><i class="fa fa-envelope"></i> <a href="mailto:email@yourbusiness.com">info@elatlas.org</a></li>
          </ul>
        </div>

      </div>
    </div>


    <!-- BEGIN COPYRIGHT -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            &copy; 2016 Atlas del Afecto. All rights reserved. Developed by <a href="http://facebook.com/esaenz-2010" target="_blank">Erick Saenz</a>

            <!-- BEGIN SOCIAL NETWORKS -->
            <ul class="social-networks">
              <li><a href="https://www.facebook.com/Atlas-del-Afecto-681367321998487"><i class="fa fa-facebook"></i></a></li>
              <!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
              <!--<li><a href="#"><i class="fa fa-google"></i></a></li>-->
              <!--<li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
              <!--<li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
              <!--<li><a href="#"><i class="fa fa-rss"></i></a></li>-->
            </ul>
            <!-- END SOCIAL NETWORKS -->

          </div>
        </div>
      </div>
    </div>
    <!-- END COPYRIGHT -->

  </footer>
  <!-- END FOOTER -->

</div>
<!-- END WRAPPER -->

</body>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
{{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>--}}
<script src="{{ asset('assets/js/jquery-1.12.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@yield('scripts')
</html>