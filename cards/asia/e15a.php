<?php

include('../../includes/db-connect.php');

include('../../includes/session.php');

$id = $_SESSION['userID'];

$addSaved = $db->prepare("SELECT id, username, asia FROM users WHERE id=$id");
$addSaved->execute();
foreach($addSaved as $addSave) {

}

$addMoments = $db->prepare("SELECT id, userID, z15 FROM azie WHERE userID = $id");
$addMoments->execute();
foreach($addMoments as $addMoment) {

}


if (isset($_POST)) {

    if ($addMoment[2] == 1) {
        header("Location: ../../index.php");
    }else{

        $addPoint = $addSave[2] + 1;


    $addMomentus = $db->prepare("UPDATE users SET asia = :asia WHERE id = $id");


    $addMomentus->bindValue(':asia',$addPoint);
    $addMomentus->execute();


    $addOne = 1;


  $editAccount = $db->prepare("UPDATE azie SET z15 = :z15 WHERE userID = $id");


  $editAccount->bindValue(':z14',$addOne);
  $editAccount->execute();


  header("Location: ../../index.php");

    }

    

  

}













?>