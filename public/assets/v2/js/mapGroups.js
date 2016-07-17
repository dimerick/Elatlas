$(document).ready(function(){
    function eachGroups(feature, layer){
        var urlIcon = '/assets/v2/images/categories/icon-otra.svg';
        console.log("Datos feature");
        var lat = feature.geometry.coordinates[0];
        var long = feature.geometry.coordinates[1];
        console.log(lat);
        console.log(long);

        console.log(feature.geometry.properties.nombre);
        var content = '<div id="info-map" class="plegable animated bounceInDown"><a href="#" id="ocult-info-map"> <i class="fa fa-close"></i></a>' +
            '<hr>' +
                '<a href="/files/'+feature.geometry.properties.foto+'" data-lightbox="'+feature.geometry.properties.nombre+'" data-title="'+feature.geometry.properties.nombre.toUpperCase()+'"><img src="/files/'+feature.geometry.properties.foto+'" width="80%"" class="img-rounded"></a>' +
        '<a href="/autor/'+feature.geometry.properties.email+'"><h3>'+feature.geometry.properties.nombre.toUpperCase()+'</h3></a>' +
        '<div id="categories-group">'+
        '<ul>';

        var categories = feature.geometry.properties.categorias;
        for(var i=0; i < categories.length; i++){
            if(categories[i].tipo == 1){
                urlIcon = '/assets/v2/images/categories/'+categories[i].icon;
            }
            content += '<li title="'+categories[i].nombre+'"><img src="/assets/v2/images/categories/'+categories[i].icon+'"></li>';
            console.log(categories[i].nombre);
        }
        var myIcon = L.icon({
            iconUrl: urlIcon,
            iconSize: [40, 40],
            iconAnchor: [22, 10]
        });
        layer.setIcon(myIcon);
        content += '</ul>' +
        '</div>' +
            '<ul id="data-group">' +
            '<li title="Numero de integrantes"> <i class="fa fa-group"> </i> <span id="num-int-group">'+' '+feature.geometry.properties.num_int+'</span></li>' +
            '<li title="Ubicacion"> <i class="fa fa-globe"> </i><span id="city-group">'+' '+feature.geometry.properties.ciudad+'</span> </li>' +
            '<li title="Correo electronico"> <i class="fa fa-envelope-o"> </i><span id="email-group">'+' '+feature.geometry.properties.email+'</span> </li>' +
            '</ul>'+
                '<hr>' +
        '<div id="description-group">' +
        '<p title="Descripcion grupo">'+feature.geometry.properties.descripcion+'</p>' +
        '</div><hr>' +
            '</div>';


        layer.on('click', function () {
            $("#info-map").remove();
            $("#v2-map").append(content);
            $("#info-map").css('padding', '20px');
            $("#info-map").addClass('desplegado');

            // if(map.hasLayer(circle)){
            //     map.removeLayer(circle);
            // }
            // circle = L.circle([long, lat], 700, {
            //     color: '#03f',
            //     weight : 3
            // }).addTo(map);
        })


    };
    

    $.ajax({
        url:   '/v2/groups-register',
        type:  'get',
        beforeSend: function () {
            console.log("Procesando, espere por favor...");
        },
        success: function (data){
            console.log("imprimiendo grupos");
            var grupos = JSON.parse(data);
            console.log(grupos);
            var gruposMap = L.geoJson(grupos,{
                onEachFeature: eachGroups
            }).addTo(map);

        },
        error: function(jqXHR, text){
            console.log(jqXHR);
            console.log(text);
        }
    });
    var map = L.map('v2-map', {
        center: [4.96871620165794, -73.93611395955086],
        zoom: 5,
        fullscreenControl: true,
        fullscreenControlOptions: {
            position: 'topleft'
        }
    });
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);

});