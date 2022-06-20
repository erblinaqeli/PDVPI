<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
	$uid = $login_user;
   $id = $_REQUEST['id'];

?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['updatePass']))
{	
	$result = mysqli_query($conn33,"CALL SelektoStudEmail('$login_user')");

while($res = mysqli_fetch_array($result))
{
	$password = $res['password'];
	
	$uid= $res['uid'];
	
}

 $id = $_REQUEST['id'];

	
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
			$result = mysqli_query($conn34,"CALL `UpdateUsersP`($uid,'$password_n')");
		}else{
			echo "<div style='margin-left:50%;'><font color='red'>Fjaklalimet nuk Perputhen.</font><br/></div>";
			
		}
		//updating the table
		
	}
	else{
		echo "<div style='margin-left:50%;'><font color='red'>Fjalkalimi Vjeter eshte shenuar gabim</font><br/></div>";
	}
}


}



?>
<?php
if(isset($_POST['updatePerqindjet']))
{	
	$FormulaDetyraV = $_POST['FormulaDetyraV'];
	$F10 = $_POST['F10'];
	$F9 = $_POST['F9'];
	$F8 = $_POST['F8'];
	$F7 = $_POST['F7'];
	$F6 = $_POST['F6'];
	$Provimimeivogel = $_POST['Provimimeivogel'];
	$FE = $_POST['FE'];
	$FA = $_POST['FA'];

	if(empty($FormulaDetyraV) || empty($F10) || empty($F9) || empty($F8) || empty($F7) || empty($F6) || empty($Provimimeivogel) || empty($FE) || empty($FA)) {	
		if(empty($FormulaDetyraV)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		if(empty($F10)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		if(empty($F9)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		if(empty($F8)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		if(empty($F7)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		if(empty($F6)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		if(empty($Provimimeivogel)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		if(empty($FE)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		if(empty($FA)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
	} else {
		// UPDATE formulat set FormulaDetyraV = '$FormulaDetyraV',F10 = '$F10',F9 = '$F9',F8 = '$F8',F7 = '$F7',F6 = '$F6',Provimimeivogel = '$Provimimeivogel',FE = '$FE',FA = '$FA'
		$result = mysqli_query($conn36,"CALL UpdateFormulat('$FormulaDetyraV','$F10','$F9','$F8','$F7','$F6','$Provimimeivogel','$FE','$FA')");
	}
}
?>
<?php
//getting ID_Studenti from url


//selecting data associated with this particular ID_Studenti
$result = mysqli_query($conn35,"CALL SelektoStudEmail('$login_user')");

while($res = mysqli_fetch_array($result))
{
	$username = $res['username'];
	$password = $res['password'];
	$email = $res['email'];
	$ID_usersRole = $res['ID_usersRole'];
}
// SELECT `uid_formulat`,`FormulaDetyraV`,`F10`,`F9`,`F8`,`F7`,`F6`,`Provimimeivogel`,`FE`,`FA` FROM formulat
$result = mysqli_query($conn39,"CALL SelectFormulat()");

while($res = mysqli_fetch_array($result))
{
	$FormulaDetyraV = $res['FormulaDetyraV'];
	$F10 = $res['F10'];
	$F9 = $res['F9'];
	$F8 = $res['F8'];
	$F7 = $res['F7'];
	$F6 = $res['F6'];
	$Provimimeivogel = $res['Provimimeivogel'];
	$FE = $res['FE'];
	$FA = $res['FA'];

	
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
	<title>Moduli Profesorit</title>
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
form{
	margin: 2em 0 2em 0;
}
		</style>
	</head>
	<body class="is-preload">
		<!-- Header -->	<div class="page-container">
   <div class="content-wrap">
	
		<?php include_once("Header.php"); ?>

		<section id="sidebar" class="menu" >
      <svg class='menu-logo' onclick="togglemenu()" fill="#fefefe" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px"><path d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z"/></svg>
            <nav>
                    <?php
            $result = mysqli_query($conn13,"CALL SelectMenyProf()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
            $MenyB;
            $MenyE;
            $MenyA;
            $Idet;
            $Prezantimet;
            $Vlersimi;
            $Konfigurimet;
            $Ckycu;


if($result==null)
  mysqli_free_rezultati($result);

            }
            ?>
                    <ul id="menuList">
                    <li><a style="margin:0% 2%;" href="admin_home.php?id=<?php echo $id?>"><?php echo $MenyB ?></a></li>
                        <li><a style="margin:0% 2%;" href="lenda.php?id=<?php echo $id?>"><?php echo $MenyE ?></a></li>
                        <li><a style="margin:0% 2%;" href="aktivitetiL.php?id=<?php echo $id?>"><?php echo $MenyA ?></a></li>
                        <li><a style="margin:0% 2%;" href="ideteEProjektit.php?id=<?php echo $id?>"><?php echo $Idet ?></a></li>
                        <li><a style="margin:0% 2%;" href="ListaPrezantimeve.php?id=<?php echo $id?>"><?php echo $Prezantimet ?></a></li>
                        <li><a style="margin:0% 2%;" href="VlersimiFinal.php?id=<?php echo $id?>"><?php echo $Vlersimi ?></a></li>
                        <li><a style="margin:0% 2%;" href="Konfigurimet.php?id=<?php echo $id?>"><?php echo $Konfigurimet ?></a></li>
                        <li><a style="margin:0% 2%;" href="../logout.php"><?php echo $Ckycu ?></a></li>
                    </ul>
                </nav>
			</section>


		<!-- Wrapper -->
		<div id="wrapper">
			
			<div style="display: flex; flex-direction: column; align-items: center; padding-top: 5%;">
	<h2>NGARKIMI I STUDENTËVE NË LËNDË</h2>

	<?php 				
	echo"<form method='post' action='import_file.php?id=$id' enctype='multipart/form-data'>";
	echo"<input style='width: 13em;' type='file' name='file'/>"; 
	echo"</div>";
	echo"<div style='display: flex; justify-content: center; margin: 2%;'> ";
	echo"<input class='button primary' style='margin-right:5%;' type='submit' name='submit_file' value='NGARKO'/>"; 
	echo"</form>"; 
  ?>
  
</div>
		<div id="wrapper">
			
			<section id="MenaxhimiPerdoruesve" class="wrapper style3 fade-up">
				<div class="inner">
				
					<div class="features">
						
						<section style="border-right: rgb(131, 127, 127); width: 35%;">
							<div class="features" style="border: none;">
								<section style="border: none;">
									<div class="col-12">
										<div class="fa fa-user-plus" style="font-size:36px; font-size: 36px; display: flex; justify-content: center;"> </div>
										
										<form enctype="multipart/form-data"  action="Konfigurimet.php?id=<?php echo $id?>" method="post" name="form1"   >
                              <h2 class="major"  style="display: flex; justify-content: center;	align-items: center;" >MODIFIKO FJALËKALIMIN</h2>
                              <div class="table-wrapper">
                                 <section>
                                    <table class="alt">
                                       <tr>
                                          <td>Emaili:</td>
                                          <td><input readonly type="email"name="email" id="email" value='<?php echo $email;?>' placeholder="Email" /></td>
                                          
                                       </tr>
                                       <tr>
                                          <td style="white-space: nowrap;" >
                                             Fjalekalimi aktual:
                                          </td>
                                          <td>
                                             <input type="password" name="password_c" id="password_c" />
                                         
                                          </td>
                                       </tr>
                                       <tr>
                                          <td  style="white-space: nowrap;">
                                             Fjalekalimi i ri:
                                          </td>
                                          <td>	<input type="password" name="password_n" id="password_n"  /></td>
                                         
                                       </tr>
                                       <tr>
                                          <td  style="white-space: nowrap;">
                                             Fjalekalimi i ri i perseritur:
                                          </td>
                                          <td>	<input type="password" name="password_n1" id="password_n1"  />
                                         
                                       </tr>
                                       
									  
                                       </script>
                                       <tfoot>
                                          <tr>
                                             <td><input type="hidden" name="uid"  value='<?php echo $id?>' class="primary" /></td>
                                             <td><input type="hidden" name="uid"  value='<?php echo $_GET['uid'];?>' class="primary" /></td>
                                          </tr>
                                          <tr>
                                             <td></td>
                                             <td><input type="submit" name="updatePass"  value='Modifiko' class="primary" /></td>
                                          </tr>
                                       </tfoot>
                                    </table>
                                 </section>
                              </div>
                           </form>
									</div>
								</section>
								
							</div>
						</section>
					</div>
				</div>
			</section>		


			<section id="MenaxhimiPerdoruesve" class="wrapper style3 fade-up" style="border-top: solid rgb(177, 177, 177) 2px;">
				<div class="inner">
				
					<div class="features" style="border: none;">
						
						<section style="border-right: rgb(131, 127, 127); width: 35%;">
							<div class="features" style="border: none;">
								<section style="border: none;">
									<div class="col-12">
										
										<form enctype="multipart/form-data"  action="Konfigurimet.php?id=<?php echo $id?>" method="post" name="form1"   >
                              <h2 class="major"  style="display: flex; justify-content: center;	align-items: center;" >MODIFIKO PËRQINDJEN E VLERËSIMIT</h2>
                              <div class="table-wrapper">
                                 <section>
                                    <table class="alt">
										<tr>
											<td style="white-space: nowrap;">Formula për evidencën:</td>
											<td><input  type="text" name="FE" id="FE" value='<?php echo $FE;?>' /></td>
											<td style="white-space: nowrap;">Formula për aktivitetin:</td>
											<td><input type="text" name="FA" id="FA" value='<?php echo $FA;?>' /></td>
										</tr>
										<tr>
											
											<td style="white-space: nowrap;">Pikët për notën 10:</td>
											<td><input type="text" name="F10" id="F10" value='<?php echo $F10;?>' />
											<td style="white-space: nowrap;">Pikët për notën 9:</td>
											<td><input type="text" name="F9" id="F9" value='<?php echo $F9;?>' />
										</tr>
										<tr>
											<td style="white-space: nowrap;">Pikët për notën 8:</td>
											<td><input type="text" name="F8" id="F8" value='<?php echo $F8;?>' />
											<td style="white-space: nowrap;">Pikët për notën 7:</td>
											<td><input type="text" name="F7" id="F7" value='<?php echo $F7;?>' />
										</tr>
										<tr>
											<td style="white-space: nowrap;">Pikët për notën 6:</td>
											<td><input type="text" name="F6" id="F6" value='<?php echo $F6;?>' />
											<td style="white-space: nowrap;">Formula për detyrat tëk vlerësimi:</td>
											<td><input type="text" name="FormulaDetyraV" id="FormulaDetyraV" value='<?php echo $FormulaDetyraV;?>' /></td>
										</tr>
										<tr >
											
											<td style="white-space: nowrap;">Pikët për provimin:</td>
											<td><input type="text" name="Provimimeivogel" id="Provimimeivogel" value='<?php echo $Provimimeivogel;?>' />
										</tr>
										<tfoot>
											<tr>
												<td><input type="hidden" name="uid"  value='<?php echo $id?>' class="primary" /></td>
												<td><input type="hidden" name="uid"  value='<?php echo $_GET['uid'];?>' class="primary" /></td>
											</tr>
											<tr>
												<td></td>
												<td></td>
												<td><input type="submit" name="updatePerqindjet"  value='Modifiko' class="primary" /></td>
											</tr>
                                       </tfoot>
                                    </table>
                                 </section>
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
			<script src="assets/js/menuscript.js"></script>

	</body>
</html>