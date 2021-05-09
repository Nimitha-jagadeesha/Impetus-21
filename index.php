<?php ?>
<!--HTML boiler plate-->
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Impetus 21</title>
      <link rel="icon" href="/logo.png" type = "image/x-icon">
      <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <!--font awesome-->  
      <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <!--bootstrap js-->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <!--google font poppins-->
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
      <link rel="stylesheet" href="snakeGame/main.css">
   </head>
   <body style="font-family:'Poppins', sans-serif;background-color:black;">
      <div id="part1" class="p-2">
         <!--style="background-color:black;"-->
         <nav class="navbar navbar-expand-md navbar-dark" style="background-color:black;color:white;">
            <a href="#" class="navbar-brand"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
               <div class="navbar-nav">
                  <a href="#" class="nav-item nav-link active">Home</a>
                  <a href="#" class="nav-item nav-link">About</a>
               </div>
            </div>
         </nav>

        <div class="text-center">
          <div class="row m-0">

               <div class="col-12 col-sm-6 text-center res-game">
                  <!--<img class="res-img" src="test1.gif" alt="test1">-->
                  <div id="gameC" style="margin:0px;">
                  </div>
                  <!-- #scoreContainer contains the scores  -->
                  <div id="scoreC text-center">
                     <div class="scoreBoard">Food: <span id="pointsEarned">0</span></div>
                     <!--<div class="scoreBoard">Blocks: <span id="blocksTravelled">0</span></div>-->
                  </div>
                  <!-- #onScreenControllers contains the navigation buttons for mobile screens -->
                  <div id="onScreenControllers">
                     <button id="leftButton"><i class="fa fa-chevron-left" style="color: white;"></i></button>
                     <div>
                        <button id="upButton"><i class="fa fa-chevron-up" style="color: white;"></i></button>
                        <button id="downButton"><i class="fa fa-chevron-down" style="color: white;"></i></button>
                     </div>
                     <button id="rightButton"><i class="fa fa-chevron-right" style="color: white;"></i></button>
                  </div>
               </div>

               <div class="col-12 col-sm-6 text-center">
                  <h1 class="responsive-lg mt-2 text-center" style="color: black;
                     text-shadow: -2px -2px 0 #fff, 2px -2px 0 #fff, -2px 2px 0 #fff, 2px 2px 0 #fff;">IMPETUS 21.0</h1>
                  <p class="responsive-tx font-wight-bold text-center mb-5 animate__animated animate__fadeIn animate__delay-40s" style="color:white;">Retro Rewind: The Past That Never Was</p>
                  <button type="button" class="btn btn-light res-pad res-mar rounded-pill" style="background-color: white;">Register</button>
                  <button type="button" class="btn btn-light res-pad res-mar rounded-pill" style="background-color: white;">See what's happening</button>
                  <p id="demo" class="font-weight-bold mt-4 responsive-tx" style="color:white;"></p>
               </div>

          </div>
        </div>
         <div class="ml-4 mr-4 mb-2 mt-2">
            <!--<h1 class="responsive-md font-wight-bold text-center" style="color:white;">TECHNICAL EXTRAVAGANZA</h1>-->
            <!--<h1 class="responsive-md text-center mt-2" style="color: black;
               text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;">TECHNICAL EXTRAVAGANZA</h1>-->
         </div>
         <div class="pb-5"></div>
      </div>

      <!--Flagship events-->
      <div id="part2" class="p-2" style="background-color: #f7d298;">
        <h1 class="responsive-md text-center mt-2" style="color: black;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">FLAGSHIP EVENTS</h1>
         <div class="row m-4">
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 res-pad-flag">
               <h1 class="responsive-md font-wight-bold" style="color:black;">FLAGSHIP EVENT ONE</h1>
               <p>Random Text</p>
            </div>
         </div>
         <div class="row m-4">
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 res-pad-flag">
               <h1 class="responsive-md font-wight-bold" style="color:black;">FLAGSHIP EVENT TWO</h1>
               <p>Random Text</p>
            </div>
         </div>
         <div class="row m-4">
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 res-pad-flag">
               <h1 class="responsive-md font-wight-bold" style="color:black;">FLAGSHIP EVENT THREE</h1>
               <p>Random Text</p>
            </div>
         </div>
         <div class="row m-4">
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 res-pad-flag">
               <h1 class="responsive-md font-wight-bold" style="color:black;">FLAGSHIP EVENT FOUR</h1>
               <p>Random Text</p>
            </div>
         </div>
         <div class="row m-4">
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 res-pad-flag">
               <h1 class="responsive-md font-wight-bold" style="color:black;">FLAGSHIP EVENT FIVE</h1>
               <p>Random Text</p>
            </div>
         </div>
         <div class="row m-4">
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
            </div>
            <div class="col-12 col-sm-6 res-pad-flag">
               <h1 class="responsive-md font-wight-bold" style="color:black;">FLAGSHIP EVENT SIX</h1>
               <p>Random Text</p>
            </div>
         </div>
      </div>

      <!--Events-->
      <div id="part3" class="p-2" style="background-color:#ffefd5;">
         <h1 class="responsive-md text-center mt-2" style="color: #000;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">EVENTS</h1>
         <div class="row m-4">
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
               <h1 class="responsive-md font-wight-bold" style="color:black;">EVENT ONE</h1>
               <p>Random Text</p>
            </div>
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
               <h1 class="responsive-md font-wight-bold" style="color:black;">EVENT TWO</h1>
               <p>Random Text</p>
            </div>
         </div>
         <div class="row m-4">
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
               <h1 class="responsive-md font-wight-bold" style="color:black;">EVENT THREE</h1>
               <p>Random Text</p>
            </div>
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
               <h1 class="responsive-md font-wight-bold" style="color:black;">EVENT FOUR</h1>
               <p>Random Text</p>
            </div>
         </div>
         <div class="row m-4">
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
               <h1 class="responsive-md font-wight-bold" style="color:black;">EVENT FIVE</h1>
               <p>Random Text</p>
            </div>
            <div class="col-12 col-sm-6 res-pad-flag">
               <img src="test.jpg" alt="test" class="img-fluid">
               <h1 class="responsive-md font-wight-bold" style="color:black;">EVENT SIX</h1>
               <p>Random Text</p>
            </div>
         </div>
      </div>

      <!--Sponsors-->
      <div id="part-4" class="res-pad" style="background-color:ivory">
        <h1 class="responsive-md text-center mt-2" style="color: #000;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">SPONSORS</h1>
        <div class="row">
          <div class="col-6 col-sm-3 p-2">
            <img src="test.jpg" alt="test" class="img-fluid">
          </div>
          <div class="col-6 col-sm-3 p-2">
            <img src="test.jpg" alt="test" class="img-fluid">
          </div>
          <div class="col-6 col-sm-3 p-2">
            <img src="test.jpg" alt="test" class="img-fluid">
          </div>
          <div class="col-6 col-sm-3 p-2">
            <img src="test.jpg" alt="test" class="img-fluid">
          </div>
        </div>

        <br><br>
      </div>










      </div>
      <!-- Display the countdown timer in an element -->
      <script>
         // Set the date we're counting down to
         var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
         
         // Update the count down every 1 second
         var x = setInterval(function() {
         
           // Get today's date and time
           var now = new Date().getTime();
         
           // Find the distance between now and the count down date
           var distance = countDownDate - now;
         
           // Time calculations for days, hours, minutes and seconds
           var days = Math.floor(distance / (1000 * 60 * 60 * 24));
           var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
           var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
           var seconds = Math.floor((distance % (1000 * 60)) / 1000);
         
           // Display the result in the element with id="demo"
           document.getElementById("demo").innerHTML = days + "d " + hours + "h "
           + minutes + "m " + seconds + "s ";
         
           // If the count down is finished, write some text
           if (distance < 0) {
             clearInterval(x);
             document.getElementById("demo").innerHTML = "EXPIRED";
           }
         }, 1000);
      </script>  
      <script src="snakeGame/jscript.js"></script>
      <style>
         /*Media Queries*/
         @media (min-width:320px)  { .res-game{padding-left:8vw;padding-right: 8vw;}.res-img{width:100%;height:100%;} .responsive-md{font-size:24px;} .responsive-lg{font-size:36px;} .responsive-tx{font-size:16px;} .res-pad{padding:10px;} .res-pad-flag{padding:8px;} .res-mar{margin:8px;} /* smartphones, iPhone, portrait 480x320 phones */ }
         @media (min-width:481px)  { .res-game{padding-left:10vw;padding-right: 10vw;} .responsive-md{font-size:64px;} .responsive-lg{font-size:88px;} .responsive-tx{font-size:32px;} .res-pad{padding:20px;} .res-pad-flag{padding:24px;} .res-mar{margin:16px;} /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */ }
         @media (min-width:641px)  { .res-game{padding-left:10vw;padding-right: 10vw;} .responsive-md{font-size:64px;} .responsive-lg{font-size:88px;}  .responsive-tx{font-size:32px;} .res-pad{padding:20px;} .res-pad-flag{padding:24px;} .res-mar{margin:16px;} /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */ }
         @media (min-width:961px)  { .res-game{padding-left:10vw;padding-right: 10vw;} .responsive-md{font-size:64px;}  .responsive-lg{font-size:88px;} .responsive-tx{font-size:32px;} .res-pad{padding:20px;} .res-pad-flag{padding:24px;} .res-mar{margin:16px;} /* tablet, landscape iPad, lo-res laptops ands desktops */ }
         @media (min-width:1025px) { .res-game{padding-left:10vw;padding-right: 10vw;} .responsive-md{font-size:64px;}  .responsive-lg{font-size:88px;} .responsive-tx{font-size:32px;} .res-pad{padding:20px;} .res-pad-flag{padding:24px;} .res-mar{margin:16px;} /* big landscape tablets, laptops, and desktops */ }
         @media (min-width:1281px) { .res-game{padding-left:10vw;padding-right: 10vw;} .responsive-md{font-size:64px;}  .responsive-lg{font-size:88px;} .responsive-tx{font-size:32px;} .res-pad{padding:20px;} .res-pad-flag{padding:24px;} .res-mar{margin:16px;} /* hi-res laptops and desktops */ }
      </style>
</html>
