<!DOCTYPE html>
<html lang="en">
<?php
$servername = "localhost";
$dbname = "dominko_sk";
$username = "dominko_sk2";
$password = "Dominik123";



$connection = new mysqli($servername, $username, $password, $dbname);

if ($connection->connect_error) {
die("Chyba pripojenie k db: " . $connection->connect_error);
}
?>
<head>
<meta charset="UTF-8">
<style>/*CSS page*/
/*New Css Project*/
@import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
* {
  box-sizing: border-box;
  margin: 0;
}

/*
  Css code writen here...
*/
/*Body section...@*/
body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100vh;
  background-size: cover;
  background-repeat: no-repeat;
  opacity: 1;
  overflow: hidden;
  background: #fff;
  transition: 3s;

}

ul {
  list-style-type: none;
  display: flex;
  padding: 18px 0;
  background-size: 400% 400%;
  background-image: linear-gradient(-45deg, #ff5959, #ff4040, #ff0d6e, #ff8033,#d74177);
  animation: 12s myGradient infinite;
  border-radius: 40px;
  box-shadow: 3px 3px 20px #ff3352;
  border-top-left-radius: 0px;
  border-bottom-right-radius: 0px;
}

@keyframes myGradient {
  0% {
    background-position: 0% 50%;
  }
  
  50%{
    background-position: 100% 50%;
  }
  
  100% {
    background-position: 0% 50%;
  }
}

.fa-search{
  transition: 1s;
  cursor: pointer;
  margin-left: 30px;
}

.active {
  transition: 1s;
}

.active1{
  transition: 1s;
}

.active2 {
  transition: 1s;
}

.active3 {
  transition: 1s;
}

li a {
  color: #fff;
  text-decoration: none;
  padding: 45px 45px;
  font-family: verdana;
  font-weight: lighter;
  font-size: 24px;
  letter-spacing: 1px;
  opacity: 0.9;
}

.navigation {
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
}

.fa-search:hover {
  color: #fff;
  animation: 1.5s myFlash linear infinite;
  text-shadow: 2px 2px 30px #fff;
  transition: 2s;
}

.active3:hover {
  color: #fff;
  animation: 1.5s myFlash linear infinite;
  text-shadow: 2px 2px 30px #fff;
  transition: 2s;
  margin-top: -100px;
}

.active2:hover {
  color: #fff;
  animation: 1.5s myFlash linear infinite;
  text-shadow: 2px 2px 30px #fff;
  transition: 2s;
}

.active1:hover {
  color: #fff;
  animation: 1.5s myFlash linear infinite;
  text-shadow: 2px 2px 30px #fff;
  transition: 2s;
}

.active:hover {
  color: #fff;
  animation: 1.5s myFlash linear infinite;
  text-shadow: 2px 2px 30px #fff;
  transition: 2s;
}

@keyframes myFlash {
  0% {
    opacity: 1;
    text-shadow: transparent;
  }
  
  50% {
    opacity: .1;
  }
  
  100% {
    opacity: 1;
    text-shadow: 2px 2px 20px #fff;
  }
}

.line-w5 {
  width: 5px;
  height: 200px;
  background: tomato;
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 70%;
  border-radius: 30px;
  background-image: linear-gradient(-45deg, #ff408c, #ff4040, #6666ff);
  background-size: 400% 400%;
  animation: 13s myBackground infinite;
  box-shadow: 2px 2px 10px #ff2e38;
  transition: 3s;
}

@keyframes myBackground {
  0% {
    background-position: 0% 50%;
    opacity: 0%;
  }
  
  50% {
    background-position: 100% 50%;
  }
  
  100% {
    background-position: 0% 50%;
    opacity: 1;
  }
}


@keyframes myLinear {
  0%{
    width: 50px;
  }
  
  100% {
    width: 250px;
  }
}

.flash-GIF {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: #ff5959;
  position: absolute;
  transform: translate(-50%, -50%);
  top: 15%;
  left: 10%;
  box-shadow: 2px 2px 20px #d4267d;
  animation: 1.6s myFlash linear infinite;
}

@keyframes myFlash{
  0% {
    opacity: 1;
  }
  
  50%{
    opacity: .1;
  }
  
  100% {
    opacity: 1;
  }
}

nav {
  transition: 3s;
  animation: 3s myAnimation ease linear;
}

@keyframes myAnimation {
  0% {
    opacity: 0;
  }
  
  100% {
    opacity: 1;
  }
}

.nav-type {
  animation: 3s myWorld ease linear;
}

@keyframes myWorld {
  0% {
    opacity: 0;
  }
  
  100% {
    opacity: 1;
  }
}

@media(max-width: 767px) {
  .flash-GIF {
    display: none;
  }
  
  .line-w5 {
    display: none;
  }
  
  .navigation {
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
  }
  
  .text-content-fluid {
    position: absolute;
    transform: translate(-50%, -50%);
    top: 65%;
    left: 50%;
  }
  
  ul {
    padding: 15px 0;
  }
  
  
  li a {
    padding: 34px 34px;
    font-size: 23px;
    font-weight: lighter;
  }
  
  .radial-cyrcle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background: tomato;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 70%;
    left: 50%;
    box-shadow: 2px 2px 20px #ff3352;
    background-image: linear-gradient(to top, #ff2657, #ff3333, #ff5900);
  }
}

.dropdown  a{
  display: block;
  color: #fff;
  text-decoration: none;
  background: tomato;
  width: 100px;
  text-align: center;
  font-family: verdana;
  line-height: 30px;
  display: none;

}


.text-content-fluid {
  display: flex;
  position: absolute;
  transform: translate(-50%, -50%);
  top: 53%;
  left: 50%;
  letter-spacing: 25px;
  font-size: 50px;
  font-family: verdana;
}

.chinese-text {
  color: #ed4278;
  text-shadow: 2px 2px 18px #ff3678;
}

.chinese-text2 {
  color: #ff3345;
  text-shadow: 2px 2px 18px #d10045;
}

.chinese-text3 {
  color: #d1387d;
  text-shadow: 2px 2px 18px #ff6e6e;
}

.chinese-text4 {
  color: #ff7d82;
  text-shadow: 2px 2px 18px #ff4d00;
  
}

.chinese-text5 {
  color: #f50070;
  text-shadow: 2px 2px 18px #fa9ecc;
}

@media(max-width: 767px) {
  .text-content-fluid {
    position: absolute;
    transform: translate(-50%, -50%);
    left: 50%;
    top: 60%;
  }
}

.line {
  height: 40px;
  width: 2px;
  background: #fff;
  margin: 0;
  position: absolute;
  left: 88%;
  top: 25%;
}

/*Ideal screen pixel 1317px*/

.dropdown {
  background: red;
  width: 150px;
  height: 350px;
  color: #fff;
  font-family: verdana;
  padding: 20px 30px;
  height: 200px;
  border-radius: 5px;
  line-height: 50px;
  text-align: center;
  font-weight: bold;
  position: absolute;
  transform: translate(-50%, -50%);
  top: 71%;
  left: 69.2%;
  transition: 2s;
  margin-top: 400px;
  background-size: 400% 400%;
  background-image: linear-gradient(-45deg, #ff0d0d, #ff0d6e, #ff3d0d, #ffff00);
  animation: myLineargradient 6s infinite;
  box-shadow: 2px 3px 20px #ff1700;
}

@keyframes myLineargradient {
  0% {
    background-position: 0% 50%;
    box-shadow: 2px 3px 20px #ff1700;
  }
  
  50% {
    background-position: 100% 50%;
     box-shadow: none;
  }
  
  100% {
    background-position: 0% 50%;
     box-shadow: 2px 3px 20px #ff1700;
  }
}

/*top: 71%*/

.drop1 {
  cursor: pointer;
  text-shadow: 1px 2px 18px #fff;
  transition: 2s;
  margin-top: -5px;
}

.drop2 {
  cursor: pointer;
  text-shadow: 1px 2px 18px #fff;
  transition: 2s;
  margin-top: -5px;
}

.drop3 {
  cursor: pointer;
  text-shadow: 1px 2px 18px #fff;
  transition: 2s;
  margin-top: -5px;
}

.drop4 {
  cursor: pointer;
  text-shadow: 1px 2px 18px #fff;
  transition: 2s;
  margin-top: -5px;
}

.Active {
  transition: 2s;
  margin-top: 1px;
}</style>
</head>

<body>

		<!--New html page on Codepen.io-->
<!--HTml site in cyber network-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  
  <!--Head section-->
  <head>
    <title>Navigation bar</title>
    <meta charset="utf-8">
  <meta name="author" content="anonymous">
  <meta name="generator" content="Sublime text3">
  <meta name="robot" content="index, follow">
  <meta http-equiv="refresh" content="">
  <meta name="description" content="This is navigation bar on html page">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keyowrds" content="html, navigation bar, navigation, bar, javascript, content">
  </head>
  
  <!--Write in body section the codes-->
  <!--Body section-->
  <body>
    <!--
       //code here...
     -->
    <div class="html-container">
      <div class="html-section">
        <div class="html-project">
          <div class="navigation">
            <nav>
              <ul class="nav-type">
                <li><a href="https://codepen.io/EneergeticTomy/" target="_blank" class="active">Home</a></li>
                <li><a href="https://codepen.io/TomikaBoy/full/LqMpaE" target="_blank" class="active1">About</a></li>
                <li><a href="https://codepen.io/" target="_blank" class="active2">Contact</a></li>
                <li><a href="https://w3schools.com/" target="_blank" class="active3">Support</a></li>
                <div class="line"></div>
                <li><a><i class="fa fa-search" onclick="show()">
                  </i></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <noscript>
      <div class="first-line">
        <div class="linear">
          <div class="line-w5">
            
          </div>
        </div>
      </div>
      </noscript>
<template>
      <div class="flash-fluid">
        <div class="flash-time">
          <div class="flash-GIF">
            
          </div>
        </div>
       </div>
</template>
<noscript>     
      <div class="cyrcle-center">
        <div class="radial-cyrcle">
          
        </div>
      </div>
</noscript>
    </div>
<template>   
    <div class="text-class">
      <div class="text-container">
        <div class="text-content-fluid" id="chinese-text" data-text-type="chinese">
          <div class="chinese-text">設</div>
          <div class="chinese-text2">計</div>
          <div class="chinese-text3">和</div>
          <div class="chinese-text4">開</div>
          <div class="chinese-text5">發</div>
        </div>
      </div>
    </div>
</template>  
    
    <div class="dropdown" id="anotherFunction">
     <div class="drop1">HTML</div>
      <div class="drop2">CSS</div>
      <div class="drop3">Javascript</div>
      <div class="drop4">Sass</div>
    </div>
  </body>
  
<!--Html pade and program codes the end...-->
</html>

</body>

</html>