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


            .logo{
                position: relative;
                left: -400;
                top: 10px;
            }

            .pic{
                position: relative;
                left: 260px;
            }

            .members{
                position: relative;
                left: 460px;
                top: 110px;

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
                    <div class = "data">
                        <p class="members"><br>
                            <b>Team Member 1</b> : Sri Raj <br><b> Email </b>: sriraj_gopu@srmap.edu.in <br><b> Phn no :</b> 9030105859<br></p>
                            <img width="150" src = "./pic/sriraj.jpg" alt= "Farmer" class="pic" /><br>
                            <p class="members">
                            <b>Team Member 2</b> : Pavan Kumar <br><b> Email</b> : pavankumar_chinta@srmap.edu.in <br> <b>Phn no :</b> 89850889<br></p>
                            <img width="150" src = "./pic/pavan.jpg" alt= "Farmer" class="pic"/><br>
                            <p class="members">
                            <b>Team Member 3</b> :  Srilekha <br><b> Email</b> : srilekha_addepalli@srmap.edu.in <br><b> Phn no : </b>8688225663<br></p>
                            <img width="150" src = "./pic/srilekha.jpg" alt= "Farmer" class="pic"/><br>
                            <p class="members">
                            <b>Team Member 4</b> :  Sri Lahari Sivinvitha <br><b> Email </b> : srilahari_nori@srmap.edu.in <br><b> Phn no :</b> 9052777116<br></p>
                            <img width="150" src = "./pic/srilahari.jpg" alt= "Farmer" class="pic"/><br>
                            <p class="members">
                            <b>Team Member 5</b> : Jaya Ganesh Kumar  <br><b> Email</b> : jayaganeshkumar_gudipati@srmap.edu.in <br><b> Phn no :</b> 7330654249<br></p>
                            <img width="150" src = "./pic/jaya ganesh.jpg" alt= "Farmer" class="pic"/><br>
                            <p class="members">
                            <b>Team Member 6</b> : Avinash  <br><b> Email</b> : avinash_potti@srmap.edu.in <br><b> Phn no</b> : 9177723980<br></p>
                            <img width="150" src = "./pic/avinash.jpg" alt= "Farmer" class="pic"/><br></p>
               <div id="footer">
                   Copyright &copy; Farmer's Portal.  
               </div>
        </div>
</body>
</html>