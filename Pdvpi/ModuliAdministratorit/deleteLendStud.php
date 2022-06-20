<?php

include("config.php");


$uid = $_GET['uid'];
$uid_lenda = $_GET['uid_lenda'];
// DELETE FROM vlersimi_final WHERE uid = $uid AND uid_lenda = $uid_lenda
    mysqli_query($conn17,"CALL DeleteVlersimi_Final($uid,$uid_lenda)");
    // DELETE FROM listaprezantimeve WHERE uid = $uid AND uid_lenda = $uid_lenda
    mysqli_query($conn18,"CALL DeleteListaPrezantimeve($uid,$uid_lenda)");
    // DELETE FROM evidencau WHERE uid = $uid AND uid_lenda = $uid_lenda
    mysqli_query($conn19,"CALL 	DeleteEvidencau($uid,$uid_lenda)");
    // DELETE FROM aktivitetiu WHERE uid = $uid AND uid_lenda = $uid_lenda
    mysqli_query($conn20,"CALL DeleteAktivitetiu($uid,$uid_lenda)");
    // DELETE FROM aktivitetil WHERE uid = $uid AND uid_lenda = $uid_lenda
    mysqli_query($conn21,"CALL DeleteAktivitetil($uid,$uid_lenda)");
    // DELETE FROM evidencal WHERE uid = $uid AND uid_lenda = $uid_lenda
    mysqli_query($conn22,"CALL DeleteEvidencaL($uid,$uid_lenda)");
    // DELETE FROM ideteprojekteved1 WHERE uid = $uid AND uid_lenda = $uid_lenda
    mysqli_query($conn23,"CALL DeleteIdeteEProjekteve($uid,$uid_lenda)");
    // DELETE FROM lendstud WHERE uid = $uid AND uid_lenda = $uid_lenda
    mysqli_query($conn24,"CALL DeleteLendstud($uid,$uid_lenda)");

    header("Location: regjistroLendetStud.php");
?>