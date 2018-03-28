<?php
include("admindetails.php");
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
     </div>

     <div class="center">
       <div class='col s12 m12 l12'>
         <div class='container'>
         <table>
         <tr><th>Username</th><th>Email
         </th><th>Phone Number</th><th>Problem</th><th>Time Posted</th></tr>

     <?php

       $sql = "SELECT problem.ProblemID, problem.problem, problem.Time, user.Username, user.Email, user.PhoneNumber FROM problem INNER JOIN user ON user.CustomerID = problem.CustomerID ORDER BY Username";
       $res = mysqli_query($conn, $sql);

       $probconfirm = "";

       if (mysqli_num_rows($res) > 0) {
           while($row = mysqli_fetch_assoc($res)) {
               $probid = $row['ProblemID'];
               $prob = $row['problem'];
               $username = $row['Username'];
               $email = $row['Email'];
               $phonenumber = $row['PhoneNumber'];
               $probconfirm .= "<div class='row'>
               $time = $row['Time'];
                <tr><td>$username</td><td>$email</td><td>$phonenumber</td><td>$prob</td><td>$time</td>
              ";
           }
           echo $probconfirm;
       } else {
           echo "There are no current bookings available.";
       }
     ?>
   </table>

 </div>
</div>
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
