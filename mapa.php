<!DOCTYPE html>
<head>
  <title>Pontos de descarte</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    
    <style type="text/css">
      .legenda {
        padding: 6px 8px;
        font: 14px/16px Arial, Helvetica, sans-serif;
        background: white;
        background: rgba(255,255,255,0.8);
        box-shadow: 0 0 15px rgba(0,0,0,0.2);
        border-radius: 5px;
      }
      .legenda h6, h7{
          margin-bottom: 0.4rem;
          color: #777;
      }

      .legenda img{
          width: 2.1rem;
          height: 2.5rem;
      }
    </style>
    <?php include 'include/i_topo.php' ?>
</head>
<body>      
    <div id="mapid" style="position: absolute; float: left; top: 9%; height: 91%; width: 100%;  z-index: 1;">
      <script>
        var map =  L.map('mapid').setView([-22.906288, -47.082326], 12);
    
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
          maxZoom: 20,
          id: 'mapbox/streets-v11',
          tileSize: 512,
          zoomOffset: -1,
          accessToken: 'your.mapbox.access.token',
          attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
          '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
          'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>'
        }).addTo(map);
    
          var marker = L.marker([-22.817304, -47.100553]).addTo(map);
          marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
          marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+%2F+Ponto+Verde/@-22.8173607,-47.1012629,18z/data=!4m5!3m4!1s0x94c8c0dbbc21c7af:0xebff89317117cd25!8m2!3d-22.8173607!4d-47.1005512'>Abrir no MAPS </a></center>").openPopup();  

          var marker = L.marker([-22.904054, -47.070088]).addTo(map);
          marker.valueOf()._icon.style.filter = 'grayscale(100%)';
          marker.bindPopup("Resíduos: Eletrônicos <br><center><a href = 'https://www.google.com.br/maps/place/Av.+Andrade+Neves,+555+-+Centro,+Campinas+-+SP,+13013-160/@-22.9040806,-47.0722762,17z/data=!3m1!4b1!4m13!1m7!3m6!1s0x94c8c8badb30cea1:0x1f0ed64695a6ec9c!2sAv.+Andrade+Neves,+555+-+Centro,+Campinas+-+SP,+13013-160!3b1!8m2!3d-22.9040806!4d-47.0700875!3m4!1s0x94c8c8badb30cea1:0x1f0ed64695a6ec9c!8m2!3d-22.9040806!4d-47.0700875'>Abrir no MAPS </a></center").openPopup();

          var marker = L.marker([-22.934027, -47.105675]).addTo(map);
          marker.valueOf()._icon.style.filter = 'hue-rotate(290deg)';
          marker.bindPopup("Resíduos: Recicláveis<br><center><a href = 'https://www.google.com.br/maps/place/HT+Papéis+Barão+-+Coleta+e+reciclagem+de+resíduos/@-22.9340153,-47.1057155,19z/data=!4m5!3m4!1s0x94c8c85a9f3ab0ad:0xd2219f213c826c94!8m2!3d-22.9340263!4d-47.1057172'>Abrir no MAPS</a></center>").openPopup(); 
      
          var marker = L.marker([-22.89183009027738, -47.1008494720962]).addTo(map);
          marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
          marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+Jardim+Eulina/@-22.8943835,-47.1055345,15.81z/data=!4m5!3m4!1s0x94c8c7cc3599491b:0x3c37ff8cd93467ee!8m2!3d-22.8918543!4d-47.1010119'>Abrir no MAPS </a></center>").openPopup(); 

          var marker = L.marker([-22.885790485320808, -47.128180441919206]).addTo(map);
          marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
          marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+Parque+Via+Norte/@-22.9303891,-47.1296112,13z/data=!4m12!1m6!3m5!1s0x94c8c7f815bd8429:0xfe63d12e39ecf6ec!2sEcoponto+Parque+Via+Norte!8m2!3d-22.8858013!4d-47.1281791!3m4!1s0x94c8c7f815bd8429:0xfe63d12e39ecf6ec!8m2!3d-22.8858013!4d-47.1281791'>Abrir no MAPS </a></center>").openPopup(); 

          var marker = L.marker([-22.93603590058311, -47.11807026833518]).addTo(map);
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

          var marker = L.marker([-23.03557118489779, -47.11003417792737]).addTo(map);
          marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
          marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/R.+Orlando+Bortoletti,+217+-+Jardim+Campo+Belo,+Campinas+-+SP,+13053-216/@-23.0357835,-47.110002,17z/data=!4m5!3m4!1s0x94c8caeed01d23e3:0xc2bdb6231ba01393!8m2!3d-23.035754!4d-47.1100179'>Abrir no MAPS </a></center>").openPopup(); 

          var marker = L.marker([-22.8961022130058, -47.15634560952612]).addTo(map);
          marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
          marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://goo.gl/maps/CoTQEHCWaoUasXT68'> Abrir no MAPS </a></center>").openPopup();

          var marker = L.marker([-22.977300465770586, -47.17785899063108]).addTo(map);
          marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
          marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+Vida+Nova/@-22.9773088,-47.1779978,21z/data=!4m8!1m2!2m1!1secoponto!3m4!1s0x0:0xb95ebdb75bcf5480!8m2!3d-22.9773088!4d-47.177861'> Abrir no MAPS </a></center>").openPopup();

          var marker = L.marker([-22.948582725107055, -47.057753918423884]).addTo(map);
          marker.valueOf()._icon.style.filter = 'hue-rotate(150deg)';
          marker.bindPopup("Resíduos: Eletrônicos e Recicláveis <br><center><a href= 'https://www.google.com.br/maps/place/Ecoponto+Vila+Campos+Sales/@-22.9541044,-47.0730708,13.99z/data=!4m8!1m2!2m1!1secoponto!3m4!1s0x94c8ceb530969f59:0xcd0d31f01991f11a!8m2!3d-22.9485957!4d-47.0577498'> Abrir no MAPS </a></center>").openPopup();

          var marker = L.marker([-22.92672464220023, -47.042993810763136]).addTo(map);
          marker.valueOf()._icon.style.filter = 'grayscale(100%)';
          marker.bindPopup("Resíduos: Eletrônicos <br><center><a href = 'https://g.page/reversisreciclagem?share'>Abrir no MAPS </a></center").openPopup();

          var marker = L.marker([-22.900240908888275, -47.06194180942628]).addTo(map);
          marker.valueOf()._icon.style.filter = 'grayscale(100%)';
          marker.bindPopup("Resíduos: Eletrônicos <br><center><a href = 'https://www.google.com/maps/place/Kalunga/@-22.9086334,-47.071715,15.8z/data=!4m9!1m2!2m1!1skalunga!3m5!1s0x94c8c8bac8a826a3:0xcf18b55ac45979f7!8m2!3d-22.9040004!4d-47.0698282!15sCgdrYWx1bmdhIgOIAQFaCSIHa2FsdW5nYZIBEHN0YXRpb25lcnlfc3RvcmU'>Abrir no MAPS </a></center").openPopup();

          var legenda = L.control();
          legenda.onAdd = function (map) {
            this._div = L.DomUtil.create('div', 'legenda');
            this.update();
            return this._div;
          };
        
          legenda.update = function () {
              this._div.innerHTML = '<h6>Resíduos permitidos: </h6>'+
                                    '<b><img src = "img/marcador_vermelho.png"><h7> Eletrônicos e recicláveis<br>' +
                                    '<img src = "img/marcador_verde.png"><h7> Recicláveis</h7><br>' + 
                                    ' <img src = "img/marcador_cinza.png"><h7> Eletrônicos<h7><br></b>'
          };
          legenda.addTo(map);
          
          if (navigator.geolocation)
            {
            navigator.geolocation.getCurrentPosition(showPosition);
            }
          else{x.innerHTML="Geolocalização não é suportada nesse browser.";}
        
          function showPosition(position)
          {
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;
            var marker = L.marker([latitude, longitude]).addTo(map);
            marker.bindPopup("<center>LOCALIZAÇÃO ATUAL (aproximada)</center>Com intuito de te ajudar a achar o ponto mais próximo").openPopup();
          }
          
      </script>
    </div>
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="js/clean-blog.min.js"></script>
</body>
</html>
