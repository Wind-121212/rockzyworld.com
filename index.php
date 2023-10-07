<!DOCTYPE html>
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
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        padding: 0;        
        margin: 0;
        box-sizing: border-box;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        background-image: url('michael-oeser-chBLQ_UCmgU-unsplash.jpg');
        background-size: cover;
        background-position: center;
        filter: blur(0px);
    }
    .wrapper{
        backdrop-filter: blur(30px);
        width: 450px;
        background: darkslategrey;
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
</style>
<body>
<div class="wrapper">
    <form action="checklogin.php" method="post">
        <h1>Login</h1>
        <div class="input">
            <input type="text" name="user_name" required placeholder="Username" autofocus>
            <i class='bx bxs-user-circle' ></i>
        </div>
        <div class="input">
            <input type="password" name="password" required placeholder="Password">
            <i class='bx bxs-lock-alt'></i>
         </div>    
        <div class="remember-me">
            <label><input type="checkbox">Remember me</label>
        </div>
        <button type="submit" class="btn">Login</button>
        <div class="resgister_link">
            <p>Don't have any account yet? <a href="sign_in.php">Sign in</a></p>
        </div>
    </form>
</div>
</body>
</html>