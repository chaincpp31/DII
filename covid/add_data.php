<?php
require_once 'connection.php';

$Name = $_POST['name'];
    $Lastname = $_POST['lastname'];
    $Sex = $_POST['rdoSex'];
    $Age = $_POST['age'];
    $Arkarn = $_POST['arkarn'];
    $checktemp =$_POST['checktemp'];
    $Checkarkarn = $_POST['checkarkarn'];
    $His = 0;
    $Temp = 0;
    $Arkarn = 0 ;
    date_default_timezone_set("Asia/Bangkok");
    $Date = date ("Y/m/d H:i:s");
    if (isset($_POST ['checkhis1'])){
        $His1 = 1;
        $Hisnum1 = 2;
    }
    if (isset($_POST ['checkhis2'])){
        $His2 = 1;
        $Hisnum2 = 3;
    }
    if (isset($_POST ['checkhis3'])){
        $His3 = 8;
        $Hisnum3 = 4;
    }
    if (isset($_POST ['checkhis4'])){
        $His4 = 2;
        $Hisnum4=9;
    }
    if (isset($POST ['checkhis5'])){
        $His5 = 0;
        $Hisnum5 = 10;
    }
    if ($checktemp ==1){
        $Temp = 3;
    }
    if (isset($_POST['checktempno'])){
        $Temp = 0;
    }
    if ($Checkarkarn ==1){
        $Checkarkarn1 = 3;
    }
    if ($Checkarkarn == 0){
        $Checkarkarn0 = 0;
    }
    $Check1 = 0;
    if(isset($_POST['check1'])){
        $Check1=1;
    }  
    $Check2 = 0;
    if(isset($_POST['check2'])){
        $Check2=1;
    }  
    $Check3 = 0;
    if(isset($_POST['check3'])){
        $Check3=1;
    }  
    $Check4 = 0;
    if(isset($_POST['check4'])){
        $Check4=1;
    }  
    $Check5 = 0;
    if(isset($_POST['check5'])){
        $Check5=1;
    }  
    $Check6 = 0;
    if(isset($_POST['check6'])){
        $Check6=1;
    }  
    $Disease = $Check1+$Check2+$Check3+$Check4+$Check5+$Check6;
    $History = $His1+$His2+$His3+$His4+$His5;
    $checkhis = $Checkarkarn1+$Temp;
    $Arkarn = $Checkarkarn1+$Checkarkarn0;
    $Hisnum = $Hisnum1+$Hisnum2+$Hisnum3+$Hisnum4;
    $TOTAL=$Disease+$checkhis+ $History;
    $userQuery = "INSERT INTO `covid`(`name`, `lastname`, `sex`, `age`, `disease`, `arkarn`, `temp`, `his`, `hisnum`, `total`, `date`) VALUES ('$Name','$Lastname','$Sex','$Age','$Disease','$Arkarn','$Temp','$History','$Hisnum','$TOTAL','$Date')";
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