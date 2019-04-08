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
    
			  
<div class="page_single layout_fullwidth">	  

<button class="collapsible">Open Collapsible</button>
<div class="content">
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

                              
                            $photos = $db->prepare("SELECT id, userID, e1, e2, e3, e4, e5, e6, e7, e8, e9, e10, e11, e12 FROM europe WHERE userID = :id");
                            $photos->execute(array(':id' => $id));

                             foreach($photos as $photo){

                                // E1
                                if ($photo[2] == 1) {

                                    echo ("<li><div class='card'>");
                                        
                                    echo("<a href='images/europe/barcelona.jpg' title='BARCELONA, SPAIN'><img src='images/europe/barcelona.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>BARCELONA, SPAIN</center></b></p>");
                                    echo ("</div> </li>");
                                    }


                                    // E2
                                if ($photo[3] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/berlin.jpg' title='BERLIN, DUITSLAND'><img src='images/europe/berlin.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>BERLIN, DUITSLAND</center></b></p>");
                                    echo("</div></li>");
                                    }  

                                    // E3
                                 if ($photo[4] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/helsinki.jpg' title='HELSINKI, FINLAND'><img src='images/europe/helsinki.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>HELSINKI, FINLAND</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    // E4
                                if ($photo[5] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/kiev.jpg' title='KIEV, UKRAINE'><img src='images/europe/kiev.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>KIEV, UKRAINE</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    // E5
                                if ($photo[6] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/lisbon.jpg' title='LISBON, PORTUGAL'><img src='images/europe/lisbon.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>LISBON, PORTUGAL</center></b></p>");
                                    echo("</div></li>");
                                        }  
                                
                                    // E6
                                if ($photo[7] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/moscow.jpg' title='MOSCOW, RUSSIA'><img src='images/europe/moscow.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>MOSCOW, RUSSIA</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //E7
                                if ($photo[8] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/paris.jpg' title='PARIS, FRANCE'><img src='images/europe/paris.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>PARIS, FRANCE</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //E8
                                if ($photo[9] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/praag.jpg' title='PRAGUE, CZECH REPUBLIC'><img src='images/europe/praag.jpg' alt='image'/></a><br>");
                                    echo ("<h6><b><center>PRAGUE, CZECH REPUBLIC</center></b></h6>");
                                    echo("</div></li>");
                                        }  

                                    //E9
                                if ($photo[10] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/rey.jpg' title='REYKJAVIK, ICELAND'><img src='images/europe/rey.jpg' alt='image'/></a><br>");
                                    echo ("<h6><b><center>REYKJAVIK, ICELAND</center></b></h6>");
                                    echo("</div></li>");
                                        }  

                                    //E10
                                if ($photo[11] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/rome.jpg' title='ROME, ITALY'><img src='images/europe/rome.jpg' alt='image'/></a><br>");
                                    echo ("<h6><b><center>ROME, ITALY</center></b></h6>");
                                    echo("</div></li>");
                                        }  

                                    //E11  
                                if ($photo[12] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/stockholm.jpg' title='STOCKHOLM, SWEDEN'><img src='images/europe/stockholm.jpg' alt='image'/></a><br>");
                                    echo ("<h6><b><center>STOCKHOLM, SWEDEN</center></b></h6>");
                                    echo("</div></li>");
                                        }  

                                    //E12
                                if ($photo[13] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/warsaw.jpg' title='WARSAW, POLAND'><img src='images/europe/warsaw.jpg' alt='image'/></a><br>");
                                    echo ("<h6><b><center>WARSAW, POLAND</center></b></h6>");
                                    echo("</div></li>");
                                        }  


                                }

                                ?>

                                </ul> 
                                
                                <ul id="photoslist" class="photo_gallery_13">

                                <h2 class="page_title"><center>AFRICA</center></h2>

                                <?php

                                $photos2 = $db->prepare("SELECT id, userID, a1, a2, a3, a4, a5, a6, a7, a8, a9, a10, a11, a12 FROM afrika WHERE userID = :id");
                            $photos2->execute(array(':id' => $id));

                             foreach($photos2 as $photo2){

                                //a1
                                if ($photo2[2] == 1) {

                                    echo ("<li><div class='card'>");
                                        
                                    echo("<a href='images/africa/abuja.jpg' title='YANKARI NATIONAL PARK, NIGERERIA'><img src='images/africa/abuja.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>YANKARI NATIONAL PARK, NIGERERIA</center></b></p>");
                                    echo ("</div> </li>");
                                    }

                                    //a2
                                if ($photo2[3] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/our-lady.jpg' title='BASILICA OF OUR LADY OF PEACE, IVORY COAST'><img src='images/africa/our-lady.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>BASILICA OF OUR LADY OF PEACE, IVOERY COAST</center></b></p>");
                                    echo("</div></li>");
                                    }  

                                    //a3
                                 if ($photo2[4] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/angel_falls.jpg' title='VICTORIA FALLS, VENEZUELA'><img src='images/africa/angel_falls.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>ANGEL FALLS, VENEZUELA</center></b></p>");
                                    echo("</div></li>");
                                        }  


                                    //a4
                                if ($photo2[5] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/antanarivo.jpg' title='ANTANAVI, MADAGASCAR'><img src='images/africa/antanarivo.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>ANTANAVI, MADAGASCAR</center></b></p>");
                                    echo("</div></li>");
                                        }  
                                    
                                    //a5
                                if ($photo2[6] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/virunga.jpg' title='VIRUNGA, CONGO'><img src='images/africa/virunga.jpg' alt='image'/></a><br>");
                                    echo ("<h6><b><center>VIRUNGA, CONGO</center></b></h6>");
                                    echo("</div></li>");
                                        }  
                                    
                                    //a6
                                if ($photo2[7] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/cairo.jpg' title='CAIRO, EYGPT'><img src='images/africa/cairo.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>CAIRO, EYGPT</center></b></p>");
                                    echo("</div></li>");
                                        }  
                                    //a7
                                if ($photo2[8] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/etos.jpg' title='ETOSHA NATIONAL PARK, NABIBIA'><img src='images/africa/etos.jpg' alt='image'/></a><br>");
                                    echo ("<p><b><center>ETOSHA NATIONAL PARK, NABIBIA</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //a8
                                if ($photo2[9] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/kenia.jpg' title='NAIROBI, KENIA'><img src='images/africa/kenia.jpg' alt='image'/></a><br>");
                                    echo ("<h6><b><center>NAIROBI, KENIA</center></b></h6>");
                                    echo("</div></li>");
                                        }  
                                    
                                    //a9
                                if ($photo2[10] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/mauritania.jpg' title='MAURITANIA'><img src='images/africa/mauritania.jpg' alt='image'/></a><br>");
                                    echo ("<h6><b><center>MAURITANIA</center></b></h6>");
                                    echo("</div></li>");
                                        }  

                                    //a10
                                if ($photo2[11] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/sahara.jpg' title='SAHARA'><img src='images/africa/sahara.jpg' alt='image'/></a><br>");
                                    echo ("<h6><b><center>SAHARA</center></b></h6>");
                                    echo("</div></li>");
                                        }  

                                    //a11
                                if ($photo2[12] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/leptis_magna.jpg' title='LEPTIS MAGNA, LIBYA'><img src='images/africa/leptis_magna.jpg' alt='image'/></a><br>");
                                    echo ("<h6><b><center>LEPTIS MAGNA, LIBYA</center></b></h6>");
                                    echo("</div></li>");
                                        }  
                                    
                                    //a12
                                if ($photo2[13] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/churg.jpg' title='CHURCH OF ST. GEORGE, ETHIOPIA'><img src='images/africa/churg.jpg' alt='image'/></a><br>");
                                    echo ("<h6><b><center>CHURCH OF ST. GEORGE, ETHIOPIA</center></b></h6>");
                                    echo("</div></li>");
                                        }  
                                }

                                ?>

                                </ul>
                                
                               <div class="clearleft"></div>
                                
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
  </body>
</html>