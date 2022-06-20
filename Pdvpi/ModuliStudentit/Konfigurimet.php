<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
	$uid = $login_user;


?>
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	
	<head>
	<title>Moduli Studentit</title>
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
		<!-- Header -->
		<div id="page-container">
   <div id="content-wrap">
		<?php include_once("header.php"); ?>

		<section id="sidebar" class="menu" >
      <svg class='menu-logo' onclick="togglemenu()" fill="#fefefe" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px"><path d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z"/></svg>
            <nav>
               <?php
                  $result = mysqli_query($conn39,"CALL SelektoMenyStud()");
                  while ($row = mysqli_fetch_assoc($result)) {
                  
                    extract($row);
                  
                  $Konfigurimet;
                  $Ckycu;
                  
                  
                  if($result==null)
                  mysqli_free_rezultati($result);
                  
                  }
                  ?>
                  
               <ul id="menuList">
                  <li><a class='links-style' href="Konfigurimet.php"><?php echo $Konfigurimet ?></a></li>
                  <li><a class='links-style' href="../logout.php"><?php echo $Ckycu ?></a></li>
               </ul>
            </nav>
			</section>


		<!-- Wrapper -->
		
		<div id="wrapper">
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['updatePass']))
{	
	$result = mysqli_query($conn27,"CALL SelektoStudEmail('$login_user')");

while($res = mysqli_fetch_array($result))
{
	$password = $res['password'];
	
	$uid= $res['uid'];
	
}


	
	$password_c=MD5($_POST['password_c']);
	$password_n=MD5($_POST['password_n']);
	$password_n1=MD5($_POST['password_n1']);


	
	// checking empty fields
	if(empty($password_n) || empty($password_n1) || empty($password_c)) {	
		if(empty($password_n)) {echo "<div style='margin-left:50%;'><font color='red'>Fusha e fjakalimit te ri eshte e zbrazet.</font><br/></div>";}
		if(empty($password_n1)) {echo "<div style='margin-left:50%;'><font color='red'>Fusha e fjakalimit te ri te perseritur eshte e zbrazet.</font><br/></div>";}
		if(empty($password_c)) {echo "<div style='margin-left:50%;'><font color='red'>Fusha e fjakalimit te Vjeter eshte e zbrazet.</font><br/></div>";}
	} else {	
	if($password == $password_c){

		if($password_n == $password_n1){
			// UPDATE users SET password='$password_n' WHERE uid='$uid'

			$result = mysqli_query($conn30,"CALL `UpdateUsersP`($uid,'$password_n');");
			echo "<p style='text-align:center; border:red; border-radius:10px; color:white; margin:auto; height:1.7em; width:20em; background-color:#09C32E;'>
			Fjalëkalimi është modifikuar me sukses!</p>";
	 }
	 else
	 {
			echo "<p style='text-align:center; border:red; border-radius:10px; color:white; margin:auto; height:1.7em; width:20em; background-color:#CF2D0C;'>
			Fjalëkalimet nuk përputhen!</p>";
		}
	}
		else
	 {
		echo "<p style='text-align:center; border:red; border-radius:10px; color:white; margin:auto; height:1.7em; width:20em; background-color:#CF2D0C;'>
		Fjalëkalimi vjetër është shënuar gabim!</p>";
		}
}

}
?>
<?php
//getting ID_Studenti from url
$uid = $login_user;

//selecting data associated with this particular ID_Studenti
$result = mysqli_query($conn43,"CALL SelektoStudEmail('$login_user')");

while($res = mysqli_fetch_array($result))
{
	$username = $res['username'];
	$password = $res['password'];
	$email = $res['email'];
	$ID_usersRole = $res['ID_usersRole'];
}
?>
			<section id="MenaxhimiPerdoruesve" style="overflow-y: auto;  padding: 5%; display: flex;  justify-content: center;">

			<div class="scroll" style=" display: flex; justify-content: center;     flex-direction: column;">

										<div class="fa fa-user-plus" style="font-size:36px; display: flex; justify-content: center;"> </div>
										<form enctype="multipart/form-data"  action="Konfigurimet.php" method="post" name="form1"   >
                              <h2 class="major"  style="display: flex; justify-content: center;	align-items: center;" >Modifiko Fjalëkalimin</h2>
                  
                                    <table class="alt">
                                       <tr>
											<td>Emaili:</td>
											<td><input readonly type="email"name="email" id="email" value='<?php echo $email;?>' placeholder="Email" /></td>
                                          
                                       </tr>
                                       <tr>
                                          <td style="white-space: nowrap;" >
                                             Fjalëkalimi aktual:
                                          </td>
                                          <td>
                                             <input type="password"name="password_c" id="id_password" />
                                          
                                          </td>
                                       </tr>
                                       <tr>
                                          <td  style="white-space: nowrap;">
                                             Fjalëkalimi i ri:
                                          </td>
                                          <td>	<input type="password"name="password_n" id="password_n"  /></td>
                                          
                                       </tr>
                                       <tr>
                                          <td  style="white-space: nowrap;">
                                             Fjalëkalimi i ri i përsëritur:
                                          </td>
                                          <td>	<input type="password"name="password_n1" id="password_n1"  />
                                          
                                       </tr>
                                      
                                       <tfoot>
                                          <tr>
                                             <td><input type="hidden" name="uid"  value='<?php echo $_GET['uid'];?>' class="primary" /></td>
                                          </tr>
                                          <tr>
                                             <td></td>
                                             <td><input type="submit" name="updatePass"  value='Modifiko' class="primary" /></td>
                                          </tr>
                                       </tfoot>
                                    </table>
                             </div>
                           			</form>
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
			<script src="assets/js/menuscript.js"></script>

	</body>
</html>