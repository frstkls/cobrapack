  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCddw9ZknnZ3_xwTtkmY76xwlbrtlwhsiU"></script>    
<div id="map"></div>
<script type="text/javascript">

    var locations = [
      ['<img src="/assets/img/maps/maro.png" style="max-height: 90px; float: left;" /><div style="float: right; margin-left: 15px;"><h4 style="font-size: 15px;">Maro Recycling</h4><p>Sint-Eloois-winkelstraat 127<br />8880 Ledegem<br />+32 (0) 56 50 06 72</div>', 50.6230372, 3.3177454, 4],
      ['<img src="/assets/img/maps/cobrapack.png" style="max-height: 90px; float: left;" /><div style="float: right; margin-left: 15px;"><h4 style="font-size: 15px;">Cobra Packaging & Recycling</h4><p>Rue du Mont des Carliers 2/Z<br />7522 Tournai<br />+32 (0) 69 84 34 82</div>', 50.8625107, 3.1505264, 5]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(50.7378547,3.2180207),
      styles: [{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},{"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#a7a7a7"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},{"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}],
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) { 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        // icon: '/assets/img/maps/cobrapack.png',
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }

      })(marker, i));

      
    }
  </script>

