<?php

session_start();

include('../includes/db-connect.php');

include('../includes/session.php');

$id = [1,2,3,4];

if (isset($_POST)) {



    $zero = 0;

    $editAccountz = $db->prepare("UPDATE europe SET e1=:e1, e2=:e2, e3=:e3, e4=:e4, e5=:e5, e6=:e6, e7=:e7, e8=:e8, e9=:e9, e10=:e10, e11=:e11, e12=:e12 WHERE id = $id");
    $editAccountz->bindValue(':e1',$zero);
    $editAccountz->bindValue(':e2',$zero);
    $editAccountz->bindValue(':e3',$zero);
    $editAccountz->bindValue(':e4',$zero);
    $editAccountz->bindValue(':e5',$zero);
    $editAccountz->bindValue(':e6',$zero);
    $editAccountz->bindValue(':e7',$zero);
    $editAccountz->bindValue(':e8',$zero);
    $editAccountz->bindValue(':e9',$zero);
    $editAccountz->bindValue(':e10',$zero);
    $editAccountz->bindValue(':e11',$zero);
    $editAccountz->bindValue(':e12',$zero);
    $editAccountz->execute();

    $editAccountzz = $db->prepare("UPDATE afrika SET a1=:a1, a2=:a2, a3=:a3, a4=:a4, a5=:a5, a6=:a6, a7=:a7, a8=:a8, a9=:a9, a10=:a10, a11=:a11, a12=:a12 WHERE id = $id");
    $editAccountzz->bindValue(':a1',$zero);
    $editAccountzz->bindValue(':a2',$zero);
    $editAccountzz->bindValue(':a3',$zero);
    $editAccountzz->bindValue(':a4',$zero);
    $editAccountzz->bindValue(':a5',$zero);
    $editAccountzz->bindValue(':a6',$zero);
    $editAccountzz->bindValue(':a7',$zero);
    $editAccountzz->bindValue(':a8',$zero);
    $editAccountzz->bindValue(':a9',$zero);
    $editAccountzz->bindValue(':a10',$zero);
    $editAccountzz->bindValue(':a11',$zero);
    $editAccountzz->bindValue(':a12',$zero);
    $editAccountzz->execute();

    $editAccountzzz = $db->prepare("UPDATE noordamerika SET n1=:n1, n2=:n2, n3=:n3, n4=:n4, n5=:n5, n6=:n6, n7=:n7, n8=:n8, n9=:n9, n10=:n10, n11=:n11, n12=:n12, n13=:n13 WHERE id = $id");
    $editAccountzzz->bindValue(':n1',$zero);
    $editAccountzzz->bindValue(':n2',$zero);
    $editAccountzzz->bindValue(':n3',$zero);
    $editAccountzzz->bindValue(':n4',$zero);
    $editAccountzzz->bindValue(':n5',$zero);
    $editAccountzzz->bindValue(':n6',$zero);
    $editAccountzzz->bindValue(':n7',$zero);
    $editAccountzzz->bindValue(':n8',$zero);
    $editAccountzzz->bindValue(':n9',$zero);
    $editAccountzzz->bindValue(':n10',$zero);
    $editAccountzzz->bindValue(':n11',$zero);
    $editAccountzzz->bindValue(':n12',$zero);
    $editAccountzzz->bindValue(':n13',$zero);
    $editAccountzzz->execute();

    $editAccountz2 = $db->prepare("UPDATE azie SET z1=:z1, z2=:z2, z3=:z3, z4=:z4, z5=:z5, z6=:z6, z7=:z7, z8=:z8, z9=:z9, z10=:z10, z11=:z11, z12=:z12, z13=:z13, z14=:z14, z15=:z15, z16=:z16, z17=:z17, z18=:z18 WHERE id = $id");
    $editAccountz2->bindValue(':z1',$zero);
    $editAccountz2->bindValue(':z2',$zero);
    $editAccountz2->bindValue(':z3',$zero);
    $editAccountz2->bindValue(':z4',$zero);
    $editAccountz2->bindValue(':z5',$zero);
    $editAccountz2->bindValue(':z6',$zero);
    $editAccountz2->bindValue(':z7',$zero);
    $editAccountz2->bindValue(':z8',$zero);
    $editAccountz2->bindValue(':z9',$zero);
    $editAccountz2->bindValue(':z10',$zero);
    $editAccountz2->bindValue(':z11',$zero);
    $editAccountz2->bindValue(':z12',$zero);
    $editAccountz2->bindValue(':z13',$zero);
    $editAccountz2->bindValue(':z14',$zero);
    $editAccountz2->bindValue(':z15',$zero);
    $editAccountz2->bindValue(':z16',$zero);
    $editAccountz2->bindValue(':z17',$zero);
    $editAccountz2->bindValue(':z18',$zero);
    $editAccountz2->execute();

    $editAccountz22 = $db->prepare("UPDATE zuidamerika SET s1=:s1, s2=:s2, s3=:s3, s4=:s4, s5=:s5, s6=:s6, s7=:s7, s8=:s8, s9=:s9, s10=:s10, s11=:s11, s12=:s12 WHERE id = $id");
    $editAccountz22->bindValue(':s1',$zero);
    $editAccountz22->bindValue(':s2',$zero);
    $editAccountz22->bindValue(':s3',$zero);
    $editAccountz22->bindValue(':s4',$zero);
    $editAccountz22->bindValue(':s5',$zero);
    $editAccountz22->bindValue(':s6',$zero);
    $editAccountz22->bindValue(':s7',$zero);
    $editAccountz22->bindValue(':s8',$zero);
    $editAccountz22->bindValue(':s9',$zero);
    $editAccountz22->bindValue(':s10',$zero);
    $editAccountz22->bindValue(':s11',$zero);
    $editAccountz22->bindValue(':s12',$zero);
    $editAccountz22->execute();

    $editAccountz3 = $db->prepare("UPDATE australie SET c1=:c1, c2=:c2, c3=:c3, c4=:c4, c5=:c5, c6=:c6, c7=:c7, c8=:c8, c9=:c9, c10=:c10, c11=:c11, c12=:c12, c13=:c13 WHERE id = $id");
    $editAccountz3->bindValue(':c1',$zero);
    $editAccountz3->bindValue(':c2',$zero);
    $editAccountz3->bindValue(':c3',$zero);
    $editAccountz3->bindValue(':c4',$zero);
    $editAccountz3->bindValue(':c5',$zero);
    $editAccountz3->bindValue(':c6',$zero);
    $editAccountz3->bindValue(':c7',$zero);
    $editAccountz3->bindValue(':c8',$zero);
    $editAccountz3->bindValue(':c9',$zero);
    $editAccountz3->bindValue(':c10',$zero);
    $editAccountz3->bindValue(':c11',$zero);
    $editAccountz3->bindValue(':c12',$zero);
    $editAccountz3->bindValue(':c13',$zero);
    $editAccountz3->execute();
  
    $editAccount = $db->prepare("UPDATE users SET eur=:eur, usd=:usd, zar=:zar, yen=:yen, rup=:rup, bar=:bar, europe=:europe, africa=:africa, asia=:asia, namerica=:namerica, samerica=:samerica, australia=:australia WHERE id = $id");
    $editAccount->bindValue(':eur',$zero);
    $editAccount->bindValue(':usd',$zero);
    $editAccount->bindValue(':zar',$zero);
    $editAccount->bindValue(':yen',$zero);
    $editAccount->bindValue(':rup',$zero);
    $editAccount->bindValue(':bar',$zero);
    $editAccount->bindValue(':europe',$zero);
    $editAccount->bindValue(':africa',$zero);
    $editAccount->bindValue(':namerica',$zero);
    $editAccount->bindValue(':asia',$zero);
    $editAccount->bindValue(':samerica',$zero);
    $editAccount->bindValue(':australia',$zero);
    $editAccount->execute();


}

session_unset();

session_destroy();

header("Location: ../radmin.php");