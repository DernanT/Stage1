<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gazelle007</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: normal 16px roboto;
            color: #f2f2f2;
        }

        section{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 100px 80px;
        }
        nav li{
/*            width: 59px;*/
            height: 17px;
            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            line-height: normal;
            font-size: 14px;
            color: #F2F2F2;
        }
        header{
            position: absolute;
            width: 100%;
            height: 10vh;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 15px 20px 0;
            color: #fff;
            flex-wrap: wrap;
            background-color: #333333;
            
        }
        nav{
            display: flex;
            justify-content: flex-end;
            flex-wrap: wrap;
            flex-grow: 1;
            margin-right: -15px;
            list-style: none;
        }
        
        a{
            color: #f2f2f2;
            text-decoration: none;
            opacity: .8;
        }
        a:hover{
            opacity: 1;
        }

        nav li{
            margin: 0 20px;
        }
        .bg_img{
            position: absolute;
            top: 8;
            left: 0;
            width: 100%;
            height: 100%;
            background-size: cover;
            z-index: -1;
            background-color: #80a3db;
        }
        .landing{
            position: relative;
            justify-content: center;
            text-align: center;
            min-height: 95vh;
        }
        .landing h1{
            font: bold 68px "Open Sans";
            color: #F2F2F2;
            -webkit-text-stroke: 1px #0EA7C6;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25), 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
        .landing h3{
            font: normal 28px "roboto";
            margin-bottom: 40px;
            text-transform: uppercase;
        }
        #clock{
            color: #0EA7C6;
            font-size: 30px;
        }
        .landing_content_area{
            opacity: 0;
            margin-top: 108px;
            animation: 1s slidefade 1s forwards;
        }

        @keyframes slidefade{
            100%{
                opacity: 1;
                margin: 0;
            }
        }
        footer{
            background-color: #333333;
            height: 5vh;
            position: relative;
            justify-content: center;
            text-align: center;
            padding: 10px;
        }
        footer span{
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <header>
        <img src="#" alt="">
        <nav>
            <li><a href="#">HOME</a></li>
            <li><a href="#">GALLERY</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">CONTACTUS</a></li>
        </nav>
    </header>
    
    <section class="landing">
        <div class="bg_img" style="background-image: url(img/bg.jpg);"></div>
        <div class="landing_content_area">
            <h1>DOVE WORKS</h1>
            <h3><span id="clock"></span></h3>
            <?php
            $datetime = new DateTime;
            $datetime->setTimezone(new DateTimeZone('Africa/Lagos'));
            echo "The time is " . $datetime->format('H:i:s');
            ?>

        </div>
    </section>
    <footer>
        <span>copyright &copy; 2018</span>
    </footer>
</body>
</html>