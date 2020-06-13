<?php
$Name = $_POST["name"];
$Lastname = $_POST["lastname"]
$userQuery = "INSERT INTO 'covid'" ('name','lastname')VALUES($Name,$Lastname);
$result = mysqli_query($Connect,$userQuery);
   echo"<table border = \"1\">";
   echo"<tr><th>Name</th><th>Lastname</th></tr>";
   while($row = mysqli_fetch_assoc($result)){
       echo"<tr><td>".$row['Name']."</td><td>".$row['Lastname']."</td></tr>";
   }
   echo"</table>";
?>