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
    
			  
<div class="page_single layout_fullwidth_padding">	  
    <br>
<button class="collapsible eur">Europe</button>
<div class="content">
<ul id="photoslist" class="photo_gallery_13">
    <br>
                            
                            <?php

                            $photos = $db->prepare("SELECT id, userID, e1, e2, e3, e4, e5, e6, e7, e8, e9, e10, e11, e12 FROM europe WHERE userID = :id");
                            $photos->execute(array(':id' => $id));

                             foreach($photos as $photo){

                                // E1
                                if ($photo[2] == 1) {

                                    echo ("<li><div class='card'>");
                                        
                                    echo("<a href='images/europe/barcelona.jpg' title='BARCELONA, SPAIN'><img src='images/europe/barcelona.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>BARCELONA, SPAIN</center></b></p>");
                                    echo ("</div> </li>");
                                    }


                                    // E2
                                if ($photo[3] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/berlin.jpg' title='BERLIN, DUITSLAND'><img src='images/europe/berlin.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>BERLIN, DUITSLAND</center></b></p>");
                                    echo("</div></li>");
                                    }  

                                    // E3
                                 if ($photo[4] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/helsinki.jpg' title='HELSINKI, FINLAND'><img src='images/europe/helsinki.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>HELSINKI, FINLAND</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    // E4
                                if ($photo[5] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/kiev.jpg' title='KIEV, UKRAINE'><img src='images/europe/kiev.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>KIEV, UKRAINE</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    // E5
                                if ($photo[6] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/lisbon.jpg' title='LISBON, PORTUGAL'><img src='images/europe/lisbon.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>LISBON, PORTUGAL</center></b></p>");
                                    echo("</div></li>");
                                        }  
                                
                                    // E6
                                if ($photo[7] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/moscow.jpg' title='MOSCOW, RUSSIA'><img src='images/europe/moscow.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>MOSCOW, RUSSIA</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //E7
                                if ($photo[8] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/paris.jpg' title='PARIS, FRANCE'><img src='images/europe/paris.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>PARIS, FRANCE</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //E8
                                if ($photo[9] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/praag.jpg' title='PRAGUE, CZECH REPUBLIC'><img src='images/europe/praag.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>PRAGUE, C-REPUBLIC</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //E9
                                if ($photo[10] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/rey.jpg' title='REYKJAVIK, ICELAND'><img src='images/europe/rey.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>REYKJAVIK, ICELAND</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //E10
                                if ($photo[11] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/rome.jpg' title='ROME, ITALY'><img src='images/europe/rome.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>ROME,&nbsp;&nbsp;&nbsp;&nbsp; ITALY</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //E11  
                                if ($photo[12] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/stockholm.jpg' title='STOCKHOLM, SWEDEN'><img src='images/europe/stockholm.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>STOCKHOLM, SWEDEN</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //E12
                                if ($photo[13] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/europe/warsaw.jpg' title='WARSAW, POLAND'><img src='images/europe/warsaw.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>WARSAW, POLAND</center></b></p>");
                                    echo("</div></li>");
                                        }  


                                }

                                ?>

                                </ul> 
                            </div>

                            <button class="collapsible afr">Africa</button>
                                <div class="content">
                                    <br>
                                
                                <ul id="photoslist" class="photo_gallery_13">

                                <?php

                                $photos2 = $db->prepare("SELECT id, userID, a1, a2, a3, a4, a5, a6, a7, a8, a9, a10, a11, a12 FROM afrika WHERE userID = :id");
                            $photos2->execute(array(':id' => $id));

                             foreach($photos2 as $photo2){

                                //a1
                                if ($photo2[2] == 1) {

                                    echo ("<li><div class='card'>");
                                        
                                    echo("<a href='images/africa/abuja.jpg' title='YANKARI NATIONAL PARK, NIGERERIA'><img src='images/africa/abuja.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>YANKARI PARK, NIGERERIA</center></b></p>");
                                    echo ("</div> </li>");
                                    }

                                    //a2
                                if ($photo2[3] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/our-lady.jpg' title='BASILICA OF OUR LADY OF PEACE, IVORY COAST'><img src='images/africa/our-lady.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>BASILICA, IVOERY COAST</center></b></p>");
                                    echo("</div></li>");
                                    }  

                                    //a3
                                 if ($photo2[4] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/angel_falls.jpg' title='VICTORIA FALLS, VENEZUELA'><img src='images/africa/angel_falls.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>ANGEL FALLS, &nbsp &nbsp VENEZUELA</center></b></p>");
                                    echo("</div></li>");
                                        }  


                                    //a4
                                if ($photo2[5] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/antanarivo.jpg' title='ANTANAVI, MADAGASCAR'><img src='images/africa/antanarivo.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>ANTANAVI, MADAGASCAR</center></b></p>");
                                    echo("</div></li>");
                                        }  
                                    
                                    //a5
                                if ($photo2[6] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/virunga.jpg' title='VIRUNGA, CONGO'><img src='images/africa/virunga.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>VIRUNGA, CONGO</center></b></p>");
                                    echo("</div></li>");
                                        }  
                                    
                                    //a6
                                if ($photo2[7] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/cairo.jpg' title='CAIRO, EYGPT'><img src='images/africa/cairo.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>CAIRO, &nbsp EYGPT</center></b></p>");
                                    echo("</div></li>");
                                        }  
                                    //a7
                                if ($photo2[8] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/churg.jpg' title='WINDHOEK, NABIBIA'><img src='images/africa/churg.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>WINDHOEK, NABIBIA</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //a8
                                if ($photo2[9] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/kenia.jpg' title='NAIROBI, KENIA'><img src='images/africa/kenia.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>NAIROBI, KENIA</center></b></p>");
                                    echo("</div></li>");
                                        }  
                                    
                                    //a9
                                if ($photo2[10] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/mauritania.jpg' title='MONOLITH, MAURITANIA'><img src='images/africa/mauritania.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>MONOLITH, MAURITANIA</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //a10
                                if ($photo2[11] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/sahara.jpg' title='THE SAHARA'><img src='images/africa/sahara.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>THE <br> SAHARA</center></b></p>");
                                    echo("</div></li>");
                                        }  

                                    //a11
                                if ($photo2[12] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/leptis_magna.jpg' title='LEPTIS MAGNA, LIBYA'><img src='images/africa/leptis_magna.jpg' alt='image'/></a>");
                                    echo ("<p><b><center>LEPTIS , LIBYA</center></b></p>");
                                    echo("</div></li>");
                                        }  
                                    
                                    //a12
                                if ($photo2[13] == 1) {

                                    echo ("<li><div class='card'>");

                                    echo("<a href='images/africa/churg.jpg' title='CHURCH OF ST. GEORGE, ETHIOPIA'><img src='images/africa/etos.jpg' alt='image'/></a>");
                                    echo ("<h6><b><center>ETOSHA PARK, ETHIOPIA</center></b></h6>");
                                    echo("</div></li>");
                                        }  
                                }

                                ?>

                                </ul>
                                </div>

                                <button class="collapsible norta">North America</button>
                                    <div class="content">
                                    <ul id="photoslist" class="photo_gallery_13">
                                        <br>
                                        <?php

                                        $photos3 = $db->prepare("SELECT id, userID, n1, n2, n3, n4, n5, n6, n7, n8, n9, n10, n11, n12, n13 FROM noordamerika WHERE userID = :id");
                                        $photos3->execute(array(':id' => $id));

                                        foreach($photos3 as $photo3){

                                        //a1
                                        if ($photo3[2] == 1) {

                                            echo ("<li><div class='card'>");
                                                
                                            echo("<a href='images/namerica/N1.jpg' title='HAWAII'><img src='images/namerica/N1.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>HAWAII</center></b></p>");
                                            echo ("</div> </li>");
                                            }

                                            //a2
                                        if ($photo3[3] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N2.jpg' title='VANCOUVER'><img src='images/namerica/N2.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>VANCOUVER</center></b></p>");
                                            echo("</div></li>");
                                            }  

                                            //a3
                                        if ($photo3[4] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N3.jpg' title='SAN FRANCISCO'><img src='images/namerica/N3.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>SAN FRANCISCO</center></b></p>");
                                            echo("</div></li>");
                                                }  


                                            //a4
                                        if ($photo3[5] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N4.jpg' title='GRAND CANYON'><img src='images/namerica/N4.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>GRAND CANYON</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a5
                                        if ($photo3[6] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N5.jpg' title='LAS VEGAS'><img src='images/namerica/N5.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>LAS VEGAS</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a6
                                        if ($photo3[7] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N6.jpg' title='RIDING MOUNTAIN NATIONAL PARK'><img src='images/namerica/N6.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>RIDING MOUNTAIN NATIONAL PARK</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            //a7
                                        if ($photo3[8] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N7.jpg' title='MOUNTH RUSHMORE'><img src='images/namerica/N7.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>MOUNTH RUSHMORE</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a8
                                        if ($photo3[9] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N8.jpg' title='MEXICO CITY'><img src='images/namerica/N8.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>MEXICO CITY</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a9
                                        if ($photo3[10] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N9.jpg' title='MIAMI'><img src='images/namerica/N9.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>MIAMI</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a10
                                        if ($photo3[11] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N10.jpg' title='NEW YORK CITY'><img src='images/namerica/N10.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>NEW YORK CITY</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a11
                                        if ($photo3[12] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N11.jpg' title='NUUK, NORTHERN LIGHTS'><img src='images/namerica/N11.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>NUUK, NORTHERN LIGHTS</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a12
                                        if ($photo3[13] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N12.jpg' title='PUNTA CANA, DOMNINICAN REPUBLIC'><img src='images/namerica/N12.jpg' alt='image'/></a>");
                                            echo ("<h6><b><center>PUNTA CANA, DOMNINICAN REPUBLIC</center></b></h6>");
                                            echo("</div></li>");
                                                }  

                                        if ($photo3[14] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/namerica/N13.jpg' title='SAN JOSÉ'><img src='images/namerica/N13.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>SAN JOSÉ</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                        }

                                        ?>
                                        </ul>
                                        </div>

                                        <button class="collapsible asi">Asia</button>
                                    <div class="content">
                                    <ul id="photoslist" class="photo_gallery_13">
                                        <br>
                                        <?php

                                        $photos4 = $db->prepare("SELECT id, userID, z1, z2, z3, z4, z5, z6, z7, z8, z9, z10, z11, z12, z13, z14, z15, z16, z17, z18 FROM azie WHERE userID = :id");
                                        $photos4->execute(array(':id' => $id));

                                        foreach($photos4 as $photo4){

                                        //a1
                                        if ($photo4[2] == 1) {

                                            echo ("<li><div class='card'>");
                                                
                                            echo("<a href='images/asia/Z1.jpg' title='MUMBAI'><img src='images/asia/Z1.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>MUMBAI</center></b></p>");
                                            echo ("</div> </li>");
                                            }

                                            //a2
                                        if ($photo4[3] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z2.jpg' title='TAJ MAHAL'><img src='images/asia/Z2.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>TAJ MAHAL</center></b></p>");
                                            echo("</div></li>");
                                            }  

                                            //a3
                                        if ($photo4[4] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z3.jpg' title='MOUNT EVEREST'><img src='images/asia/Z3.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>MOUNT EVEREST</center></b></p>");
                                            echo("</div></li>");
                                                }  


                                            //a4
                                        if ($photo4[5] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z4.jpg' title='GREAT WALL OF CHINA'><img src='images/asia/Z4.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>GREAT WALL OF CHINA</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a5
                                        if ($photo4[6] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z5.jpg' title='SHANGHAI'><img src='images/asia/Z5.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>SHANGHAI</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a6
                                        if ($photo4[7] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z6.jpg' title='SEOUL'><img src='images/asia/Z6.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>SEOUL</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            //a7
                                        if ($photo4[8] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z7.jpg' title='TOKIO'><img src='images/asia/Z7.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>TOKIO</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a8
                                        if ($photo4[9] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z8.jpg' title='ULAANBATAAR'><img src='images/asia/Z8.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>ULAANBATAAR</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a9
                                        if ($photo4[10] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z9.jpg' title='NOVOSIBIRSK'><img src='images/asia/Z9.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>NOVOSIBIRSK</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a10
                                        if ($photo4[11] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z10.jpg' title='ASTANA'><img src='images/asia/Z10.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>ASTANA</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a11
                                        if ($photo4[12] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z11.jpg' title='UGAM CHATKAL'><img src='images/asia/Z11.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>UGAM CHATKAL</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a12
                                        if ($photo4[13] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z12.jpg' title='ANKARA'><img src='images/asia/Z12.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>ANKARA</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                        if ($photo4[14] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z13.jpg' title='JERUSALEM'><img src='images/asia/Z13.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>JERUSALEM</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                        if ($photo4[15] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z14.jpg' title='SHIRAZ'><img src='images/asia/Z14.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>SHIRAZ</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                        if ($photo4[16] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z15.jpg' title='BANGKOK WAT ARUN'><img src='images/asia/Z15.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>BANGKOK WAT ARUN</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                        if ($photo4[17] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z16.jpg' title='HALONG BAY'><img src='images/asia/Z16.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>HALONG BAY</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                        if ($photo4[18] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z17.jpg' title='HONKONG'><img src='images/asia/Z17.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>HONKONG</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                        if ($photo4[19] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/asia/Z18.jpg' title='BOROBUDUR'><img src='images/asia/Z18.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>BOROBUDUR</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                        }

                                        ?>
                                        </ul>
                                        </div>

                                        <button class="collapsible soam">South America</button>
                                    <div class="content">
                                    <ul id="photoslist" class="photo_gallery_13">
                                        <br>

                                        <?php

                                        $photos3 = $db->prepare("SELECT id, userID, s1, s2, s3, s4, s5, s6, s7, s8, s9, s10, s11, s12 FROM zuidamerika WHERE userID = :id");
                                        $photos3->execute(array(':id' => $id));

                                        foreach($photos3 as $photo3){

                                        //a1
                                        if ($photo3[2] == 1) {

                                            echo ("<li><div class='card'>");
                                                
                                            echo("<a href='images/south/S1.jpg' title='FORTALEZA'><img src='images/south/S1.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>FORTALEZA</center></b></p>");
                                            echo ("</div> </li>");
                                            }

                                            //a2
                                        if ($photo3[3] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S2.jpg' title='RIO DE JANEIRO'><img src='images/south/S2.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>RIO DE JANEIRO</center></b></p>");
                                            echo("</div></li>");
                                            }  

                                            //a3
                                        if ($photo3[4] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S3.jpg' title='AMAZONE'><img src='images/south/S3.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>AMAZONE</center></b></p>");
                                            echo("</div></li>");
                                                }  


                                            //a4
                                        if ($photo3[5] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S4.jpg' title='PARAMARIBO'><img src='images/south/S4.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>PARAMARIBO</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a5
                                        if ($photo3[6] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S5.jpg' title='CARACAS'><img src='images/south/S5.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>CARACAS</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a6
                                        if ($photo3[7] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S6.jpg' title='QUITO'><img src='images/south/S6.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>QUITO</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            //a7
                                        if ($photo3[8] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S7.jpg' title='MACHU PICCHU'><img src='images/south/S7.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>MACHU PICCHU</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a8
                                        if ($photo3[9] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S8.jpg' title='SANTIAGO'><img src='images/south/S8.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>SANTIAGO</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a9
                                        if ($photo3[10] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S9.jpg' title='RESERVA FAUNISTICS PENINSULA VALDES'><img src='images/south/S9.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>RESERVA</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a10
                                        if ($photo3[11] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S10.jpg' title='FALCAN ISLANDS'><img src='images/south/S10.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>FALCAN ISLANDS</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a11
                                        if ($photo3[12] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S11.jpg' title='BUENOS AIRES'><img src='images/south/S11.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>BUENOS AIRES</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a12
                                        if ($photo3[13] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S12.jpg' title='ASUNCIÓN'><img src='images/south/S12.jpg' alt='image'/></a>");
                                            echo ("<h6><b><center>ASUNCIÓN</center></b></h6>");
                                            echo("</div></li>");
                                                }  
                                        }

                                        ?>

                                        </ul>
                                        </div>

                                        <button class="collapsible aus">Oceania</button>
                                    <div class="content">
                                    <ul id="photoslist" class="photo_gallery_13">
                                        <br>

                                        <?php

                                        $photos3 = $db->prepare("SELECT id, userID, c1, c2, c3, c4, c5, c6, c7, c8, c9, c10, c11, c12, c13 FROM australie WHERE userID = :id");
                                        $photos3->execute(array(':id' => $id));

                                        foreach($photos3 as $photo3){

                                        //a1
                                        if ($photo3[2] == 1) {

                                            echo ("<li><div class='card'>");
                                                
                                            echo("<a href='images/australia/C1.jpg' title='SOLOMON ISLANDS'><img src='images/australia/C1.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>SOLOMON ISLANDS</center></b></p>");
                                            echo ("</div> </li>");
                                            }

                                            //a2
                                        if ($photo3[3] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/australia/C2.jpg' title='DARWIN'><img src='images/australia/C2.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>DARWIN</center></b></p>");
                                            echo("</div></li>");
                                            }  

                                            //a3
                                        if ($photo3[4] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/australia/C3.jpg' title='DIRK HARTOG ISLAND'><img src='images/south/S3.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>DIRK HARTOG ISLAND</center></b></p>");
                                            echo("</div></li>");
                                                }  


                                            //a4
                                        if ($photo3[5] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/australia/C4.jpg' title='GIBSON DESERT'><img src='images/australia/C4.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>GIBSON DESERT</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a5
                                        if ($photo3[6] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/australia/C5.jpg' title='ALICE SPRINGS'><img src='images/australia/C5.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>ALICE SPRINGS</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a6
                                        if ($photo3[7] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/south/S6.jpg' title='QUITO'><img src='images/south/S6.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>QUITO</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            //a7
                                        if ($photo3[8] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/australia/C7.jpg' title='GREAT BARRIER REEF'><img src='images/australia/C7.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>GREAT BARRIER REEF</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a8
                                        if ($photo3[9] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/australia/C8.jpg' title='FIJI ISLANDS'><img src='images/australia/C8.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>FIJI ISLANDS</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a9
                                        if ($photo3[10] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/australia/C9.jpg' title='WELLINGTON'><img src='images/australia/C9.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>WELLINGTON</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a10
                                        if ($photo3[11] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/australia/C10.jpg' title='CHRISTCHURCH'><img src='images/australia/C10.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>CHRISTCHURCH</center></b></p>");
                                            echo("</div></li>");
                                                }  

                                            //a11
                                        if ($photo3[12] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/australia/C11.jpg' title='TASMANIA'><img src='images/australia/C11.jpg' alt='image'/></a>");
                                            echo ("<p><b><center>TASMANIA</center></b></p>");
                                            echo("</div></li>");
                                                }  
                                            
                                            //a12
                                        if ($photo3[13] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/australia/C12.jpg' title='MELBOURNE'><img src='images/australia/C12.jpg' alt='image'/></a>");
                                            echo ("<h6><b><center>MELBOURNE</center></b></h6>");
                                            echo("</div></li>");
                                                }  

                                        if ($photo3[13] == 1) {

                                            echo ("<li><div class='card'>");

                                            echo("<a href='images/australia/C13.jpg' title='ADELAIDE'><img src='images/australia/C13.jpg' alt='image'/></a>");
                                            echo ("<h6><b><center>ADELAIDE</center></b></h6>");
                                            echo("</div></li>");
                                                }  
                                        }

                                        ?>

                                        </ul>
                                        </div>
                                
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