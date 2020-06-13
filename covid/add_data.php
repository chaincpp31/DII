<?php
require_once 'connection.php';

$Name = $_POST['name'];
    $Lastname = $_POST['lastname'];
    $Sex = $_POST['rdoSex'];
    $Age = $_POST['age'];
    $Check1 = 0;
    if(isset($_POST['check1'])){
        $Check1=1;
    }  ;
    $Check2 = 0;
    if(isset($_POST['check2'])){
        $Check2=1;
    }  ;
    $Check3 = 0;
    if(isset($_POST['check3'])){
        $Check3=1;
    }  ;
    $Check4 = 0;
    if(isset($_POST['check4'])){
        $Check4=1;
    }  ;
    $Check5 = 0;
    if(isset($_POST['check5'])){
        $Check5=1;
    }  ;
    $Check6 = 0;
    if(isset($_POST['check6'])){
        $Check6=1;
    }  ;
    $TOTAL = $Check1+$Check2+$Check3+$Check4+$Check5+$Check6;
    $userQuery = "INSERT INTO `covid`(`name`, `lastname`, `sex`, `age`, `rok`, `arkarn`, `temp`, `his`) VALUES ('$Name','$Lastname','$Sex',$Age,$TOTAL,'','','')";
  

    echo $userQuery;
    $result = mysqli_query($Connect,$userQuery);
    //if (!$result) {
        //die ("Could not successfully run the query $userQuery ".mysql_error($Connect));
        //}
        //else {
        //echo "Insert successfully.<br><b>";
        //echo "<a href='display_product-2.php'>Display product</a><br><br>";
        //}
        mysqli_close($Connect);
        $url = "display_user.php?Name=".$Name;
        header( "Location: $url" );
    ?>