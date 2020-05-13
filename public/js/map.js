
function initMap() {
  var uluru = {lat: 19.35358, lng: 72.816605};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center: uluru
  });
  var infowindow = new google.maps.InfoWindow({
         content: "Multazim Haj Corporation"
       });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
    map.setTilt(45);

    marker.addListener('click', function() {
       infowindow.open(map, marker);
     });
}
