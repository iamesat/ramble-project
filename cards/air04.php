<?php
	include('../includes/session.php');
	include('../includes/db-connect.php');

	$username = $_SESSION['login'];
	$id = $_SESSION['userID'];

  $users = $db->prepare("SELECT id, username, eur, usd, zar, yen, rup, bar FROM users WHERE id = :id");
  $users->execute(array(':id' => $id));
  $user = $users->fetch();

	if (!isset($_SESSION['userID'])) {
    header ('location: index.php');

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<link rel="apple-touch-startup-image" href="images/apple-touch-startup-image-640x920.png">
<title>Ramble</title>
<link rel="stylesheet" href="../css/swiper.css">
<link rel="stylesheet" href="../style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet"> 
</head>
<body id="mobile_wrap">

    <div class="panel-overlay"></div>

    <div class="views">

      <div class="view view-main">
	  
<div class="pages">
  <div data-page="about" class="page">
    <div class="page-content">
	
		<div class="navbar navbar--fixed navbar--fixed-top navbar--bg">
			<div class="navbar__col navbar__col--title">
				<a href="../index.php">RAMBLE</a>
			</div>
                </div>
              						
     <div id="pages_maincontent">
      <img src="../images/airport/airport.jpg" alt="" title="" />
  <!-- https://nl.freepik.com/vrije-vector/man-met-paspoort-op-de-luchthaven_1086751.htm'>Designed by Photoroyalty -->
              
        <div class="page_single layout_fullwidth_padding">
	  <br>
              <blockquote>
              <center>Airport Asia!</center>
              </blockquote>
              <br>
              
              <?php 
              
              if ($user[5] < 18750){

                echo "<a href='' class='btn btn--full disabled' style='font-size:20px;'><b>Ticket to Europe</b></a>";

              }else{

                echo "<a href='../functions/airports/f_asia.php' class='btn btn--full yea2' style='background-color:#66b32e; font-size:20px;'><b>Ticket to Europe</b></a>";

              } 
              ?>

              <?php 
              
              if ($user[5] < 18750){

                echo "<a href='' class='btn btn--full disabled' style='font-size:20px;'><b>Ticket to Africa</b></a>";

              }else{

                echo "<a href='../functions/airports/f_asia.php' class='btn btn--full yea2' style='background-color:#feeb15;font-size:20px;'><b>Ticket to Africa</b></a>";

              } 
              ?>
                            <?php 
              
              if ($user[5] < 18750){

                echo "<a href='' class='btn btn--full disabled' style='font-size:20px;'><b>Ticket to North-America</b></a>";

              }else{

                echo "<a href='../functions/airports/f_asia.php' class='btn btn--full yea2' style='background-color:#eb8a00;font-size:20px;'><b>Ticket to North-America</b></a>";

              } 
              ?>
                            <?php 
              
              if ($user[5] < 18750){

                echo "<a href='' class='btn btn--full disabled' style='font-size:20px;'><b>Ticket to South-America</b></a>";

              }else{

                echo "<a href='../functions/airports/f_asia.php' class='btn btn--full yea2' style='background-color:#00b6e3;font-size:20px;'><b>Ticket to South-America</b></a>";

              } 
              ?>
                            <?php 
              
              if ($user[5] < 180){

                echo "<a href='' class='btn btn--full disabled' style='font-size:20px;'><b>Ticket to Oceania</b></a>";

              }else{

                echo "<a href='../functions/airports/f_asia.php' class='btn btn--full yea2' style='background-color:#9260a4;font-size:20px;'><b>Ticket to Oceania</b></a>";

              } 
              ?>

              <br><br>

              <a href="../home.php" class="btn btn--full yea" style="font-size:16px;" ><b>Go back</b></a>
			  
			  
         </div>
      
      </div>
      
      
    </div>
  </div>
</div>
         </div>
    </div>
    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.validate.min.js" ></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.custom.js"></script>
  </body>
</html>