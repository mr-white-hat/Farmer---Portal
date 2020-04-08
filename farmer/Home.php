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

            .intro{
                padding-left: 62px;
                padding-right:62px;
                font-size: 20px;
                bottom:26px;
                position: relative;
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
                        
                    <div class="intro">
                        <p>Portal for Farmers to sell the produce at a better rate • Problem statement in Description o System that provides farmers an interface to sell their produce , and connect with the buyers all over India o Simple interface that works on mobile, SMS to upload produce details and respond via phone and SMS (taking care of digital divide) o Interface for anyone to buy the produce/vegetable – initially visit the place and buy or have courier service integrated to deliver the vegetables o Farmers can get a better price for their produce, no additional cost spent in marketing and delivery of goods , however they can choose to charge more by delivering the items themselves • Purpose of this analysis and who will benefit o Farmers, Restaurant owners, Buyers , Courier Companies, Delivery Agencies, Vegetable Vendors
                        </p>
                        <p>  How does it help the nation o Better rates for the vegetables, Make the Farmers live with pride and make additional income • Practical and reasons why this idea could be a challenge o Brokers , Govt rules o Overall profitability in the deal for the buyer to purchase directly from farm , excluding transportation • How does this help CDK : What’s in it for us o No Direct link • Technology that can be used as a platform for connecting car buyer to Seller Domain Bucket o Agriculture o E-Commerce o Payment • Technology Bucket o Integration across systems – Integration platform across systems with security model for data extraction o SMS and Mobile Computing o Analytics & Data Science (if possible) - Bigdata/Hadoop, AI / ML o Data Aggregation o Visualization
                        </p>
                    </div>
                
                </div>
               <div id="footer">
                   Copyright &copy; Farmer's Portal.  
               </div>
        </div>
    </body>
</html>