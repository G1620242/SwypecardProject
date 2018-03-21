<?php
include("newadmin.php");
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

       <?php include("admin_navbar.php");?>
       
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
          <input name="adminusername" type="text" class="validate">
          <label for="adminusername">Username</label>
        </div>
        <div class="input-field col s6">
          <input name="adminpassword" type="text" class="validate">
          <label for="adminpassword">Password</label>
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