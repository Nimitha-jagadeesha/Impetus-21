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
</style>
<script>
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 500);
</script>

<head>
    <meta charset="UTF-8">
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
                    <a href="./index.php" class="nav-item nav-link ">Home</a>
                    <a href="#" class="nav-item nav-link">About</a>
                    <a href="#" class="nav-item nav-link">Epsilon</a>
                    <a href="./gallery.php" class="nav-item nav-link active">Gallery</a>
                    <a href="./events.php" class="nav-item nav-link">Events</a>
                    <a href="./covid_awarness.php" class="nav-item nav-link">Covid Awarness</a>

                </div>
            </div>
        </nav>
    </div>

    <!--Flagship events-->
    <div id="part2" class="p-2" style="background-color: white;">
        <h1 class="responsive-md text-center mt-2" style="color: black;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Gallery</h1>
        <div class="w3-row-padding">
            <div class="w3-container w3-third">
                <img src="test.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
            <div class="w3-container w3-third">
                <img src="test.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
            <div class="w3-container w3-third">
                <img src="test.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
            <div class="w3-container w3-third">
                <img src="test.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
            <div class="w3-container w3-third">
                <img src="test.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
            <div class="w3-container w3-third">
                <img src="test.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
            <div class="w3-container w3-third">
                <img src="test.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
            <div class="w3-container w3-third">
                <img src="test.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
            <div class="w3-container w3-third">
                <img src="test.jpg" style="width:100%;cursor:pointer" onclick="onClick(this)" class="w3-hover-opacity">
            </div>
        </div>

        <div id="modal01" class="w3-modal" onclick="this.style.display='none'">
            <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
            <div class="w3-modal-content w3-animate-zoom">
                <img id="img01" style="width:100%">
            </div>
        </div>

        <script>
            function onClick(element) {
                document.getElementById("img01").src = element.src;
                document.getElementById("modal01").style.display = "block";
            }
        </script>

    </div>

    <div class="content">
        <div class="loader-wrapper">
            <div class="loader"></div>

            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
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