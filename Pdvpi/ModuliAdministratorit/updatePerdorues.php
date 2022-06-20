<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['updatePerdorues']))
{	
	$uid = $_POST['uid'];
	$uid_Student = $_POST['uid_Student'];
	$username=$_POST['username'];
	$mbiemri = $_POST['mbiemri'];
	$email=$_POST['email'];	
	$ID_usersRole=$_POST['ID_usersRole'];	
	
	
	// checking empty fields
	if(empty($uid_Student) || empty($username) || empty($mbiemri)  || empty($email) || empty($ID_usersRole)) {	
		if(empty($uid_Student)) {
			echo "<font color='red'>Fusha e ID se studentit eshte boshe.</font><br/>";
		}
		if(empty($username)) {
			echo "<font color='red'>Fusha e Emrit eshte boshe.</font><br/>";
		}
		if(empty($mbiemri)) {
			echo "<font color='red'>Fusha e Mbiemrit eshte boshe.</font><br/>";
		}
		if(empty($email)) {
			echo "<font color='red'>Fusha e Emailit eshte boshe.</font><br/>";
		}
		if(empty($ID_usersRole)) {
			echo "<font color='red'>Fusha e Rolit eshte boshe.</font><br/>";
		}		
	} else {	
		//updating the table
		// UPDATE users SET uid_Student='$uid_Student',username='$username',mbiemri='$mbiemri',password='$password',email='$email',ID_usersRole='$ID_usersRole' WHERE uid=$uid
		$result = mysqli_query($conn64,"UPDATE users SET uid_Student='$uid_Student',username='$username',mbiemri='$mbiemri',email='$email',ID_usersRole='$ID_usersRole' WHERE uid=$uid");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: menaxhimiPerdoruesve.php");
	}
}
?>
<?php
//getting ID_Studenti from url
$uid = $_GET['uid'];

//selecting data associated with this particular ID_Studenti
// SELECT * FROM users WHERE uid = $uid
$result = mysqli_query($conn65,"SELECT * FROM users WHERE uid = $uid");

while($res = mysqli_fetch_array($result))
{
	$uid_Student = $res['uid_Student'];
	$username = $res['username'];
	$mbiemri = $res['mbiemri'];
	$email = $res['email'];
	$ID_usersRole = $res['ID_usersRole'];
}
?>

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
			.primary{
				background-color: rgb(0,33,68);
				color: #ffffff;
			}
			.page-container {
  position: relative;
  min-height: 100vh;
}

.content-wrap {
  padding-bottom: 2.5rem;    /* Footer height */
}

.footer {
  position: absolute;
  bottom: 0;
  width: -webkit-fill-available;
  height: 4.5rem;            /* Footer height */
}
		</style>
	</head>
	<body class="is-preload">
		<!-- Sidebar -->
		<div class="page-container">
   <div class="content-wrap">
		<?php include_once("Header.php"); ?>
		<?php include_once("menuAdmin.php"); ?>


		<!-- Wrapper -->
		
		<div id="wrapper">
			<section id="MenaxhimiPerdoruesve" class="wrapper style3 fade-up" style="border-top: solid rgb(177, 177, 177) 2px;">
				<div class="inner">
				
					<div class="features">
						<section style="border-right: rgb(131, 127, 127); width: 35%;">
							<div class="features" style="border: none;">
								<section style="border: none;">
									<div class="col-12">
										<div class="fa fa-user-plus" style="font-size:36px; font-size: 36px; display: flex; justify-content: center;"> </div>
										<form enctype="multipart/form-data"  action="updatePerdorues.php?uid=<?php $uid ?>" method="post" name="form1"   >
											<h2 class="major"  style="display: flex; justify-content: center;	align-items: center;" >Modifiko Perdouesin</h2>
											<div class="row gtr-uniform">
												<div >
												<table class="alt">
													
													
													<tr style="margin-bottom: 3%;">
														<div  class="col-12"  >
															<td style="white-space: nowrap;">	<div>ID Studentit:</div>	</td>
																<td>	<div><input type="text"  name="uid_Student" id="uid_Student" value='<?php echo $uid_Student;?>' placeholder="Username" /></div>	</td>
														</div>
													</tr>
													<tr>
														<div  class="col-12"  >
														<td><div >Emri:</div>	</td>	</td>
															<td><div style="display: flex; justify-content: flex-end;"><input type="text"  name="username" id="username" value='<?php echo $username;?>' placeholder="Username" /></div></td></td>
														</div>
													</tr>
													<tr>
														<div  class="col-12"  >
															<td>	<div>Mbiemri:</div>	</td>
																<td>	<div style="display: flex; justify-content: flex-end;"><input type="text"  name="mbiemri" id="mbiemri" value='<?php echo $mbiemri;?>' placeholder="Username" /></div></td>
														</div>
													</tr>
													
													<tr>
														<div class="col-12"  >
															<td>	<div>Emaili:</div>	</td>
																<td>	<input type="email"name="email" id="email" value='<?php echo $email;?>' placeholder="Email" /></td>
														</div>
													</tr>
													<tr>
														<div class="col-12" >
															<td  style="white-space: nowrap;">	<div>Roli Perdoruesit:</div>	</td>
																<td>	<select name="ID_usersRole" style="width: 14.5em;">
															<option selected="selected" ><?php echo $ID_usersRole;?></option>
																<?php
																$res = mysqli_query($conn5,"SELECT * FROM ` users_role`");
																while($row=$res->fetch_array())
																{
																	?>
																	<option value="<?php echo $row['ID_usersRole']; ?>"><?php echo $row['ID_usersRole']; ?></option>
																	<?php
																}
																?>
														</select></td>
														
														</div>
													</tr>
												</table>
											</div>
												
												
												
												
												
												<div class="col-12">
													<ul class="actions"  style="display: flex; justify-content: center;	align-items: center;"> 
													<li><input type="hidden" name="uid"  value='<?php echo $_GET['uid'];?>' class="primary" /></li>
													<li><input type="submit" name="updatePerdorues"  value='Modifiko' class="primary" /></li>
													</ul>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</section>
					</div>
				</div>
			</section>		
		</div>	


		<!-- Footer -->
		</div>
   <footer class="footer"><?php include_once("footer.php"); ?></footer>
 </div>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>