<?php
/* Log out process, unsets and destroys session variables */
session_start();
session_unset();
session_destroy(); 
?>
<html>
    <head>
        <title> Farmer's Portal </title>
        <style>
            body{
                background-color: black;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            h1{
                margin : 0;
            }

            form{
                padding-top: -50px;
                padding-right: 50px;
                text-align: right;

            }

            .avatar{
                position: relative;
                right: -65px;
            }

            .upload{
                position: relative;
                right: 30px;
            }

            .details{
                border-radius:25px;
                border:10px;
                border-color: black;
                padding:15px 20px;
                background: #cce0ff;
            }

            .signup-title{
                position: relative;
                right: 33px;
            }

            .icon{
                padding-right: 33px;
            }

            .keep{
                position: relative;
                right: 33px;
                bottom: 1px;
            }

            .button{
                position: relative;
                right: 66px;
            }

            .login{
                position: relative;
                right: 37px;
            }

            .title{
                position: relative;
                left: 20px;
                top: -100px;
                font-family: fantasy;
                font-size: 80;
            }

            .logo{
                position: relative;
                left: -400;
                top: 10px;
            }

            #container{
                background-color: white;
                width: 1000px;
                height: 900px;
                margin-left: auto;
                margin-right: auto;
                color: black;
            }
            #header {
                background: #66ff99;
                color: black;
                text-align: center;
            }

            ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
                position: relative;
                bottom: 47px;
            }
            li {
                float: left;
                border-right: 1px solid #bbb;
            }
            
            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            .active {
                background-color: #4CAF50;
            }

            .actives{
                border-left: 1px solid white;
                background-color: #ff944d;
            }


            li:last-child {
                border-right: none;
            }

            #footer{
                clear : both;
                padding: 20px;
                background-color: powderblue;
                text-align: center;
                color: black;
            }
        </style>

    </head>
    <body>
        <div id="container">
                <div id="header">
                    <img width="150" class="logo" src = "https://www.pngarts.com/files/3/Farmer-PNG-Transparent-Image.png" alt= "Farmer" />
                    <h1 class="title">  FARMER'S PORTAL  </h1 class="title">
                </div>
                <div id="content">
                    <ul>
                        <li><a class="active" href="Home.php">Home</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.php">About</a></li>
                        <li style="float:right"><a class="actives" href="./merchant/Merchant_login.php">Merchant Login</a></li>
                        <li style="float:right"><a class="actives" href="./farmer/Farmer_login.php">Farmer Login</a></li>
                      </ul>
                      <div class="form">
                      <h1>Thanks for stopping by</h1>
                      <p><?= 'You have been logged out!'; ?></p>
                </div>
               <div id="footer">
                   Copyright &copy; Farmer's Portal.  
               </div>
        </div>
</body>
</html>