<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first) ID_Menyt

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
			.button{
				background-color: rgb(0,33,68);
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
			<section id="MenaxhimiMenyve" class="wrapper style3 fade-up" style="border-top: solid rgb(177, 177, 177) 2px;">
			<div class="inner">
					<h2 class="title">MENAXHIMI MENYVE</h2>
					<div class="features">
					   
						<section style="border: none; width: 55%;">
							<form action="menaxhimiMenyve.php" enctype="multipart/form-data" method="post" style="width: 90%; ">  				
								<div class="row gtr-uniform" style="  display: flex; flex-direction: row;">
									<h3>Kërko të dhënat</h3>
									<div  class="col-12"  style="display: flex; justify-content: center; flex-direction: row; border-bottom:solid 1px rgba(0, 0, 0, 0.15); padding-bottom: 1.5em;	 border-top:solid 1px rgba(0, 0, 0, 0.15); align-items: center;">
										Shkruaj:
										<input type="text" name="term2"  placeholder="" value="%" style="margin-left: 1em; margin-right: 1em;"/>
										<ul class="actions"  style="display: flex; justify-content: center;	align-items: center;"> 
											<li><input type="submit" value="Kërko" class="primary" /></li>
										</ul>
									</div>
									</div>
									</div>
								</div>
							</form> 
							<div class="table-wrapper">
								<table class="alt" style="width: 90%; margin: auto; padding-bottom: 5%; ">
									<thead>
										<tr>
											<th style="text-align: center;">Moduli</th>
											<th style="text-align: center;">Meny Ballina</th>
											<th style="text-align: center;">Meny Evidenca</th>
											<th style="text-align: center;">Meny Aktiviteti </th>
											<th style="text-align: center;">Meny Idetë</th>
											<th style="text-align: center;">Meny Prezantimet</th>
											<th style="text-align: center;">Meny Vlersimet</th>
											<th style="text-align: center;">Meny Konfigurimi</th>
											<th style="text-align: center;">Meny Ckycu</th>



											<th style="text-align: center;">Modifiko</th>
										</tr>
									</thead>
									<?php
										if (!empty($_REQUEST['term2'])) {
										$term2 = mysqli_real_escape_string($conn45,$_REQUEST['term2']);     
										$sql = mysqli_query($conn45,	
										"CALL SelectTermMenyt('$term2')"
										); 
										while($row = mysqli_fetch_array($sql)) 
										{ 		
												echo "<tr style='text-align: center;'>";
												echo "<td style='text-align: center;'>".$row['Menyt']."</td>";
												echo "<td style='text-align: center;'>".$row['MenyB']."</td>";
												echo "<td style='text-align: center;'>".$row['MenyE']."</td>";
												echo "<td style='text-align: center;'>".$row['MenyA']."</td>";
												echo "<td style='text-align: center;'>".$row['Idet']."</td>";
												echo "<td style='text-align: center;'>".$row['Prezantimet']."</td>";	
												echo "<td style='text-align: center;'>".$row['Vlersimi']."</td>";	
												echo "<td style='text-align: center;'>".$row['Konfigurimet']."</td>";	
												echo "<td style='text-align: center;'>".$row['Ckycu']."</td>";	
												echo "<td style='text-align: center; color: #ffffff;'><a href=\"updateMeny.php?ID_Menyt=$row[ID_Menyt]\" class='button' class='button primary'><font color='white'>Modifiko</font></a> </td> </tr>";
												
											}
										}

									?>
								</table>
							</div>
						</section>			
		</div>	



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