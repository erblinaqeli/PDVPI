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
        if(isset($_POST['shtoperdorues'])) {
            $uid_Student = $_POST['uid_Student'];
            $username = $_POST['username'];
            $mbiemri = $_POST['mbiemri'];
            $password = MD5($_POST['password']);
            $email = $_POST['email'];
            $ID_usersRole = $_POST['ID_usersRole'];
                
            
            // checking empty fields
            $result = mysqli_query($conn83, "SELECT `uid_Student` FROM `users` WHERE uid_Student = $uid_Student");
            while($row = mysqli_fetch_array($result)) {
                 $uidstud = $row['uid_Student'];   
            
                }

            if($uid_Student == $uidstud)
            {
                echo "<script>
                setTimeout(function(){
                    window.location.href = 'menaxhimiPerdoruesve.php';
                }, 3000);
            </script>";
                echo "<font color='red'>Kjo ID Egziston ne Plateforme</font><br/>";
            }
        
        else {
                
            if(empty($username) || empty($password) || empty($email || empty($ID_usersRole) || empty($uid_Student) || empty($mbiemri))) {			
                if(empty($username)) {echo "<font color='red'>Fusha e Emrit është bosh.</font><br/>";}
                if(empty($password)) {echo "<font color='red'>Fusha e Fjalëkalimit është bosh.</font><br/>";}
                if(empty($email)) {echo "<font color='red'>Fusha e Emailit është bosh.</font><br/>";}
                if(empty($ID_usersRole)) {echo "<font color='red'>Fusha e Rolit është bosh.</font><br/>";}
                if(empty($uid_Student)) {echo "<font color='red'>Fusha e ID së Përdoruesit është bosh.</font><br/>";}
                if(empty($mbiemri)) {echo "<font color='red'>Fusha e Mbiemrit është bosh.</font><br/>";}

                //link to the previous password
                echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
            } else { 
                // if all the fields are filled (not empty) 
                //insert data to database	
                // INSERT IGNORE INTO users (username , password , email , ID_usersRole , uid_Student , mbiemri) VALUES('$username','$password','$email','$ID_usersRole','$uid_Student','$mbiemri')
             
                    $result = mysqli_query($conn, "CALL	InsertPerdoruesusers('$username','$password','$email','$ID_usersRole','$uid_Student','$mbiemri')");
                
            }
             echo "<script>
                setTimeout(function(){
                    window.location.href = 'menaxhimiPerdoruesve.php';
                }, 3000);
            </script>";
                echo"<p><b>   E dhena është duke u regjistruar në sistem. Ju lutem pritni 5 sekonda. <b></p>";
            }
                //display success messpassword
               
           
            }
        
        ?>
</body>
</html>
