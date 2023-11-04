<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StatueOfCulture</title>
<!--    <link rel="stylesheet" href="/styles/styles.css">-->
    <style>
        html,body{
            width:100%;
            /*height:100%;*/
            margin:0;
        }
        .frame_container{
            width:100%;
            margin:auto;
            height:100%;
            position: relative;
        }
        .image_container{
            background-image: url("/images/amiri_opt.jpg");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: top;
            /*height:100%;*/
            width: 100%;
        }
        .main_img{
            width:100%;
            transition:opacity 0.5s ease;
        }

        .sensor_div{
            /*background-color: rgba(255,255,255,0.3);*/
            cursor: pointer;
            z-index: 99;
            position: absolute;
        }
        #shop_1_btn{
            width: 36%;
            height: 9%;
            top: 18%;
            right: 7%;
        }

        #shop_2_btn{
            width: 30%;
            height: 19%;
            top: 26%;
            left: 0%;
        }

        #img_1{
            z-index: 0;
        }
        #img_2{
            z-index: 1;
            position: absolute;
            height: 1000px;
            left: 0;
            top: 0;
            height: 100%;
        }

            /*position:absolute;*/

    </style>
</head>

<body>
    <div class="frame_container">
        <img src="/images/amiri_opt.jpg" alt="" class="main_img" id="img_1">
        <img src="/images/gallery_opt.jpg" alt="" class="main_img" id="img_2">
<!--        <img src="/images/amiri_opt.jpg" alt="" class="main_img" id="img_1">-->

        <div class="sensor_div" id="shop_1_btn"></div>
        <div class="sensor_div" id="shop_2_btn"></div>
<!--        <div class="image_container">-->
<!---->
<!--        </div>-->
    </div>

    <script>
        document.getElementById("shop_2_btn").addEventListener("mouseover", function(){
            let img = document.getElementById("img_2");
            img.style.opacity = "0";
            img.style.pointerEvents = "none";
        });
        document.getElementById("shop_2_btn").addEventListener("mouseout", function(){
            let img = document.getElementById("img_2");
            img.style.opacity = "1";
            img.style.pointerEvents = "none";
        });
    </script>
</body>