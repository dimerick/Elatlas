$('document').ready(function(){

$("#load-fotos").change(function(){
 var state = $("#load-fotos").prop("checked");
 if(state){
$("#dz-message").css('display', 'none')
 }else{
  $("#dz-message").removeAttr('style');
 }
});
function getPosition(position){
 var lat = position.coords.latitude;
 var long = position.coords.longitude;
 $('#latitud').val(lat);
 $('#longitud').val(long);
 initialize(lat, long);
}
function error(msg){
 initialize(6.25304, -75.56457);
alert("Ha ocurrido un error al obtener la ubicacion");
}
 function initialize(lat, long) {
 var mapCanvas = document.getElementById('map');
  var mapOptions = {
   center: new google.maps.LatLng(lat, long),
   zoom: 15,
   mapTypeId: google.maps.MapTypeId.ROADMAP
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
  infoWindow = new google.maps.InfoWindow();


  var nombre, infoGrupo, posGrupo;
  var iconMarker = '/assets/images/icon-atlasAnt.png';


  var posGrupo = new google.maps.LatLng(lat, long);

  var marker = new google.maps.Marker({
   position: posGrupo,
   draggable: true,
   icon: iconMarker,
   map: map,
  });
  google.maps.event.addListener(marker, 'dragend', function(){

   var lat, long, markerPos;
   markerPos = this.getPosition();
   lat = markerPos.lat();
   long = markerPos.lng();
   $('#latitud').val(lat);
   $('#longitud').val(long);
  });
 }


 if (navigator.geolocation) {
  navigator.geolocation.getCurrentPosition(getPosition, error);
 }else{
  error('not supported');
 }


 function comprobarCampos(){
var valido=true;
var campos = $("[required]").each(function(index){
if($(this).val() == ""){
valido = false;
}
// alert($(this).val());
});
return valido;
}


});
