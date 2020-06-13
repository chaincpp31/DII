<!DOCTYPE html>
<html>
<head>
    <form action="covid.php" method="post" name="form1"></form>  
    <link href="style.css"rel="stylesheet"type="text/css"/>
</head>
<body>
<div id="all">
    <div id="header"><h1><center><h1>แบบคัดกรองผู้ป่วยติดเชื้อระบบทางเดินหายใจ จากไวรัสโควิด-19 (COVID-19)</h1></center></h1></div>
    <?php
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
    
    echo ("ชื่อ: ");
    echo ($Name);
    echo "<br>";
    echo ("นามสกุล: ");
    echo ($Lastname);
    echo "<br>";
    echo ("เพศ: ");
    if ($Sex == 'Man'){
        echo ("ชาย");
    }
    else if ($Sex == 'Woman'){
        echo ("หญิง");
    }
    echo "<br>";
    echo ($Age);
    echo "<br>";
    echo ($TOTAL);
    ?> 
    </body>
</html>