<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPETUS</title>

    <!--font awesome-->  
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <!--google font poppins-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="snakeGame/main.css" />
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
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



    <!-- #gameContainer is the main game board-->
    <div id="gameC"></div>

    <!-- #scoreContainer contains the scores  -->
    <div id="scoreC">
      <div class="scoreBoard">Food: <span id="pointsEarned">0</span></div>
      <div class="scoreBoard">Blocks: <span id="blocksTravelled">0</span></div>
    </div>

    <!-- #onScreenControllers contains the navigation buttons for mobile screens -->
    <div id="onScreenControllers">
      <button id="leftButton">◀️</button>
      <div>
        <button id="upButton">🔼</button>
        <button id="downButton">🔽</button>
      </div>
      <button id="rightButton">▶️</button>
    </div>

</body>

<script src="snakeGame/jscript.js"></script>
</html>
