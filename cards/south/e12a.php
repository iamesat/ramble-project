<?php

include('../../includes/db-connect.php');

include('../../includes/session.php');

$id = $_SESSION['userID'];

$addSaved = $db->prepare("SELECT id, username, samerica FROM users WHERE id=$id");
$addSaved->execute();
foreach($addSaved as $addSave) {

}

$addMoments = $db->prepare("SELECT id, userID, s12 FROM zuidamerika WHERE userID = $id");
$addMoments->execute();
foreach($addMoments as $addMoment) {

}


if (isset($_POST)) {

    if ($addMoment[2] == 1) {
        header("Location: ../../index.php");
    }else{

        $addPoint = $addSave[2] + 1;


    $addMomentus = $db->prepare("UPDATE users SET samerica = :samerica WHERE id = $id");


    $addMomentus->bindValue(':samerica',$addPoint);
    $addMomentus->execute();


    $addOne = 1;


  $editAccount = $db->prepare("UPDATE zuidamerika SET s12 = :s12 WHERE userID = $id");


  $editAccount->bindValue(':s12',$addOne);
  $editAccount->execute();


  header("Location: ../../index.php");

    }

    

  

}













?>