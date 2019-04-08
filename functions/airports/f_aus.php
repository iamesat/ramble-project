<?php

include('../../includes/db-connect.php');

include('../../includes/session.php');

$id = $_SESSION['userID'];

$valuta1 = $db->prepare("SELECT id, username, bar FROM users WHERE id=$id");
$valuta1->execute();
foreach($valuta1 as $valuta) {

}

$euro2 = $valuta[2];
$euroNu = 225;

if (isset($_POST)) {



  $eur = $euro2 - $euroNu;


  $editAccount = $db->prepare("UPDATE users SET bar = :bar WHERE id = $id");


  $editAccount->bindValue(':bar',$eur);
  $editAccount->execute();


  header("Location: ../../plane.php");

  

} else {
  header('Location: ../niet.php');
}













?>