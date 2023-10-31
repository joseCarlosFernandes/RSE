<?php
session_start(); // Inicia a sessão
$logado = 0; // 0 - não/1- sim
// Verifica se o usuário está logado
if (isset($_SESSION['log']) && $_SESSION['log'] == 1) {
    $linkPerfil = "perfil.php";
    $linkTexto = "Perfil";
    $logado =1;
} else {
    header("Location: pontos.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pontos</title>
  <link rel="stylesheet" href="../css/styleNav.css">
  <script defer src="../js/nav.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQAERKr12V4zIeA_MGmw-wAD_wH0wjuhE&libraries=places,geometry"></script>
  <style>
    /* Estilos CSS aqui */
    body{
      font-family: 'Rubik';
    }
    .container{
      display: flex;
      align-items: flex-start;
      margin-left: 100px;
      font-family: 'Lato';
    }

    .left-column {
      flex: 1;
      padding: 10px;
      overflow-y: auto;
      max-height: 500px; 
    }

    .right-column {
      display: flex;
      padding: 10px;
    }

    .location-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px; 
      border: 1px solid #ccc;
      margin-bottom: 10px;
    }

    .location-item button {
      width: 100px;
      height: 32px;
    }

    #map {
      height: 500px;
      width: 730px; 
      display: inline-block;
    }

    #address-form {
      font-size: 25px;
      margin-left: 10px;
      margin-left: 170px;
    }

    #address,
    #raio{
      width: 300px; 
      height: 25px;
      padding: 5px;
    }

    #material{
      width: 150px;
      height: 40px;
      font-size: 20px;
    }

    #address-form button {
      width: 100px; 
      padding: 10px; 
      background-color: #00FF7F;
      transition: backgroud-color 0.3s ease-in-out;
      color: #fff;
      border: none;
      cursor: pointer;
    }

    #address-form button:hover{
      background-color: #009933;
    }

    #info-local{
      display: inline-block;
      margin-left: 115px;
    }

    .location-item-details{
      border: 2px solid #00ff00; /* Borda verde */
      background-color: #ffffff; /* Fundo branco */
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
      border-radius: 5px; /* Cantos arredondados */
      width: 1240px;
      text-align: center;
      font-family: 'Lato';
    }
  </style>
</head>
<body>
  <header class="header">
    <nav class="nav">
      <a href="../index.php">
        <img src="../imagens/logo.png" style="width: 390px; height: 130px;">
      </a>
      <button class="hamburger"></button>
      <ul class="nav-list">
        <li class="dropdown">
          <a href="#" class="dropbtn">Materiais</a>
          <div class="dropdown-content">
            <a href="../Materiais/metal.php">Metal</a>
            <a href="../Materiais/papel.php">Papel</a>
            <a href="../Materiais/plastico.php">Plástico</a>
            <a href="../Materiais/borracha.php">Borracha</a>
            <a href="../Materiais/vidro.php">Vidro</a>
          </div>
        </li>        
        <li><a href="pontos.php">Pontos de Coleta</a></li>
        <li><a href="reciclar.php">Por que Reciclar?</a></li>
        <li><a href="sobre.php">Sobre Nós</a></li>
        <li><a href="<?php echo $linkPerfil; ?>"><?php echo $linkTexto; ?></a></li>
      </ul>
    </nav>
  </header>
  <main class="hero"></main>

  <div class="infos" style="margin-top: 150px;">
    <form id="address-form">
      <input type="text" id="address" placeholder="Digite o endereço aqui" required>
      <input type="text" name="raio" id="raio" placeholder="Digite o Raio da Busca em KM (Padrão 5KM)" maxlength="3">
      Material para Reciclar:
      <select id="material">
        <option value="Pontos de coleta de metal">Metal</option>
        <option value="Pontos de coleta de plástico">Plástico</option>
        <option value="Pontos de coleta de vidro">Vidro</option>
        <option value="Pontos de coleta de borracha">Borracha</option>
        <option value="Pontos de coleta de papel">Papel</option>
        <option value="Ponto de coleta de Recicláveis" selected>Todos</option>
      </select>
      <button type="submit">Buscar</button>
    </form>

    <div class="container">
        <div class="left-column">
          <div id="results"></div>
        </div>
        <div class="right-column">
          <div id="map"></div>
        </div>
    </div>

    <div id="info-local"></div>

