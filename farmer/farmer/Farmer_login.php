<?php
isset($_SESSION) || session_start();
$mysqli = new mysqli('localhost', 'root', '', 'farmer');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $mysqli->escape_string($_POST['username']);
    $result = $mysqli->query("SELECT * FROM fusers WHERE username='$username'");
    if ( $result->num_rows == 0 ){
        $_SESSION['message'] = "User with that username doesn't exist! Please register";
        header("location: ../error.php");
    }
    else {
        $user = $result->fetch_assoc();
        if ( password_verify($_POST['password'], $user['password']) ) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['fullname'] = $user['fullname'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['mobile'] = $user['mobile'];
            $_SESSION['avatar'] = $user['avatar'];
            $_SESSION['logged_in'] = true;
            header("location: profile.php");
        }
        else {
            $_SESSION['message'] = "You have entered wrong password, try again!";
            header("location: ../error.php");
        }
    }
}
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

            .details{
                border-radius:25px;
                border:10px;
                border-color: black;
                padding:15px 20px;
                background: #cce0ff;
            }

            .login-title{
                position: relative;
                right: 45px;
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
                right: 70px;
            }

            .sign-in{
                position: relative;
                right: 59px;
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
                height: 800px;
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
                border-left: 1px solid #bbb;
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
                        <li><a class="active" href="../Home.php">Home</a></li>
                        <li><a href="../news.php">News</a></li>
                        <li><a href="../contact.php">Contact</a></li>
                        <li><a href="../about.php">About</a></li>
                        <li style="float:right"><a class="actives" href="../merchant/Merchant_login.php">Merchant Login</a></li>
                        <li style="float:right"><a class="actives" href="Farmer_login.php">Farmer Login</a></li>
                      </ul>   
                        
                      <form class = "login" action="Farmer_login.php" enctype="multipart/form-data" method="POST"> 
                      <h3 class="login-title">Farmer Login</h3 class="login-title">   
                      <input type="text" class="details" placeholder='User Name' name="username" required><br><br>
                      <input type="Password" class="details" placeholder='Password' name="password" required ><br><br>
                      <input id="check" type="checkbox" class="check" checked>
                      <label for="check" class="keep"><span class="icon"></span> Keep me Signed in</label><br><br>
                      <input type="submit" class="button" name='login' value="Login"><br><br>
                      <a class="sign-in" href="Farmer_register.php"> New User? </a > 
                      </form>   
                        </div>
                </div>
               <div id="footer">
                   Copyright &copy; Farmer's Portal.  
               </div>
        </div>
    </body>
</html>