<?php
include('connection.php');
/*$userQuery = "SELECT * FROM covid";
$result = mysqli_query($Connect,$userQuery);
var_dump($result);
print "<table width=100% border=1 cellpadding=3>";
print "<tr><td>ชื่อ</td><td>นามสกุล</td><td>เพศ</td><td>อายุ</td><td>โรคประจำตัว</td>< /tr>";
   print "<tr><td>".$info['name'] . "</td>";
   print "<td>".$info['lastname'] . "</td>";
   print "<td>".$info['sex'] ."</td>";
   print "<td>".$info['age'] ."</td>";
   print "<td>".$info['age'] ."</td></tr>";
print "</table>";*/
if ($Connect->connect_error) {
    die("Connection failed: " . $Connection->connect_error);
  }
  
  $sql = "SELECT * FROM `covid` ORDER BY id DESC LIMIT 1" ;
  //echo $sql;
  $result = $Connect->query($sql);
  
//   if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//       echo "name: " . $row["name"]. "lastname: " . $row["lastname"]. "gender " . $row["sex"]. "<br>";
//     }
//   } else {
//     echo "0 results";
//   }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <link href="style2.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>

<body>
    <table class="table table-dark table-hover">
        <tr>
            <td>Name</td>
            <td>Lastname</td>
            <td>Gender</td>
            <td>Age</td>
            <td>Disease</td>
            <td>Symptom</td>
            <td>Temp>37.5</td>
            <td>History</td>
            <td>Total</td>
            <td>status</td>
        </tr>
        <?php
        $temp = 0;
        function showStatus($total){
            if ($total == 1 || $total==2){
                return "ยังไม่มีความเสี่ยง";
                
            }
            elseif ($total >=3 && $total<=8){
                return "เสี่ยงปานกลาง";
            }
            elseif ($total >=8 && $total<=20){
            return "เสี่ยงมาก ควรรีบไปพบแพทย์";
            }
        }
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            // echo "11";
            // echo "<tr><td>000</td></tr>";
          echo "<tr><td>".$row['name']."</td><td>".$row['lastname']."</td><td>".$row['sex']."</td><td>".$row['age']."</td><td>".$row['disease']."</td><td>".$row['arkarn']."</td><td>".$row['temp']."</td><td>".$row['his']."</td><td>".$row['total']."</td><td>".showStatus($row['total'])."</td></tr>";
          date_default_timezone_set("Asia/Bangkok");
        //   echo "วันที่ทำแบบประเมิณ " . date("Y-m-d");
          $printname = $row['name']; 
          $printage = $row['age'];
          if ($row['arkarn']== 3){
              $numarkarn =1;
              $printarkarn = "-มีอาการ ไอ,เจ็บคอ,คัดจมูก,มีน้ำมูก,หายใจลำบาก ";
          }
          else {$printarkarn = NULL;}
          if ($row['temp'] == 3 ){
            $printtemp = "-มีไข้";
        }
        else {$printtemp = NULL;}
        $numhis1=0;
        $numhis2=0;
        $numhis3=0;
        $numhis4=0;
        if  ($row['hisnum'] == 2||$row['hisnum'] ==5||$row['hisnum']==6||$row['hisnum']==11){
            $numhis1 = 1;
            $printhis1 = "เดินทางมาจากต่างประเทศ ภายใน14วันที่ผ่านมา";
        }
        else {$printhis1 = NULL;}
        if ($row['hisnum'] == 3||$row['hisnum'] ==5||$row['hisnum']==7||$row['hisnum']==12){
            $numhis2 = 2;
            $printhis2 = "สัมผัสใกล้ชิดกับนักท่องเที่ยว ที่มาจากประเทศที่มีการระบาด";
        }
        else {$printhis2 = NULL;}
        if ($row['hisnum'] == 4||$row['hisnum'] ==6||$row['hisnum']==7||$row['hisnum']==13){
            $numhis3 = 3;
            $printhis3 = "สัมผัสใกล้ชิดกับผู้ป่วย COVID-19";
        }
        else {$printhis3 = NULL;}
        if ($row['hisnum'] == 9||$row['hisnum'] ==11||$row['hisnum']==12||$row['hisnum']==13){
            $numhis4 = 4;
            $printhis4 = "พักอาศัยร่วมกับผู้ที่เดินทางมาจากต่างประเทศ";
        }
        else {$printhis4 = NULL;}

          echo "<h1>".showStatus($row['total'])."</h1>";
        //   ".<h1>โรคประจำตัว</h1>."
          }
          }
       else {
        echo "0 results";
      }
    ?>
        <!-- <tr>
        <td>Name</td>
        <td>Lastname</td>
        <td>Gender</td>
        <td>Age</td>
    </tr> -->
    </table>
    <div id="wrap">
    <div id="header">
    <h1 id="sitename"><a href="#"><span>แจ้งผล</span> แบบประเมิณ</a></h1>
    
    <div id="contents">
    <p>วันที่ทำแบบประเมิณ <?php echo date("Y-m-d")?></p>
    <p>คุณ: <?php echo $printname?> อายุ: <?php echo $printage?> ปี</p>
    <p><?php if ($numarkarn =1)?> <?php echo $printarkarn?></p>
    <p><?php echo $printtemp?></p>
    <p><?php if ($numhis1 =1){echo $printhis1;}?></p>
    <p><?php if ($numhis2 =2){echo $printhis2;};?> </p>
    <p><?php if ($numhis3 =3){echo $printhis3;}?> </p>
    <p><?php if ($numhis4 =4){echo $printhis4;}?></p>
    </div>    
</div>
    </div>
</body>
</html>