<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RockZy</title>
  <link rel="icon" type="image/x-icon" href="img/logo.png" width = "100%">
  <script src="
https://cdn.jsdelivr.net/npm/swiper@10.3.1/swiper-bundle.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/swiper@10.3.1/swiper-bundle.css
" rel="stylesheet">
</head>
<body>
  <header>
  <a href="#" class="logo"><h1>RockZy</h1></a>
    <ul>
     <li><a href="Tutorial.php">Tutorial</a></li>
      <li><a href="RockZy.php">create your RockZy</a></li>
      <li><a href="map.php">map</a></li>
    </ul> 
</header>
<section class="banner"></section>
<div class="con">
    <div class="right">
   <div class="swiper">
     <div class="swiper-wrapper">
       <div class="swiper-slide"><img src="img/1_0.png"></div>
       <div class="swiper-slide"><img src="img/igneous rock (2)_0.png"></div>
       <div class="swiper-slide"><img src="img/igneous rock (3)_0.png"></div>
       <div class="swiper-slide"><img src="img/igneous rock (4)_0.png"></div>
       <div class="swiper-slide"><img src="img/igneous rock (5)_0.png"></div>
       <div class="swiper-slide"><img src="img/igneous rock main_0.png"></div>
       <div class="swiper-slide"><img src="img/igneous rock_0.png"></div>
       <div class="swiper-slide"><img src="img/Metamophic rock main_0.png"></div>
       <div class="swiper-slide"><img src="img/Metamorphic rock (2)_0.png"></div>
       <div class="swiper-slide"><img src="img/Metamorphic rock (3)_0.png"></div>
       <div class="swiper-slide"><img src="img/Metamorphic rock (4)_0.png"></div>
       <div class="swiper-slide"><img src="img/Metamorphic rock (5)_0.png"></div>
       <div class="swiper-slide"><img src="img/Sedimentary rock main_0.png"></div>
       <div class="swiper-slide"><img src="img/Sedimentary rock(1).png"></div>
       <div class="swiper-slide"><img src="img/Sedimentary rock(2).png"></div>
       <div class="swiper-slide"><img src="img/Sedimentary rock (3)_0.png"></div>
       <div class="swiper-slide"><img src="img/Sedimentary rock (4)_0.png"></div>
       <div class="swiper-slide"><img src="img/Sedimentary rock (5)_0.png"></div>
     </div>

     <div class="swiper-pagination"></div>

     <div class="swiper-button-prev"></div>
     <div class="swiper-button-next"></div>

    <div class="context">
   </div>
  </div>
  </div>
  <div class="con">
  <div class="left">
  <div class="swiper">
     <div class="swiper-wrapper">
       <div class="swiper-slide"><a href="igneous.php"><img src="img/igneous.png"></a></div>
       <div class="swiper-slide"><a href="sedimentary.php"><img src="img/sedimentary.png"></a></div>
       <div class="swiper-slide"><a href="metamorphic.php"><img src="img/metamorphic2.png"></a></div>
     </div>

     <div class="swiper-button-prev"></div>
     <div class="swiper-button-next"></div>

     <div class="swiper-pagination"></div>

    <div class="context">
   </div>
  </div>
</div>
</body>
</html>
<script>
        const hOne = document.querySelector('h1')
        hOne.style.textAlign = "center";

window.addEventListener('scroll', () => {
    let current = window.scrollY;
    hOne.style.fontSize = `clamp(4rem, 45rem - ${current}px, 24rem)`;
})
const swiper = new Swiper('.swiper', {
        speed: 750,
  spaceBetween: 150,
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
    clickable : true
  },
  effect: 'coverflow',
  depth: 20,
  scale: 2,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay:{
    delay: 3000,
  }
}); 
</script>
<style> 
@import url('htpp://fonts.googleapis.com/css?family=poppins:200,300,400500,600,700,800,900&display=swap');
*{
  margin: 0;
  padding:0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  background-image: url(img/12.png);
  height: 250vh;
  width: auto;
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
  padding: 40px 100px;
  z-index: 100000;
}
header .logo
{
  position: relative;
  font-weight: 700;
  color: white;
  text-decoration: none;
  font-size: 2em;   
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
  color: #fff;
  letter-spacing: 2px;
  font-weight: 450px;
  transition: 0.6s;
  animation-duration: 0.5s;
}
header ul:hover li:hover a:hover
{
  font-weight: 460px;
  transition: 0.6s;
}
.banner
{
  position: relative;
  width: 100%;
  height: 90vh;
 background-color: black;
  background-size: cover;
}
.swiper {
  width: 40vw;
  height: auto;
  align-items: center;
  justify-content: center;
}
.swiper img{
  width: 100%;
  height: auto;
  border-radius: 20px;
}
.left{
  width: 450px;
  height: auto;
  position: absolute;
  filter: blur(0px);
  transition-duration: 0.5s;
}
.con{
  top: 160px;
  position: relative;
}
.con .right{
  right: 50px;
  position: absolute;
}
.con .left{
  top:50%;
  left: 50px;
  position: absolute;
}
</style>