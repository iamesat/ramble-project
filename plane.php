<?php

include('includes/session.php');
include('includes/db-connect.php');

$username = $_SESSION['login'];
$id = $_SESSION['userID'];

$users = $db->prepare("SELECT id, username, eur, usd, zar, yen, rup, bar FROM users WHERE id = :id");
$users->execute(array(':id' => $id));
$user = $users->fetch();
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
<title>Photos</title>
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="css/simplelightbox.css">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet"> 
</head>
<body id="mobile_wrap">

    <div class="panel-overlay"></div>

    <div class="views">

      <div class="view view-main">
<div class="pages">
  <div data-page="photos" class="page">
    <div class="page-content">
    
		<div class="navbar navbar--fixed navbar--fixed-top navbar--bg">
			<div class="navbar__col navbar__col--title">
				<a href="index.php">RAMBLE</a>
			</div>

                </div>
     <div id="pages_maincontent">
<img src="images/airport/fly2.gif" alt="" title="" />
			  
<div class="page_single layout_fullwidth_padding">	  
<br>
<blockquote>
              <center><a style="font-size:20px;">Flying to your destination...</a></center>
              </blockquote>
              <br>
<br><br>

<a href="home.php" class="btn btn--full yea" style="font-size:20px;"><b>Land the Plane</b></a>
                            
                              
                                
                          </div>

                    </div>
   </div>       
      
                
     <div class="clearleft"></div> 
      </div>
      
      
    </div>
  </div>
</div>

         </div>
    </div>
    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery.validate.min.js" ></script>
<script src="js/swiper.min.js"></script>
<script src="js/simple-lightbox.js"></script>
<script src="js/jquery.custom.js"></script>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
</script>

  </body>
</html>