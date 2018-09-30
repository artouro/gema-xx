<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset("assets/gent/") }}/images/favicon.ico" type="image/ico" />
        <title>GEMA XX</title>  
        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('assets/gent') }}/custom/bootstrap-4.1.3/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link href="{{ asset('assets/gent') }}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset('assets/gent') }}/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="{{ asset('assets/gent') }}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="{{ asset("assets/gent") }}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link type="text/css" rel="stylesheet" href="{{ asset('assets/gent') }}/custom/main.css">
        <link href="https://fonts.googleapis.com/css?family=Teko:400,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Raleway:100,200,300,400,600,700,800,900|Montserrat:300,400,500" rel="stylesheet">
    </head>
    <body>
    <div class="lock text-center">
        <div class="lock__text">
            <h3>You're locked !</h3>
            <input type="text" placeholder="Password to unlock ..">
        </div>
    </div>
    <section id="banner" role="banner">
        <!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 banner__video_wrapper"> -->
            <!-- <video autoplay loop muted id="video-bg">
                <source src="{{ asset('assets/media') }}/bg.mp4" type="video/mp4">
            </video> -->
        <!-- </div> -->
        <div id="particles-js"></div>
        <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/gent/images') }}/logo-pramuka-be.png" height="50"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GEMA XX <sup>(coming soon)</sup></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/login') }}">Sign In</a>
                </li>
            </ul>
        </div>
    </nav>
        <div class="banner__gema">
            <div class="container">
                <div class="banner__gema_wrapper col-lg-12 text-center">
                    <img src="{{ asset('assets/gent/images') }}/logo-gema.png"/>
                    <div class="banner__gema_text">
                        <span class="slide-top">GEMA XX</span>
                        <br>
                        <span class="slide-middle">2019</span>
                        <br>
                        <p class="slide-bottom">Coming Soon</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="featured" class="section__content section--light" style="background-color:#F1F1F1">
        <div class="container">
            <div class="featured__header text-center">
                <h2>Let's join with us <br>at <span class="bigger">GEMA XX 2019!</span></h2>
                <p>
                    There has never been a better time to join GEMA XX! 
                    The competition is booming, and we want to build on our awesome foundation with
                    more talented youths looking to have fun and make real memorable event. 
                    We understand that youths reach their full potential when they're 
                    happy, and we're going to build an environment in GEMA XX where fulfilling all 
                    things we need for these youths to thrive.
                </p>
                <br><br>
                <button class="btn btn--join">Join Now</button>
                <!-- <input type="text" size="40" onkeypress="myFunction(event)">
                <p id="demo" class="section--light"></p> -->
            </div>
        </div>
    </section>
    <section id="partner" class="section__content section--light">
        <div class="container">
            <div class="partner__items text-center">
                <h2><span class="bigger">Our Partner</span></h2>
                <ul class="list-inline">
                    <li class="list-inline-item"><img src="{{ asset('assets/media') }}/boyman.jpg" width="200"></li>
                    <li class="list-inline-item"><img src="{{ asset('assets/media') }}/hilo.jpg" width="100"></li>
                </ul>
            </div>
        </div>
    </section>
    <footer class="section__content section--dark">
        <div class="container text-center">
            <h2><span class="bigger">Let's Connect</span></h2>
            <p>Follow us on social media for updates on opportunities.</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="" class="section--dark" ><i class="fa fa-facebook-official"></i></a></li>
                <li class="list-inline-item"><a href="" class="section--dark" ><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        <div class="copyright text-right">
            Copyright &copy; 2018. All rights reserved by Pramuka Satu Baleendah. 
        </div>
    </footer>


        <!-- jQuery -->
        <script src="{{ asset("assets/gent") }}/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="{{ asset("assets/gent") }}/custom/bootstrap-4.1.3/js/bootstrap.min.js"></script>
        <!-- Custom JS -->
        <script src="{{ asset("assets/gent") }}/custom/main.js"></script>
        <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script src="{{ asset('assets/gent/custom/particles-core.min.js') }}"></script>
        <!-- <script type="text/javascript">
            (function(){
                setTimeout(() => {
                    $(window).blur(function(){
                        $('.lock').show();
                    });
                }, 500);
            })();
            

            function myFunction(event) {
                var x = event.keyCode;               // Get the Unicode value
                var y = String.fromCharCode(x);      // Convert the value into a character
                document.getElementById("demo").innerHTML = "Number: " + x + " = Character: " + y;
            }
        </script> -->
    </body>
</html>