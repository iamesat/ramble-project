<?php
    include('includes/session.php');
    
    if(isset($_SESSION['login'])) {
    	header('Location: home.php');
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, minimal-ui">
<meta name="mobile-web-app-capable" content="yes">
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
      <a>RAMBLE</a>
    </div>
              </div>

          
   <div id="pages_maincontent">      
      <div class="page_single layout_fullwidth_padding">


            <br><br>
            <h3><center>Scan your Player</center></h3>   
            <body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.php">


                    <form action="functions/login.php" method="POST">
      <input type="hidden" value="player3" name="username">
      <input type="hidden" value="player1" name="password">
      <input type="submit" name="player3button" id="player3button">
       </form>

                        <img class="align-content" src="images/logo.png" alt="">
                    </a>
                </div>

                  <div class="posted-by">
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                Ramble Beta 0.1 - Made with Love.</div>
              </div>

            </div>
        </div>
    </div>
             
            <!-- <a href="reset.php" class="btn">RESET GAME</a> -->



            <div class="swiper-container-toolbar swiper-toolbar">
			<div class="swiper-pagination-toolbar"></div>
			<div class="swiper-wrapper">
			  <div class="swiper-slide toolbar-icon">
				<a href="" data-panel="right" class=""></a>
        <a href=""></a>
        <a href="#" onclick="cameraScanz()" data-popup=".popup-social" class="open-popup shopfav"><img class="roundimage" src="images/icons/qrscanner.png" alt="qr"></a>

        <a href=""></a>
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
        <h4>Ramble Scanner</h4>
        <p>Scan the QR code on the board to choose your team.</p>
        <ul class="social_share">
        <li id="camera-scann"><video id="preview"></video></li>
        </ul>
        <div class="close_popup_button"><a href="#" class="close-popup" data-popup=".popup-social"><img src="images/icons/white/menu_close.png" alt="" title="" /></a></div>
      </div>
      </div>


      <!-- PLAYER 1 LOGIN -->
      <div class="popup player-1">
      <div class="content-block">
      <form action="functions/login.php" method="POST">
      <input type="text" value="player1" name="username">
      <input type="password" value="player1" name="password">
      <input type="submit" name="player1button" id="player1button">
       </form>
      </div>
      </div>

      <!-- PLAYER 2 LOGIN -->
      <div class="popup player-2">
      <div class="content-block">
      <form action="functions/login.php" method="POST">
      <input type="text" value="player2" name="username">
      <input type="password" value="player1" name="password">
      <input type="submit" name="player2button" id="player2button">
       </form>
      </div>
      </div>

      <!-- PLAYER 3 LOGIN -->
      <div class="popup player-2">
      <div class="content-block">
      <form action="functions/login.php" method="POST">
      <input type="text" value="player3" name="username">
      <input type="password" value="player1" name="password">
      <input type="submit" name="player3button" id="player3button">
       </form>
      </div>
      </div>

       <!-- PLAYER 4 LOGIN -->
       <div class="popup player-2">
      <div class="content-block">
      <form action="functions/login.php" method="POST">
      <input type="text" value="player4" name="username">
      <input type="password" value="player1" name="password">
      <input type="submit" name="player4button" id="player4button">
       </form>
      </div>
      </div>





    
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/swiper.min.js"></script>
<script src="js/jquery.custom.js"></script>
<script src="js/instascan.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script>
  let scanner = new Instascan.Scanner({ video: document.getElementById('preview'), mirror: false });

  var player11 = ["player1button", "player2button", "player3button", "player4button"];

  scanner.addListener('scan', function (content) {

if (content == player11[0], player11[1], player11[2], player11[3]) {
  document.getElementById(content).click();
}
else {

}
   
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

</script>

  </body>
</html>