<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
	
?>
<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['updateMeny']))
{	
	$ID_Menyt = $_POST['ID_Menyt'];
	$Menyt = $_POST['Menyt'];
	$MenyB = $_POST['MenyB'];

	$MenyE=$_POST['MenyE'];
	$MenyA=$_POST['MenyA'];
	$Idet=$_POST['Idet'];	
	$Ckycu=$_POST['Ckycu'];	

	$Prezantimet=$_POST['Prezantimet'];	

	$Vlersimi=$_POST['Vlersimi'];	

	$Konfigurimet=$_POST['Konfigurimet'];	
	
	
	// checking empty fields
	if(empty($MenyB) || empty($MenyE) || empty($MenyA) || empty($Idet) || empty($Ckycu)|| empty($Menyt)|| empty($Prezantimet) || empty($Vlersimi) || empty($Konfigurimet) ) {	
			
		if(empty($MenyB)) {
			echo "<font color='red'>MenyE field is empty.</font><br/>";
		}	

		if(empty($MenyE)) {
			echo "<font color='red'>MenyE field is empty.</font><br/>";
		}
		
		if(empty($MenyA)) {
			echo "<font color='red'>MenyA field is empty.</font><br/>";
		}
		
		if(empty($Idet)) {
			echo "<font color='red'>Idet field is empty.</font><br/>";
		}
		if(empty($Prezantimet)) {
			echo "<font color='red'>Prezantimet field is empty.</font><br/>";
		}		
	} else {	
		//updating the table
		// UPDATE menyt SET Menyt='$Menyt',MenyB='$MenyB',MenyE='$MenyE',MenyA='$MenyA',Idet='$Idet',Prezantimet='$Prezantimet',Vlersimi='$Vlersimi',Konfigurimet='$Konfigurimet',Ckycu='$Ckycu' WHERE ID_Menyt=$ID_Menyt
		$result = mysqli_query($conn62,"CALL UpdateMeny('$Menyt','$MenyB','$MenyE','$MenyA','$Idet','$Prezantimet','$Vlersimi','$Konfigurimet','$Ckycu',$ID_Menyt)");
		
		//redirectig to the display message. In our case, it is ballina.php
		header("Location: menaxhimiMenyve.php");
	}
}
?>
<?php
//getting ID_Studenti from url
$ID_Menyt = $_GET['ID_Menyt'];

//selecting data associated with this particular ID_Studenti
// SELECT * FROM menyt WHERE ID_Menyt = $ID_Menyt
$result = mysqli_query($conn63,"CALL SelectMenytMod($ID_Menyt)");

while($res = mysqli_fetch_array($result))
{
	$Menyt1 = $res['Menyt'];
	$MenyB1 = $res['MenyB'];
	$MenyE1 = $res['MenyE'];
	$MenyA1 = $res['MenyA'];
	$Idet1 = $res['Idet'];
	$Prezantimet1 = $res['Prezantimet'];
	$Vlersimi1 = $res['Vlersimi'];
	$Ckycu1 = $res['Ckycu'];
	$Konfigurimet1 = $res['Konfigurimet'];

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
										<form enctype="multipart/form-data"  action="updateMeny.php?uid=<?php $ID_Menyt ?>" method="post" name="form1"   >
											<h2 class="major"  style="display: flex; justify-content: center;	align-items: center;" >Modifiko te Dhena</h2>
											<div class="row gtr-uniform" style="  display: flex; flex-direction: row;">
												<div  class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"  name="Menyt" id="Menyt" value='<?php echo $Menyt1;?>'  readonly/>
												</div>
												<div  class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"  name="MenyB" id="MenyB" value='<?php echo $MenyB1;?>' />
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"  name="MenyE" id="MenyE" value='<?php echo $MenyE1;?>'  />
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"name="MenyA" id="MenyA" value='<?php echo $MenyA1;?>'  />
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"name="Idet" id="Idet" value='<?php echo $Idet1;?>'  />
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"name="Prezantimet" id="Prezantimet" value='<?php echo $Prezantimet1;?>'  />
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"name="Vlersimi" id="Vlersimi" value='<?php echo $Vlersimi1;?>'  />
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"name="Konfigurimet" id="Konfigurimet" value='<?php echo $Konfigurimet1;?>'  />
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"name="Ckycu" id="Ckycu" value='<?php echo $Ckycu1;?>'  />
												</div>
												<div class="col-12">
													<ul class="actions"  style="display: flex; justify-content: center;	align-items: center;"> 
													<li><input type="hidden" name="ID_Menyt"  value='<?php echo $_GET['ID_Menyt'];?>' class="primary" /></li>
													<li><input type="submit" name="updateMeny"  value='Modifiko' class="primary" /></li>
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