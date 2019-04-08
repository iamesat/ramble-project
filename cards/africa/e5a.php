<?php

include('../../includes/db-connect.php');

include('../../includes/session.php');

$id = $_SESSION['userID'];

$addSaved = $db->prepare("SELECT id, username, africa FROM users WHERE id=$id");
$addSaved->execute();
foreach($addSaved as $addSave) {

}

$addMoments = $db->prepare("SELECT id, userID, a5 FROM afrika WHERE userID=$id");
$addMoments->execute();
foreach($addMoments as $addMoment) {

}


if (isset($_POST)) {

    if ($addMoment[2] == 1) {
        header("Location: ../../index.php");
    }else{

        $addPoint = $addSave[2] + 1;


    $addMomentus = $db->prepare("UPDATE users SET africa = :africa WHERE id = $id");


    $addMomentus->bindValue(':africa',$addPoint);
    $addMomentus->execute();


    $addOne = 1;


  $editAccount = $db->prepare("UPDATE afrika SET a5 = :a5 WHERE userID = $id");


  $editAccount->bindValue(':a5',$addOne);
  $editAccount->execute();


  header("Location: ../../index.php");

    }

    

  

}













?>