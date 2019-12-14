<!DOCTYPE html>
<html>
  <head>
    <!-- This stylesheet contains specific styles for displaying
         the map on this page. Replace it with your own styles as
         described in the documentation:
         https://developers.google.com/maps/documentation/javascript/tutorial
    -->
    <!-- <link rel="stylesheet" href="/maps/documentation/javascript/cgc/demos.css"> -->
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var myLatLng = {lat: -8.5830695, lng: 116.3202515};

        // Create a map object and specify the DOM element
        // for display.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: myLatLng,
          zoom: 4
        });

        // Create a marker and set its position.
        var marker = new google.maps.Marker({
          map: map,
          position: myLatLng,
          title: 'Hello World!'
        });
      }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"
        async defer></script>
  </body>
</html>