<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
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

				<div id="wrapper" >
					<section id="one" class="wrapper style3 fade-up" style="border-top: solid rgb(177, 177, 177) 2px;">
						<div class="inner">
							<!-- <h2 class="title" >Regjistro Lendet e Profesorit</h2> -->
							<div class="features">
								<section style="border-left: #fff;">
									<div class="features" style="border: none;">
										<section style="border: none;">
											<div class="col-12">
											<form  enctype="multipart/form-data"  action="addLS.php" method="post" name="form1"  >
													<h2 class="major"  style="display: flex; justify-content: center;	align-items: center; width: max-content;" >Regjistro Lëndët e Studentit</h2>
													<div class="row gtr-uniform" style="  display: flex; flex-direction: column;">
													<div  class="col-12"  style="display: flex; justify-content: center; flex-direction: column; 	align-items: center;">
														<select name="uid" style="width: 14.5em;">
													<option selected="selected">Zgjedh Studentin</option>
														<?php
														$res = mysqli_query($conn55,"CALL SelectUIDRole4()");
														while($row=$res->fetch_array())
														{
															?>
															<option  value="<?php echo $row['uid']; ?>"><?php echo $row['username']; ?></option>
															<?php
														}
														?>
												</select>
														</div>
														<div  class="col-12"  style="display: flex; justify-content: center; flex-direction: column;	align-items: center;">
														<select name="uid_lenda" style="width: 14.5em;">
													<option selected="selected">Zgjedh Lëndën</option>
														<?php
														$res = mysqli_query($conn56,"CALL SelectLendet()");
														while($row=$res->fetch_array())
														{
															?>
															<option value="<?php echo $row['uid_lenda']; ?>"><?php echo $row['lenda']; ?></option>
															<?php
														}
														?>
												</select>
														</div>
														<div class="col-12">
															<ul class="actions"  style="display: flex; justify-content: center;	align-items: center;"> 
																<li><input type="submit" name="shtoLS" value="Shto" class="primary" /></li>
															</ul>
														</div>
													</div>
												</form>
											</div>
										</section>

									</div>
								</section>
								<section style="border: none; width: 55%;">
							<form action="regjistroLendetStud.php" method="post" style="width: 90%; ">  				
								<div class="row gtr-uniform" style="  display: flex; flex-direction: row;">
									<h3>Kërko të dhënat e Lëndës së Studentit</h3>
									<div  class="col-12"  style="display: flex; justify-content: center; flex-direction: row; border-bottom:solid 1px rgba(0, 0, 0, 0.15); padding-bottom: 1.5em;	 border-top:solid 1px rgba(0, 0, 0, 0.15); align-items: center;">
										Shkruaj:
										<input type="text" name="term" value="%"  placeholder="" style="margin-left: 1em; margin-right: 1em;"/>
										<ul class="actions"  style="display: flex; justify-content: center;	align-items: center;"> 
											<li><input type="submit" value="Kërko" class="primary" /></li>
										</ul>
									</div>
									</div>
									</div>
								</div>
							</form> 
							<div class="table-wrapper">
								<table class="alt" style="width: 90%; margin: auto; padding-bottom: 5%;">
									<thead>
										<tr>
											<th style="text-align: center;">ID Studentit</th>
											<th style="text-align: center;">Emri</th>
											<th style="text-align: center;">Mbiemri</th>
											<th style="text-align: center;">Emaili</th>
											<th style="text-align: center;">Lënda</th>
											<th style="text-align: center;">Fshije</th>		
										</tr>
									</thead>
									<?php
										if (!empty($_REQUEST['term'])) {
										$term = mysqli_real_escape_string($conn57,$_REQUEST['term']);     
										$sql = mysqli_query ($conn57, "CALL SelectTermLendStud('$term')"); 
										while($row = mysqli_fetch_array($sql)) 
										{ 		
												echo "<tr style='text-align: center;'>";
												echo "<td style='text-align: center;'>".$row['uid_Student']."</td>";

												echo "<td style='text-align: center;'>".$row['username']."</td>";
												echo "<td style='text-align: center;'>".$row['mbiemri']."</td>";
												
												echo "<td style='text-align: center;'>".$row['email']."</td>";
												echo "<td style='text-align: center;'>".$row['lenda']."</td>";

												
											
												echo "<td style='text-align: center;'><a href=\"deleteLendStud.php?uid=$row[uid]&uid_lenda=$row[uid_lenda]\"  onClick=\"return confirm('A jeni të sigurt se dëshironi të fshini të dhënën?')\"  class='button primary'><font color='white'>Fshijë</font></a> </td> </tr>";			
											}
										}
									?>
								</table>
							</div>
						</section>
							</div>
						</div>
					</section>
			

			</div>

		<!-- Footer -->

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