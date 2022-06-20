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



        if(isset($_POST['shtoLA'])) {	
            $uid_lenda = $_POST['uid_lenda'];
            $asistenti = $_POST['uid'];
                
            // checking empty fields
            if(empty($uid_lenda) || empty($asistenti)) {			
                if(empty($uid_lenda)) {echo "<font color='red'>username field is empty.</font><br/>";}
                if(empty($asistenti)) {echo "<font color='red'>password field is empty.</font><br/>";}
                //link to the previous password
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            } else { 
                // if all the fields are filled (not empty) 
                //insert data to database	
                // INSERT INTO lendasist (uid_lenda , `asistenti`) VALUES('$uid_lenda','$asistenti')
                $result = mysqli_query($conn7, "CALL InsertADDLA($uid_lenda,$asistenti)");
                //display success messpassword
            echo "<script>
                setTimeout(function(){
                    window.location.href = 'regjistroLendetAsist.php';
                }, 2000);
            </script>";
                echo"<p><b>   E dhena eshte duke u regjistruar ne sistem. Ju lutem pritni 5 sekonda. <b></p>";
            
                //echo "<font color='green'>Data added successfully.";
                //echo "<br/><a href='perdoruesit.php'>View Result</a>";
            }
        }
        ?>
</body>
</html>
