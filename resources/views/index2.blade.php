<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Page Title -->
  <title>Mapa principal</title>

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
{{--  <link href="{{ asset('assets/css/map.css') }}" rel="stylesheet">--}}

  <style>
    /*header, #footer{*/
      /*display: none;*/
    /*}*/
#col-map{
  padding: 0px;
}
    #show-header{
      height: 20px;
    }
    #show-header:hover{
      background-color: #e4e4e4;
    }
    i#icon-header{
      margin-bottom: 2px!important;
    }
  </style>

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

            @if($user != null)
              @include('partials.top-bar-user')
            @else
              @include('partials.top-bar-invitado')
            @endif

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

  <div class="row">
    <div id="show-header" class="col-sm-12">
      <center><i id="icon-header" class="fa fa-sort-asc"></i></center>
    </div>
  </div>



  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          @if (Session::has('message'))
            <p class="alert alert-success">{{Session::get('message')}}</p>
          @endif

        </div>
<div id="col-map" class="col-sm-12">
  <div id="main-map"></div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsXhk_RpcpReEa1opVGaj0k_PZS19C7Y4&sensor=false"></script>
<script>
  $(document).ready(function(){
    function initialize() {

      var styles = [
        {
          "stylers": [
            { "invert_lightness": true },
            { "saturation": -1 },
            { "gamma": 0.85 },
            { "lightness": -26 },
            { "hue": "#0000ff" }
          ]
        }
      ];
      var styledMap = new google.maps.StyledMapType(styles,
              {name: "Styled Map"});

      var mapCanvas = document.getElementById('main-map');

      var mapOptions = {
        zoom: 2,
        mapTypeControl: false,
        streetViewControl: false,
        minZoom: 2,
        zoomControlOptions: {
          position: google.maps.ControlPosition.TOP_LEFT
        },
        center: new google.maps.LatLng(37.293564192170095, -14.94140625),
        mapTypeControlOptions: {
          mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
      }


      var map = new google.maps.Map(mapCanvas, mapOptions);

      //Associate the styled map with the MapTypeId and set it to display.
      map.mapTypes.set('map_style', styledMap);
      map.setMapTypeId('map_style');

      $.ajax({
        url:   'groups-register',
        type:  'get',
        beforeSend: function () {
          console.log("Procesando, espere por favor...");
        },
        success: function (data) {
          console.log(data);
          if(data.length > 0){
            var latitud, longitud;
            var nombre, infoGrupo, posGrupo;
            var iconMarker = {
              url: '/assets/images/icon-atlas5.png',
              // This marker is 20 pixels wide by 32 pixels high.
//              size: new google.maps.Size(20, 32),
              // The origin for this image is (0, 0).
              origin: new google.maps.Point(0, 0),
              // The anchor for this image is the base of the flagpole at (0, 32).
              anchor: new google.maps.Point(25, 27)
            };
            for(var i= 0; i < data.length; i++){
              latitud = data[i].latitud;
              longitud = data[i].longitud;
              nombre = data[i].nombre;
              var posGrupo = new google.maps.LatLng(latitud, longitud);

              var infoGrupo = "<div><h4>"+data[i].nombre+"</h4><hr><img width='40%' src='/files/"+data[i].foto+"'></img></div>";
              console.log(infoGrupo);
              var etiquetaGrupo = new google.maps.Marker({
                position: posGrupo,
                icon: iconMarker,
                map: map,
                title:"Grupo",
                content: infoGrupo
              });
//              etiquetaGrupo.addListener('click', function(){
//                var infowindow = new google.maps.InfoWindow({
//                  content: this.content
//                });
//                infowindow.open(map, this);
//              });
            }
          }else{
            alert("No hay grupos registrados");
          }

        },
        error: function(jqXHR, text){
          console.log(jqXHR);
          console.log(text);
        }
      });


    }
    initialize();
    var headerOn = true;

    var alto = $(window).height();
    alto += 3;
    $("#main-map").css("height", alto);
    $("#main-map").css("width", "100%");

    $("#show-header").click(function(){
if(headerOn){
  $("#header").slideUp("slow");
  headerOn = false;
  $("#icon-header").removeClass("fa-sort-asc");
  $("#icon-header").addClass("fa-sort-down");
}else{
  $("#header").slideDown("slow");
  headerOn = true;
  $("#icon-header").removeClass("fa-sort-down");
  $("#icon-header").addClass("fa-sort-asc");
}
    });

  });
</script>
@yield('scripts')
</html>