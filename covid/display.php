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
  
  $sql = "SELECT * FROM covid";
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
            <td>Date</td>
        </tr>
        <?php
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
            echo "<tr><td>".$row['name']."</td><td>".$row['lastname']."</td><td>".$row['sex']."</td><td>".$row['age']."</td><td>".$row['disease']."</td><td>".$row['arkarn']."</td><td>".$row['temp']."</td><td>".$row['his']."</td><td>".$row['total']."</td><td>".showStatus($row['total'])."</td><td>".$row['date']."</td></tr>";
        }
        
      } else {
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
</body>

</html>