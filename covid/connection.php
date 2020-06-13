<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db ='covid';
$Connect=mysqli_connect($server,$username,$password,$db);
if($Connect){
    echo "connect";
}
else{
    echo "Error";
}
?>