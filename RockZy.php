<!DOCTYPE html>
<title>RockZy</title>
<html lang="en">
<head>
<link rel="icon" type="image/x-icon" href="img/logo.png" width = "100%">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RockZy</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
</head>
<style>
    *{
        font-family: 'Segoe UI', Tahoma, Verdana, sans-serif;
        padding: 0;        
        margin: 0;
        box-sizing: border-box;
    }
    body{
        background-color: darkgray;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        filter: blur(0px);
    }
    .wrapper{
        backdrop-filter: blur(30px);
        width: 450px;
        background: transparent;
        border: 10px solid rgba(255,255,255,0.2);
        box-shadow: 0 0 10px black rgba(0, 0, 0, 0.1);
        color: antiquewhite;
        border-radius: 20px;
        padding:  30px 40px;
    }
    .wrapper h1{
        font-size: 40px;
        text-align: center;
    }
    .wrapper .input{
        position: relative;
        width: 100%;
        height: 50px;
        margin: 30px 0;
    }
    .input input{
        font-size: 16px;
        width: 100%;
        height: 100%;
        background: transparent;
        border: none;
        outline: none;
        border: 2px solid rgba(255,255,255);
        border-radius: 30px;
        color: #000;
        padding: 25px 45px 20px 20px;
    }
    .input input::placeholder{
        color: #000;
    }
    .input i{
        position: absolute;
        right: 20px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
    }
    .input select{
        position: absolute;
        left: 45px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 20px;
    }
    .wrapper .remember-me{
       display: flex;
       justify-content: space-between;
       margin: -15px 0 15px ;
    }
    .remember-me label input{
     accent-color: black;
     margin-right: 3px;
    }
   .wrapper .btn{
    width: 100%;
    height: 45px;
    background: whitesmoke;
    border: none;
    outline: none;
    border-radius: 60px;
    cursor: pointer;
    font-size: 20px;
    box-shadow: 0 0 10px black rgba(0, 0, 0, 0.1);
    color: black;
    font-weight: 600;
    transition-duration: 0.5s
   }
   .btn:hover{
    border-radius: 10px;
   }
   .wrapper .resgister_link{
    font-size: 15px; 
    text-align: center;
    margin-top: 30px;
   }
   .resgister_link p a{
     text-decoration: none;
     color: black;
   }
   .resgister_link p a:hover{
     text-decoration: underline;
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
<body>
<header>
  <a href="home.php" class="logo">RockZy</a>
    <ul>
      <li><a href="map.php">map</a></li>
    </ul> 
</header>
<div class="wrapper">
    <form action="RockZyinsert.php" method="POST">
        <h1>Put your Rock</h1>
        <div class="input">
            <input type="text" name="rock_name" required placeholder="What is your rock name?" autofocus>
            <i class='bx bxs-user-circle' ></i>
        </div>
        <div class="input">
            <select name="rock_type">
                <option value="null">what the type of your rock?</option>
                <option value="igneous">igneous</option>
                <option value="sedimentary">sedimentary</option>
                 <option value="metamorphic">metamorphic</option>
            </select>
         </div>
         <div class="input">
            <input type="text" name="more_info" placeholder="more info (optional)">
            <i class='bx bx-question-mark' ></i>
         </div>
         <div class="input">
            <input type="text" name="rock_location" required placeholder="The place that you found a rock">
            <i class='bx bxs-map'></i>
         </div>
         <div class="input" >
            <input type="file" name="rock_img" required> 
            <i class='bx bxs-photo-album'></i>
        </div>
        <button type="submit" class="btn">Send</button>
        <div class="resgister_link">
            <p>If you don't know how to put the infomation <a href="Tutorial.php">Tutorial</a></p>
        </div>
    </form>
</div>
</body>
</html>