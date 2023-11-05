<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>StatueOfCulture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--    <link rel="stylesheet" href="/styles/styles.css">-->
    <style>
        html,body{
            width:100%;
            /*height:100%;*/
            margin:0;
            font-family: 'Roboto', sans-serif;
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

        .black_block{
            width:100%;
            background-color: rgba(0,0,0,1);
            margin-top:-6px;
        }

        .footer_text{
            color:white;
            text-align: center;
            font-family: 'Roboto', sans-serif;
            font-size: 1rem;
            padding-bottom:15px;
            padding-top:15px;
        }

        .top_button_wrap{
            width:80%;
            margin:auto;
            display: flex;
            justify-content: center;
            font-size: 1.5rem;
        }

        .top_button{
            border-bottom:1px solid gray;
            color:white;
            flex:1;
            text-align: center;
            padding-top: 30px;
            padding-bottom: 22px;
            cursor: pointer;
            user-select: none;
        }

        .top_button.active{
            border-bottom:5px solid white;
        }
        .post_gallery_image{
            background-image: url("/images/test_img_1.jpg");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            width:100%;
            height:100%;
        }
        .blog_list_wrap{
            height:50vh;
            color:white;
            margin-top:35px;
            margin-bottom:35px;
        }
        .blog_post{
            height:100%;
            display: flex;
            padding-right:25px;
            position: relative;
        }
        .post_text_block_wrap{
            flex:1;
            padding-left:25px;
            position: relative;
        }
        .post_gallery{
            flex:1;
            position: relative;
        }
        .post_gallery_btn{

        }
        .tag_text{
            color:royalblue;
            margin-bottom:15px;
            font-size: 1.2rem;
        }
        .post_title {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }
        .post_description{
            color:lightgray;
            font-size: 1.2rem;
        }
        .post_change_button_wrap{
            position: absolute;
            bottom: 0;
            left: 50%;
            display: flex;
            transform: translateX(-50%);
        }
        .post_change_button{
            height:45px;
            width:45px;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            transition: all 0.5s ease;
            cursor: pointer;
        }

        .post_change_button.left{
            background-image: url("/images/button_big.png");
            transform: rotate(180deg);
        }
        .post_change_button.right{
            background-image: url("/images/button_big.png");
            margin-left:20px;
        }
        .post_change_button.left:hover{
            transform: translateX(-5px) rotate(180deg);
        }
        .post_change_button.right:hover{
            transform: translateX(5px);
        }
        .post_gallery_btn{
            height:45px;
            width:45px;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat;
            transition: all 0.5s ease;
            cursor: pointer;
            position: absolute;
            top:50%;
        }
        .post_gallery_btn.left{
            background-image: url("/images/button.png");
            transform: translateY(-50%) rotate(180deg);
            left:10px;
        }
        .post_gallery_btn.right{
            background-image: url("/images/button.png");
            right:10px;
        }
        .post_gallery_btn.left:hover{
            transform: translate(-5px, -50%) rotate(180deg);
        }
        .post_gallery_btn.right:hover{
            transform: translateX(5px);
        }

        @media (max-width: 768px) {
            .blog_post {
                flex-direction: column;
                width:100%;
                height:auto;
            }
            .post_gallery{
                width:100%;
                height:330px;
                flex:unset;
            }
            .post_text_block_wrap{
                margin-top:25px;
                padding-left:15px;
                padding-right:15px;
            }
            .blog_list_wrap{
                height:auto;
            }
            .post_title{
                font-size: 1.5rem;
            }
            .post_change_button_wrap{
                position: static;
                display: flex;
                justify-content: center;
                transform: unset;
                margin-top:15px;
            }
            .top_button_wrap{
                font-size:1rem;
            }
            .blog_list_wrap{
                overflow: hidden;
            }
            .tag_text{
                font-size: 1rem;
            }
            .post_description{
                font-size: 1rem;
            }

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
    <div class="black_block">

        <div class="blog_block">
            <div class="top_button_wrap">
                <div class="top_button active">Latest</div>
                <div class="top_button">Popular</div>
                <div class="top_button">Commented</div>
            </div>
            <div class="blog_list_wrap">
                <div class="blog_post">
                    <div class="post_gallery">
                        <div class="post_gallery_image"></div>
                        <div class="post_gallery_btn left"></div>
                        <div class="post_gallery_btn right"></div>
                    </div>
                    <div class="post_text_block_wrap">
                        <div class="tag_text">Fashion</div>
                        <div class="post_title">
                            William Saliba is Championing Unapologetic Individuality as Croc's Latest Ambassador
                        </div>
                        <div class="post_description">
                            "Going off-pitch" is an opportunity to showcase who I am and my creativity through my fashion," the footballer says in an exclusive interview with Hypebeast.
                        </div>
                        <div class="post_change_button_wrap">
                            <div class="post_change_button left"></div>
                            <div class="post_change_button right"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer_text">
            Copyright © <?php echo date('Y'); ?>
            All rights reserved.
            <br>
            Statue of Culture
        </div>
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

        {
            let top_buttons = document.querySelectorAll('.top_button');
            top_buttons.forEach(function (item) {

                item.addEventListener('click', function () {
                    top_buttons.forEach(function (item) {
                        item.classList.remove('active');
                    });
                    this.classList.add('active');
                });

            });

        }

    </script>
</body>