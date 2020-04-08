<?php
isset($_SESSION) || session_start();

$_SESSION['message'] = '';


$mysqli = new mysqli('localhost', 'root', '', 'farmer');

if ($_SERVER['REQUEST_METHOD'] =='POST') {
    if ($_POST['password'] == $_POST['confirmpassword']) {
        $username = $mysqli->real_escape_string($_POST['username']);
        $fullname = $mysqli->real_escape_string($_POST['fullname']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $mobile = $mysqli->real_escape_string($_POST['mobile']);
        $password = $mysqli->escape_string( password_hash($_POST['password'], PASSWORD_BCRYPT) );
        $hash = $mysqli->escape_string( md5( rand(0,1000) ) );
        $avatar_path = $mysqli->real_escape_string('images/'.$_FILES['avatar']['name']);
        
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['fullname'] = $_POST['fullname'];
        $_SESSION['email'] = $_POST['email'];
        $result = $mysqli->query("SELECT * FROM fusers WHERE mail='$email'") or die($mysqli->error);
        if (preg_match("!image!",$_FILES['avatar']['type'])) {
            if ( $result->num_rows > 0 ) {
                $_SESSION['message'] = 'User with this email already exists!';
            }
            else {
                if(copy($_FILES['avatar']['tmp_name'], $avatar_path)) {
                    $_SESSION['username'] = $username;
                    $_SESSION['avatar'] = $avatar_path;
                    $sql = " INSERT INTO fusers(username, fullname, mail, mobile, password, hash, avatar) "." VALUES ('$username', '$fullname', '$email', '$mobile', '$password', '$hash', '$avatar_path') ";
                    if ($mysqli->query($sql)){
                        $_SESSION['logged_in'] = true;
                        $_SESSION['message'] = 'Succesfully registered!';
                        header(" location: profile.php ");
                    } 
                    else {
                        $_SESSION['message'] = 'Registration failed!';
                    }                
                }
                else{
                    $_SESSION['message'] = 'Email alreay exists';
                }
            }
        }
        else{
            $_SESSION['message'] = 'Please only upload JPG, PNG, GIF images!';
        }
    }
    else {
        $_SESSION['message'] = 'Two passwords do not match!';
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
                        <li><a class="active" href="../Home.php">Home</a></li>
                        <li><a href="../news.php">News</a></li>
                        <li><a href="../contact.php">Contact</a></li>
                        <li><a href="../about.php">About</a></li>
                        <li style="float:right"><a class="actives" href="../merchant/Merchant_login.php">Merchant Login</a></li>
                        <li style="float:right"><a class="actives" href="Farmer_login.php">Farmer Login</a></li>
                      </ul>   
                        
                        <form class = "signup" action="Farmer_register.php" enctype="multipart/form-data" method="POST">
                                <h3 class="signup-title">Farmer Register</h3 class="signup-title">
                                <div class="alert-alert-error"><?= $_SESSION['message'] ?></div>   
                                <input type="text" class="details" placeholder='User Name' name="username" required><br><br>
                                <input type="text" class="details" placeholder='Full Name' name="fullname" required><br><br>
                                <input type="email" class="details" placeholder='Email' name="email" required><br><br>
                                <input type="tele" class="details" placeholder='Mobile Number' name="mobile" required><br><br>
                                <input type="Password" class="details" placeholder='Password' name="password" required><br><br>
                                <input type="Password" class="details" placeholder='Confirm Password' name="confirmpassword" required><br><br>
                                <label class="upload">Upload your photo: </label><br><br><input type="file" class="avatar" name="avatar" placeholder="Upload" accept="image/*" required /><br><br>
                                <input id="check" type="checkbox" class="check" required>
                                <label for="check" class="keep"><span class="icon"></span> Confirm Details</label><br><br>
                                <input type="submit" class="button" value="Sign Up"><br><br>
                                <a class="login" href="Farmer_login.php"> Already Register? </a > 
                        </form>
                        </div>
                </div>
               <div id="footer">
                   Copyright &copy; Farmer's Portal.  
               </div>
        </div>
    </body>
</html>