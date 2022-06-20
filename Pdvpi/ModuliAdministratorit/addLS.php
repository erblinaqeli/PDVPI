<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
    <title>Moduli Administratorit</title>
        <link rel="icon" href="images/mobilelogo1.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
			form{
				margin: 0;
			}
            body{
                background-color: rgb(3,47,95);
            }
		</style>
	</head>
	<body class="is-preload">

        <?php
        //including the database connection file
        include_once("config.php");



        if(isset($_POST['shtoLS'])) {	
            $uid_lenda = $_POST['uid_lenda'];
            $uid = $_POST['uid'];
                
            if(empty($uid_lenda) || empty($uid)) {			
                if(empty($uid_lenda)) {echo "<font color='red'>username field is empty.</font><br/>";}
                if(empty($uid)) {echo "<font color='red'>password field is empty.</font><br/>";}
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            } else { 
                
                    // INSERT INTO `lendstud`(`uid_LS`, `uid`, `uid_lenda`) VALUES ('',$uid,$uid_lenda)
                    $result = mysqli_query($conn68,"CALL InsertLendeStud($uid,$uid_lenda)");
                    // INSERT INTO ideteprojekteved1 VALUES('','$uid','/','$uid_lenda','1','/','/','0')
                    $result = mysqli_query($conn69,"CALL InsertIdeteEProjekteve($uid , $uid_lenda ,'1')");
                    // INSERT INTO evidencal VALUES('','$uid','','','','','','','','','','','','','','','','','','$uid_lenda')
                    $result = mysqli_query($conn70,"CALL InsertEvidencaL($uid,$uid_lenda)");
                    // INSERT INTO aktivitetil VALUES('','$uid','','','','','','','','','','','','','','','','','','$uid_lenda')
                    $result = mysqli_query($conn71,"CALL InsertAktivitetiL($uid,$uid_lenda)");
                    // INSERT INTO aktivitetiu VALUES('','$uid','','','','','','','','','','','','','','','','','','$uid_lenda')
                    $result = mysqli_query($conn72,"CALL InsertAktivitetiU($uid,$uid_lenda)");
                    // INSERT INTO evidencau VALUES('','$uid','','','','','','','','','','','','','','','','','','$uid_lenda')
                    $result = mysqli_query($conn73,"CALL InsertEvicencaU($uid,$uid_lenda)");
                    
                    $result1 = mysqli_query($conn74,"CALL SelectDESCIdeteEProjekteve()");
                    while($row = mysqli_fetch_array($result1)){
                        $titulli= $row['uid_IdetEProjekteve'];
                        // INSERT INTO listaprezantimeve VALUES('','$uid','$titulli','$uid_lenda','1','1','1','1','1','1','2022-02-05','0')
                        $result = mysqli_query($conn75,"CALL InsertListaPrezantimeve($uid,$titulli,$uid_lenda,'1','1','1','1','1','1')");
                    } 
                    // SELECT `uid_Evidenca` FROM `evidencal` ORDER BY `uid_Evidenca` DESC LIMIT 1
                    $result1 = mysqli_query($conn76,"CALL SelectDESCEvidencaL()");
                    while($row = mysqli_fetch_array($result1)){
                        $uid_Evidenca = $row['uid_Evidenca'];
                    } 
                    $result1 = mysqli_query($conn78,"CALL SelectDESCAktivitetiL()");
                    while($row = mysqli_fetch_array($result1)){
                        $uid_aktivitetil = $row['uid_aktivitetil'];
                    } 
                    // SELECT `uid_EvidencaU` FROM `evidencau` ORDER BY `uid_EvidencaU` DESC LIMIT 1
                    $result1 = mysqli_query($conn79,"CALL SelectDESCEvidencaU()");
                    while($row = mysqli_fetch_array($result1)){
                        $uid_EvidencaU = $row['uid_EvidencaU'];
                    }
                    // SELECT `uid_aktivitetiu` FROM `aktivitetiu` ORDER BY `uid_aktivitetiu` DESC LIMIT 1
                    $result1 = mysqli_query($conn80,"CALL SelectDESCAktivitetiU()");
                    while($row = mysqli_fetch_array($result1)){
                        $uid_aktivitetiu = $row['uid_aktivitetiu'];
                    // }INSERT INTO vlersimi_final VALUES('','$uid','$uid_lenda','$titulli','','','','','','','','','$uid_Evidenca','$uid_aktivitetil','$uid_EvidencaU','$uid_aktivitetiu','','','','','')
                    $result = mysqli_query($conn81,"CALL InsertVlersimiFinal($uid,$uid_lenda,$titulli,$uid_Evidenca,$uid_aktivitetil,$uid_EvidencaU,$uid_aktivitetiu)");
                    }
            echo "<script>
                setTimeout(function(){
                    window.location.href = 'regjistroLendetStud.php';
                }, 2000);
            </script>";
                echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
            
                
            }
        }
        ?>
</body>
</html>
