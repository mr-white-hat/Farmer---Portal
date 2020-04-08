<?php
isset($_SESSION) || session_start();

$_SESSION['message'] = '';


$mysqli = new mysqli('localhost', 'root', '', 'farmer');

$username = $_SESSION['username'];
$fullname = $_SESSION['fullname'];

if ($_SERVER['REQUEST_METHOD'] =='POST') {
    $harvestname = $mysqli->real_escape_string($_POST['harvestname']);
    $quantity = $mysqli->real_escape_string($_POST['quantity']);
    $price = $mysqli->real_escape_string($_POST['price']);
    $state = $mysqli->real_escape_string($_POST['state']);
    $district = $mysqli->real_escape_string($_POST['district']);
    $city = $mysqli->real_escape_string($_POST['city']);
    $sql = " INSERT INTO harvest(username, harvestname, quantity, price, state, district, city) "." VALUES ('$username', '$harvestname', '$quantity', '$price', '$state', '$district', '$city') ";
    if ( $mysqli->query($sql) ){
        $_SESSION['upload'] = true;
        $_SESSION['message'] ="Succesfully uploaded!";
        echo "Success";
    } 
    else {
        $_SESSION['message'] = 'Upload failed!';
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
                right: 0px;
            }

            .icon{
                padding-right: 33px;
            }

            .check{
                position: relative;
                left: 10px;
            }

            .keep{
                position: relative;
                right: 20px;
                bottom: 1px;
            }

            .button{
                position: relative;
                right: 0px;
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
                        <li><a class="active" href="../Home.php">Home</a></li>
                        <li><a href="../news.php">News</a></li>
                        <li><a href="../contact.php">Contact</a></li>
                        <li><a href="../about.php">About</a></li>
                        <li style="float:right"><a class="actives" href="../logout.php">Logout</a></li>
                        <li style="float:right"><a class="actives" href="profile.php">Profile</a></li>
                        <li style="float:right"><a class="actives">Welcome <?php echo $fullname; ?></a></li>
                    </ul>   
                        
                        
                    <center>
                        <form action="harvest_details.php" enctype="multipart/form-data" method="POST">
                        <div>
                        <div class="alert-alert-error"><?= $_SESSION['message'] ?></div>
                        <input type="text" class="details" placeholder='Harvest Name' name="harvestname" required><br><br>
                        <input type="text" class="details" placeholder='Quantity in kgs.' name="quantity" required><br><br>
                        <input type="text" class="details" placeholder='Price' name="price" required><br><br>
                        <input type="text" class="details" placeholder='State' name="state" required><br><br>
                        <input type="text" class="details" placeholder='District' name="district" required><br><br>
                        <input type="text" class="details" placeholder='City' name="city" required><br><br>
                        <input id="check" type="checkbox" class="check" required>
                        <label for="check" class="keep"><span class="icon"></span> Confirm Details</label><br><br>
                        <input type="submit" class="button" value="    Submit    "><br><br>
                        </div>
                        </form>
                    </center>
                </div>
               <div id="footer">
                   Copyright &copy; Farmer's Portal.  
               </div>
        </div>
    </body>
</html>