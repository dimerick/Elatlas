$('document').ready(function(){
    function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
            center: new google.maps.LatLng(6.25304, -75.56457),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
        infoWindow = new google.maps.InfoWindow();


        var nombre, infoGrupo, posGrupo;
        var iconMarker = '/assets/images/icon-atlasAnt.png';


        var posGrupo = new google.maps.LatLng(6.25304, -75.56457);

        var marker = new google.maps.Marker({
            position: posGrupo,
            draggable: true,
            icon: iconMarker,
            map: map,
        });
        google.maps.event.addListener(marker, 'dragend', function(){

            var latitud, longitud, markerPos;
            markerPos = this.getPosition();
            latitud = markerPos.lat();
            longitud = markerPos.lng();
            $('#latitud').attr("value", latitud);
            $('#longitud').attr("value", longitud);

        });
    }
    initialize();
});