<?php
require_once "connection.php";
<form method="POST" action="display.php">
$name = $_POST["name"];
$lastname = $_POST["lastname"]
$userQuery = "INSERT INTO 'covid'" ('name','lastname')VALUES('$name','$lastname');
$result = mysqli_query($Connect,$userQuery);
if (!$result) {
    die ("Could not successfully run the query $userQuery ".mysqli_error($connect));
    }
    else {
    echo "Insert successfully.<br><b>";
    echo "<a href='display.php'>Display product</a><br><br>";
    }
    mysqli_close($Connect);
    </form>
?>