<?php
    include('config.inc');
    //$pw = "Passw0rd!";
?>
<!doctype html>
<html lang="et">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uuemõisa Miil 2023</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        #map {
            height: 400px;
        }
    </style>
</head>
  <?php include('menuu.php'); ?>
<body>

    <div class="container-md">
        <!-- Kontakt -->
        <section id="contact">
            <div class="row">
                <div class="col-md-6">
                    <h3>Ürituse korraldaja</h3>
                    <p>Nimi: Elis Augasmägi</p>
                    <p>Telefon: +3725555555</p>
                    <p>Email: elis.augasmagi@oige.ee</p>
                </div>
                <div class="col-md-6">
                    <h3>Asukoht</h3>
                    <div id="map"></div>
                </div>
            </div>
        </section>
    
    
</div>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
    <script>
        function initMap() {
            // Uuemõisa location coordinates
            var location = {
                lat: 58.9795,
                lng: 23.5078
            };

            // Create a map centered at Uuemõisa
            var map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 14
            });

            // Add a marker at Uuemõisa
            var marker = new google.maps.Marker({
                position: location,
                map: map,
                title: 'Uuemõisa'
            });
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>
