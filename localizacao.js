var latitude,longitude;

function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML="O seu navegador não suporta Geolocalização.";}
  }
function showPosition(position)
  {
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;
  document.denuncia_inserir.txtLatitude.value = position.coords.latitude;
  document.denuncia_inserir.txtLongitude.value = position.coords.longitude;
  }

 function exibirMapa()
 {
var map;
  var mapOptions = {
 zoom: 8, // zoom do mapa
 center: {lat: latitude, lng: longitude} // latitude e longitude inicial do mapa.
 };
 map = new google.maps.Map(document.getElementById('map'),
 mapOptions);
 var marker = new google.maps.Marker({ 
 position: {lat: latitude, lng: longitude}, // latitude e longitude do marcador (pin), normalmente é o mesmo do mapa mostrado na linha 24.
 map: map
 });
 var infowindow = new google.maps.InfoWindow({
 content: '<p>Marker Location:' + marker.getPosition() + '</p>'
 });
 google.maps.event.addListener(marker, 'click', function() {
 infowindow.open(map, marker);
 });
 }
 google.maps.event.addDomListener(window, 'load', initialize);
