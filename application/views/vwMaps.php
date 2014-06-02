<!DOCTYPE html>
<html>
  <head>
    <style>
      #map_canvas {
        width: 100%;
        height: 500px;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=visualization"></script>
    <script>
      var map;
      function initialize() {
        var mapOptions = {
          zoom: 5,
          center: new google.maps.LatLng(-2.28,115),
          mapTypeId: google.maps.MapTypeId.TERRAIN
        };
        map = new google.maps.Map(document.getElementById('map_canvas'),
              mapOptions);

  // Create a script tag and set the USGS URL as the source.
  // Append this tag to the document's <head>.
  var script = document.createElement('script');
  script.src = 'http://earthquake.usgs.gov/earthquakes/feed/geojsonp/2.5/week';
  document.getElementsByTagName('head')[0].appendChild(script);
}

window.eqfeed_callback = function(results) {
  for (var i = 0; i < results.features.length; i++) {
    var earthquake = results.features[i];
    var coords = earthquake.geometry.coordinates;
    var latLng = new google.maps.LatLng(coords[1],coords[0]);
    var marker = new google.maps.Marker({
      position: latLng,
      map: map,
      icon: getCircle(earthquake.properties.mag)
    });
  }
}

function getCircle(magnitude) {
  return {
    path: google.maps.SymbolPath.CIRCLE,
    fillColor: 'red',
    fillOpacity: .2,
    scale: Math.pow(2, magnitude) / Math.PI,
    strokeColor: 'white',
    strokeWeight: .5
  };
}
    </script>
  </head>
  <body onload="initialize()">
    <div id="map_canvas"></div>
  </body>
</html>