<!DOCTYPE html>

<head>
  <title>Pontos de descarte</title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

   <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
   integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>

    <?php include 'i_topo.php' ?>

</head>

<body>
       <div id="mapid" style="position: absolute; float: left; top: 9%; height: 90%; width: 100%;  z-index: 1;">
        <script>
        var map =  L.map('mapid').setView([-22.906288, -47.082326], 14);
    
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        maxZoom: 25,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
          '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11'
      }).addTo(map);
    
      /*exemplo
      var marker = L.marker([-22.850994, -47.126070]).addTo(map);


      marker.bindPopup("Prédio VI - CAE").openPopup();      */ 
          var marker = L.marker([-22.817304, -47.100553]).addTo(map);
          marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
          marker.bindPopup("Resíduos: Eletrônicos e Recicláveis").openPopup();  

          var marker = L.marker([-22.904054, -47.070088]).addTo(map);
          marker.valueOf()._icon.style.filter = 'brightness(0.35)';
          marker.bindPopup("Resíduos: Eletrônicos").openPopup(); 

          var marker = L.marker([-22.934027, -47.105675]).addTo(map);
          marker.valueOf()._icon.style.filter = 'hue-rotate(290deg)';
          marker.bindPopup("Resíduos: Recicláveis").openPopup(); 


        </script>
       </div>

</body>
</html>
