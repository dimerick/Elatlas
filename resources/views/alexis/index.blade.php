<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">


    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/styleAlexis.css') }}" rel="stylesheet">


</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
          <center><h1> Communities Reclaiming the Right to the City in Medellin – Colombia</h1> </center>
        </div>
    </div>
    <div class="row">
<div class="col-sm-12">
    <div id="map"></div>
</div>
</div>
</div>

<!-- jQuery first, then Bootstrap JS. -->
<script src="{{ asset('assets/js/jquery-1.12.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsXhk_RpcpReEa1opVGaj0k_PZS19C7Y4&sensor=false"></script>
<script>
    $('document').ready(function(){


        var places = [{lat:6.2683893
            , long:-75.5375675,desc:"Describing the histoy of the neighborhood and the survivors of the armed conflict in the northeast of Medellin",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCiudad_14%20de%20noviembre_1.jpg "
        }, {lat:6.2683894
            , long:-75.5375339,desc:"Showing the everyday life of the neighborhoods",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCiudad_14%20de%20noviembre_2.jpg"
        },{lat:6.2683895
            , long:-75.5374257,desc:"The real  history shines in the neighborhoods",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCuidad_14%20de%20noviembre_1.jpg"
        },{lat:6.2683896
            , long:-75.5373896,desc:"Telling the history of the neighborhhods affected by the violence",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCiudad_14%20de%20noviembre_3.jpg"
        },{lat:6.2683897
            , long:-75.5374525,desc:"Discussing the impacts of the mega-projects on the neighborhoods",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCiudad_14%20de%20noviembre_4.jpg"
        },{lat:6.2683898
            , long:-75.5375206,desc:"Eating lunch outside after a parade through the neighborhoods",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCiudad_14%20de%20noviembre_5.jpg"
        },{lat:6.2683899
            , long:-75.5382996,desc:"Watching a video about rap, urban farms, the armed conflict and new opportunities in the neighborhoods",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCiudad_14%20de%20noviembre_6.jpg"
        },{lat:6.2683900
            , long:-75.5565721,desc:"Showing the artesanal products and creative expressions of the neighborhoods",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCiudad_14%20de%20noviembre_7.jpg"
        },{lat:6.2683901
            , long:-75.5566599,desc:"Youth talking about visions of a new urban reality",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCiudad_14%20de%20noviembre_8.jpg"
        },{lat:6.2683902
            , long:-75.5567029,desc:"Discussing the challenges of minimun wage and the need for work that gives people dignity",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCiudad_14%20de%20noviembre_9.jpg"
        },{lat:6.2683903
            , long:-75.5566119,desc:"Talking about education for the people",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCiudad_14%20de%20noviembre_10.jpg"
        },{lat:6.2683904
            , long:-75.5567197,desc:"Facilitating a discussion about the need for social justice in the peace process",
            url:"http://www.elatlas.org/files/recorridos/Recorrido1DerechoALaCiudad_14%20de%20noviembre_11.jpg"
        }]
        


        function initialize(){
    //variable stlyle options on google maps
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
    var mapCanvas = document.getElementById('map');
    var mapOptions = {
        zoom: 15,
        mapTypeControl: false,
        streetViewControl: false,
        zoomControlOptions: {
            position: google.maps.ControlPosition.TOP_LEFT
        },
        center: new google.maps.LatLng(6.25304, -75.56457),
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
    }
    var map = new google.maps.Map(mapCanvas, mapOptions);
    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
            var latitude, longitud, url, posPlace,desc,info;
            var iconMarker = '/assets/images/icon-atlas5.png';
            for(var i=0;i<places.length;i++) {
                latitude=places[i].lat;
                longitud=places[i].long;
                posPlace = new google.maps.LatLng(latitude, longitud);
                desc=places[i].desc;
                url=places[i].url;
                info = "<div class='row'><div class='col-sm-6'><img width='80%' src='"+url+"'</div><div class='col-sm-6'>"+desc+"</div></div>";
                var tagPlaces = new google.maps.Marker({
                    position: posPlace,
                    icon: iconMarker,
                    map: map,
                    content: info
                });
                tagPlaces.addListener('click', function(){
                    var infowindow = new google.maps.InfoWindow({
                        content: this.content
                    });
                    infowindow.open(map, this);
                });


            }
            var flightPlanCoordinates = [
                {lat:6.2683893 , lng:-75.5375675 },
                {lat:6.2683894 , lng:-75.5375339 },
                {lat: 6.2683895, lng:-75.5374257 },
                {lat:6.2683896 , lng:-75.5373896 },
                {lat:6.2683897 , lng:-75.5374525 },
                {lat:6.2683898 , lng:-75.5375206 },
                {lat:6.2683899 , lng:-75.5382996 },
                {lat:6.2683900 , lng:-75.5565721 },
                {lat:6.2683901 , lng:-75.5566599 },
                {lat:6.2683902 , lng:-75.5567029 },
                {lat:6.2683903 , lng:-75.5566119 },
                {lat:6.2683904 , lng:-75.5567197 }
            ];

            var linePlaces = new google.maps.Polyline({
                path: flightPlanCoordinates,
                map: map,
                geodesic: true,
                strokeColor:"#FACC2E",
                strokeOpacity: 1.0,
                strokeWeight: 2
            });

}
        initialize();
    });
</script>
</body>
</html>