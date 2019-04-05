<?php 
var_dump($masjid);
 ?>
<link 
        rel="stylesheet" 
        href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css"
    />
<div id="map" style="width: 100%; height: 500px"></div>
<script
    src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js">
</script>

<script>
    var map = L.map('map').setView([-7.817110, 110.370724], 11);
    mapLink = 
        '<a href="http://openstreetmap.org">OpenStreetMap</a>';
    L.tileLayer(
        'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; ' + mapLink + ' Contributors',
        maxZoom: 18,
        }).addTo(map);
    <?php
    foreach ($masjid as $value) {
    ?>
        L.marker([<?php echo $value['b1_longitude']; ?>, <?php echo $value['b1_latitude']; ?>]).addTo(map)
            .bindPopup("<?php echo $value['b1_nama']; ?>")
    <?php 
    } ?>    
</script>