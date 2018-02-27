<?php
include("config.php");
include("creatinguser.php");
$info = "";
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
        <li><a href="bus_services.html">Bus</a></li>
        <li class="divider"></li>
        <li><a href="train_services.html">Trains</a></li>
        <li class="divider"></li>
        <li><a href="taxi_services.html">Taxi</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="bus_services.html">Bus</a></li>
        <li class="divider"></li>
        <li><a href="train_services.html">Trains</a></li>
        <li class="divider"></li>
        <li><a href="taxi_services.html">Taxi</a></li>
    </ul>
    <nav class="nav">
    <div class="nav-wrapper container">
      <a href="index.html" class="brand-logo"><img src ="assets/SwypeCard%202.jpg"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="about.html">About</a></li>
            <li><a class = "dropdown-button" href="#" data-activates="dropdown1">Services <i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="booking.html">Book</a></li>
            <li><a href="faq.html">FAQ</a></li>
            <li><a href="sign_up.php">Sign Up</a></li>
             <li><a href="log_in.html">Log In</a></li>
      </ul>
         <ul class="side-nav" id="mobile-demo">
             <li><a href="about.html">About</a></li>
             <li><a class = "dropdown-button" href="#" data-activates="dropdown2">Services <i class="material-icons right">arrow_drop_down</i></a></li>
             <li><a href="booking.html">Book</a></li>
             <li><a href="faq.html">FAQ</a></li>
             <li><a href="sign_up.php">Sign Up</a></li>
             <li><a href="log_in.html">Log In</a></li>
      </ul>
    </div>
  </nav>
        <!--Navbar End-->
        <br>
        
             <div class="container">
 
       <img class="responsive-img" src="assets/HomePicture.jpg">
               
           <div class="col s12 m12 l12">
            <div class="card">
               <div class="card-content white-text">
                   <h4>Please fill in the form to create an account and get access to other features</h4>
               </div>
            </div>
         </div>
          <!--FORM START-->     
    <form class="col s12" method="post">
      <div class="row">
       <div class="input-field col s6">
          <input name="first_name" type="text" class="validate">
          <label for="first_name">First Name</label>
        </div>
        <div class="input-field col s6">
          <input name="last_name" type="text" class="validate">
          <label for="last_name">Last Name</label>
        </div>
        </div>
           <div class="row">
         <div class="input-field col s12">
          <input name="username" type="text" class="validate">
          <label for="username">Username</label>
        </div>
    </div>
        <div class="row">
        <div class="input-field col s12">
          <input name="password" type="password" class="validate">
          <label for="password">Password</label>
        </div>
      </div>        
       
      <div class="row">
         <div class="input-field col s12">
          <input name="address" type="text" class="validate">
          <label for="address">Address</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="age" type="date" class="validate">
          
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input name="email" type="email" class="validate">
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12">
          <input name="phone_number" type="text" class="validate">
          <label for="phone_number">Phone Number</label>
        </div>
      </div>
      <!--SUBMIT BUTTON-->
      <button class="btn waves-effect waves-light" type="submit" name="Submit">Submit
    <i class="material-icons right">send</i>
  </button>
    </form>
  </div>
  <?php echo ($info);?>

  <br>
        
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