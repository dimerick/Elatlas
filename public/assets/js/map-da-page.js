$(document).ready(function(){



var map = L.map('map', {
        center: [39.993076, -75.154383],
        zoom: 11
    });
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'}).addTo(map);

    var myIcon = L.icon({
        iconUrl: 'images/icon.png',
        iconSize: [40, 40],
        iconAnchor: [22, 10]
    });
    var myIcon2 = L.icon({
        iconUrl: 'images/icon2.png',
        iconSize: [40, 40],
        iconAnchor: [22, 10]
    });
    var myIcon3 = L.icon({
        iconUrl: 'images/icon3.png',
        iconSize: [40, 40],
        iconAnchor: [22, 10]
    });
    var myIcon4 = L.icon({
        iconUrl: 'images/icon4.png',
        iconSize: [40, 40],
        iconAnchor: [22, 10]
    });

    var myIcon5 = L.icon({
        iconUrl: 'images/icon5.png',
        iconSize: [40, 40],
        iconAnchor: [22, 10]
    });

    var iconSilla = L.icon({
        iconUrl: 'images/icon-silla.png',
        iconSize: [40, 40],
        iconAnchor: [22, 10]
    });

    var style1 = {
        fill: true,
        fillColor:'#1f94ca',
        fillOpacity: 1,
        color : '#000',
        weight: 2
    }

    var style2 = {
        fill: true,
        fillColor:'#9ac192',
        fillOpacity: 1,
        color : '#000',
        weight: 2
    }

    var style3 = {
        fill: true,
        fillColor:'#fbfa6e',
        fillOpacity: 1,
        color : '#000',
        weight: 2
    }

    var style4 = {
        fill: true,
        fillColor:'#ff8d35',
        fillOpacity: 1,
        color : '#000',
        weight: 2
    }

    var style5 = {
        fill: true,
        fillColor:'#e80f18',
        fillOpacity: 1,
        color : '#000',
        weight: 1
    }

    var style6 = {
        fill: true,
        fillColor:'#55d296',
        fillOpacity: 1,
        color : '#000',
        weight: 5
    }

    var style7 = {
        fill: true,
        fillColor:'#32acbb',
        fillOpacity: 1,
        color : '#000',
        weight: 5
    }
    var style8 = {
        fill: true,
        fillColor:'#c835e3',
        fillOpacity: 1,
        color : '#000',
        weight: 5
    }
    var style9 = {
        fill: false,
        color : '#000',
        weight: 2
    }

    var style10 = {
        color : '#af319f',
        fillOpacity: 1,
        weight: 5
    }

    var style11 = {
        fillColor: '#33d1a6',
        fillOpacity: 1,
        weight: 2
    }

    function eachPhlCityLine(feature, layer){
        layer.setStyle(style9);
        var content = '<div class="table-responsive"><table class="table table-bordered library">' +
            '<tr><th>STATEFP10</th><td>'+feature.properties.STATEFP10+'</td> </tr> ' +
            '<tr> <th>COUNTYFP10</th><td>'+feature.properties.COUNTYFP10+'</td></tr> ' +
            '<tr> <th>COUNTYNS10</th> <td>'+feature.properties.COUNTYNS10+'</td> </tr> ' +
            '<tr> <th>GEOID10</th> <td>'+feature.properties.GEOID10+'</td> </tr> ' +
            '<tr> <th>NAME10</th> <td>'+feature.properties.NAME10+'</td> </tr> ' +
            '<tr> <th>NAMELSAD10</th> <td>'+feature.properties.NAMELSAD10+'</td> </tr> ' +
            '<tr> <th>CLASSFP10</th> <td>'+feature.properties.CLASSFP10+'</td> </tr> ' +
            '<tr> <th>MTFCC10</th> <td>'+feature.properties.MTFCC10+'</td> </tr> ' +
            '<tr> <th>CBSAFP10</th> <td>'+feature.properties.CBSAFP10+'</td> </tr> ' +
            '<tr> <th>CSAFP10</th> <td>'+feature.properties.CSAFP10+'</td> </tr> ' +
            '<tr> <th>METDIVFP10</th> <td>'+feature.properties.METDIVFP10+'</td> </tr> ' +
            '<tr> <th>FUNCSTAT10</th> <td>'+feature.properties.FUNCSTAT10+'</td> </tr> ' +
            '<tr> <th>ALAND10</th> <td>'+feature.properties.ALAND10+'</td> </tr> ' +
            '<tr> <th>AWATER10</th> <td>'+feature.properties.AWATER10+'</td> </tr> ' +
            '<tr> <th>INTPTLAT10</th> <td>'+feature.properties.INTPTLAT10+'</td> </tr> ' +
            '<tr> <th>INTPTLON10</th> <td>'+feature.properties.INTPTLON10+'</td> </tr> ' +
            '</table></div>';
        layer.on('click', function() {
            $("#info-map").html(content);
        })
    };

    var phlCityLineMap = L.geoJson(phlCityLine,{
        onEachFeature: eachPhlCityLine
    }).addTo(map);


    function eachPhlBusRouts(feature, layer){
            layer.setStyle(style11);
        var content = '<div class="table-responsive"><table class="table table-bordered library">' +
            '<tr><th>OBJECTID</th><td>'+feature.properties.OBJECTID+'</td> </tr> ' +
            '<tr> <th>ROUTE</th><td>'+feature.properties.ROUTE+'</td></tr> ' +
            '<tr> <th>SHAPE_len</th> <td>'+feature.properties.SHAPE_len+'</td> </tr> ' +
            '</table></div>';
        layer.on('click', function() {
            $("#info-map").html(content);
        })
    };

    var phlBusRoutsMap = L.geoJson(phlBusRouts,{
        onEachFeature: eachPhlBusRouts
    }).addTo(map);


    function eachPhlTrainStation(feature, layer){
        var elevator = feature.properties.ELEVATOR;
        if(elevator == "Y"){
            layer.setIcon(iconSilla);
        }else{
            layer.setIcon(myIcon5);
        }
       var content = '<div class="table-responsive"><table class="table table-bordered library">' +
           '<tr><th>STOP_NAME</th><td>'+feature.properties.STOP_NAME+'</td> </tr> ' +
           '<tr> <th>ONSTREET</th><td>'+feature.properties.ONSTREET+'</td></tr> ' +
           '<tr> <th>ATSTREET</th> <td>'+feature.properties.ATSTREET+'</td> </tr> ' +
           '<tr> <th>AT_SUFFIX</th> <td>'+feature.properties.AT_SUFFIX+'</td> </tr> ' +
           '</table></div>';
       layer.on('click', function() {
           $("#info-map").html(content);
       })
    };

    var phlTrainStationMap = L.geoJson(phlTrainStation,{
       onEachFeature: eachPhlTrainStation
    }).addTo(map);

    function eachServiceAreaDemography(feature, layer){
        var poblation = Number(feature.properties.Avg_Tot_15);

        if(poblation >= 3.6 && poblation <= 5.7){
            layer.setStyle(style1);
        }else if(poblation >= 5.8 && poblation <= 6.8){
            layer.setStyle(style2);
        }else if(poblation >= 6.9 && poblation <= 8){
            layer.setStyle(style3);
        }else if(poblation >= 8.1 && poblation <= 10.1){
            layer.setStyle(style4);
        }else if(poblation >= 10.2 && poblation <= 17.4){
            layer.setStyle(style5);
        }
        var content = '<div class="table-responsive"><table class="table table-bordered library">' +
            '<tr><th>Name</th><td>'+feature.properties.Name+'</td> </tr> ' +
            '<tr> <th>FacilityID</th><td>'+feature.properties.FacilityID+'</td></tr> ' +
            '<tr> <th>ObjectID</th> <td>'+feature.properties.ObjectID+'</td> </tr> ' +
            '<tr> <th>Avg_Tot_15</th> <td>'+feature.properties.Avg_Tot_15+'</td> </tr> ' +
            '</table></div>';
        layer.on('click', function() {
            $("#info-map").html(content);
        })
    };

    var serviceAreaDemographyMap = L.geoJson(serviceAreaDemography,{
        onEachFeature: eachServiceAreaDemography
    }).addTo(map);
    var percents =  '<div class="table-responsive"><table class="table" id="table-percents"><tr> <td id="percent-1"></td> <td>3.6 - 5.7</td> </tr> <tr> <td id="percent-2"></td><td>5.8 - 6.8</td> </tr> <tr> <td id="percent-3"></td> <td>6.9 - 8</td> </tr> <tr> <td id="percent-4"></td> <td>8.1 - 10.1</td></tr><tr> <td id="percent-5"></td> <td>10.2 - 17.4</td></tr> </table></div>';
    $("#percents").html(percents);


    $("#ch-phl-city").click(function(){
        var state = $(this).prop('checked');
        if(state){
            if(!(map.hasLayer(phlCityLineMap))){
                map.addLayer(phlCityLineMap);
            }

        }else{
            if(map.hasLayer(phlCityLineMap)){
                map.removeLayer(phlCityLineMap);
            }
        }
    });

    $("#ch-phl-bus").click(function(){
        var state = $(this).prop('checked');
        if(state){
            if(!(map.hasLayer(phlBusRoutsMap))){
                map.addLayer(phlBusRoutsMap);
            }

        }else{
            if(map.hasLayer(phlBusRoutsMap)){
                map.removeLayer(phlBusRoutsMap);
            }
        }
    });

    $("#ch-phl-train").click(function(){
        var state = $(this).prop('checked');
        if(state){
            if(!(map.hasLayer(phlTrainStationMap))){
                map.addLayer(phlTrainStationMap);
            }

        }else{
            if(map.hasLayer(phlTrainStationMap)){
                map.removeLayer(phlTrainStationMap);
            }
        }
    });

    $("#ch-service-area").click(function(){
        var state = $(this).prop('checked');
        if(state){
            if(!(map.hasLayer(serviceAreaDemographyMap))){
                map.addLayer(serviceAreaDemographyMap);
            }
            var percents =  '<div class="table-responsive"><table class="table" id="table-percents"><tr> <td id="percent-1"></td> <td>3.6 - 5.7</td> </tr> <tr> <td id="percent-2"></td><td>5.8 - 6.8</td> </tr> <tr> <td id="percent-3"></td> <td>6.9 - 8</td> </tr> <tr> <td id="percent-4"></td> <td>8.1 - 10.1</td></tr><tr> <td id="percent-5"></td> <td>10.2 - 17.4</td></tr> </table></div>';
            $("#percents").html(percents);
        }else{
            if(map.hasLayer(serviceAreaDemographyMap)){
                map.removeLayer(serviceAreaDemographyMap);
            }
            $("#percents").html("");
        }
    });
});
