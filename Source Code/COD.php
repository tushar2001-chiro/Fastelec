<?php
session_start();
require 'connection.php';
$conn = Connect();
if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

unset($_SESSION["cart"]);
?>

<html>

  <head>
    <title> FastElec </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/COD.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
  
    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"> <img src="car.png" width="150" align="left" style="margin-top=0;padding-top=0;filter: drop-shadow(0px 0px 20px black);"></a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
         
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>



<?php
}
?>


        </div>

      </div>
    </nav>

<br><br><br><br><br><br><br><br><br>
<center><strong><h2 class="text">Payment succesful!</h2>
<h2 class="text"><br>We make sure that your experience stays top-notch.<br><a href="homepage.php">You can return back by clicking here</a></h2></strong>

<?php 
  $num1 = rand(1,99); 
  $num2 = rand(10,99); 
  $num3 = rand(100,99);
  $number = $num1.$num2.$num3;
?>

<h3 class="text"> <strong>Your Receipt Number:</strong> <strong><span style="color:violet;"></strong><?php echo "$number"; ?></span> </h3></center>

        </body>

</html>