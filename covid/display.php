<?php
   echo"<table border = \"1\">";
   echo"<tr><th>Name</th><th>Lastname</th></tr>";
   while($row = mysqli_fetch_assoc($result)){
       echo"<tr><td>".$row['name']."</td><td>".$row['lastname']."</td></tr>";
   }
   echo"</table>";
?>