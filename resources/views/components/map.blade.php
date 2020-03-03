<div class="d-flex justify-content-center h-100" style="width:100%;">
    <div id="mapMain" style="width: 100%; height: 100%"></div>
</div>

<script>
    const CENTER_LAT = '52.5097';
    const CENTER_LON = '13.2133';
    const CENTER_ZOOM = '10';
    // -----------------------


    // initialize the map on the "map" div with a given center and zoom
    const MAP = L.map('mapMain').setView([CENTER_LAT, CENTER_LON], CENTER_ZOOM);
    //https://www.openstreetmap.org/#map=10/52.5097/13.2133&layers=T

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(MAP);

    // Marker data
    <?php
    foreach ($data as $stop) {
        echo "L.marker([" . $stop['location']['latitude'] . ", " . $stop['location']['longitude'] .
            "]).bindPopup('" . $stop['name'] . "').openPopup().addTo(MAP);";
    }
    ?>

    function recenterMap() {
        MAP.setView([CENTER_LAT, CENTER_LON], CENTER_ZOOM);
    }
</script>
