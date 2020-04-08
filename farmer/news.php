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
                padding-left: 62px;
                padding-right:62px;
                font-size: 20px;
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
                    <h1>News</h1><br>
                        <p>
                        India is an agricultural country. More than 75% of its population lives in villages. People work as farmers. But it is a pity that our farmer lives in poverty though he is the backbone of our country. He works hard and gets little to eat.
                        The present condition of Indian farmers is very bad. He is too poor to have some comforts in life. he has very few clothes. He lives in an ordinary house. It is made of mud. It is not properly ventilated. It is dark and unhealthy. Our farmer is ignorant. He lives in dirt. He does not know the importance of cleanliness. He is open to diseases.
                        The Indian farmer is very hardworking. He is very honest. He works in the fields from morning till evening. The scorching heat of the sun. the cold winter winds and heavy rain cannot stop him from doing his work outside the house. He is the son of nature.
                        The Indian farmer is quite ignorant. He still follows the old methods of agriculture. Owing to this poverty and ignorance, he cannot (or does not) make use of scientific implements and fertilizers as well. Indian agriculture is dependent on the monsoon. Very often it fails, sometimes it destroys his standing crops. Thus, monsoon betrays our farmers. Frequently, rains cause floods which destroy crops. Thus, we see that poverty and ignorance are two great curses for the Indian farmer.
                        </p><br>
                        <p>
                        The remedy of the Indian farmer’s backwardness lies in spreading literacy among the farmers. The government should help them with money, implements and good seeds. There should be good arrangements for irrigation also.
                        It is a matter of great pleasure that today Government is doing is best to help the Indian farmer. His position has now improved. He is now buying better agricultural implements, good seeds, and fertilizers. The old outdated plow is now being replaced by the tractor.
                        In the days of English rule, the farmer was in the clutches of money lenders and landlords. But now the position is changed. The government, co-operative societies, and banks are helping our farmers. These three agencies have brought a revolution in rural credit.
                        Distribution of surplus land, consolidation of land holdings, implementation of ceiling laws and other land reforms have brought about a change in the status of the Indian farmers. Welfare measures like the spread of education, electrification, and supply of water, the building of roads, schools, and hospitals have raised the standards of living of the farmer. Now he lives in pucca houses and puts on better clothes. He looks very cheerful. If our farmers and we should cooperate with our government, the conditions of the Indian farmers will improve in the future.
                        </p>

                    </div>
               <div id="footer">
                   Copyright &copy; Farmer's Portal.  
               </div>
        </div>
</body>
</html>