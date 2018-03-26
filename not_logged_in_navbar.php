
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>$( document ).ready(function(){$(".button-collapse").sideNav();})</script>
      <script>$( document ).ready(function(){$(".dropdown-button").dropdown();})</script>
        <!--Navbar Start"-->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="bus_services.php">Bus</a></li>
        <li class="divider"></li>
        <li><a href="train_services.php">Trains</a></li>
        <li class="divider"></li>
        <li><a href="taxi_services.php">Taxi</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="bus_services.php">Bus</a></li>
        <li class="divider"></li>
        <li><a href="train_services.php">Trains</a></li>
        <li class="divider"></li>
        <li><a href="taxi_services.php">Taxi</a></li>
    </ul>
    <nav class="nav">
    <div class="nav-wrapper container">
      <a href="index.php" class="brand-logo"><img src ="assets/SwypeCard%202.jpg"></a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="about.php">About</a></li>
            <li><a class = "dropdown-button" href="#" data-activates="dropdown1">Services <i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="faq.php">FAQ</a></li>
            <li><a href="sign_up.php">Sign Up</a></li>
            <li><a href="log_in.php">Log In</a></li>
      </ul>
         <ul class="side-nav" id="mobile-demo">
             <li><a href="about.php">About</a></li>
             <li><a class = "dropdown-button" href="#" data-activates="dropdown2">Services <i class="material-icons right">arrow_drop_down</i></a></li>
             <li><a href="faq.php">FAQ</a></li>
             <li><a href="sign_up.php">Sign Up</a></li>
             <li><a href="log_in.php">Log In</a></li>

      </ul>
    </div>
  </nav>
