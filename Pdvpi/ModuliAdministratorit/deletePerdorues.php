<?php

include("config.php");


$uid = $_GET['uid'];
// DELETE FROM vlersimi_final WHERE uid = $uid
    mysqli_query($conn25,"CALL DeletePVlersimiFinal($uid)");
    // DELETE FROM listaprezantimeve WHERE uid = $uid
    mysqli_query($conn26,"CALL DeletePListaPrezantimeve($uid)");
    // DELETE FROM evidencau WHERE uid = $uid
    mysqli_query($conn27,"CALL DeletePEvidencaU($uid)");
    // DELETE FROM aktivitetiu WHERE uid = $uid
    mysqli_query($conn28,"CALL DeletePAktivitetiu($uid)");
    // DELETE FROM aktivitetil WHERE uid = $uid
    mysqli_query($conn29,"CALL DeletePAktivitetil($uid)");
    // DELETE FROM evidencal WHERE uid = $uid
    mysqli_query($conn30,"CALL DeletePEvidencaL($uid)");
    // DELETE FROM ideteprojekteved1 WHERE uid = $uid
    mysqli_query($conn31,"CALL DeletePIdeteEProjekteve($uid)");
    // DELETE FROM lendstud WHERE uid = $uid
    mysqli_query($conn32,"CALL DeletePLendstud($uid)");
    // DELETE FROM users WHERE uid = $uid
   

    mysqli_query($conn32,"CALL DeletePLendstud($uid)");
    $result = mysqli_query($conn33,"CALL DeletePUsers($uid)");

    
header("Location: menaxhimiPerdoruesve.php");
?>

