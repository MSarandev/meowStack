<div class="d-flex justify-content-center h-100" style="width:100%;">
    <div id="mapMain" style="width: 100%; height: 100%"></div>
</div>

<script>
    //https://www.openstreetmap.org/export/embed.html?bbox=12.322674393653871%2C52.20758694889957%2C13.956890702247621%2C52.753730310608944&amp;layer=transportmap

    // initialize the map on the "map" div with a given center and zoom
    let map = L.map('mapMain').setView([52.5097, 13.2133], 10);
    //https://www.openstreetmap.org/#map=10/52.5097/13.2133&layers=T

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?layer=transportmap', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    var marker = L.marker([51.5, -0.09]).addTo(map);
</script>
