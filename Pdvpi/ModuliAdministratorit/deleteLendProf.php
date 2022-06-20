<?php
//including the database connection file
include("config.php");

//getting uid of the data from url
$uid = $_GET['uid'];
$uid_lenda = $_GET['uid_lenda'];

//deleting the row from table
// DELETE FROM lendprof WHERE profesori=$uid AND uid_lenda=$uid_lenda
$result = mysqli_query($conn16,"CALL DeleteLendeProf($uid,$uid_lenda)");

//redirecting to the display page (index.php in our case)
header("Location: regjistroLendetProf.php");
?>

