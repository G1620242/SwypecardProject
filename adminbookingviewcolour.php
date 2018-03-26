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
           <tr><th><a href="adminbookingview.php">Username</a></th><th><a href="adminbookingviewcolour.php">ColourChoice</a>
           </th><th><a href="adminbookingviewdesign">DesignChoice</a></th><th><a href="adminbookingviewstyle">StyleChoice</a></th><th></th></tr>
     <?php

       $sql = "SELECT booking.BookingID, booking.ColourChoice, booking.DesignChoice, booking.StyleChoice, user.Username FROM booking INNER JOIN user ON user.CustomerID = booking.CustomerID ORDER BY ColourChoice";
       $res = mysqli_query($conn, $sql);

       $bookconfirm = "";

       if (mysqli_num_rows($res) > 0) {
           while($row = mysqli_fetch_assoc($res)) {
               $bookid = $row['BookingID'];
               $colourchoice = $row['ColourChoice'];
               $designchoice = $row['DesignChoice'];
               $stylechoice = $row['StyleChoice'];
               $username = $row['Username'];

               $bookconfirm .= "<div class='row'>

                             <tr><td>$username</td><td>$colourchoice</td><td>$designchoice</td><td>$stylechoice</td><td><a href='adminbookingdelete.php?bookid=$bookid'>Delete</a></td></tr>
                               <a href='adminbookingview.php?bookid=$bookid'></a>
              ";
           }
           echo $bookconfirm;
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
