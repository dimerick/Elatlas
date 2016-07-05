$('document').ready(function(){
    function inicializarMap(latitud, longitud){
        if(latitud != null && longitud != null){
            $('#latitud').val(latitud);
            $('#longitud').val(longitud);
        }else{
            latitud = 6.25304;
            longitud = -75.56457;
        }
        var myIcon = L.icon({
            iconUrl: '/assets/v2/images/icon_retorno.png',
            iconSize: [40, 40],
            iconAnchor: [22, 10]
        });

        var map = L.map('register-map', {
            center: [latitud, longitud],
            zoom: 12
        });
        L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);

        var punto = L.marker([latitud, longitud], {
            icon: myIcon,
            draggable: true
        }).addTo(map);

        punto.on('dragend', function(e) {
            var latLng = punto.getLatLng();
            var lat = latLng.lat;
            var long = latLng.lng;
            $('#latitud').val(lat);
            $('#longitud').val(long);
        });
    }

    function getPosition(position){
        var lat = position.coords.latitude;
        var long = position.coords.longitude;
        inicializarMap(lat, long);
    }
    function error(msg){
        alert("Ha ocurrido un error al obtener la ubicacion, deberas establecerla manualmente");
        inicializarMap(null, null);
    }

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(getPosition, error);
    }else{
        error('not supported');
    }

    function comprobarCampos(){
        valido = true;
        if($('#latitud').val() == "" && $('#longitud').val() == ""){
            valido = false;
        }
        return valido;
    }

    function comprobarCategories() {
        var num = 0;
        valido = true;

        $(".check-category").each(function (index)
        {
           if($(this).prop('checked')){
               num++;
           }
        });
        if(num == 0){
            valido = false;
        }
        return valido;
    }

    $("#submit").click(function (event) {
        var state = comprobarCampos();
        if(!state){
            alert('Arrastra el icono en el mapa para establecer tu ubicacion');
            event.preventDefault();
        }
        var stateCategory = comprobarCategories();
        if(!stateCategory){
            alert('Debes seleccionar al menos una categoria');
            event.preventDefault();
        }
    });
});