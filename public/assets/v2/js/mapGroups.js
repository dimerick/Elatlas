$(document).ready(function(){

    var myIcon = L.icon({
        iconUrl: '/assets/v2/images/icon_retorno.png',
        iconSize: [40, 40],
        iconAnchor: [22, 10]
    });

    function eachGroups(feature, layer){
        layer.setIcon(myIcon);
        console.log(feature.geometry.properties.nombre);
        var content = '<a href="#" id="ocult-info-map"> <i class="fa fa-long-arrow-right"></i> Ocultar</a>' +
            '<hr>' +
                '<a href="/files/'+feature.geometry.properties.foto+'" data-lightbox="'+feature.geometry.properties.nombre+'" data-title="'+feature.geometry.properties.nombre.toUpperCase()+'"><img src="/files/'+feature.geometry.properties.foto+'" width="50%"" class="img-rounded"></a>' +
        '<h3>'+feature.geometry.properties.nombre.toUpperCase()+'</h3>' +
        '<div id="categories-group">'+
        '<ul>';

        var categories = feature.geometry.properties.categorias;
        for(var i=0; i < categories.length; i++){
            content += '<li title="Categoria"><i class="fa fa-caret-right"></i>'+' '+categories[i].nombre+'</li>';
            console.log(categories[i].nombre);
        }

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
        '</div>';


        layer.on('click', function () {
            $("#info-map").html(content);
            $("#info-map").css('padding', '20px');
            $("#info-map").addClass('desplegado');
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
        zoom: 5
    });
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);

});