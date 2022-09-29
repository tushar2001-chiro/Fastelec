<?php
session_start();

if(!isset($_SESSION['login_user2'])){
header("location: customerlogin.php"); 
}

?>
<html>

<head>
  <title> FastElec </title>
</head>

<link rel="stylesheet" type = "text/css" href ="css/cars.css">
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
          <li><a href="homepage.php"> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
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

  <a href="COD.php"><button class="car1">Ferrari la Ferrari<p style="color:yellow; font-style:italic;">Amount to Pay : $35</p></button>
  <button class="car2">Lamborghini<p style="color:yellow; font-style:italic;">Amount to Pay : $40</p></button></a>
  <button class="car3">Bugatti Cheron<p style="color:yellow; font-style:italic;">Already Paid!</p></button>

</body>
</html>