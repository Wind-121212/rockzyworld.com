<html>
    <style>
      *{
        margin: 0;
        padding: 0;
      }
body {
  height: 200vh;
       background-image: url(img/12.png);
       background-position: center;
       background-repeat: no-repeat;
       background-size: cover;
}
.container {
  position: relative;
  width: 50%;
}
img {
  opacity: 1;
  display: block;
  width: 50%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}
img:hover{
  opacity: 0.3;
  width: 51%;
}
.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 100%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}
.container:hover .middle {
  opacity: 1;
}
    .topnav {
        background: #303030;
        overflow: hidden;
      }
  .topnav a{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
  .topnav h1{
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
  .topnav a:hover {
  background-color: #ddd;
  color: black;
}
  .topnav a.active {
  background:#f2f2f2;
  color: black;
}
  .topnav a.right {
  float: right;
  cursor: pointer;
}
.text {
  background-color: #4CAF50;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
  border-radius: 20px;
  width: 300%;
  height: auto;
}
</style>
</head>
<body>
<div class="topnav">
   <a class="hover" href="home.php">home</a>
   <a class="hover" href="igneous.php">igneous</a>
   <a class="active" href="sedimentary.php">sedimentary</a>
   <a class="hover" href="metamorphic.php">metamorphic</a>
   <a class="right" href="#User">User</a>
 </div>

 <div class="container">
  <img src="rock/กวดมน.png" alt="Avatar">
  <div class="middle">
    <div class="text">Conglomerate is coarse texture, consisting of many rounded pebbles.
       They are joined together by pebbles that are carried by the current and held together by a cementitious material.</div>
  </div>
</div>
<div class="container">
  <img src="rock/กวดเหลื่อม.png" alt="Avatar">
  <div class="middle">
    <div class="text">Breccia
    square pebble A type of sedimentary rock that looks like rounded pebbles. 
    It consists of pieces of various types of rock, which are angular in shape, larger than sand grains, and held together by a binder such as calcium carbonate.</div> 
  </div>
</div>
<div class="container">
  <img src="rock/ดินดาน.png" alt="Avatar">
  <div class="middle">
    <div class="text">Shale
    Very fine texture, gray color mixed with red due to iron ore. Formed from feldspar in igneous rocks that decay into clay minerals that are deposited together.</div>
  </div>
</div>
<div class="container">
  <img src="rock/ทรายแป้ง.png" alt="Avatar">
  <div class="middle">
    <div class="text">Siltstone
    It is a type of sedimentary rock with the size of sediment smaller than 1/16 millimeter, which is smaller than the size of fine sand. Mudstone, on the other hand, is 
    also a sedimentary rock but is composed of sediment particles smaller than 1/256 mm, which tend to settle in low-energy sedimentary basin conditions. calm waves and
     wind
    </div>
  </div>
</div>
<div class="container">
  <img src="rock/หินโคลน.png" alt="Avatar">
  <div class="middle">
    <div class="text">Mudstone
    It is a sedimentary rock (Sediment Rock) that has a fine texture, consisting of fine sand and clay mixed together. which has the particles bonded together to hold
     together tightly The particle size is less than 1/256 millimeter or less than 0.063 millimeters (mm) or 0.0025 inch in diameter.
    </div>
  </div>
</div>
<div class="container">
  <img src="rock/หินปูที่ไม่ได้อยู่ในปาก.png" alt="Avatar">
  <div class="middle">
    <div class="text">Limestone
    Fine texture, many colors Reacts with acids Caused by the deposition of carbonate sediments in the sea.
    </div>
  </div>
</div>
  </div>
  
</body>
  </style>
</html>