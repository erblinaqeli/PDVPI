<?php
/* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
	include("check.php");	
    echo $id = $_REQUEST['id'];
?>
<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
	<title>Moduli Asistentit</title>
        <link rel="icon" href="images/mobilelogo1.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		
		<style>
		 	input[type="text"],
		input[type="password"],
		input[type="email"],
		select {
			height: 1.75em;
		}

		input[type="text"],
		input[type="password"],
		input[type="email"],
		input[type="tel"],
		select,
		textarea {
			width: 1.5em;
			padding: 0;
			margin: auto;
		}


		table {
			width: 90%;
			margin: auto;
			margin-top: 1%;
			margin-bottom: 1%;
		}

		table td {
			border: 1px black solid;
			margin: auto;
			white-space: nowrap;
			padding: 0.25em;
			vertical-align: middle;
			text-align: center;
		}

		table th {
			vertical-align: middle;
	white-space: nowrap;
	text-align: center;
	padding: 0.5em 0.5em;
		}

		.rotate {
			text-align: center;
			white-space: nowrap;
			vertical-align: middle;
			width: 1.5em;
			padding: 2em 0em;
		}

		.rotate div {
			-moz-transform: rotate(-90.0deg);
			-o-transform: rotate(-90.0deg);
			-webkit-transform: rotate(-90.0deg);
			filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)";

		}
        .thtabele{
			padding: 2em 0em;
		}
		.scroll {
         overflow-y: auto;
         width: 100%;
         height: 27em
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
		<!-- Header -->
		<div class="page-container">
   <div class="content-wrap">
		<?php include_once("Header.php"); ?>

		<section id="sidebar" class="menu" >
      <svg class='menu-logo' onclick="togglemenu()" fill="#fefefe" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px"><path d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z"/></svg>
            <nav>
                    <?php
            $result = mysqli_query($conn13,"CALL SelectMenyAss()");
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
					<li><a  href="admin_home.php?id=<?php echo $id?>"><?php echo $MenyB ?></a></li>
                      <li><a href="lendaAsist.php?id=<?php echo $id?>"><?php echo $MenyE ?></a></li>
                      <li><a href="aktivitetiU.php?id=<?php echo $id?>"><?php echo $MenyA ?></a></li>
                      <li><a href="ideteEProjektit.php?id=<?php echo $id?>"><?php echo $Idet ?></a></li>
                      <li><a href="ListaPrezantimeve.php?id=<?php echo $id?>"><?php echo $Prezantimet ?></a></li>
                      <li><a href="vlersimifinal.php?id=<?php echo $id?>"><?php echo $Vlersimi ?></a></li>
                      <li><a href="../logout.php"><?php echo $Ckycu ?></a></li>
                    </ul>
                </nav>
			</section>

			<div id="wrapper">
			<section id="MenaxhimiPerdoruesve" style="overflow-y: auto; padding: 5%;">
					
            <h2 style="margin-bottom:5%"class="title">MENAXHO AKTIVITETIN E STUDENTËVE </h2>
		

			
							
					<?php
					
					
			
			
								if (isset($_GET['submit'])) {
									$result = mysqli_query($conn7,"SELECT `FA` FROM formulat");

                  while($res = mysqli_fetch_array($result))
                  {
                   
                     $FA = $res['FA'];
                  
                     
                  }
								$uid_aktivitetiu = $_GET['uid_aktivitetiu'];

								$Java1 = $_GET['Java1'];
								$Java2 = $_GET['Java2'];
								$Java3 = $_GET['Java3'];
								$Java4 = $_GET['Java4'];
								$Java5 = $_GET['Java5'];
								$Java6 = $_GET['Java6'];
								$Java7 = $_GET['Java7'];
								$Java8 = $_GET['Java8'];
								$Java9 = $_GET['Java9'];
								$Java10 = $_GET['Java10'];
								$Java11 = $_GET['Java11'];
								$Java12 = $_GET['Java12'];
								$Java13 = $_GET['Java13'];
								$Java14 = $_GET['Java14'];
								$Java15 = $_GET['Java15'];
								// UPDATE aktivitetiu SET  
								// Java1='$Java1', Java2='$Java2', Java3='$Java3', Java4='$Java4', Java5='$Java5',
								// Java6='$Java6', Java7='$Java7', Java8='$Java8', Java9='$Java9', Java10='$Java10',
								// Java11='$Java11', Java12='$Java12', Java13='$Java13', Java14='$Java14', Java15='$Java15'
								// WHERE uid_aktivitetiu=$uid_aktivitetiu
								$query = mysqli_query($conn17,"CALL SelectAktivitetiU($Java1,$Java2,$Java3,$Java4,$Java5,$Java6,$Java7,$Java8,$Java9,$Java10,$Java11,$Java12,$Java13,$Java14,$Java15,$uid_aktivitetiu)");
								$query = mysqli_query($conn10,"CALL UpdatePiketAU()");
									$query = mysqli_query($conn10,"UPDATE
									aktivitetiu
									SET
									TotalAU =
										Piket $FA");
								}

								
								$id = $_REQUEST['id'];
								
								
 						
								?>
										 <div class="scroll">

										<table class="alt" style="margin: 0%;">
										<form action="aktivitetiU.php?id=<?php echo $id ?>" method="post" style="width: 90%; "> 
							 				
								<div class="row gtr-uniform" style="  display: flex; flex-direction: row;">
									<div  class="col-12"  style="display: flex; justify-content: center; flex-direction: row; border-bottom:solid 1px rgba(0, 0, 0, 0.15); padding-bottom: 1.5em;	 border-top:solid 1px rgba(0, 0, 0, 0.15); align-items: center;">
										Shkruaj:
										<input type="text" name="term" value="%"  placeholder="" style="margin-left: 1em; margin-right: 1em; width:15em;"/>
										<ul class="actions"  style="display: flex; justify-content: center;	align-items: center;"> 
											<li><input type="submit" value="Kërko" class="primary" /></li>
										</ul>
									</div>
									</div>
								
							</form> 
										<thead  class="shark-1" style="background-color: #fff;">
							<tr>
								
							
								<?php
							echo"<th>ID</th>";
							echo"<th>Emri</th>";
							echo"<th>Mbiemri</th>";
							echo"<th  class='rotate' name='Java1' id='Java1'  rowspan='4'><div>Java 1</div></th>";
							echo"<th  class='rotate' name='Java2' id='Java2'  rowspan='4'><div>Java 2</div></th>";
							echo"<th  class='rotate' name='Java3' id='Java3'  rowspan='4'><div>Java 3</div></th>";
							echo"<th  class='rotate' name='Java4' id='Java4'  rowspan='4'><div>Java 4</div></th>";
							echo"<th  class='rotate' name='Java5' id='Java5'  rowspan='4'><div>Java 5</div></th>";
							echo"<th  class='rotate' name='Java6' id='Java6'  rowspan='4'><div>Java 6</div></th>";
							echo"<th  class='rotate' name='Java7' id='Java7'  rowspan='4'><div>Java 7</div></th>";
							echo"<th  class='rotate' name='Java8' id='Java8'  rowspan='4'><div>Java 8</div></th>";
							echo"<th  class='rotate' name='Java9' id='Java9'  rowspan='4'><div>Java 9</div></th>";
							echo"<th  class='rotate' name='Java10' id='Java10' rowspan='4'><div>Java 10</div></th>";
							echo"<th  class='rotate' name='Java11' id='Java11' rowspan='4'><div>Java 11</div></th>";
							echo"<th  class='rotate' name='Java12' id='Java12' rowspan='4'><div>Java 12</div></th>";
							echo"<th  class='rotate' name='Java13' id='Java13' rowspan='4'><div>Java 13</div></th>";
							echo"<th  class='rotate' name='Java14' id='Java14' rowspan='4'><div>Java 14</div></th>";
							echo"<th  class='rotate' name='Java15' id='Java15' rowspan='4'><div>Java 15</div></th>";
							echo"<th  class='rotate' name='Piket' id='Piket'  rowspan='4'><div>Pikët</div></th>";
							echo"<th  class='rotate' name='Total' id='Total'  rowspan='4'><div>Total</div></th>";

							echo"<th>Modifiko</th>";

								echo"</tr>";
								echo"</thead>";
								// SELECT
								// p.uid_aktivitetiu,
								// p.`uid`,
								// p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,p.Java15,p.TotalAU,p.Piket,
								// s.uid_Student,
								// s.username,
								// s.email,
								// s.mbiemri,
								// l.uid_lenda,
								// l.lenda
								// FROM
								//  `aktivitetiu` p
								//  INNER JOIN
								// users s ON p.uid = s.uid 
								// 	LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
							    
							  	// WHERE l.uid_lenda = '$id'
								  if (!empty($_REQUEST['term'])) {
									$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     
							
								$query1 = mysqli_query($conn10,"	SELECT
								p.uid_aktivitetiu,
								p.`uid`,
								p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,p.Java15,p.TotalAU,p.Piket,
								s.uid_Student,
								s.username,
								s.email,
								s.mbiemri,
								l.uid_lenda,
								l.lenda
								FROM
								 `aktivitetiu` p
								 INNER JOIN
								users s ON p.uid = s.uid 
									LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
							    
							  	WHERE l.uid_lenda = '$id' and  username LIKE '%".$term."%' ORDER BY s.username ASC");
								while ($row1 = mysqli_fetch_array($query1)) {
									echo"	<form class='form' method='get' action='aktivitetiU.php?id=$id'>";

								echo"<input class='input' type='hidden' name='uid_aktivitetiu' value='{$row1['uid_aktivitetiu']}' />";
								echo"<input class='input' type='hidden' name='id' value='{$id}' />";
								echo"<td>{$row1['uid_Student']}</td>";
								echo"<td>{$row1['username']}</td>";
								echo"<td>{$row1['mbiemri']}</td>";

								echo"<td><input type='text'  name='Java1' value='{$row1['Java1']}' /></td>";
								echo"<td><input type='text'  name='Java2'  size='1' maxlength='1' value='{$row1['Java2']}'  /></td>";
								echo"<td><input type='text'  name='Java3'  size='1' maxlength='1' value='{$row1['Java3']}'  /></td>";
								echo"<td><input type='text'  name='Java4'  size='1' maxlength='1' value='{$row1['Java4']}'  /></td>";
								echo"<td><input type='text'  name='Java5'  size='1' maxlength='1' value='{$row1['Java5']}'  /></td>";
								echo"<td><input type='text'  name='Java6'  size='1' maxlength='1' value='{$row1['Java6']}'  /></td>";
								echo"<td><input type='text'  name='Java7'  size='1' maxlength='1' value='{$row1['Java7']}'  /></td>";
								echo"<td><input type='text'  name='Java8'  size='1' maxlength='1' value='{$row1['Java8']}'  /></td>";
								echo"<td><input type='text'  name='Java9'  size='1' maxlength='1' value='{$row1['Java9']}'  /></td>";
								echo"<td><input type='text'  name='Java10'  size='1' maxlength='1'  value='{$row1['Java10']}'  /></td>";
								echo"<td><input type='text'  name='Java11'  size='1' maxlength='1'  value='{$row1['Java11']}'  /></td>";
								echo"<td><input type='text'  name='Java12'  size='1' maxlength='1'  value='{$row1['Java12']}'  /></td>";
								echo"<td><input type='text'  name='Java13'  size='1' maxlength='1'  value='{$row1['Java13']}'  /></td>";
								echo"<td><input type='text'  name='Java14'  size='1' maxlength='1'  value='{$row1['Java14']}'  /></td>";
								echo"<td><input type='text'  name='Java15'  size='1' maxlength='1'  value='{$row1['Java15']}'  /></td>";
								echo"<td>{$row1['Piket']}</td>";
								echo"<td>{$row1['TotalAU']}</td>";
						
								echo"<input type='hidden'  name='uid_lenda'  size='1' maxlength='1'  value='{$row1['uid_lenda']}'  />";
								echo "<td><input class='button primary' type='submit' name='submit' value='MODIFIKO' /></td>";
								echo"</tr>";
								
									
echo "</form>";
								}
							}else if (empty($_REQUEST['term'])){
								  $query1 = mysqli_query($conn18,"CALL SelectAktivitetiULend($id)");
								while ($row1 = mysqli_fetch_array($query1)) {

							
								echo"	<form class='form' method='get' action='aktivitetiU.php?id=$id'>";

								echo"<input class='input' type='hidden' name='uid_aktivitetiu' value='{$row1['uid_aktivitetiu']}' />";
								echo"<input class='input' type='hidden' name='id' value='{$id}' />";
								echo"<td>{$row1['uid_Student']}</td>";
								echo"<td>{$row1['username']}</td>";
								echo"<td>{$row1['mbiemri']}</td>";

								echo"<td><input type='text'  name='Java1' value='{$row1['Java1']}' /></td>";
								echo"<td><input type='text'  name='Java2'  size='1' maxlength='1' value='{$row1['Java2']}'  /></td>";
								echo"<td><input type='text'  name='Java3'  size='1' maxlength='1' value='{$row1['Java3']}'  /></td>";
								echo"<td><input type='text'  name='Java4'  size='1' maxlength='1' value='{$row1['Java4']}'  /></td>";
								echo"<td><input type='text'  name='Java5'  size='1' maxlength='1' value='{$row1['Java5']}'  /></td>";
								echo"<td><input type='text'  name='Java6'  size='1' maxlength='1' value='{$row1['Java6']}'  /></td>";
								echo"<td><input type='text'  name='Java7'  size='1' maxlength='1' value='{$row1['Java7']}'  /></td>";
								echo"<td><input type='text'  name='Java8'  size='1' maxlength='1' value='{$row1['Java8']}'  /></td>";
								echo"<td><input type='text'  name='Java9'  size='1' maxlength='1' value='{$row1['Java9']}'  /></td>";
								echo"<td><input type='text'  name='Java10'  size='1' maxlength='1'  value='{$row1['Java10']}'  /></td>";
								echo"<td><input type='text'  name='Java11'  size='1' maxlength='1'  value='{$row1['Java11']}'  /></td>";
								echo"<td><input type='text'  name='Java12'  size='1' maxlength='1'  value='{$row1['Java12']}'  /></td>";
								echo"<td><input type='text'  name='Java13'  size='1' maxlength='1'  value='{$row1['Java13']}'  /></td>";
								echo"<td><input type='text'  name='Java14'  size='1' maxlength='1'  value='{$row1['Java14']}'  /></td>";
								echo"<td><input type='text'  name='Java15'  size='1' maxlength='1'  value='{$row1['Java15']}'  /></td>";
								echo"<td>{$row1['Piket']}</td>";
								echo"<td>{$row1['TotalAU']}</td>";
						
								echo"<input type='hidden'  name='uid_lenda'  size='1' maxlength='1'  value='{$row1['uid_lenda']}'  />";
								echo "<td><input class='button primary' type='submit' name='submit' value='MODIFIKO' /></td>";
				
echo"</tr>";
								
									
echo "</form>";
								}
							}
								
								?>
				

							
											
									
					
											
									
			</tbody>
					</table>
							</div>
					<div style="text-align: center; padding-top: 5%;">
					<?php 				
	echo"<form method='post' action='import_AktivitetinU.php?id=$id' enctype='multipart/form-data'>";
	echo"<input style='width: 13em;' type='file' name='file'/>"; 
	echo"</div>";
	echo"<div style='display: flex; justify-content: center; '> ";
	echo"<input class='button primary' style='margin-right:5%;' type='submit' name='submit_file' value='NGARKO'/>"; 
	echo"</form>"; 
  ?>
					<?php 				echo"<a class='button primary' href=\"export_excelAktivitetinU.php?id=$id\">Export Listën e Aktivitetit</a>"; ?>


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