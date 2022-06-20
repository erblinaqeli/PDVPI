<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['updateteDhenat']))
{	
	$uid_TeDhenat = $_POST['uid_TeDhenat'];
	$titulli=$_POST['titulli'];
	$pershkrimi=$_POST['pershkrimi'];
	$file=$_POST['file'];	
	$pageLayout=$_POST['pageLayout'];	
	
	
	// checking empty fields
	if(empty($titulli) || empty($pershkrimi) || empty($file) || empty($pageLayout)) {	
			
		if(empty($titulli)) {
			echo "<font color='red'>Emri field is empty.</font><br/>";
		}
		
		if(empty($pershkrimi)) {
			echo "<font color='red'>pershkrimiM field is empty.</font><br/>";
		}
		
		if(empty($file)) {
			echo "<font color='red'>file field is empty.</font><br/>";
		}
		if(empty($pageLayout)) {
			echo "<font color='red'>PageLayout field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		// UPDATE tedhenat SET titulli='$titulli',pershkrimi='$pershkrimiM',file='$file',PageLayout='$PageLayout' WHERE uid_TeDhenat=$uid_TeDhenat
		$result = mysqli_query($conn66,"CALL UpdateTeDhenat('$titulli','$pershkrimi','$file','$pageLayout',$uid_TeDhenat)");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: admin_home.php");
	}
}
?>
<?php
//getting ID_Studenti from url
$uid_TeDhenat = $_GET['uid_TeDhenat'];

//selecting data associated with this particular ID_Studenti
$result = mysqli_query($conn67,"SELECT `uid_TeDhenat`, `titulli`, `pershkrimi`, `file`, `pageLayout` FROM `tedhenat` WHERE uid_TeDhenat = $uid_TeDhenat");

while($res = mysqli_fetch_array($result))
{
	$uid_TeDhenat = $res['uid_TeDhenat'];

	$titulli = $res['titulli'];
	$pershkrimi = $res['pershkrimi'];
	$file = $res['file'];
	$pageLayout = $res['pageLayout'];
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
		<section id="sidebar" class="menu" >
      <svg class='menu-logo' onclick="togglemenu()" fill="#fefefe" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px"><path d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z"/></svg>
            <nav>
               <?php
                  $result = mysqli_query($conn39,"CALL SelektoMenyStud()");
                  while ($row = mysqli_fetch_assoc($result)) {
                  
                    extract($row);
            $MenyB;
                  
                  $Konfigurimet;
                  $Ckycu;
                  
                  
                  if($result==null)
                  mysqli_free_rezultati($result);
                  
                  }
                  ?>
                  
               <ul id="menuList">
			   <li><a class='links-style' href="admin_home.php"><?php echo $MenyB ?></a></li>
                  	<li><a class='links-style' href="Konfigurimet.php"><?php echo $Konfigurimet ?></a></li>
                  	<li><a class='links-style' href="../logout.php"><?php echo $Ckycu ?></a></li>
               </ul>
            </nav>

			</section>

		<!-- Wrapper -->
		
		<div id="wrapper">
			<section id="MenaxhimiPerdoruesve" class="wrapper style3 fade-up" style="border-top: solid rgb(177, 177, 177) 2px;">
				<div class="inner">
					<h2 class="title">Menaxhimi te Dhenave</h2>
					<div class="features">
						<section style="border-right: rgb(131, 127, 127); width: 35%;">
							<div class="features" style="border: none;">
								<section style="border: none;">
									<div class="col-12">
										<div class="fa fa-user-plus" style="font-size:36px; font-size: 36px; display: flex; justify-content: center;"> </div>
										<form enctype="multipart/form-data"  action="updateteDhenat.php?uid_TeDhenat=<?php $uid_TeDhenat?>" method="post" name="form1"   >
											<h2 class="major"  style="display: flex; justify-content: center;	align-items: center;" >Modifiko te Dhena</h2>
											<div class="row gtr-uniform" style="  display: flex; flex-direction: row;">
												<div  class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"  name="titulli" id="titulli" value='<?php echo $titulli;?>' placeholder="titulli" />
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<textarea name="pershkrimi" id="pershkrimi" value='' placeholder="pershkrimi" ><?php echo $pershkrimi;?></textarea>
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"name="file" id="file" value='<?php echo $file;?>' placeholder="file" />
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"name="pageLayout" id="pageLayout" value='<?php echo $pageLayout;?>' placeholder="PageLayout" />
												</div>
												<div class="col-12">
													<ul class="actions"  style="display: flex; justify-content: center;	align-items: center;"> 
													<li><input type="hidden" name="uid_TeDhenat"  value='<?php echo $_GET['uid_TeDhenat'];?>' class="primary" /></li>
													<li><input type="submit" name="updateteDhenat"  value='Modifiko' class="primary" /></li>
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
			<script src="assets/js/menuscript.js"></script>

	</body>
</html>