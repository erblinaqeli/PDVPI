<?php
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
			padding: 0em 0.5em;


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
			padding:1.5em 0em;
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
		</style>
	</head>
	<body class="is-preload">
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
			<section id="MenaxhimiPerdoruesve" style="overflow-y: auto; padding:5%;">
					
						
					<h2 style="margin-bottom:5%"class="title">SHIKO VLERËSIMIN FINAL</h2>
                    <?php 
						
						$result2 = mysqli_query($conn10, "SELECT shfaq FROM vlersimi_final  WHERE uid_lenda = '$id' AND shfaq = 1 "); 
						// rreshtat qe jane me 1 per tu shfaqur
						$rowcount = mysqli_num_rows($result2);
						// nese ka rreshta
						if ($rowcount > 0) {
						
						
						
						?>
						<div class="scroll">
					<table class="alt" style=" margin: 0%;">
					<form action="vlersimifinal.php?id=<?php echo $id ?>" method="post" style="width: 90%; "> 
							 				
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
						<thead class="shark-1" style="background-color: #fff;">
							<tr>
							<th>ID</th>
								
								<th>Titulli Projektit (Detyra 1)</th>
								<th>Koment Detyra 1</th>

								<th class='rotate' rowspan='4'><div>Detyra 2</div></th>
								<th class='rotate' rowspan='4' >Koment Detyra 2</th>
								
								<th class='rotate' rowspan='4'><div>Detyra 3</div></th>
								<th class='rotate' rowspan='4' >Koment Detyra3</th>

								<th class='rotate' rowspan='4'><div>Detyra 4</div></th>
								<th class='rotate' rowspan='4' >Koment Detyra 4</th>

								<th class='rotate' rowspan='4' style="white-space: break-spaces;"><div>Dorëzimi Dokumentimi</div></th>
								<th class='rotate' rowspan='4' >Koment Dorëzimi Dokumentimi</th>

								<th class='rotate' rowspan='4'><div>Prezantimi</div></th>
								<th class='rotate' rowspan='4' >Koment Prezantimi</th>

								<th class='rotate' rowspan='4'><div>TotalP</div></th>
								<th class='rotate' rowspan='4'><div>Detyrat</div></th>
								<th class='rotate' rowspan='4' style="white-space: break-spaces;"><div>Prezenca  (3.5L)</div></th>
								<th class='rotate' rowspan='4' style="white-space: break-spaces;"><div>Aktiviteti  (1.5L)</div></th>
								<th class='rotate' rowspan='4' style="white-space: break-spaces;"><div>Prezenca  (3.5U)</div></th>
								<th class='rotate' rowspan='4' style="white-space: break-spaces;"><div>Aktiviteti  (1.5U)</div></th>
								<th class='rotate' rowspan='4'><div>Totali 60%</div></th>
								<th class='rotate' rowspan='4'><div>Testi 40%</div></th>
								<th class='rotate' rowspan='4'><div>Totali Pikë</div></th>
								<th class='rotate' rowspan='4'><div>Nota</div></th>
							</tr>
						</thead>
						
						<form class='form' method='get'>
			
							
					<?php
					
					
			
			
								

								
								$id = $_REQUEST['id'];
								if (!empty($_REQUEST['term'])) {
									$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     
							
								$query1 = mysqli_query($conn10,"SELECT
                                v.`uid_vlersimiF`,
                                v.uid,
                                i.TitulliProjektit,
                                v.KomnetDetyra1,
								v.Detyra2,
								v.KomentDetyra2,
								v.Detyra3,
								v.KomentDetyra3,
								v.Detyra4,
								v.KomnetDetyra4,
								v.DorzimiProjektit,
								v.KomentiDorzimiProjekti,
								v.Prezantimi,
								v.KomentPrezantimi,
                                v.TotalP,
                                v.Detyrat,
                                v.Totali,
                                v.Provimi,
                                v.TotaliPike,
                                v.Nota,
                                s.uid_Student,
                                s.username,
                                s.mbiemri,
                                l.lenda,
                                el.TotalEL,
                                eu.TotalEU,
                                al.TotalAL,
                                au.TotalAU
                            FROM
                                `vlersimi_final` v
                            INNER JOIN users s ON
                                v.uid = s.uid
                            LEFT OUTER JOIN `lendet` l ON
                                v.uid_lenda = l.uid_lenda
                                LEFT OUTER JOIN `ideteprojekteved1` i ON
                                v.`Detyra1` = i.uid_IdetEProjekteve
                                  LEFT OUTER JOIN `evidencal` el ON
                                v.`EvidencaL` = el.uid_Evidenca
                                      LEFT OUTER JOIN `evidencau` eu ON
                                v.`EvidencaU` = eu.uid_EvidencaU
                                    LEFT OUTER JOIN `aktivitetil` al ON
                                v.`AktivitetiL` = al.uid_aktivitetil
                                    LEFT OUTER JOIN `aktivitetiu` au ON
                                v.`AktivitetiU` = au.uid_aktivitetiu
                            WHERE
                                l.uid_lenda = '$id' and  s.uid_Student LIKE '%".$term."%' ORDER BY s.uid_Student ASC");
								while ($row = mysqli_fetch_array($query1)) {
									echo "<tr>";
									echo"<td>{$row['uid_Student']}</td>";
                                    echo"<td>{$row['TitulliProjektit']}</td>";
									?>
									<td ><textarea type="text"  name="KomnetDetyra1" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomnetDetyra1'] ?></textarea></td>
									<?php
									echo"<td>{$row['Detyra2']}</td>";
									?>
									<td ><textarea type="text"  name="KomentDetyra2" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomentDetyra2'] ?></textarea></td>
									<?php
									echo"<td>{$row['Detyra3']}</td>";
									?>
									<td ><textarea type="text"  name="KomentDetyra3" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomentDetyra3'] ?></textarea></td>
									<?php
									echo"<td>{$row['Detyra4']}</td>";
									?>
									<td ><textarea type="text"  name="KomnetDetyra4" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomnetDetyra4'] ?></textarea></td>
									<?php
									echo"<td>{$row['DorzimiProjektit']}</td>";
									?>
									<td ><textarea type="text"  name="KomentiDorzimiProjekti" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomentiDorzimiProjekti'] ?></textarea></td>
									<?php
									echo"<td>{$row['Prezantimi']}</td>";
									?>
									<td ><textarea type="text"  name="KomentPrezantimi" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomentPrezantimi'] ?></textarea></td>
									<?php
									echo"<td>{$row['TotalP']}</td>";
									echo"<td>{$row['Detyrat']}</td>";
									echo"<td>{$row['TotalEL']}</td>";
									echo"<td>{$row['TotalAL']}</td>";
									echo"<td>{$row['TotalEU']}</td>";
									echo"<td>{$row['TotalAU']}</td>";
									echo"<td>{$row['Totali']}</td>";
									echo"<td>{$row['Provimi']}</td>";
									echo"<td>{$row['TotaliPike']}</td>";
									echo"<td>{$row['Nota']}</td>";
								}
								
							} else if (empty($_REQUEST['term'])){
 						
								$result = mysqli_query($conn10,"SELECT
                                v.`uid_vlersimiF`,
                                v.uid,
                                i.TitulliProjektit,
                                v.KomnetDetyra1,
								v.Detyra2,
								v.KomentDetyra2,
								v.Detyra3,
								v.KomentDetyra3,
								v.Detyra4,
								v.KomnetDetyra4,
								v.DorzimiProjektit,
								v.KomentiDorzimiProjekti,
								v.Prezantimi,
								v.KomentPrezantimi,
                                v.TotalP,
                                v.Detyrat,
                                v.Totali,
                                v.Provimi,
                                v.TotaliPike,
                                v.Nota,
                                s.uid_Student,
                                s.username,
                                s.mbiemri,
                                l.lenda,
                                el.TotalEL,
                                eu.TotalEU,
                                al.TotalAL,
                                au.TotalAU
                            FROM
                                `vlersimi_final` v
                            INNER JOIN users s ON
                                v.uid = s.uid
                            LEFT OUTER JOIN `lendet` l ON
                                v.uid_lenda = l.uid_lenda
                                LEFT OUTER JOIN `ideteprojekteved1` i ON
                                v.`Detyra1` = i.uid_IdetEProjekteve
                                  LEFT OUTER JOIN `evidencal` el ON
                                v.`EvidencaL` = el.uid_Evidenca
                                      LEFT OUTER JOIN `evidencau` eu ON
                                v.`EvidencaU` = eu.uid_EvidencaU
                                    LEFT OUTER JOIN `aktivitetil` al ON
                                v.`AktivitetiL` = al.uid_aktivitetil
                                    LEFT OUTER JOIN `aktivitetiu` au ON
                                v.`AktivitetiU` = au.uid_aktivitetiu
                            WHERE
                                l.uid_lenda = '$id' ORDER BY s.uid_Student ASC" );


								while($row = mysqli_fetch_array($result)) {
									echo "<tr>";
									echo"<td>{$row['uid_Student']}</td>";
                                    echo"<td>{$row['TitulliProjektit']}</td>";
									?>
									<td ><textarea type="text"  name="KomnetDetyra1" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomnetDetyra1'] ?></textarea></td>
									<?php
									echo"<td>{$row['Detyra2']}</td>";
									?>
									<td ><textarea type="text"  name="KomentDetyra2" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomentDetyra2'] ?></textarea></td>
									<?php
									echo"<td>{$row['Detyra3']}</td>";
									?>
									<td ><textarea type="text"  name="KomentDetyra3" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomentDetyra3'] ?></textarea></td>
									<?php
									echo"<td>{$row['Detyra4']}</td>";
									?>
									<td ><textarea type="text"  name="KomnetDetyra4" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomnetDetyra4'] ?></textarea></td>
									<?php
									echo"<td>{$row['DorzimiProjektit']}</td>";
									?>
									<td ><textarea type="text"  name="KomentiDorzimiProjekti" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomentiDorzimiProjekti'] ?></textarea></td>
									<?php
									echo"<td>{$row['Prezantimi']}</td>";
									?>
									<td ><textarea type="text"  name="KomentPrezantimi" style="width: 10em; height:1.7em;" readonly><?php echo $row['KomentPrezantimi'] ?></textarea></td>
									<?php
									echo"<td>{$row['TotalP']}</td>";
									echo"<td>{$row['Detyrat']}</td>";
									echo"<td>{$row['TotalEL']}</td>";
									echo"<td>{$row['TotalAL']}</td>";
									echo"<td>{$row['TotalEU']}</td>";
									echo"<td>{$row['TotalAU']}</td>";
									echo"<td>{$row['Totali']}</td>";
									echo"<td>{$row['Provimi']}</td>";
									echo"<td>{$row['TotaliPike']}</td>";
									echo"<td>{$row['Nota']}</td>";
				

								
								}
								?>
										</table>
                                        <?php
							} 
						}else{
							echo "<p style='text-align:center; border-radius:10px; color:white; margin:auto; height:1.7em; width:23em; background-color:#CF2D0C;'>
							Lista nuk është shfaqur akoma nga Profesori!</p>";

						}
							
							?>
							
											
									
					
											
									
			</tbody>
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