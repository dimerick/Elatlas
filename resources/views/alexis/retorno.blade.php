<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Retorno</title>
    <link href="{{ asset('assets/css/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style-retorno.css') }}" rel="stylesheet">

</head>
<body>
<div id="map"> </div>
</body>+
<script src="{{ asset('assets/js/jquery-1.12.0.min.js') }}"></script>
<script src="{{ asset('assets/js/leaflet.js') }}"></script>
<script>
    $(document).ready(function(){

        var map = L.map('map', {
            center: [6.308600, -75.572466],
            zoom: 13
        });
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
        var linea = { "type": "LineString",
            "coordinates": [[-75.572466, 6.308600], [-74.995071, 6.042454], [-74.858595, 5.947295],
                [-74.882835, 5.873034], [-74.903099, 5.863109], [-74.918088, 5.862097], [-74.970963, 5.844614]]
        }

        var myStyle = {
            "color": "#ff7800",
            "weight": 5,
            "opacity": 0.65
        };
        L.geoJson(linea, {
            style: myStyle
        }).addTo(map);
        var myIcon = L.icon({
            iconUrl: 'assets/images/icon_retorno.png',
            iconSize: [50, 50],
            iconAnchor: [28, 46]
        });


        var punto2 = L.marker([6.042454,-74.995071], {icon: myIcon}).addTo(map);
        punto2.bindPopup('<div><h1>These community leaders get to work organizing belongings and preparing for the journey</h1> <img class="img-retorno" src="http://www.elatlas.org/files/fotosretorno/3.jpg"></div>', {maxWidth: 600});

        var punto3 = L.marker([5.947295,-74.858595], {icon: myIcon}).addTo(map);
        punto3.bindPopup('<div><h1>Community leaders and displaced farmers approach their destination</h1> <img class="img-retorno" src="http://www.elatlas.org/files/fotosretorno/5.jpg"></div>', {maxWidth: 600});

        var punto4 = L.marker([5.873034, -74.882835], {icon: myIcon}).addTo(map);
        punto4.bindPopup('<div><h1>The elementary school, a symbol of hope on the way</h1> <img class="img-retorno" src="http://www.elatlas.org/files/fotosretorno/6.jpg"></div>', {maxWidth: 600});

        var punto5 = L.marker([5.863109,-74.903099], {icon: myIcon}).addTo(map);
        punto5.bindPopup('<div><h1>Reaching the halfway point</h1> <img class="img-retorno" src="http://www.elatlas.org/files/fotosretorno/7.jpg"></div>', {maxWidth: 600});

        var punto6 = L.marker([5.862097,-74.918088], {icon: myIcon}).addTo(map);
        punto6.bindPopup('<div><h1>They arrive to the Pocitos district</h1> <img class="img-retorno" src="http://www.elatlas.org/files/fotosretorno/10.jpg"></div>', {maxWidth: 600});

        var punto7 = L.marker([5.844614,-74.970963], {icon: myIcon}).addTo(map);
        punto7.bindPopup('<div><h1>A traditional house in Aquitania</h1> <img class="img-retorno" src="http://www.elatlas.org/files/fotosretorno/11.jpg"></div>', {maxWidth: 600});

        var punto1 = L.marker([6.308600, -75.572466], {icon: myIcon}).addTo(map);
        punto1.bindPopup('<div><h1>Community leaders from Medellin decide to accompany displaced communities returning to their districts</h1> <img class="img-retorno" src="http://www.elatlas.org/files/fotosretorno/1.jpg"></div>', {maxWidth: 600}).openPopup();
    });

</script>
</html>