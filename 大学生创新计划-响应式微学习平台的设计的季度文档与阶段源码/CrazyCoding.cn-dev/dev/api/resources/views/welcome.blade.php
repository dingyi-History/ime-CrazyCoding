<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>CrazyCoding | 第一家IT技术流式手把手操练平台</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="fullPage full-screen backgrounds." />
    <meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,backgrounds,full-screen" />
    <meta name="Resource-type" content="Document" />

    <link rel="stylesheet" type="text/css" href="/js/fullpagejs/jquery.fullPage.css" />
    <link rel="stylesheet" type="text/css" href="/js/fullpagejs/examples.css" />
    <style>

        /* Style for our header texts
        * --------------------------------------- */
        h1{
            font-size: 3em;
            font-family: arial,helvetica;
            color: #fff;
            margin:0;
            padding:0;
        }

        /* Centered texts in each section
        * --------------------------------------- */
        .section{
            text-align:center;
            overflow: hidden;
        }


        /* Backgrounds will cover all the section
        * --------------------------------------- */
        .section{
            background-size: cover;
        }
        .slide{
            background-size: cover;
        }

        /* Defining each section background and styles
        * --------------------------------------- */
        #section0{
            background-image: url("/js/fullpagejs/imgs/bg1.jpg");
            padding: 30% 0 0 0;
        }
        #section2{
            background-image: url("/js/fullpagejs/imgs/bg3.jpg");
            padding: 6% 0 0 0;
        }
        #section3{
            background-image: url("/js/fullpagejs/imgs/bg4.jpg");
            padding: 6% 0 0 0;
        }
        #section3 h1{
            color: #000;
        }


        /*Adding background for the slides
       * --------------------------------------- */
        #slide1{
            background-image: url("/js/fullpagejs/imgs/bg2.jpg");
            padding: 6% 0 0 0;
        }
        #slide2{
            background-image: url("/js/fullpagejs/imgs/bg5.jpg");
            padding: 6% 0 0 0;
        }


        /* Bottom menu
        * --------------------------------------- */
        #infoMenu li a {
            color: #fff;
        }
        #myVideo{
            position: absolute;
            right: 0;
            bottom: 0;
            top:0;
            right:0;
            width: 100%;
            height: 100%;
            background-size: 100% 100%;
            background-color: black; /* in case the video doesn't fit the whole page*/
            background-image: /* our video */;
            background-position: center center;
            background-size: contain;
            object-fit: cover; /*cover video background */
            z-index:3;
        }
        #section0 .layer{
            position: absolute;
            z-index: 4;
            width: 100%;
            left: 0;
            top: 43%;
        }
    </style>

    <!--[if IE]>
    <script type="text/javascript">
        var console = { log: function() {} };
    </script>
    <![endif]-->

    <script src="/js/jquery/jquery214.js"></script>
    <script src="/js/jquery/jquery-ui.min.js"></script>

    <script type="text/javascript" src="/js/fullpagejs/jquery.fullPage.js"></script>
    <script type="text/javascript" src="/js/fullpagejs/examples.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#fullpage').fullpage({
                verticalCentered: true,
                sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE'],
                afterRender: function(){
                    //playing the video
                    $('video').get(0).play();
                }

            });
        });
    </script>
</head>
<body>


<div id="fullpage">
    <div class="section " id="section0">
        <video autoplay loop muted id="myVideo">
            <source src="/js/fullpagejs/imgs/flowers.mp4" type="video/mp4">
            <source src="/js/fullpagejs/imgs/flowers.webm" type="video/webm">
        </video>
        <div class="layer">
            <div style="background: rgba(0,0,0,0.6);">
            <h1 style="font-size:4em;">CrazyCoding.cn</h1>
            <h2 style="color: #FFFFFF;font-size:1.5em; "> 第一家IT技术流式手把手操练平台</h2>
            </div>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="slide" id="slide1" style="font-size:2em;background: rgba(0,0,0,0.6);"><h1>疯狂代码</h1></div>
        <div class="slide" id="slide2" style="font-size:2em;background: rgba(0,0,0,0.6);"><h1>流程图 + 手把手操练</h1></div>
    </div>
    <div class="section" id="section2"><h1 style="font-size: 2.5em;background: rgba(0,0,0,0.6);">不会做设计的程序员不是好的开发者 --by dingyiming</h1></div>
    <div class="section" id="section3"><h1 style="color:#FFFFFF;font-size: 2.5em;background: rgba(0,0,0,0.6);">CrazyCoding<br />for developer </h1></div>
</div>

</body>
</html>