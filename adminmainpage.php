<?php
include("details.php");
?>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <!--My Style Sheet-->
      <link href="css/myStyleSheet.css" type="text/css" rel="stylesheet"/>
      <link type="text/css" rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"/>
    </head>
    <body>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script> $(document).ready(function(){$('.carousel').carousel();});</script>
      <script>$( document ).ready(function(){$(".button-collapse").sideNav();})</script>
      <script>$( document ).ready(function)(){$(".dropdown-button").dropdown();})</script>
        <!--Navbar Start"-->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="loginbus_services.html">Bus</a></li>
        <li class="divider"></li>
        <li><a href="train_services.html">Trains</a></li>
        <li class="divider"></li>
        <li><a href="taxi_services.html">Taxi</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="loginbus_services.html">Bus</a></li>
        <li class="divider"></li>
        <li><a href="train_services.html">Trains</a></li>
        <li class="divider"></li>
        <li><a href="taxi_services.html">Taxi</a></li>
    </ul>
    <nav class="nav">
    <div class="nav-wrapper container">
      <a href="loginindexpage.php" class="brand-logo"><img src ="assets/SwypeCard%202.jpg"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="loginabout.html">About</a></li>
            <li><a class = "dropdown-button" href="#" data-activates="dropdown1">Services <i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="loginbooking.html">Book</a></li>
            <li><a href="loginfaq.html">FAQ</a></li>
            <li><a href="chatroom.php">Support</a></li>
             <li><a href="profile.php">Profile</a></li>
             <li><a href="log_out.php">Log out</a></li>
      </ul>
         <ul class="side-nav" id="mobile-demo">
             <li><a href="loginabout.html">About</a></li>
             <li><a class = "dropdown-button" href="#" data-activates="dropdown2">Services <i class="material-icons right">arrow_drop_down</i></a></li>
             <li><a href="loginbooking.html">Book</a></li>
             <li><a href="loginfaq.html">FAQ</a></li>
             <li><a href="chatroom.php">Support</a></li>
             <li><a href="profile.php">Profile</a></li>
             <li><a href="log_out.php">Log out</a></li>

      </ul>
    </div>
  </nav>
        <!--Navbar End-->
        <br>

           <div class="container">

       <img class="responsive-img" src="assets/HomePicture.jpg">

               <div class="container center">
        <div class="col s12 m12 l3">
            <h1>Welcome <?php echo $row["Username"]; ?></h1>
        </div>
    </div>

        <div class="row">
         <div class="col s12 m6 l6">
            <div class="card">
               <div class="card-content white-text">
                  <span class="card-title"><h3>News and Updates</h3></span>
                  <p>Swypecard has now been launched for Trains, Buses and Taxis be sure to apply for the card on this website to get yours and try our service.</p>
               </div>
            </div>
         </div>

         <div class="col s12 m6 l6">
            <div class="card">
               <div class="card-content white-text">
                   <span class="card-title"><h3>Collaborations</h3></span>
                  <p>We are working with the public transport companies Arriva, London Midland, National Express to make our services as efficient as possible.</p>
               </div>
            </div>
         </div>

      </div>
       <!--Carousel Code-->
    </div>
    <div class="container">
    <div class="carousel">
    <a class="carousel-item" href="#one!"><img src="assets/Swypecard%20Product.jpg"></a>
    <a class="carousel-item" href="#two!"><img src="assets/Swypecard%20Product%20back.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="assets/trainpic2.jpeg"></a>
    <a class="carousel-item" href="#three!"><img src="assets/buspic2.jpg"></a>
    <a class="carousel-item" href="#three!"><img src="assets/buspic3.jpeg"></a>
  </div>
    </div>


        <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l12 s12">
                <h5 class="white-text">Contact Us</h5>
                <p class="grey-text text-lighten-4">Tel: 0300 456 2424</p>
                 <p class="grey-text text-lighten-4">Email: SwypeCard@gmail.com</p>
                  <p class="grey-text text-lighten-4">Address: The Friary, Lichfield WS13 6QG</p>
                <a href="https://en-gb.facebook.com/" class="fa fa-facebook"></a>
                <a href="https://twitter.com/" class="fa fa-twitter"></a>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
             2017 SwypeCard - Benjamin Gittus
            </div>
          </div>
        </footer>

    </body>
  </html>