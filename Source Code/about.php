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

<link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
<link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<body>


  <button onclick="topFunction()" id="myBtn" title="Go to top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </button>

  <script type="text/javascript">
    window.onscroll = function()
    {
      scrollFunction()
    };

    function scrollFunction(){
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"> <img src="car.png" width="150" align="left" style="margin-top=0;padding-top=0;filter: drop-shadow(0px 0px 20px black);"> </a>
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
          </a></li>
          <li><a href="logout_u.php"> Log Out </a></li>
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
<center><p class="title">FastElec</p><p class="content">A platform that allows you to pay your bills for the electronic cars that you have registered in the site.</p><br>
<p class="content">Made by group of two, this site aims to provide a user-friendly experience for the user to login and pay the bills of the cars, separately, or as a whole.</p>
</center><br><br>
<img src='audi.jpg' class="car"><p class="content1">Pay bills faster <br>and rest assured!</p>

</body>
</html>