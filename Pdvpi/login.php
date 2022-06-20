<?php
/* Kontrollon nese logini mund te kryhet me sukses, nese username dhe passwordi qe ka shkruar useri ne Index.php gjindet ne db ne MySQL */
	session_start();
	include("ModuliAdministratorit/config.php"); //Establishing connection with our database
	
	$error = ""; //Variable for storing our errors.
	if(isset($_POST["submit"]))
	{
		if(empty($_POST["email"]) || empty($_POST["password"]))
		{
			$error = "Both fields are required.";
		}else
		{
			// Define $username and $password
			$email=$_POST['email'];
			$password=MD5($_POST['password']);
			//Check username and password from database
			$sql="SELECT uid FROM users WHERE email='$email' 
			and password='$password'";
			$result=mysqli_query($conn,$sql);
			$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
			//If username and password exist in our database then create a session.
			//Otherwise echo error.
			
		
			$_SESSION['email'] = $email;
			$userRoleadmin = 1;
			$userRoleprof = 2;
			$userRoleasist = 3;
			$userRolestud = 4;
			
			$sql2="CALL SelectLogProf('$email','$password', $userRoleprof)";
			$result2=mysqli_query($conn2,$sql2);
			$sql1="CALL SelectLogAdmin('$email','$password', $userRoleadmin )";
			$result1=mysqli_query($conn1,$sql1);
			$sql3="CALL SelectLogAsist('$email','$password', $userRoleasist)";
			$result3=mysqli_query($conn3,$sql3);
			$sql4="CALL SelectLogStud('$email','$password', $userRolestud)";
			$result4=mysqli_query($conn4,$sql4);
			if (mysqli_num_rows($result2) == 1){
				header("location: ModuliProfesorit\admin_home.php");
			}
			else if(mysqli_num_rows($result1) == 1){
				header("location: ModuliAdministratorit\admin_home.php");
			}
			else if (mysqli_num_rows($result3) == 1){
				header("location: ModuliAsistentit\admin_home.php");
			}
			else if (mysqli_num_rows($result4) == 1){
				header("location: ModuliStudentit\admin_home.php");
			}			
			else
			{
				$error = "Incorrect username or password.";
			}
		}
	}
?>