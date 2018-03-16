<?php
include("userdetails.php");
include("editingdetails.php");
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
      <script>$( document ).ready(function(){$(".dropdown-button").dropdown();})</script>
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
      <a href="loginindex.php" class="brand-logo"><img src ="assets/SwypeCard%202.jpg"></a>
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
        
           
        <div class="section">
        <div class="container">
            <form action = "" method = "post">
                <label>Username : </label>
                <input type = "text" name = "username" value = "<?php echo $row["Username"]?>" class = "box"/><br /><br />
                <label>First Name :</label>
                <input type = "text" name = "first_name" value = "<?php echo $row["FirstName"]?>" class = "box"/><br /><br />
                <label>Last Name :</label>
                <input type = "text" name = "last_name" value = "<?php echo $row["LastName"]?>" class = "box"/><br /><br />
                <label>Address :</label>
                <input type = "text" name = "address" value = "<?php echo $row["Address"]?>" class = "box"/><br /><br />
                <label>Age : </label>
                <input type = "text" name = "age" value = "<?php echo $row["DOB"]?>" class = "box"/><br /><br />
                <label>Phone Number: </label>
                <input type = "text" name = "phone_number" value = "<?php echo $row["PhoneNumber"]?>" class = "box"/><br /><br />
                <button class="waves-effect waves-light btn" type="submit" name="update">Edit</button>
                <button class="waves-effect waves-light btn" type="submit" name="delete">Remove</button>
            </form>
            <div><?php echo $info; ?></div>
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