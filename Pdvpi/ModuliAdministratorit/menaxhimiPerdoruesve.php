<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
?>
<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($conn,
"CALL SelectUsersADM");
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
			

			table td {
			vertical-align: middle;
	white-space: nowrap;
	text-align: center;
	padding: 0.25em 0.25em;
		}
		table th {
			vertical-align: middle;
	white-space: nowrap;
	text-align: center;
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
.scroll {
         overflow-y: auto;
         width: 100%;
		 height: 27em;
		 margin: 5% 0 10% 0;
		 

         }
         .scroll::-webkit-scrollbar {
         width: 10px;
         height: 10px;
         }
         .scroll::-webkit-scrollbar-track {
         background: #f1f1f1; 
         }
         .scroll::-webkit-scrollbar-thumb {
         background: #aaa; 
         border-radius:50px;
         }
         .scroll::-webkit-scrollbar-thumb:hover {
         background: #888; 
         }
		 .shark-1 {
  position: sticky;
  top: 0;
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
			<section id="MenaxhimiPerdoruesve" style="overflow-y: auto; padding: 5%;">
				<div class="inner">
					<h2 class="title">MENAXHIMI PËRDORUESVE</h2>
					<div class="features">
						<section style="border-right: solid 1px rgba(0, 0, 0, 0.15); width: 35%;">
							<div class="features" style="border: none;">
								<section style="border: none;">
									<div class="col-12">
										<div class="fa fa-user-plus" style="font-size:36px; font-size: 36px; display: flex; justify-content: center;"> </div>
										<form enctype="multipart/form-data"  action="addPerdorues.php" method="post" name="form1"   >
											<h2 class="major"  style="display: flex; justify-content: center;	align-items: center;" >Shto Përdoues</h2>
											<div class="row gtr-uniform" style="  display: flex; flex-direction: row;">
												<div  class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"  name="uid_Student" id="uid_Student" value="" placeholder="ID Përdoruesit" />
												</div>
												<div  class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"  name="username" id="username" value="" placeholder="Emri" />
												</div>
												<div  class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="text"  name="mbiemri" id="mbiemri" value="" placeholder="Mbiemri" />
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="password"name="password" id="password" value="" placeholder="Fjalëkalimi" />
												</div>
												<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
													<input type="email"name="email" id="email" value="" placeholder="Email" />
												</div>
												<div class="col-12">
												<select name="ID_usersRole" style="width: 14.5em;">
													<option selected="selected">Zgjedh Rolin</option>
														<?php
														$res = mysqli_query($conn82,"CALL usersRole()");
														while($row=$res->fetch_array())
														{
															?>
															<option value="<?php echo $row['ID_usersRole']; ?>"><?php echo $row[' usersRole']; ?></option>
															<?php
														}
														?>
												</select>
												</div>
												<div class="col-12">
													<ul class="actions"  style="display: flex; justify-content: center;	align-items: center;"> 
														<li><input type="submit" name="shtoperdorues" value="Shto" class="primary" /></li>
													</ul>
												</div>
											</div>
										</form>
									</div>
								</section>
							</div>
						</section>
						<section style="border: none; width: 55%;margin-top: 0%;">
						<div >
						<div class="fas fa-user-graduate" style="font-size:36px; font-size: 36px; display: flex; justify-content: center;"> </div>

							<h2 style="display: flex; justify-content: center;">Shto Student</h2>
						<?php 				
	echo"<form method='post' action='import_fileStudentet.php' enctype='multipart/form-data'>";
	echo"<input style='width: 13em;' type='file' name='file'/>"; 
	echo"</div>";
	echo"<div style='display: flex; justify-content: center; margin-bottom: 30%; ' > ";
	echo"<input class='button primary' style='margin-right:5%;' type='submit' name='submit_file' value='Submit'/>"; 
	echo"</form>"; 
  ?>
						</div>
							<form action="menaxhimiPerdoruesve.php" method="post" style="width: 90%; "> 
							 				
								<div class="row gtr-uniform" style="  display: flex; flex-direction: row;">
									<h3>Kërko të dhënat e Përdoruesve</h3>
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
							<div class="scroll">
								<table class="alt" style="margin: 0%;">
									<thead  class="shark-1" style="background-color: #fff;">
								
										<tr>
											<th style="text-align: center;">ID Përdoruesit</th>
											<th style="text-align: center;">Emri</th>
											<th style="text-align: center;">Mbiemri</th>
											<th style="text-align: center;">Emaili</th>
											<th style="text-align: center;">Roli</th>
											<th style="text-align: center;">Modifiko</th>
											<th style="text-align: center;">Fshijë</th>		
										</tr>
									</thead>
									<?php
										if (!empty($_REQUEST['term'])) {
										$term = mysqli_real_escape_string($conn46,$_REQUEST['term']);     
										$sql = mysqli_query ($conn46, "CALL SelectTermURole('$term')"); 
										while($row = mysqli_fetch_array($sql)) 
										{ 		
												echo "<tr style='text-align: center;'>";
												echo "<td style='text-align: center;'>".$row['uid_Student']."</td>";
												echo "<td style='text-align: center;'>".$row['username']."</td>";
												echo "<td style='text-align: center;'>".$row['mbiemri']."</td>";
												echo "<td style='text-align: center;'>".$row['email']."</td>";
												echo "<td style='text-align: center;'>".$row[' usersRole']."</td>";	

												echo "<td style='text-align: center; color: #ffffff;'><a href=\"updatePerdorues.php?uid=$row[uid]\" class='button' class='button primary'><font color='white'>Modifiko</font></a> </td> ";
											
												echo "<td style='text-align: center;'><a href=\"deletePerdorues.php?uid=$row[uid] \"  
												onClick=\"return confirm('Nëse fshini një përdorues, të gjitha të dhënat e tij do të fshihen. A jeni të sigurt se dëshironi të fshini përdoruesin?')\" class='button' class='button primary'><font color='white'>Fshijë</font></a> </td> </tr>";			
											}
										}
									?>
								</table>
							</div>
						</section>
		
		</div>	



		<!-- Footer -->
		</div >
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