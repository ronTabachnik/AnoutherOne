<?
include('session.php');
include('db.php');

$stmt = $db->prepare("select * from map_markers");
$stmt->execute();
$markers = $stmt->fetchAll();

?><!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="This is web app for recycling electronic devices. here you can find ways to recycle and even companies who is interested in your garbage">
  <meta name="author" content="Ron Tabachnik and Farid Kemyakov">

  <title>Map - ER</title>
  <link rel="icon" type="image/x-icon" href="styles/images/ProductLogo.ico">
  <link rel="icon" href="styles/images/ProductLogo.png">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    #map {
  height: 400px;
  /* The height is 400 pixels */
  width: 100%;
  /* The width is the width of the web page */
}
  </style>

  <link href="styles/base.css" rel="stylesheet">
  <link href="styles/nav.css" rel="stylesheet">
  <!-- <link href="styles/sign.css" rel="stylesheet"> -->
  <link href="styles/product.css" rel="stylesheet">

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
  <script>
var activeInfoWindow;

function addMarker(map, lat, lng, title, infoContent, icon) {
  var infowindow = new google.maps.InfoWindow({
    content: infoContent,
  });

  var marker = new google.maps.Marker({
    position: { lat: lat, lng: lng },
    map,
    title: title,
    icon: icon,
  });

  marker.addListener("click", (e) => {
    if (activeInfoWindow) activeInfoWindow.close();
    activeInfoWindow = infowindow;
    infowindow.open({
      anchor: marker,
      map,
      shouldFocus: false,
    });
  });
}

function initMap() {
  const mapElem = document.getElementById("map");

  const map = new google.maps.Map(mapElem, {
    zoom: 10,
    center: { lat: 54.8966524, lng: 23.9211619 }, // Kaunas city
  });

  map.addListener("click", () => {
    if (activeInfoWindow) activeInfoWindow.close();
  });

<? foreach ($markers as $marker) { ?>
  addMarker(map, <?= $marker['latitude'] ?>, <?= $marker['longitude'] ?>, <?= json_encode($marker['title']) ?>, <?= json_encode($marker['info']) ?>, <?= json_encode($marker['icon']) ?>)
<? } ?>

}
window.initMap = initMap;
</script>

</head>

<body>
<div id="map"></div>
<script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGmlcD2N92i0BWslCIsic7E52arJ3ZuD8&callback=initMap&v=weekly"
      defer
    ></script>
</body>

<? include('nav_header.php'); ?>

  <div class="b-example-divider"></div>
  <div class="container">
    <footer class="py-5">
      <div class="row">
        <div class="col-2">
          <h5>Section</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="index.php" class="nav-link p-0 text-muted">Home</a></li>
            <li class="nav-item mb-2"><a href="about.php" class="nav-link p-0 text-muted">About us</a></li>
            <li class="nav-item mb-2"><a href="recycling.php" class="nav-link p-0 text-muted">Recycling</a></li>
            <li class="nav-item mb-2"><a href="market.php" class="nav-link p-0 text-muted">Market</a></li>
            <li class="nav-item mb-2"><a href="map.php" class="nav-link p-0 text-muted">Map</a></li>
            <li class="nav-item mb-2"><a href="contact.php" class="nav-link p-0 text-muted">Contact us</a></li>
          </ul>
        </div>
      </div>

      <div class="d-flex justify-content-between py-4 my-4 border-top">
        <p>&copy; 2021 Company, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#twitter" />
              </svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#instagram" />
              </svg></a></li>
          <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                <use xlink:href="#facebook" />
              </svg></a></li>
        </ul>
      </div>
    </footer>


    <!-- <script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->


</body>

</html>
