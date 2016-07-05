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
  <link href="{{ asset('assets/css/myprofile.css') }}" rel="stylesheet">
  <!--Font Awesone-->
  <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">

@yield('css')

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-10627690-5', 'auto');
    ga('send', 'pageview');

  </script>

</head>
<body>
<!-- BEGIN WRAPPER -->
<div id="wrapper">

<!-- BEGIN HEADER -->
<header id="header">


  <div id="nav-section">
    <div class="container-fluid cont-header">
      <div class="row">
        <div class="col-sm-12">
          <a href="index.html" class="nav-logo"><img src="{{ asset('assets/images/logo.png') }}" alt="Logo" /></a>

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
              <li>
                <form class="navbar-form navbar-left">
                  <div class="input-group input-group-sm" style="max-width:360px;">
                    <input type="text" class="form-control" placeholder="Buscar grupos" name="srch-term" id="srch-term">
                    <div class="input-group-btn">
                      <button class="btn" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
                  </div>
                </form>
              </li>
              <li>
                <a href="#postModal" role="button" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Cargar Actividad</a>
              </li>
              <li class="active"><a href="#">Inicio</a></li>
              <li class="active"><a href="#"><i class="fa fa-user"></i> Mi perfil </a></li>
              <li><a href="/auth/logout">Salir</a></li>

            </ul>



          </nav>
          <!-- END MAIN MENU -->

        </div>
      </div>
    </div>
  </div>
</header>
<!-- END HEADER -->

<section class="profile-main">
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2" id="menu-lateral">

      <div class="list-group" id="list-menu">
        <a href="#" class="list-group-item active">
          Cras justo odio
        </a>
        <a href="#" class="list-group-item">Galeria</a>
        <a href="#" class="list-group-item">Mapas</a>

      </div>



    </div>
    <div class="col-sm-8 col-sm-offset-1">
      @yield('content')

    </div>
  </div>
</div>




</section>


<!-- BEGIN FOOTER -->
<footer id="footer">
  <div id="footer-top" class="container">
    <div class="row">
      <div class="block col-sm-4 col-sm-offset-1">
        <a href="index.html"><img src="{{ asset('assets/images/logo.png') }}" alt="Cozy Logo" /></a>
        </br>
        <center><p>Conectando comunidades a través del afecto</p></center>
      </div>
      <div class="block col-sm-6">
        <h3>Contact Info</h3>
        <ul class="footer-contacts">
          <li><i class="fa fa-map-marker"></i> Temple University, Philadelphia</li>
          <li><i class="fa fa-envelope"></i> <a href="mailto:email@yourbusiness.com">atlasdelafecto@gmail.com</a></li>
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
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
@yield('scripts')
</html>





