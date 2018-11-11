@yield('map api')
<!DOCTYPE html>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>

    <div id="map"></div>
    <script>

      // The following example creates a marker in Stockholm, Sweden using a DROP
      // animation. Clicking on the marker will toggle the animation between a BOUNCE
      // animation and no animation.

      var marker;

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 13,
          center: {lat: 59.325, lng: 18.070}
        });

        marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: {lat: 59.327, lng: 18.067}
        });
        marker.addListener('click', toggleBounce);
      }

      function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkfAwoXIKThbzY5EMAJ46Q79f3yC-oSqI&callback=initMap">
    </script>

