<?php
	include('../includes/session.php');
	include('../includes/db-connect.php');

	$username = $_SESSION['login'];
	$id = $_SESSION['userID'];

  $users = $db->prepare("SELECT id, username, eur, usd, zar, yen, rup, bar FROM users WHERE id = :id");
  $users->execute(array(':id' => $id));
  $user = $users->fetch();

	// if (!isset($_SESSION['userID'])) {
  //   header ('location: index.php');

	// }

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
			<img src="../images/south/S2.jpg" alt="" title="" />
              
        <div class="page_single layout_fullwidth_padding">	
	
              <blockquote>
              <center><h2>Rio de Janerio</h2></center>
              </blockquote>

              <a href="south/e2a.php" class="btn btn--full yea2"><b>Add to photobook</b></a>
	  
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