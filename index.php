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


        .sensor_div{
            /*background-color: rgba(255,255,255,0.3);*/
            cursor: pointer;
            z-index: 99;
            position: absolute;
            -webkit-tap-highlight-color: transparent;
            user-select: none;

        }
        #shop_1_btn{
            width: 30%;
            height: 19%;
            top: 26%;
            left: 0%;
        }

        #shop_2_btn{
            width: 23%;
            height: 12%;
            top: 30%;
            left: 37%;
        }

        #shop_3_btn{
            width: 36%;
            height: 9%;
            top: 18%;
            right: 7%;
        }

        #shop_4_btn{
            width: 19%;
            height: 17%;
            top: 30%;
            right: 0%;
        }

        #shop_5_btn{
            width: 19%;
            height: 14%;
            top: 45%;
            right: 32%;
        }


        #shop_6_btn{
            width: 20%;
            height: 15%;
            top: 47%;
            right: 5%;
        }

        #shop_7_btn{
            width: 20%;
            height: 19%;
            top: 77%;
            right: 0%;
        }


        #shop_8_btn{
            width: 30%;
            height: 17%;
            top: 61%;
            left: 14%;
        }


        #shop_9_btn{
            width: 30%;
            height: 16%;
            top: 45%;
            left: 8%;
        }



        .main_img{
            width:100%;
            transition:opacity 0.5s ease;
            z-index:1;
        }
        .add_img{
            z-index: 2;
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            width:100%;
            transition:opacity 0.5s ease;
        }






    </style>
</head>

<body>
    <div class="frame_container">
        <img src="/images/lightof.jpg" alt="" class="main_img" id="img_0">
        <img src="/images/amiri.jpg" alt="" class="add_img" id="img_1">
        <img src="/images/bape.jpg" alt="" class="add_img" id="img_2">
        <img src="/images/stoneisland.jpg" alt="" class="add_img" id="img_3">
        <img src="/images/supreme.jpg" alt="" class="add_img" id="img_4">
        <img src="/images/burbery.jpg" alt="" class="add_img" id="img_5">
        <img src="/images/rhude.jpg" alt="" class="add_img" id="img_6">
        <img src="/images/gallery.jpg" alt="" class="add_img" id="img_7">
        <img src="/images/prada.jpg" alt="" class="add_img" id="img_8">
        <img src="/images/moncler.jpg" alt="" class="add_img" id="img_9">

        <div class="sensor_div" id="shop_1_btn"></div>
        <div class="sensor_div" id="shop_2_btn"></div>
        <div class="sensor_div" id="shop_3_btn"></div>
        <div class="sensor_div" id="shop_4_btn"></div>
        <div class="sensor_div" id="shop_5_btn"></div>
        <div class="sensor_div" id="shop_6_btn"></div>
        <div class="sensor_div" id="shop_7_btn"></div>
        <div class="sensor_div" id="shop_8_btn"></div>
        <div class="sensor_div" id="shop_9_btn"></div>

    </div>

    <script>
        for (let i = 1; i < 10; i++) {

            document.getElementById("shop_"+i+"_btn").addEventListener("mouseover", function(){
                let img = document.getElementById("img_"+i);
                img.style.opacity = "1";
            });

            document.getElementById("shop_"+i+"_btn").addEventListener("mouseout", function(){
                let img = document.getElementById("img_"+i);
                img.style.opacity = "0";
            });

        }

    </script>
</body>