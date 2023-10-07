<!DOCTYPE html>
<title>RockZy</title>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="img/logo.png" width = "100%">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="
https://cdn.jsdelivr.net/npm/swiper@10.3.1/swiper-bundle.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/swiper@10.3.1/swiper-bundle.css
" rel="stylesheet">
</head>
<body>
  <header>
  <a href="home.php" class="logo"><h2>RockZy</h2></a>
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
       <div class="swiper-slide"><a href=""></a><video controls src="vidoe.mp4"></div>
     </div>

     <div class="swiper-pagination"></div>

     <div class="swiper-button-prev"></div>
     <div class="swiper-button-next"></div>

    <div class="context">
   </div>
  </div>
  </div>
</body>
</html>
<script>
        const hOne = document.querySelector('h2')
        hOne.style.textAlign = "center";

window.addEventListener('scroll', () => {
    let current = window.scrollY;
    hOne.style.fontSize = `clamp(2rem, 50rem - ${current}px, 24rem)`;
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

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  autoplay:{
    delay: 3000,
  },
  effect: 'coverflow',
  depth: 20,
  scale: 2
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
  padding: 40px 100px;
  z-index: 100000;
}
header .logo
{
  position: relative;
  font-weight: 700;
  color: #fff;
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
}
.banner
{
  position: relative;
  width: 100%;
  height: 100vh;
 background-color: black;
  background-size: cover;
}
.swiper {
  width: 73vw;
  height: auto;
  align-items: center;
  justify-content: center;
}
.swiper img{
  width: 100%;
  height: auto;
  border-radius: 20px;
}
.swiper video{
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
</style>