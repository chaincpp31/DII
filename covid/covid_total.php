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

    echo ("ชื่อ: ");
    echo ($Name);
    echo "<br>";
    echo ("นามสกุล: ");
    echo ($Lastname);
    echo "<br>";
    echo ($Sex);
    echo "<br>";
    echo ($Age);
    ?> 
    </body>
</html>