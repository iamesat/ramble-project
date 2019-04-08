<?php

include('../../includes/db-connect.php');

include('../../includes/session.php');

$id = $_SESSION['userID'];

$addSaved = $db->prepare("SELECT id, username, australia FROM users WHERE id=$id");
$addSaved->execute();
foreach($addSaved as $addSave) {

}

$addMoments = $db->prepare("SELECT id, userID, c1 FROM australie WHERE userID = $id");
$addMoments->execute();
foreach($addMoments as $addMoment) {

}


if (isset($_POST)) {

    if ($addMoment[2] == 1) {
        header("Location: ../../index.php");
    }else{

        $addPoint = $addSave[2] + 1;


    $addMomentus = $db->prepare("UPDATE users SET australia = :australia WHERE id = $id");


    $addMomentus->bindValue(':australia',$addPoint);
    $addMomentus->execute();


    $addOne = 1;


  $editAccount = $db->prepare("UPDATE australie SET c1 = :c1 WHERE userID = $id");


  $editAccount->bindValue(':c1',$addOne);
  $editAccount->execute();


  header("Location: ../../index.php");

    }

    

  

}













?>