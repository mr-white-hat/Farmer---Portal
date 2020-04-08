<?php

session_start();

$_SESSION['message'] = '';

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

$mysqli = new mysqli("localhost", "root", "", "farmer"); 
$query = "SELECT * FROM harvest";

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
                position: relative;
                top: 575px;
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
                        <li style="float:right"><a class="actives" href="harvest_details.php">Upload Harvest</a></li>
                        <li style="float:right"><a class="actives">Welcome <?php echo $fullname; ?></a></li>
                    </ul>
                </div>
                <div class="alert-alert-error"><?= $_SESSION['message'] ?></div>
                    <center>
                    <div>
                    <?php
                        $sql = "SELECT username, harvestname, quantity, price FROM harvest";
                        $result = $mysqli->query($sql);
                        
                        if (mysqli_num_rows($result) > 0) {
                            echo "<table><tr><th>Username</th><th>Harvest</th><th>Quantity</th><th>Price</th></tr>";
                            while($row = $result->fetch_assoc()) {
                                if ($username==$row['username']) {
                                    echo"<tr><td>".$row["username"]."</td><td>".$row['harvestname']."</td><td>".$row['quantity']."</td><td>".$row['price']."</td></tr>"."<br>";
                                }
                                else {
                                    echo "";
                                }
                            }
                        }
                        else{
                            echo "No data found";
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