</div>

  <script>
    let map; // Variável global para o mapa
    let markers = []; // Array para armazenar marcadores
    var raio;
    var material;

    document.getElementById('address-form').addEventListener('submit', function(event) {
      event.preventDefault();
      const address = document.getElementById('address').value;
      raioI = document.getElementById('raio').value;
      material = document.getElementById('material').value;
      if (raioI == "") {
        raio = 5000;
      } else {
        raio = raioI * 1000;
      }
      geocodeAddress(address);
    });

    function geocodeAddress(address) {
      const geocoder = new google.maps.Geocoder();
      geocoder.geocode({ address: address }, function(results, status) {
        if (status === 'OK') {
          const latitude = results[0].geometry.location.lat();
          const longitude = results[0].geometry.location.lng();
          showMap(latitude, longitude);
        } else {
          const resultsDiv = document.getElementById('results');
          resultsDiv.innerHTML = 'Não foi possível encontrar o endereço. Tente novamente.';
        }
      });
    }

    function showMap(latitude, longitude) {
      const mapOptions = {
        center: { lat: latitude, lng: longitude },
        zoom: 13,
      };
      map = new google.maps.Map(document.getElementById('map'), mapOptions);

      clearMarkers();

      const request = {
        location: { lat: latitude, lng: longitude },
        radius: raio,
        keyword: material,
      };

      const service = new google.maps.places.PlacesService(map);

      service.nearbySearch(request, (results, status) => {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          const resultsDiv = document.getElementById('results');
          resultsDiv.innerHTML = '<h2>Locais próximos:</h2>';
          for (let i = 0; i < results.length; i++) {
            createMarker(results[i], i);
            resultsDiv.innerHTML += `<div class="location-item"><div><strong>${results[i].name}</strong><br>${results[i].vicinity}</div><button onclick="showMarker(${i})">Mostrar no Mapa</button></div>`;
          }
        } else {
          const resultsDiv = document.getElementById('results');
          resultsDiv.innerHTML = 'Não foi possível encontrar locais próximos. Tente novamente.';
        }
      });
    }

    let currentInfoWindow = null; // Variável para rastrear a janela de informações atual

    function createMarker(place, index) {
      const marker = new google.maps.Marker({
        map: map,
        position: place.geometry.location,
        title: place.name,
      });

      markers.push(marker);

      marker.addListener('click', () => {
        const serviceDetails = new google.maps.places.PlacesService(map);
        const placeId = place.place_id;

        serviceDetails.getDetails({ placeId: placeId }, (placeDetails, status) => {
          if (status === google.maps.places.PlacesServiceStatus.OK) {
            const openingHours = placeDetails.opening_hours ? placeDetails.opening_hours.weekday_text.join('<br>') : 'Horário não disponível';
            const rating = placeDetails.rating ? `Avaliação: ${placeDetails.rating}` : 'Avaliação não disponível';

            // Atualiza a caixa de informações ao lado do mapa
            const infoBox = document.getElementById('info-local');
            infoBox.innerHTML = `
              <div class="location-item-details">
                <strong>${placeDetails.name}</strong><br>
                <b>Endereço:</b> ${placeDetails.vicinity}<br>
                <b>Horário de Funcionamento:</b><br>${openingHours}<br>
                ${rating}
              </div><br>`;
          }
        });
      });
    }


    function showMarker(index) {
      clearMarkers();
      markers[index].setMap(map);
    }

    function clearMarkers() {
      for (const marker of markers) {
        marker.setMap(null);
      }
    }
  </script>
</body>
</html>
