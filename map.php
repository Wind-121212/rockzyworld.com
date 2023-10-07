<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="icon" type="image/x-icon" href="img/logo.png" width = "100%">
    <meta charset="utf-8" />
    <title>RockZy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans"
      rel="stylesheet"
    />
    <script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>
    <link
      href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css"
      rel="stylesheet"
    />
    <style>
      body {
        margin: 0;
        padding: 0;
      }
      #map {
        position: absolute;
        top: 6%;
        bottom: 0;
        width: 100%;
      }
      #menu {
            position: absolute;
            background: #efefef;
            padding: 10px;
            font-family: 'Open Sans', sans-serif;
            }
      .marker {
        background-image: url('icons8-rock-48.png');
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
      }
      .mapboxgl-popup {
        max-width: 200px;
      }
      .mapboxgl-popup-content {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
      }
      @import url('htpp://fonts.googleapis.com/css?family=poppins:200,300,400500,600,700,800,900&display=swap');
*{
  margin: 0;
  padding:0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  background-image: url(wallpaperflare.com_wallpaper.jpg);
  min-height: 200vh;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
header{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: 0.06s;
  z-index: 100000;
}
header .logo
{
  position: relative;
  font-weight: 700;
  color: black;
  text-decoration: none;
  font-size: 45px;   
  letter-spacing: 2px;
  transition: 0.6s;
}
header ul
{
  position: relative;
  display: flex;
  justify-content: space-between;
  align-items: center;
}
header ul li
{
  position: relative;
  list-style: none;
}
header ul li a
{
  position: relative;
  margin: 0 15px;
  text-decoration: none;
  color: black;
  letter-spacing: 2px;
  font-weight: 450px;
  transition: 0.6s;
}
.banner
{
  position: relative;
  width: 100%;
  height: 100vh;
 background-color: #fff;
  background-size: cover;
}
    </style>
  </head>
  <body>
  <header>
  <a href="home.php" class="logo">RockZy</a>
    <ul>
      <li><a href="map.php">map</a></li>
    </ul> 
</header>
<section class="banner"></section>
    <div id="map"></div>
    <div id="menu">
  <input id="satellite-streets-v12" type="radio" name="rtoggle" value="satellite" checked="checked">
  <!-- See a list of Mapbox-hosted public styles at -->
  <!-- https://docs.mapbox.com/api/maps/styles/#mapbox-styles -->
  <label for="satellite-streets-v12">satellite streets</label>
  <input id="light-v11" type="radio" name="rtoggle" value="light">
  <label for="light-v11">light</label>
  <input id="dark-v11" type="radio" name="rtoggle" value="dark">
  <label for="dark-v11">dark</label>
  <input id="streets-v12" type="radio" name="rtoggle" value="streets">
  <label for="streets-v12">streets</label>
  <input id="outdoors-v12" type="radio" name="rtoggle" value="outdoors">
  <label for="outdoors-v12">outdoors</label>
  </div>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
    <script>
      mapboxgl.accessToken = 'pk.eyJ1Ijoid2luZGZvdW5kIiwiYSI6ImNsbmUwN3RlYTBhbncycXRjaTJsZXVzdzQifQ.56gBwb3Pyff-hm1ROyQziQ';

      const geojson = {"type":"FeatureCollection","features":[{"type":"Feature","properties":{"Rock_name":"Rock#3","rock_type":"tpye#1","pic":"tt.jpg"},"geometry":{"coordinates":[99.3221320113912,9.10167888263625],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#6","rock_type":"tpye#2","pic":"tt.jpg"},"geometry":{"coordinates":[99.36768702990537,9.130461469005184],"type":"Point"},"id":1},{"type":"Feature","properties":{"Rock_name":"Rock#8","rock_type":"tpye#3","pic":"d9bbda23b6284624b7d672786c4769ae.jpg"},"geometry":{"coordinates":[99.36192337792698,9.108573781888182],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#9","rock_type":"tpye#4","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[99.30340014468743,9.099052218888502],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#1","rock_type":"tpye#5","pic":"tt.jpg"},"geometry":{"coordinates":[99.34529745876233,9.115468548115246],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#2","rock_type":"tpye#6","pic":"tt.jpg"},"geometry":{"coordinates":[99.28688506276114,9.121049928039639],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#4","rock_type":"tpye#7","pic":"tt.jpg"},"geometry":{"coordinates":[99.32412712169207,9.131008643978689],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#5","rock_type":"tpye#8","pic":"d9bbda23b6284624b7d672786c4769ae.jpg"},"geometry":{"coordinates":[99.30207006893255,9.114264709633929],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#7","rock_type":"tpye#9","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[99.34418906415078,9.130023728421065],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#10","rock_type":"tpye#10","pic":"tt.jpg"},"geometry":{"coordinates":[99.35299474394975,9.121721299779068],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#12","rock_type":"tpye#12","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[96.59754695936783,16.640193509885535],"type":"Point"},"id":11},{"type":"Feature","properties":{"Rock_name":"Rock#13","rock_type":"tpye#13","pic":"tt.jpg"},"geometry":{"coordinates":[98.23458513856866,14.082163506389207],"type":"Point"},"id":11},{"type":"Feature","properties":{"Rock_name":"Rock#14","rock_type":"tpye#14","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[99.42044697868977,12.881504864993445],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#15","rock_type":"tpye#15","pic":"tt.jpg"},"geometry":{"coordinates":[99.91992144810973,12.424833572368527],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#16","rock_type":"tpye#16","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[99.61235707611013,12.108808635714809],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#17","rock_type":"tpye#17","pic":"tt.jpg"},"geometry":{"coordinates":[99.64465399123816,13.989094319888679],"type":"Point"},"id":15},{"type":"Feature","properties":{"Rock_name":"Rock#18","rock_type":"tpye#18","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[99.22345372417249,12.411947520790292],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#19","rock_type":"tpye#19","pic":"d9bbda23b6284624b7d672786c4769ae.jpg"},"geometry":{"coordinates":[99.64807788004089,12.979867789093234],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#20","rock_type":"tpye#20","pic":"tt.jpg"},"geometry":{"coordinates":[98.76312207682724,13.36174729181488],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#21","rock_type":"tpye#21","pic":"tt.jpg"},"geometry":{"coordinates":[99.23356662278826,13.38272978285238],"type":"Point"},"id":19},{"type":"Feature","properties":{"Rock_name":"Rock#22","rock_type":"tpye#22","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[100.11357800666366,14.393710144238895],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#23","rock_type":"tpye#23","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[99.91264362503728,14.74501576308684],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#24","rock_type":"tpye#22","pic":"tt.jpg"},"geometry":{"coordinates":[99.05381118743549,14.635292979970913],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#25","pic":"d9bbda23b6284624b7d672786c4769ae","rock_type":"tpye#25"},"geometry":{"coordinates":[100.80388483386895,14.217848933713384],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#26","rock_type":"tpye#22","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[100.84925711359057,14.895402766816673],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#27","rock_type":"tpye#27","pic":"d9bbda23b6284624b7d672786c4769ae"},"geometry":{"coordinates":[99.77976766299349,14.992472004565215],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#28","rock_type":"tpye#22","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[99.46864345918203,14.569432934899822],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#29","rock_type":"tpye#29","pic":"tt.jpg"},"geometry":{"coordinates":[98.87880382279292,14.926720218231793],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#30","rock_type":"tpye#22","pic":"d9bbda23b6284624b7d672786c4769ae"},"geometry":{"coordinates":[98.47693505953833,14.688593783084727],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#31","rock_type":"tpye#31","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[98.88528558508744,14.321498078852088],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#32","rock_type":"tpye#22","pic":"tt.jpg"},"geometry":{"coordinates":[100.26265836237297,13.922346406810618],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#33","rock_type":"tpye#22","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[100.72610379096409,13.793338099079534],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#34","rock_type":"tpye#32","pic":"tt.jpg"},"geometry":{"coordinates":[99.96449766705348,13.522504241776971],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#35","rock_type":"tpye#34","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[99.04106283677652,9.017289997792048],"type":"Point"}},{"type":"Feature","properties":{"Rock_name":"Rock#21","rock_type":"tpye#35","pic":"istockphoto-1029301644-612x612.jpg"},"geometry":{"coordinates":[99.09072515234027,9.04305923703653],"type":"Point"}}]};

      const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/windfound/clne1nwh503w301r77oi18se1',
        center: [-96, 37.8],
        zoom: 3
      });

      // add markers to map
      for (const feature of geojson.features) {
        // create a HTML element for each feature
        const el = document.createElement('div');
        el.className = 'marker';

        // make a marker for each feature and add it to the map
        new mapboxgl.Marker(el)
          .setLngLat(feature.geometry.coordinates)
          .setPopup(
            new mapboxgl.Popup({ offset: 25 }) // add popups
              .setHTML(
                `<h3>${feature.properties.rock_type}</h3><p>${feature.properties.Rock_name}</p><img src="${feature.properties.pic}" width = "50px">`
              )
          )
          .addTo(map);
      }
      map.addControl(
new MapboxGeocoder({
accessToken: mapboxgl.accessToken,
mapboxgl: mapboxgl
})
);
const layerList = document.getElementById('menu');
const inputs = layerList.getElementsByTagName('input');
 
for (const input of inputs) {
input.onclick = (layer) => {
const layerId = layer.target.id;
map.setStyle('mapbox://styles/mapbox/' + layerId);
};
}
map.addControl(new mapboxgl.NavigationControl());
    </script>
  </body>
</html>
