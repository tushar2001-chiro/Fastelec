<?php
session_start();
?>

<html>

  <head>
    <title> FastElec </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

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
          <a class="navbar-brand" href="index.php">   <a class="navbar-brand" href="index.php"> <img src="car.png" width="150" align="left" style="margin-top=0;padding-top=0;filter: drop-shadow(0px 0px 20px black);"> </a>
 </a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" ><a href="index.php">Home</a></li>
           
            <li><a href="contactus.php">Contact Us</a></li>

          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="logout_m.php"></span> Log Out </a></li>
          </ul>
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

<style>
  .welcome{
    color: cadetblue;
    font-style: bold;
    font-size: 50px;
    padding-top: 30px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  .fastelec{
  font-size: 200px;
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  }
  .fastelec:hover{
  color:aqua;
  }
</style>
<center><p class="welcome">Welcome to</p><p class="fastelec">FastElec</p></center>
  <br>
  <br><br>
</div>
</header>   
    <br>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Login </a></center> 
<br><br> 
</body>
</html>