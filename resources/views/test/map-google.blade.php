<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="gmaps.js"></script>
    <style type="text/css">
        #map {
            width: 400px;
            height: 400px;
        }
    </style>
</head>
<body>
<div id="map"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.9/gmaps.min.js" integrity="sha512-7L86NChc+1jvCKJVMLGnoQLA9QQXVcBvWyr37YaVau42A6zWacZ/ew7EX2eag+ruzEVKeqdLS0pSYgj1yagegA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    var map = new GMaps({
        el: '#map',
        lat: -12.043333,
        lng: -77.028333
    });
</script>
</body>
</html>
