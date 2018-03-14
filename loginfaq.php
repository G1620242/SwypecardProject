<!DOCTYPE html>
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
      <script>$( document ).ready(function(){$(".button-collapse").sideNav();})</script>
      <script>$( document ).ready(function)(){$(".dropdown-button").dropdown();})</script>
      <script> $(document).ready(function(){ $('.collapsible').collapsible();});</script>
        <!--Navbar Start"-->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="loginbus_services.html">Bus</a></li>
        <li class="divider"></li>
        <li><a href="logintrain_services.html">Trains</a></li>
        <li class="divider"></li>
        <li><a href="logintaxi_services.html">Taxi</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="loginbus_services.html">Bus</a></li>
        <li class="divider"></li>
        <li><a href="logintrain_services.html">Trains</a></li>
        <li class="divider"></li>
        <li><a href="logintaxi_services.html">Taxi</a></li>
    </ul>
    <nav class="nav">
    <div class="nav-wrapper container">
      <a href="loginindexpage.php" class="brand-logo"><img src ="assets/SwypeCard%202.jpg"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="about.html">About</a></li>
            <li><a class = "dropdown-button" href="#" data-activates="dropdown1">Services <i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="loginbooking.html">Book</a></li>
            <li><a href="loginfaq.html">FAQ</a></li>
            <li><a href="sign_up.php">Sign Up</a></li>
             <li><a href="log_in.php">Log In</a></li>
      </ul>
         <ul class="side-nav" id="mobile-demo">
             <li><a href="about.html">About</a></li>
             <li><a class = "dropdown-button" href="#" data-activates="dropdown2">Services <i class="material-icons right">arrow_drop_down</i></a></li>
             <li><a href="loginbooking.html">Book</a></li>
             <li><a href="loginfaq.html">FAQ</a></li>
             <li><a href="sign_up.php">Sign Up</a></li>
             <li><a href="log_in.php">Log In</a></li>
      </ul>
    </div>
  </nav>
        <!--Navbar End-->
        <br>

           <div class="container">

       <img class="responsive-img" src="assets/HomePicture.jpg">

          <ul class="collapsible" data-collapsible="accordion">
    <li>
      <div class="collapsible-header">What do you do if you lose or break the card?</div>
      <div class="collapsible-body"><span>If your swype card breaks you can contact us to get a free replacement.</span></div>
    </li>
    <li>
      <div class="collapsible-header">How do you update the balance on your card online.</div>
      <div class="collapsible-body"><span>You can update your balance through online banking like paypal.</span></div>
    </li>
    <li>
      <div class="collapsible-header">Does the card work with every bus services</div>
      <div class="collapsible-body"><span>Bus services that are registered with swypecard are the only services that can use the card.</span></div>
    </li>
     <li>
      <div class="collapsible-header">What are the dimensions of the card </div>
      <div class="collapsible-body"><span>2 inches height and 3 inches width.</span></div>
    </li>
      <li>
      <div class="collapsible-header">Where does this card work?</div>
      <div class="collapsible-body"><span>This card only works in the United Kingdom.</span></div>
    </li>
    <li>
      <div class="collapsible-header">How do I disable my account?</div>
      <div class="collapsible-body"><span>You can contact us on our social media account and we can help you prepare in disabling your account.</span></div>
    </li>
         <li>
      <div class="collapsible-header">Can you apply for the card if you are an EU resident living in the UK</div>
      <div class="collapsible-body"><span>Yes you can.</span></div>
    </li>
    <li>
      <div class="collapsible-header">How long does it take for the card to arrive?</div>
      <div class="collapsible-body"><span>It can take up to 6 working days.</span></div>
    </li>
    <li>
      <div class="collapsible-header">How much does it cost for a replacement</div>
      <div class="collapsible-body"><span>The first replacement will be free but continuing replacements will have a £5.00 fee.</span></div>
    </li>
    <li>
      <div class="collapsible-header">Can phones be used as the card?</div>
      <div class="collapsible-body"><span>They cannot at the moment but it may be implemented in the future.</span></div>
    </li>
     </ul>
               


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
            © 2017 SwypeCard - Benjamin Gittus
            </div>
          </div>
        </footer>

    </body>
  </html>
