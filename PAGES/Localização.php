<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Localização</title>
    <script src='http://maps.google.com/maps/api/js?key=AIzaSyDv7YRz1WWPhkr6aim8wEm4WDPBdk81z54'></script>
    <link rel="stylesheet" href="../CSS/embelezamento.css">
    <?php
    include("../FUNCTION/functions.php");
    ?>

</head>

<body>
    <header>
        <?=cabecalhoalternativo();?>
    </header>

    <!-- MAPA -->

    <div style='overflow:hidden; height:500px;width:100%;color: #0095eb'>
        <div id='gmap_canvas' style='height:500px;width:100%;'></div>
        <style>
        #gmap_canvas img {
            max-width: none !important;
            background: none !important
        }

        .gm-ui-hover-effect {
            display: none !important;
        }
        </style>
    </div>

    <script type='text/javascript'>
    function init_map() {
        var myOptions = {
            zoom: 15,
            center: new google.maps.LatLng(-23.620552, -46.499051),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        map = new google.maps.Map(document.getElementById('gmap_canvas'),
            myOptions);
        marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(-23.620552, -46.499051)
        });
        infowindow = new google.maps.InfoWindow({
            content: '<img src="../IMAGES/Palmirinha.jpg" style="width:80%; transform: translate( 15%, 0%);">'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });
        infowindow.open(map, marker);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
    </script>

    <!-- MAPA -->

    <footer>
        <?=rodapealternativo();?>
    </footer>

</body>

</html>