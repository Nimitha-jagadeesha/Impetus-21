<!DOCTYPE html>
<html>
  <head lang="en">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Snake v8</title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <!--google font poppins-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Link our styles from main.css -->
    <link rel="stylesheet" type="text/css" href="snakeGame/main.css" />
</head>


  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          
      </div>
    </nav>

    <!-- #gameContainer is the main game board-->
    <div id="gameC"></div>

    <!-- #scoreContainer contains the scores  -->
    <div id="scoreC">
      <div class="scoreBoard">Food: <span id="pointsEarned">0</span></div>
      <!--<div class="scoreBoard">Blocks: <span id="blocksTravelled">0</span></div>-->
    </div>

    <!-- #onScreenControllers contains the navigation buttons for mobile screens -->
    <div id="onScreenControllers">
      <button id="leftButton"><i class="fa fa-chevron-left"></i></button>
      <div>
        <button id="upButton"><i class="fa fa-chevron-up"></i></button>
        <button id="downButton"><i class="fa fa-chevron-down"></i></button>
      </div>
      <button id="rightButton"><i class="fa fa-chevron-right"></i></button>
    </div>

  </body>

  <!-- #Load our jscript.js containing the game logic -->
  <script src="snakeGame/jscript.js"></script>
</html>
