<?php

include('../../includes/db-connect.php');

include('../../includes/session.php');

$id = $_SESSION['userID'];

$addSaved = $db->prepare("SELECT id, username, europe FROM users WHERE id=$id");
$addSaved->execute();
foreach($addSaved as $addSave) {

}

$addMoments = $db->prepare("SELECT id, userID, e1, e2, e3, e4, e5, e6, e7, e8, e9, e10, e11, e12 FROM europe WHERE userID=$id");
$addMoments->execute();
foreach($addMoments as $addMoment) {

}


if (isset($_POST)) {

    if ($addMoment[2] == 1) {
        header("Location: ../../index.php");
    }else{

        $addPoint = $addSave[2] + 1;


    $addMomentus = $db->prepare("UPDATE users SET europe = :europe WHERE id = $id");


    $addMomentus->bindValue(':europe',$addPoint);
    $addMomentus->execute();


    $addOne = 1;


  $editAccount = $db->prepare("UPDATE europe SET e1 = :e1 WHERE userID = $id");


  $editAccount->bindValue(':e1',$addOne);
  $editAccount->execute();


  header("Location: ../../index.php");

    }

    

  

}













?>