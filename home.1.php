<?php
	include('includes/session.php');
	include('includes/db-connect.php');

	$username = $_SESSION['login'];
	$id = $_SESSION['userID'];

  $users = $db->prepare("SELECT id, username, eur, usd, zar, yen, rup, bar, europe, africa FROM users WHERE id = :id");
  $users->execute(array(':id' => $id));
  $user = $users->fetch();

	if (!isset($_SESSION['userID'])) {
    header ('location: index.php');

  }
  
  if($user[8] == 3 && $user[9] == 3){
    header ('location: gewonnen.php');
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="viewport" content="width=device-width, user-scalable=no" />
<meta name="mobile-web-app-capable" content="yes">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<title>Ramble - The board game</title>
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,900" rel="stylesheet"> 
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body id="mobile_wrap">

 
  <div class="views">

    <div class="view view-main">
  
<div class="pages">
<div data-page="about" class="page">
  <div class="page-content">

  <div class="navbar navbar--fixed navbar--fixed-top navbar--bg">
    <div class="navbar__col navbar__col--title">
      <a href="index.php">RAMBLE <?php echo $user[0]; ?></a>
    </div>
              </div>

          
   <div id="pages_maincontent">
      
    <div class="page_single layout_fullwidth_padding">
    <br><br>


            <blockquote class="valutah"> <a style="color:#66b32e;">EUR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $user[2] ?></a></blockquote>
            <!-- <blockquote class="valutah"><a style="color:#FABC5F;">USD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php echo $user[3]; ?> </a> </blockquote> -->
            <blockquote class="valutah"><a style="color:#feeb15;">ZAR &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user[4]; ?> </blockquote>
            <!-- <blockquote class="valutah" onclick="troll()"><a style="color:#F39E96;">YEN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user[5]; ?> </blockquote>
            <blockquote class="valutah"><a style="color:#FFE762;">PESO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user[6]; ?> </blockquote>
            <blockquote class="valutah"><a style="color:#B896C6;">AUD &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $user[7]; ?> </blockquote> -->
             
            <a href="#"  data-popup=".popup-leave" class="open-popup btn btn--full yea"><b>REMOVE ME FROM THE GAME</b></a>
      
      
       </div>
    
    </div>
  </div>
</div>

 
			  
		 <div class="swiper-container-toolbar swiper-toolbar">
			<div class="swiper-pagination-toolbar"></div>
			<div class="swiper-wrapper">
			  <div class="swiper-slide toolbar-icon">
        <a href=""></a>

        <a href="photos.php"><img src="images/icons/white/slider.png" alt="" title="" /><span>TRIPS</span></a>
        <a href=""></a>
				<a href="#" data-popup=".popup-social" class="open-popup shopfav"><img src="images/icons/white/video.png" alt="" title="" /><span>R SCANNER</span></a>
        <a href=""></a>
			  </div>

			</div>
		  </div>	

			  
            </div>
          </div>
        </div>



</div>

    <div class="popup popup-social">
      <div class="content-block">
        <h4>RAMBLE SCANNER</h4>
        <p>Scan the QR code on the board or the cards</p>
        <ul class="social_share">
        <li><video id="preview"></video></li>
        </ul>
        <div class="close_popup_button"><a href="#" class="close-popup" data-popup=".popup-social"><img src="images/icons/black/menu_close.png" alt="" title="" /></a></div>
      </div>
      </div>


      <div class="popup popup-leave">
      <div class="content-block">
        <h4>Leave Ramble</h4>
        <p>If you leave the game, you will lose points.</p>
        <ul class="social_share">
        <a href="functions/uitloggen.php" class="btn btn--full yea"><b>I Agree</b></a>
        </ul>
        <div class="close_popup_button"><a href="#" class="close-popup" data-popup=".popup-leave"><img src="images/icons/black/menu_close.png" alt="" title="" /></a></div>
      </div>
      </div>
    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.custom.js"></script>
<script src="js/instascan.min.js"></script>

<script>
  let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), mirror: false });
  scanner.addListener('scan', function (content) {
    window.open("/ramble/cards/" + content + ".php" ,"_self");
  });
  Instascan.Camera.getCameras().then(function (cameras) {
    if (cameras.length > 0) {
      scanner.start(cameras[1]);
    } else {
      console.error('No cameras found.');
    }
  }).catch(function (e) {
    console.error(e);
  });

  var count = 1;
function troll() {
  if (count<10) {
    count++;
  }
  else {
    window.location = "onzin.html";
  }
};

</script>

  </body>
</html>