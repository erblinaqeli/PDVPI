<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$uid_lenda = $_GET['uid_lenda'];

//deleting the row from table
// DELETE  FROM lendet WHERE uid_lenda = $uid_lenda
$result = mysqli_query($conn15,"CALL DeleteLend($uid_lenda)");

//redirecting to the display page (index.php in our case)
header("Location: menaxhimiLendeve.php");
?>

