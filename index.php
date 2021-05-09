<?php ?>
<!--HTML boiler plate-->

<!DOCTYPE html>
<html lang="en">
<style>
  .loader-wrapper {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1000;
  }

  .loader-wrapper .loader {
    display: block;
    position: relative;
    left: 50%;
    top: 50%;
    width: 100px;
    height: 100px;
    margin-top: -50px;
    margin-left: -50px;
    border: 3px solid transparent;
    border-top-color: white;
    border-radius: 50%;
    z-index: 1001;
    -webkit-animation: spin 1.5s infinite linear;
    animation: spin 1.5s infinite linear;
  }

  .loader-wrapper .loader:before,
  .loader-wrapper .loader:after {
    content: '';
    position: absolute;
    border-radius: 50%;
  }

  .loader-wrapper .loader:before {
    top: 5px;
    left: 5px;
    right: 5px;
    bottom: 5px;
    border: 3px solid transparent;
    border-top-color: white;
    -webkit-animation: spin 2s infinite linear;
    animation: spin 2s infinite linear;
  }

  .loader-wrapper .loader:after {
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    border: 3px solid transparent;
    border-top-color: white;
    -webkit-animation: spin 1s infinite linear;
    animation: spin 1s infinite linear;
  }

  @-webkit-keyframes spin {
    0% {
      -webkit-transform: rotate(0);
      transform: rotate(0);
    }

    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  @keyframes spin {
    0% {
      -webkit-transform: rotate(0);
      transform: rotate(0);
    }

    100% {
      -webkit-transform: rotate(360deg);
      transform: rotate(360deg);
    }
  }

  /*Section */
  .loader-section {
    position: fixed;
    top: 0;
    width: 51%;
    height: 100%;

    background: black;
    z-index: 1000;
  }

  .loader-section.section-left {
    left: 0;
  }

  .loader-section.section-right {
    right: 0;
  }

  /*Finished Loading Styles*/
  .loaded .section-left {
    -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
  }

  .loaded .section-right {
    -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
  }

  .loaded .loader {
    -webkit-transition: all 0.3s ease-out;
    transition: all 0.3s ease-out;
    opacity: 0;
  }

  .loaded .loader-wrapper {
    visibility: hidden;
    -webkit-transform: translateY(-100%);
    transform: translateY(-100%);
    -webkit-transition: all 0.3s 1s ease-out;
    transition: all 0.3s 1s ease-out;
  }

  /*Content*/
  .content {
    margin: 0 auto;
    padding-bottom: 50px;
    width: 80%;
    max-width: 978px;
  }
</style>
<script>
  setTimeout(function() {
    $('body').addClass('loaded');
  }, 1000);
</script>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Impetus 21</title>
  <link rel="icon" href="/logo.png" type="image/x-icon">
  <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!--font awesome-->
  <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!--bootstrap js-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!--google font poppins-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
          <a href="./index.php" class="nav-item nav-link active">Home</a>
          <a href="#" class="nav-item nav-link">About</a>
          <a href="#" class="nav-item nav-link">Epsilon</a>
          <a href="./gallery.php" class="nav-item nav-link">Gallery</a>
          <a href="./events.php" class="nav-item nav-link">Events</a>
          <a href="./covid_awarness.php" class="nav-item nav-link">Covid Awarness</a>

        </div>
      </div>
    </nav>
    <div class="content">
      <div class="loader-wrapper">
        <div class="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
      </div>
    </div>
    <div class="text-center">
      <div class="row m-0">

        <div class="col-12 col-sm-6 text-center res-game">
          <!--<img class="res-img" src="test1.gif" alt="test1">-->
          <p class="text-center" style="color:white;">W A S D</p>
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
                     text-shadow: -2px -2px 0 #fff, 2px -2px 0 #fff, -2px 2px 0 #fff, 2px 2px 0 #fff;">IMPETUS 21.0
          </h1>
          <p class="responsive-tx font-wight-bold text-center mb-5 animate__animated animate__fadeIn animate__delay-40s" style="color:white;">Retro Rewind: The Past That Never Was</p>
          <button type="button" class="btn btn-light res-pad res-mar rounded-pill" style="background-color: white;">Register</button>
          <button type="button" class="btn btn-light res-pad res-mar rounded-pill" style="background-color: white;">See
            what's happening</button>
          <p id="demo" class="font-weight-bold mt-4 responsive-tx" style="color:white;"></p>
          <button type="button" class="btn btn-light res-pad res-mar rounded-pill" style="background-color: white;">Epsilon</button>
          <button type="button" class="btn btn-light res-pad res-mar rounded-pill" style="background-color: white;" data-toggle="modal" data-target="#exampleModalCenter">About</button>
          <a href="https://www.youtube.com/watch?v=1Eg2gHnAGw8&t=2s"><button type="button" class="btn btn-light res-pad res-mar rounded-pill" style="background-color: white;">Impetus 20.0</button></a>


          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">IMPETUS</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  IMPETUS is our National level Annual Technical Extravaganza started in the year 2001. For twenty years now, it has
                  been serving as a platform for the students to showcase their skills and share their views.This year's iteration,
                  IMPETUS 21.0 is a fest designed for change. The COVID -19 pandemic has disrupted the normal lifestyle and has not
                  only thrown the academic schedule out of gear, but has also stolen the opportunity to make memories and experience
                  the joy of college fests. In order to help people beat the lockdown blues and also to ensure safety, we are
                  conducting our Annual National-level Technical fest IMPETUS 21.0 in virtual mode for the first time, i.e all the
                  events will be conducted in online mode. As we all like to reminisce about how things were, it's time to bring
                  back that feeling of nostalgia with retro technology. We aim towards bringing out nostalgic and old school
                  technology, which would enable the masses to disconnect from the present network without losing access of things
                  we want. IEEE UVCE presents you IMPETUS 21.0, Retro Rewind: The Past That Never Was
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-dark" data-dismiss="modal">Okay!</button>
                </div>
              </div>
            </div>
          </div>




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
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">ABOUT</h1>
    <p class="text-center mt-2 p-4 font-weight-bold">
      IMPETUS is our National level Annual Technical Extravaganza started in the year 2001. For twenty years now, it has
      been serving as a platform for the students to showcase their skills and share their views.This year's iteration,
      IMPETUS 21.0 is a fest designed for change. The COVID -19 pandemic has disrupted the normal lifestyle and has not
      only thrown the academic schedule out of gear, but has also stolen the opportunity to make memories and experience
      the joy of college fests. In order to help people beat the lockdown blues and also to ensure safety, we are
      conducting our Annual National-level Technical fest IMPETUS 21.0 in virtual mode for the first time, i.e all the
      events will be conducted in online mode. As we all like to reminisce about how things were, it's time to bring
      back that feeling of nostalgia with retro technology. We aim towards bringing out nostalgic and old school
      technology, which would enable the masses to disconnect from the present network without losing access of things
      we want. IEEE UVCE presents you IMPETUS 21.0, Retro Rewind: The Past That Never Was
    </p>
  </div>

  <!--Events-->
  <div id="part3" class="p-2" style="background-color:#ffefd5;">
    <h1 class="responsive-md text-center mt-2" style="color: #000;
            text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">FLAGSHIP EVENTS</h1>
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



  <!--Contact us-->
  <h1 class="responsive-md text-center mt-2 p-2" style="color: white;
      text-shadow: -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff, 1px 1px 0 #fff;">ABOUT</h1>
  <div class="row p-4 m-0">
    <div class="col-12 col-sm-6">
      <h1 class="responsive-tx font-wight-bold" style="color:white;">IMPETUS 21.0</h1>
      <p style="color:white;">IEEE UVCE</p>
      <p style="color:white;">Social Media Icons</p>
    </div>
    <div class="col-12 col-sm-6">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1" style="color:white;">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
          <small id="emailHelp" class="form-text text-muted" style="color:white;">We'll never share your email with
            anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1" style="color:white;">Message</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>


  <br><br>





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
      document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
        minutes + "m " + seconds + "s ";

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
    @media (min-width:320px) {
      .res-game {
        padding-left: 8vw;
        padding-right: 8vw;
      }

      .responsive-md {
        font-size: 24px;
      }

      .responsive-lg {
        font-size: 36px;
      }

      .responsive-tx {
        font-size: 16px;
      }

      .res-pad {
        padding: 10px;
      }

      .res-pad-flag {
        padding: 8px;
      }

      .res-mar {
        margin: 8px;
      }

      /* smartphones, iPhone, portrait 480x320 phones */
    }

    @media (min-width:481px) {
      .res-game {
        padding-left: 10vw;
        padding-right: 10vw;
      }

      .responsive-md {
        font-size: 64px;
      }

      .responsive-lg {
        font-size: 88px;
      }

      .responsive-tx {
        font-size: 32px;
      }

      .res-pad {
        padding: 20px;
      }

      .res-pad-flag {
        padding: 24px;
      }

      .res-mar {
        margin: 16px;
      }

      /* portrait e-readers (Nook/Kindle), smaller tablets @ 600 or @ 640 wide. */
    }

    @media (min-width:641px) {
      .res-game {
        padding-left: 10vw;
        padding-right: 10vw;
      }

      .responsive-md {
        font-size: 64px;
      }

      .responsive-lg {
        font-size: 88px;
      }

      .responsive-tx {
        font-size: 32px;
      }

      .res-pad {
        padding: 20px;
      }

      .res-pad-flag {
        padding: 24px;
      }

      .res-mar {
        margin: 16px;
      }

      /* portrait tablets, portrait iPad, landscape e-readers, landscape 800x480 or 854x480 phones */
    }

    @media (min-width:961px) {
      .res-game {
        padding-left: 10vw;
        padding-right: 10vw;
      }

      .responsive-md {
        font-size: 64px;
      }

      .responsive-lg {
        font-size: 88px;
      }

      .responsive-tx {
        font-size: 32px;
      }

      .res-pad {
        padding: 20px;
      }

      .res-pad-flag {
        padding: 24px;
      }

      .res-mar {
        margin: 16px;
      }

      /* tablet, landscape iPad, lo-res laptops ands desktops */
    }

    @media (min-width:1025px) {
      .res-game {
        padding-left: 10vw;
        padding-right: 10vw;
      }

      .responsive-md {
        font-size: 64px;
      }

      .responsive-lg {
        font-size: 88px;
      }

      .responsive-tx {
        font-size: 32px;
      }

      .res-pad {
        padding: 20px;
      }

      .res-pad-flag {
        padding: 24px;
      }

      .res-mar {
        margin: 16px;
      }

      /* big landscape tablets, laptops, and desktops */
    }

    @media (min-width:1281px) {
      .res-game {
        padding-left: 10vw;
        padding-right: 10vw;
      }

      .responsive-md {
        font-size: 64px;
      }

      .responsive-lg {
        font-size: 88px;
      }

      .responsive-tx {
        font-size: 32px;
      }

      .res-pad {
        padding: 20px;
      }

      .res-pad-flag {
        padding: 24px;
      }

      .res-mar {
        margin: 16px;
      }

      /* hi-res laptops and desktops */
    }
  </style>
</body>

</html>