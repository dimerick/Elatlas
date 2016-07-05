/**
 * Created by erick on 21/03/2016.
 */
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
            zoom: 5,
            mapTypeControl: false,
            streetViewControl: false,
            minZoom: 2,
            zoomControlOptions: {
                position: google.maps.ControlPosition.TOP_LEFT
            },
            center: new google.maps.LatLng(1.86871620165794, -73.83611395955086),
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
            }
        }


        var map = new google.maps.Map(mapCanvas, mapOptions);

        //Associate the styled map with the MapTypeId and set it to display.
        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');

        $.ajax({
            url:   '/groups-register',
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
                            title:data[i].nombre,
                            content: infoGrupo,
                            id: data[i].email
                        });
              etiquetaGrupo.addListener('click', function(){
                  window.location.replace("/autor/"+this.id);
                  //var infowindow = new google.maps.InfoWindow({
                //  content: this.content
                //});
                //infowindow.open(map, this);
              });
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
    //$("#main-container").css("height", alto);

    //$("#show-header").click(function(){
    //    if(headerOn){
    //        $("#header").slideUp("slow");
    //        headerOn = false;
    //        $("#icon-header").removeClass("fa-sort-asc");
    //        $("#icon-header").addClass("fa-sort-down");
    //    }else{
    //        $("#header").slideDown("slow");
    //        headerOn = true;
    //        $("#icon-header").removeClass("fa-sort-down");
    //        $("#icon-header").addClass("fa-sort-asc");
    //    }
    //});

});