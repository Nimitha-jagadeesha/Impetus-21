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

    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    .wrapper {
        width: 90%;
        margin: 0 auto;
        max-width: 80rem;
    }

    .cols {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
    }

    .col {
        width: calc(25% - 2rem);
        margin: 1rem;
        cursor: pointer;
    }

    .container {
        -webkit-transform-style: preserve-3d;
        transform-style: preserve-3d;
        -webkit-perspective: 1000px;
        perspective: 1000px;
    }

    .front {
        background-size: cover;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        background-position: center;
        -webkit-transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        transition: -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        -o-transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        transition: transform .7s cubic-bezier(0.4, 0.2, 0.2, 1), -webkit-transform .7s cubic-bezier(0.4, 0.2, 0.2, 1);
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        text-align: center;
        min-height: 280px;
        height: auto;
        border-radius: 10px;
        color: #fff;
        font-size: 1.5rem;
    }


    @media screen and (max-width: 64rem) {
        .col {
            width: calc(33.333333% - 2rem);
        }
    }

    @media screen and (max-width: 48rem) {
        .col {
            width: calc(50% - 2rem);
        }
    }

    @media screen and (max-width: 32rem) {
        .col {
            width: 100%;
            margin: 0 0 2rem 0;
        }
    }
</style>
<script>
    setTimeout(function() {
        $('body').addClass('loaded');
    }, 500);
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
                    <a href="./gallery.php" class="nav-item nav-link">Gallery</a>
                    <a href="./events.php" class="nav-item nav-link active">Events</a>
                    <a href="./covid_awarness.php" class="nav-item nav-link">Covid Awarness</a>

                </div>
            </div>
        </nav>
    </div>

    <!--Flagship events-->
    <div id="part2" class="p-2" style="background-color: white;">
        <h1 class="responsive-md text-center mt-2" style="color: black;
        text-shadow: -1px -1px 0 #000, 1px -1px 0 #000, -1px 1px 0 #000, 1px 1px 0 #000;">Events</h1>
        <div class="wrapper">
            <div class="row">
                <div class="col-12 col-md-4 mb-2" data-toggle="modal" data-target="#event1">
                    <div class="container">
                        <div class="front" style="background-image: url('test.jpg');">
                        </div>
                        <h5 class="text-center">Event-1</h5>
                    </div>
                </div>
                <div class="col-12 col-md-4 mb-2" data-toggle="modal" data-target="#event2">
                    <div class="container">
                        <div class="front" style="background-image: url('test.jpg');">
                        </div>
                        <h5 class="text-center">Event-2</h5>
                    </div>
                </div>
                <div class="col-12  col-md-4 mb-2" data-toggle="modal" data-target="#event3">
                    <div class="container">
                        <div class="front" style="background-image: url('test.jpg');">
                        </div>
                        <h5 class="text-center">Event-3</h5>
                    </div>
                </div>
                <div class="col-12  col-md-4 mb-2" data-toggle="modal" data-target="#event4">
                    <div class="container">
                        <div class="front" style="background-image: url('test.jpg');">
                        </div>
                        <h5 class="text-center">Event-4</h5>
                    </div>
                </div>
                <div class="col-12  col-md-4 mb-2" data-toggle="modal" data-target="#event5">
                    <div class="container">
                        <div class="front" style="background-image: url('test.jpg');">
                        </div>
                        <h5 class="text-center">Event-5</h5>
                    </div>
                </div>
                <div class="col-12  col-md-4 mb-2" data-toggle="modal" data-target="#event6">
                    <div class="container">
                        <div class="front" style="background-image: url('test.jpg');">
                        </div>
                        <h5 class="text-center">Event-6</h5>
                    </div>
                </div>
                <div class="col-12  col-md-4 mb-2" data-toggle="modal" data-target="#event7">
                    <div class="container">
                        <div class="front" style="background-image: url('test.jpg');">
                        </div>
                        <h5 class="text-center">Event-7</h5>
                    </div>
                </div>
                <div class="col-12  col-md-4 mb-2" data-toggle="modal" data-target="#event8">
                    <div class="container">
                        <div class="front" style="background-image: url('test.jpg');">
                        </div>
                        <h5 class="text-center">Event-8</h5>
                    </div>
                </div>
                <div class="col-12  col-md-4 mb-2" data-toggle="modal" data-target="#event9">
                    <div class="container">
                        <div class="front" style="background-image: url('test.jpg');">
                        </div>
                        <h5 class="text-center">Event-9</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="event1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Event-1</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="event2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Event-2</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="event3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Event-3</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="event4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Event-4</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="event5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Event-5</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="event6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Event-6</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="event7" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Event-7</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="event8" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Event-8</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="event9" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Event-9</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
        </div>
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