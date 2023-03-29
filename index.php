<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="img/lifestyleStore.png" />
        <title>Agriculture Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- latest compiled and minified CSS -->
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <!-- jquery library -->
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <!-- Latest compiled and minified javascript -->
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <!-- External CSS -->
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body background="bgimg.jpg" >
        <div>
           <?php
            require 'header.php';
           ?>
           <div id="bannerImage">
               <div class="container">
                   <center>
                   <div id="bannerContent">
                       <h1>Welcome to E-farming</h1>
                       <p>Buy fertilizer agriculture tools seeds from here!!</p>
                       <a href="products.php" style="color:green;"><b>Shop Now</b></a>
                   </div>
                   </center>
               </div>
           </div>
           <div class="container">
               <div class="row">
                   <div class="col-xs-4">
                       <div  class="thumbnail">
                           <a href="products.php">
                                <img src="img/fertpro.jpg" alt="fertilizer">
                           </a>
                           <center>
                                <div class="caption">
                                        <p id="autoResize">Fertilizers</p>
                                        <p>Our available Most used Fertilizers</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/seedpro.avif" alt="seeds">
                           </a>
                           <center>
                                <div class="caption">
                                    <p id="autoResize">Seeds</p>
                                    <p>Our available agriculture seeds</p>
                                </div>
                           </center>
                       </div>
                   </div>
                   <div class="col-xs-4">
                       <div class="thumbnail">
                           <a href="products.php">
                               <img src="img/toolprof.jpg" alt="Shirt">
                           </a>
                           <center>
                               <div class="caption">
                                   <p id="autoResize">tools</p>
                                   <p>Our available agriculture tools</p>
                               </div>
                           </center>
                       </div>
                   </div>
               </div>
           </div>
            <br><br> <br><br><br><br>
            <footer class="footer">
               <div class="container">
                <center>
                   <p>Copyright &copy <a href="https://Agriculture.in">Agriculture</a> Store. All Rights Reserved.</p>
                   <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum, consectetur!</p>
               </center>
               </div>
           </footer>
        </div>
    </body>
</html>