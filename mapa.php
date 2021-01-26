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
      
            var marker = L.marker([-22.817304, -47.100553]).addTo(map);
            marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
            marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+%2F+Ponto+Verde/@-22.8173607,-47.1012629,18z/data=!4m5!3m4!1s0x94c8c0dbbc21c7af:0xebff89317117cd25!8m2!3d-22.8173607!4d-47.1005512'>Abrir no MAPS </a></center>").openPopup();  

            var marker = L.marker([-22.904054, -47.070088]).addTo(map);
            marker.valueOf()._icon.style.filter = 'grayscale(100%)';
            marker.bindPopup("Resíduos: Eletrônicos <br><center><a href = 'https://www.google.com.br/maps/place/Av.+Andrade+Neves,+555+-+Centro,+Campinas+-+SP,+13013-160/@-22.9040806,-47.0722762,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x94c8c8badb30cea1:0x1f0ed64695a6ec9c!2sAv.+Andrade+Neves,+555+-+Centro,+Campinas+-+SP,+13013-160!3b1!8m2!3d-22.9040806!4d-47.0700875!3m4!1s0x94c8c8badb30cea1:0x1f0ed64695a6ec9c!8m2!3d-22.9040806!4d-47.0700875'>Abrir no MAPS </a></center").openPopup();

            var marker = L.marker([-22.934027, -47.105675]).addTo(map);
            marker.valueOf()._icon.style.filter = 'hue-rotate(290deg)';
            marker.bindPopup("Resíduos: Recicláveis<br><center><a href = 'https://www.google.com.br/maps/place/Av.+Ruy+Rodrigues,+392+-+Jardim+Novo+Campos+Eliseos,+Campinas+-+SP,+13060-192/@-22.9339612,-47.107839,17z/data=!3m1!4b1!4m5!3m4!1s0x94c8c85a98d28001:0xe32e466683fb0269!8m2!3d-22.9339612!4d-47.1056503'>Abrir no MAPS</a></center>").openPopup(); 
        
            var marker = L.marker([-22.89183009027738, -47.1008494720962]).addTo(map);
            marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
            marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+Jardim+Eulina/@-22.8943835,-47.1055345,15.81z/data=!4m5!3m4!1s0x94c8c7cc3599491b:0x3c37ff8cd93467ee!8m2!3d-22.8918543!4d-47.1010119'>Abrir no MAPS </a></center>").openPopup(); 

            var marker = L.marker([-22.8818447921108, -47.124118004429675]).addTo(map);
            marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
            marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+Parque+Via+Norte/@-22.9303891,-47.1296112,13z/data=!4m12!1m6!3m5!1s0x94c8c7f815bd8429:0xfe63d12e39ecf6ec!2sEcoponto+Parque+Via+Norte!8m2!3d-22.8858013!4d-47.1281791!3m4!1s0x94c8c7f815bd8429:0xfe63d12e39ecf6ec!8m2!3d-22.8858013!4d-47.1281791'>Abrir no MAPS </a></center>").openPopup(); 

            var marker = L.marker([-22.93371974363133, -47.10656966831355]).addTo(map);
            marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
            marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+Vila+Uni%C3%A3o/@-22.9368816,-47.1450218,13z/data=!4m8!1m2!2m1!1sEcopontoR.+L%C3%ADdia+Martins+de+Assis+-+Conj.+Hab.+Vida+Nova,+Campinas+-+SP,+13057-558!3m4!1s0x0:0xdcb13a0adaba78fa!8m2!3d-22.9360847!4d-47.1180654'>Abrir no MAPS </a></center>").openPopup(); 

            var marker = L.marker([-22.958063817285034, -47.18416061379502]).addTo(map);
            marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
            marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+Parque+Itaja%C3%AD/@-22.9602767,-47.1628746,13z/data=!4m8!1m2!2m1!1sEcopontoR.+L%C3%ADdia+Martins+de+Assis+-+Conj.+Hab.+Vida+Nova,+Campinas+-+SP,+13057-558!3m4!1s0x94c8b710ae76adad:0xdd23fcee91009bd6!8m2!3d-22.9617025!4d-47.1895216'>Abrir no MAPS </a></center>").openPopup(); 

            var marker = L.marker([-22.887743260106024, -47.08401592098367]).addTo(map);
            marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
            marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+Jardim+Eulina/@-22.891855,-47.1360293,13z/data=!4m8!1m2!2m1!1sEcopontoR.+L%C3%ADdia+Martins+de+Assis+-+Conj.+Hab.+Vida+Nova,+Campinas+-+SP,+13057-558!3m4!1s0x94c8c7cc3599491b:0x3c37ff8cd93467ee!8m2!3d-22.891855!4d-47.1010104'>Abrir no MAPS </a></center>").openPopup(); 

            var marker = L.marker([-22.93872103565659, -47.02447474967854]).addTo(map);
            marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
            marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+Jardim+S%C3%A3o+Gabriel/@-22.9421989,-47.0655018,13z/data=!4m8!1m2!2m1!1sEcopontoR.+L%C3%ADdia+Martins+de+Assis+-+Conj.+Hab.+Vida+Nova,+Campinas+-+SP,+13057-558!3m4!1s0x94c8ce9220e254f5:0x8755845f89a6f5e0!8m2!3d-22.9421989!4d-47.0304829'>Abrir no MAPS </a></center>").openPopup(); 



        </script>
       </div>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>
</html>
