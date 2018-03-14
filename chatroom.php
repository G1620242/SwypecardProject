<?php
include("config.php"); 
include("functions.php");
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
      <script> $(document).ready(function(){$('.parallax').parallax();});</script>
      <script>$( document ).ready(function(){$(".button-collapse").sideNav();})</script>
      <script>$( document ).ready(function)(){$(".dropdown-button").dropdown();})</script>
        <!--Navbar Start"-->
   <ul id="dropdown1" class="dropdown-content">
        <li><a href="loginbus_services.html">Bus</a></li>
        <li class="divider"></li>
        <li><a href="logintrain_services.html">Trains</a></li>
        <li class="divider"></li>
        <li><a href="taxi_services.html">Taxi</a></li>
    </ul>
    <ul id="dropdown2" class="dropdown-content">
        <li><a href="loginbus_services.html">Bus</a></li>
        <li class="divider"></li>
        <li><a href="logintrain_services.html">Trains</a></li>
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
            <li><a href="sign_up.php">Sign Up</a></li>
            <li><a href="log_in.php">Log In</a></li>
      </ul>
         <ul class="side-nav" id="mobile-demo">
             <li><a href="loginabout.html">About</a></li>
             <li><a class = "dropdown-button" href="#" data-activates="dropdown2">Services <i class="material-icons right">arrow_drop_down</i></a></li>
             <li><a href="booking.html">Book</a></li>
             <li><a href="faq.html">FAQ</a></li>
             <li><a href="sign_up.php">Sign Up</a></li>
             <li><a href="log_in.php">Log In</a></li>
      </ul>
    </div>
  </nav>
        <!--Navbar End-->
        
        
       <div class="container">
        <h3>Support Board</h3>
           <br>
           <?php echo $info; ?>
        <form action="">
                <table class="table table-striped">

                    <thead>

                    <tr>
                       <th>Author</th>
                       <th>Message</th>
                    </tr>

                    </thead>

                    <tbody>
                       <?php message() ?>
                    </tbody>

                </table>
            </form> 
 <?php       
    $info = "";
        if($_SERVER["REQUEST_METHOD"] == "POST") {

    $author = mysqli_real_escape_string($conn,$_POST["author"]);
    $message = mysqli_real_escape_string($conn,$_POST["message"]);
   
   

    $sql = "INSERT INTO message (author, message)
    VALUES ('$author', '$message')";
    if (mysqli_query($conn, $sql)) {
        header("Location: chatroom.php")
        $info = "Message Added Successfully";
    } else {
        $info ="Unable to Add Message";
    }
}

?>
                    <form class="col s4" method="post">
               <div class="row">
             <div class="input-field col s12">
              <input name="author" type="text" class="validate">
              <label for="author">Author</label>
            </div>
        </div>
            <div class="row">
            <div class="input-field col s12">
              <input name="message" type="text" class="validate">
              <label for="message">message</label>
            </div>
          </div>

          <!--SUBMIT BUTTON-->
          <button class="btn waves-effect waves-light" type="submit" name="Submit">Submit
        <i class="material-icons right">send</i>
      </button>
        </form>
        

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
