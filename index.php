<?php session_start();
    if (!empty($_SESSION['userdetails'])) 
    {
      header('Location: home.php');
    }
    
    require 'instagram.class.php';
    require 'instagram.config.php';
      
    // Display the login button
    $loginUrl = $instagram->getLoginUrl();
    echo "<div style='text-align:center'><div id='landing'><div id='logo'><img style='padding: 70px 0 0 0' src='landing_logo.png'></div></div>";
    echo "<a class=\"button\" href=\"$loginUrl\">Login<i class=\"icon-chevron-right\"></i></a>";
  ?>

<html lang="en">
  <head>
    <title>Destipix Login</title>
  </head>
  <body>
<style type="text/css">


  @import url(http://netdna.bootstrapcdn.com/font-awesome/2.0/css/font-awesome.css);
  
  a.button{
    background: #ECECEC;
    border-radius: 15px;
    padding: 10px 20px;
    display: block;
    font-family: arial;
    font-weight: bold;
    color:#7f7f7f;
    text-decoration: none;
    text-shadow:0px 1px 0px #fff;
    border:1px solid #a7a7a7;
    width: 145px;
    margin:0px auto;
    margin-top:100px;
  }
  a.button i{
    float: right;
    margin-top: 2px;
  }
  a.button:hover{
    background:-webkit-linear-gradient(top, #D1D1D1 0%,#ECECEC 100%);
  }
  a.button:active{
    background:-webkit-linear-gradient(top, #D1D1D1 0%,#ECECEC 100%);
  }

  *
  {
    margin: 0px;
    padding: 0px;
  }

  body{
    background-color: rgb(21, 21, 21);
    background-color: -moz-linear-gradient(90deg, rgb(21, 21, 21) 1%, rgb(0, 0, 0) 99%);
    background-color: -webkit-linear-gradient(90deg, rgb(21, 21, 21) 1%, rgb(0, 0, 0) 99%);
    background-color: -o-linear-gradient(90deg, rgb(21, 21, 21) 1%, rgb(0, 0, 0) 99%);
    background-color: -ms-linear-gradient(90deg, rgb(21, 21, 21) 1%, rgb(0, 0, 0) 99%);
    background-color: linear-gradient(180deg, rgb(21, 21, 21) 1%, rgb(0, 0, 0) 99%);
  }

  #logo
  {
    width:960px;
    margin: 0 auto; 
  }
    </style>
  </body>
</html>