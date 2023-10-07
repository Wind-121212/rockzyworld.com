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
   <a class="hover" href="sedimentary.php">sedimentary</a>
   <a class="active" href="metamorphic.php">metamorphic</a>
 </div>

 <div class="container">
  <img src="rock/หินไนซ์.png" alt="Avatar">
  <div class="middle">
    <div class="text">Gneiss is Coarse-grained metamorphic rock with parallel lines and irregular curves. Alternating dark and 
      light colors Metamorphosed from granite By transforming the Phaisan area The temperature is so high that the minerals melt. and recrystallize (Recrystallize).</div>
  </div>
</div>
<div class="container">
  <img src="rock/หินควอตไซต์.png" alt="Avatar">
  <div class="middle">
    <div class="text">Quartzite is Fine-grained metamorphic rock The crystalline texture is similar to granulated sugar 
      and is gray or light brown. By transforming the vast area with very high temperatures. until the quartz melts and recrystallizes Therefore it is very strong.</div>
  </div>
</div>
<div class="container">
  <img src="rock/หินชนวน.png" alt="Avatar">
  <div class="middle">
    <div class="text">Slate  is a very fine-grained metamorphic rock. It is caused by the transformation of shale by heat and
       compression to make it tough. And cracks form in the sheet. Shale lies horizontally due to deposition. But the slate rests in an arc due to pressure.</div>
  </div>
</div>
<div class="container">
  <img src="rock/หินชีตส์.png" alt="Avatar">
  <div class="middle">
    <div class="text">Schist is Metamorphic rocks have a sheet texture. It is caused by the transformation of the wide area of ​​slate. 
      Pressure and heat cause mineral crystals to form thin, parallel sheets.</div>
  </div>
</div>
<div class="container">
  <img src="rock/หินอ่อน.png" alt="Avatar">
  <div class="middle">
    <div class="text">Marble is a fine-grained to coarse-grained metamorphic rock.
       Transformed from limestone By exposure to high temperatures until the calcite mineral melts and recrystallizes.
       Reacts with acid causing foam. Marble is used as a building decoration material.</div>
  </div>
</div>
  </div>
  
</body>
  </style>
</html>