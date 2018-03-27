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

    <?php include("logged_in_navbar.php");?>
    
        <br>


        <div class="section">
        <div class="container">
            <div class="col s12 m4 l8">

            <p1 class="flow-text"><?php echo "Username: " . $row["Username"] . "</br>"?></p1>
            <p1 class="flow-text"><?php echo "First Name: " . $row["FirstName"] . "</br>"?></p1>
            <p1 class="flow-text"><?php echo "Last Name: " . $row["LastName"] . "</br>"?></p1>
            <p1 class="flow-text"><?php echo "Address: " . $row["Address"] . "</br>"?></p1>
            <p1 class="flow-text"><?php echo "Date of Birth: " . $row["DOB"] . "</br>"?></p1>
            <p1 class="flow-text"><?php echo "Phone Number: " . $row["PhoneNumber"] . "</br>"?></p1>
            <h2 class="flow-text"><a href="edit.php">Edit</a></h2>
            </div>
        </div>
    </div>


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
