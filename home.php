<?php
	include('includes/session.php');
	include('includes/db-connect.php');

	$username = $_SESSION['login'];
	$id = $_SESSION['userID'];

  $users = $db->prepare("SELECT id, username, eur, usd, zar, yen, rup, bar, europe, africa, namerica, asia, samerica, australia  FROM users WHERE id = :id");
  $users->execute(array(':id' => $id));
  $user = $users->fetch();

	if (!isset($_SESSION['userID'])) {
    header ('location: index.php');

  }
  
  if($user[8] >= 3 && $user[9] >= 3 && $user[10] >= 3 && $user[11] >= 3 && $user[12] >= 3 && $user[13] >= 3){
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body id="mobile_wrap">

 
  <div class="views">

    <div class="view view-main">
  
<div class="pages">
<div data-page="about" class="page">
  <div class="page-content">

  <div class="navbar navbar--fixed navbar--fixed-top navbar--bg">
    <div class="navbar__col navbar__col--title">
      <a href="index.php">RAMBLE</a>
    </div>
              </div>

              <?php if($user[0] == 1) { ?>
                <div class="navbar2 navbar--fixed navbar--fixed-topp navbar--bg2" style="text-shadow: 0px 1px 0px black;">
                  <div class="navbar__col navbar__col--title2">
                    <a href="index.php">PLAYING AS TEAM BLUE</a>
                  </div>
                </div>
              <?php } ?>

              <?php if($user[0] == 2) { ?>
                <div class="navbar2 navbar--fixed navbar--fixed-topp navbar--bg2" style="background-color:##2ECC71;text-shadow: 0px 1px 0px black;">
                  <div class="navbar__col navbar__col--title2">
                    <a href="index.php">PLAYING AS TEAM GREEN</a>
                  </div>
                </div>
              <?php } ?>

              <?php if($user[0] == 3) { ?>
                <div class="navbar2 navbar--fixed navbar--fixed-topp navbar--bg2" style="background-color:#F4D03F;text-shadow: 0px 1px 0px black;">
                  <div class="navbar__col navbar__col--title2">
                    <a href="index.php">PLAYING AS TEAM YELLOW</a>
                  </div>
                </div>
              <?php } ?>

              <?php if($user[0] == 4) { ?>
                <div class="navbar2 navbar--fixed navbar--fixed-topp navbar--bg2" style="background-color:#E74C3C;text-shadow: 0px 1px 0px black;">
                  <div class="navbar__col navbar__col--title2">
                    <a href="index.php">PLAYING AS TEAM RED</a>
                  </div>
                </div>
              <?php } ?>


              
              

          
   <div id="pages_maincontent">
      
    <div class="page_single layout_fullwidth_padding">
    <br><br><br>
    <a style="margin-bottom:10px;">WALLET</a><br>



            <blockquote class="<?php if ($user[2] >= 150) { echo "valutah2"; }else{ echo "valutah"; }  ?>"><img src="images/icons/munt/euro.svg" alt="euro" /><a style="color:#66b32e;"><?php if ($user[2] < 150) { echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; }else{ echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; }  ?><?php echo $user[2]; ?> &nbsp; <?php if ($user[2] >= 150) { echo "<i class='fas fa-plane blink-plain' style='color:#ffff;'></i>"; }else{ echo " "; }  ?></a></blockquote>
            
            <blockquote class="<?php if ($user[4] >= 2400) { echo "valutah2"; }else{ echo "valutah"; }  ?>"><img src="images/icons/munt/zar.svg" alt="dollar" /><a style="color:#feeb15;"><?php if ($user[4] < 2400) { echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; }else{ echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; }  ?><?php echo $user[4]; ?> &nbsp; <?php if ($user[4] >= 2400) { echo "<i class='fas fa-plane blink-plain' style='color:#ffff;'></i>"; }else{ echo " "; }  ?></a></blockquote>

            <blockquote class="<?php if ($user[3] >= 180) { echo "valutah2"; }else{ echo "valutah"; }  ?>"><img src="images/icons/munt/dollar.svg" alt="dollar" /><a style="color:#eb8a00;"><?php if ($user[3] < 180) { echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; }else{ echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; }  ?><?php echo $user[3]; ?> &nbsp; <?php if ($user[3] >= 180) { echo "<i class='fas fa-plane blink-plain' style='color:#ffff;'></i>"; }else{ echo " "; }  ?></a></blockquote>

            <blockquote class="<?php if ($user[5] >= 18750) { echo "valutah2"; }else{ echo "valutah"; }  ?>"><img src="images/icons/munt/yen.svg" alt="dollar" /><a style="color:#e73f1a;"><?php if ($user[5] < 18750) { echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; }else{ echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; }  ?><?php echo $user[5]; ?> &nbsp; <?php if ($user[5] >= 18750) { echo "<i class='fas fa-plane blink-plain' style='color:#ffff;'></i>"; }else{ echo " "; }  ?></a></blockquote>

            <blockquote class="<?php if ($user[6] >= 3300) { echo "valutah2"; }else{ echo "valutah"; }  ?>"><img src="images/icons/munt/peso.svg" alt="dollar" /><a style="color:#00b6e3;"><?php if ($user[6] < 3300) { echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; }else{ echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; }  ?><?php echo $user[6]; ?> &nbsp; <?php if ($user[6] >= 3300) { echo "<i class='fas fa-plane blink-plain' style='color:#ffff;'></i>"; }else{ echo " "; }  ?></a></blockquote>

            <blockquote class="<?php if ($user[7] >= 225) { echo "valutah2"; }else{ echo "valutah"; }  ?>"><img src="images/icons/munt/aus-dollar.svg" alt="dollar" /><a style="color:#9260a4;"><?php if ($user[7] < 225) { echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; }else{ echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; "; }  ?><?php echo $user[7]; ?> &nbsp; <?php if ($user[7] >= 225) { echo "<i class='fas fa-plane blink-plain' style='color:#ffff;'></i>"; }else{ echo " "; }  ?></a></blockquote>
            <!-- <img src="images/schaapie.svg" class="schaapie" alt="schaapie"> -->
      
       </div>
    
    </div>
  </div>
</div>

 
			  
		 <div class="swiper-container-toolbar swiper-toolbar">
			<div class="swiper-pagination-toolbar"></div>
			<div class="swiper-wrapper">
			  <div class="swiper-slide toolbar-icon">
            
        
        <!-- <a data-popup=".popup-leave" class="open-popup"><img src="images/icons/white/settings.png" alt="" title="" /></a> -->
        <a data-popup=".popup-leave" class="open-popup"><img src="images/settings-icon.png" alt="" title="" /></a>

        
        <a href=""></a>
        <!-- <a href="photos.php"><img src="images/icons/white/slider.png" alt="" title="" /></a> -->
        <a href="photos.php"><img src="images/polaroid.gif" alt="" title="" /></a>

        
        <a href=""></a>
        <a href="#" onclick="cameraScanz()" data-popup=".popup-social" class="open-popup shopfav"><img class="roundimage" src="images/icons/qrscanner.png" alt="qr"></a>
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
        <li><a id="camera-scann"><video playsinline id="preview"></a></video></li>
        </ul>
        <div class="close_popup_button"><a href="#" class="close-popup" data-popup=".popup-social"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
      </div>
      </div>


      <div class="popup popup-leave">
      <div class="content-block">
        <h4>Settings</h4>
        <ul class="social_share">
        <a href="functions/uitloggen.php" class="btn btn--full yea"><b>Leave the game</b></a>
        </ul>
        <div class="close_popup_button"><a href="#" class="close-popup" data-popup=".popup-leave"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
      </div>
      </div>
    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.custom.js"></script>
<script src="js/instascan.min.js"></script>

<script>

var audio = new Audio('sound/biep.mp3');
  let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), mirror: false });

  scanner.addListener('scan', function (content) {
 
    audio.play();

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