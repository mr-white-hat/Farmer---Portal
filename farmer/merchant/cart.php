<?php

session_start();
$mysqli = new mysqli('localhost', 'root', '', 'farmer');

if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in before viewing your profile page!";
  header("location: ../error.php");    
}
else {
    $username = $_SESSION['username'];
    $fullname = $_SESSION['fullname'];
    $email = $_SESSION['email'];
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

            .title{
                position: relative;
                left: 20px;
                top: -100px;
                font-family: fantasy;
                font-size: 80;
            }

            .button{
                position: relative;
                top: 10px;
            }

            .data{
                
            }

            .logo{
                position: relative;
                left: -400;
                top: 10px;
            }

            #container{
                background-color: white;
                width: 1000px;
                height: 2000px;
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
                position: relative;
                top: 1460px;
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
                        <li style="float:right"><a class="actives" href="../logout.php">Logout</a></li>
                        <li style="float:right"><a class="actives" href="profile.php">Buy Havrvest</a></li>
                        <li style="float:right"><a class="actives">Welcome <?php echo $fullname; ?></a></li>
                      </ul>
                    <center>
                    <div class = "data">
                    <?php
                        if(isset($_POST['submit_button'])){
                            if(!empty($_POST['check_list'])) {
                                // Counting number of checked checkboxes.
                                $checked_count = count($_POST['check_list']);
                                echo "You have selected following ".$checked_count." option(s): <br/>";
                                // Loop to store and display values of individual checked checkbox.
                                foreach($_POST['check_list'] as $selected) {
                                    echo "<p>".$selected ."</p>";
                                }
                                }
                        else{
                        echo "<b>Please Select Atleast One Option.</b>";
                        }
                        }
                    ?>
                    </div>
                    </center>
               <div id="footer">
                   Copyright &copy; Farmer's Portal.  
               </div>
        </div>
</body>
</html>