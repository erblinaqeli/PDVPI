<?php
include("check.php");
$id = $_REQUEST['id'];
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
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>

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

	<div id="wrapper">
		<section id="MenaxhimiPerdoruesve" style="overflow-y: auto; padding: 5%;">
			

		<h2 style="margin-bottom:5%" class="title">MENAXHO VLERËSIMIN FINAL</h2>

					


								<?php
					
					
			
			
					if (isset($_GET['submit'])) {
		
						$result = mysqli_query($conn7,"SELECT `uid_formulat`,`FormulaDetyraV`,`F10`,`F9`,`F8`,`F7`,`F6`,`Provimimeivogel` FROM formulat");

						while($res = mysqli_fetch_array($result))
						{
							$FormulaDetyraV = $res['FormulaDetyraV'];
							$F10 = $res['F10'];
							$F9 = $res['F9'];
							$F8 = $res['F8'];
							$F7 = $res['F7'];
							$F6 = $res['F6'];
							$Provimimeivogel = $res['Provimimeivogel'];
						}

					$uid_vlersimiF = $_GET['uid_vlersimiF'];

					$KomnetDetyra1 = $_GET['KomnetDetyra1'];

					$Detyra2 = $_GET['Detyra2'];
					$KomentDetyra2 = $_GET['KomentDetyra2'];

					$Detyra3 = $_GET['Detyra3'];
					$KomentDetyra3 = $_GET['KomentDetyra3'];

					$Detyra4 = $_GET['Detyra4'];
					$KomnetDetyra4 = $_GET['KomnetDetyra4'];

					$DorzimiProjektit = $_GET['DorzimiProjektit'];
					$KomentiDorzimiProjekti = $_GET['KomentiDorzimiProjekti'];

					$Prezantimi = $_GET['Prezantimi'];
					$KomentPrezantimi = $_GET['KomentPrezantimi'];

					$TotalEL = $_GET['TotalEL'];
					$TotalAL = $_GET['TotalAL'];
					$TotalEU = $_GET['TotalEU'];
					$TotalAU = $_GET['TotalAU'];
					
	
					$Provimi = $_GET['Provimi'];

					
					$query = mysqli_query($conn10,"UPDATE vlersimi_final SET KomnetDetyra1 = '$KomnetDetyra1', 
					Detyra2='$Detyra2', KomentDetyra2 = '$KomentDetyra2', Detyra3='$Detyra3', KomentDetyra3 = '$KomentDetyra3', Detyra4='$Detyra4' , KomnetDetyra4 = '$KomnetDetyra4', DorzimiProjektit='$DorzimiProjektit', KomentiDorzimiProjekti = '$KomentiDorzimiProjekti', Prezantimi='$Prezantimi', KomentPrezantimi = '$KomentPrezantimi' ,
					  Provimi='$Provimi'
					WHERE uid_vlersimiF = $uid_vlersimiF");
					$query = mysqli_query($conn10,"UPDATE
					vlersimi_final
					SET
					TotalP =
					Detyra2 + Detyra3 + Detyra4 + DorzimiProjektit + Prezantimi WHERE uid_vlersimiF = $uid_vlersimiF");
					$query = mysqli_query($conn10,"UPDATE
					vlersimi_final
					SET
					Detyrat =
					TotalP $FormulaDetyraV WHERE uid_vlersimiF = $uid_vlersimiF");

					$query = mysqli_query($conn10,"UPDATE
					vlersimi_final
					SET
					Totali = TotalP + Detyrat + $TotalEL + $TotalAL + $TotalEU + $TotalAU WHERE uid_vlersimiF = $uid_vlersimiF");
							$query = mysqli_query($conn10,"UPDATE
							vlersimi_final
							SET
							TotaliPike = Totali + Provimi WHERE uid_vlersimiF = $uid_vlersimiF");
							  $query = mysqli_query($conn10,"UPDATE
							  vlersimi_final
						  SET
							  Nota = (
								  CASE WHEN TotaliPike >= $F10 THEN 10
								  WHEN TotaliPike >= $F9 THEN 9
								  WHEN TotaliPike >= $F8 THEN 8
								  WHEN TotaliPike >= $F7 THEN 7
								  WHEN TotaliPike >= $F6 THEN 6
								  ELSE 5
							  END
						  ) WHERE uid_vlersimiF = $uid_vlersimiF");
						  if($Provimi <= $Provimimeivogel){
							$Nota = 5;
							$query = mysqli_query($conn10,"UPDATE vlersimi_final SET  
						 	Nota='$Nota' WHERE uid_vlersimiF = $uid_vlersimiF");
						}
						 
					}

					
					$id = $_REQUEST['id'];
				
					
			 
					?>
							<div class="scroll">
							<table class="alt" style="margin: 0%;">
							<form action="VlersimiFinal.php?id=<?php echo $id ?>" method="post" style="width: 90%; "> 
							 				
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
								<th>Emri</th>
								<th>Mbiemri</th>
								<th>Titulli Projektit (Detyra 1)</th>
								<th>Koment Detyra 1</th>

								<th class='rotate' rowspan='4'><div>Detyra 2</div></th>
								<th class='rotate' rowspan='4' style="white-space: break-spaces; width:2em">Koment Detyra 2</th>
								
								<th class='rotate' rowspan='4'><div>Detyra 3</div></th>
								<th class='rotate' rowspan='4' style="white-space: break-spaces;">Koment Detyra3</th>

								<th class='rotate' rowspan='4'><div>Detyra 4</div></th>
								<th class='rotate' rowspan='4' style="white-space: break-spaces;">Koment Detyra 4</th>

								<th class='rotate' rowspan='4' style="white-space: break-spaces;"><div>Dorëzimi Dokumentimi</div></th>
								<th class='rotate' rowspan='4' style="white-space: break-spaces;">Koment Dorëzimi Dokumentimi</th>

								<th class='rotate' rowspan='4'><div>Prezantimi</div></th>
								<th class='rotate' rowspan='4' style="white-space: break-spaces;">Koment Prezantimi</th>

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
								<th class='rotate' rowspan='4'><div>Modifiko</div></th>

							</tr>
								</thead>
								<?php
								
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
								  v.EvidencaL,
								  v.AktivitetiL,
								  v.EvidencaU,
								  v.AktivitetiU,
			  
								  s.uid_Student,
								  s.username,
								  s.mbiemri,
								  l.lenda,
								  el.TotalEL,
								  eu.TotalEU,
								  al.TotalAL,
								  au.TotalAU,
								  v.uid_lenda
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
								  l.uid_lenda = '$id' and  s.username LIKE '%".$term."%' ORDER BY s.username ASC");
								while ($row1 = mysqli_fetch_array($query1)) {
									echo "	<form class='form'  action='VlersimiFinal.php?id=$id method='get' >";


									echo"<input class='input' type='hidden' name='uid_vlersimiF' value='{$row1['uid_vlersimiF']}' />";
									echo"<input class='input' type='hidden' name='id' value='{$id}' />";
									echo"<td>{$row1['uid_Student']}</td>";
									echo"<td>{$row1['username']}</td>";
									echo"<td>{$row1['mbiemri']}</td>";
									echo"<td>{$row1['TitulliProjektit']}</td>";
									?>
									<td><textarea type="text"  name="KomnetDetyra1"  value="<?php{$row1['KomnetDetyra1']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomnetDetyra1'] ?></textarea></td>
									<?php
									echo"<input class='input' type='hidden' name='TotalEL' value='{$row1['TotalEL']}' />";
									echo"<input class='input' type='hidden' name='TotalEU' value='{$row1['TotalEU']}' />";
									echo"<input class='input' type='hidden' name='TotalAL' value='{$row1['TotalAL']}' />";
									echo"<input class='input' type='hidden' name='TotalAU' value='{$row1['TotalAU']}' />";
					

									echo"<td><input type='text'   name='Detyra2' value='{$row1['Detyra2']}' /></td>";
									?>
									<td><textarea type="text"  name="KomentDetyra2"  value="<?php{$row1['KomentDetyra2']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomentDetyra2'] ?></textarea></td>
									<?php
									echo"<td><input type='text'  name='Detyra3'  value='{$row1['Detyra3']}'  /></td>";
									?>
									<td><textarea type="text"  name="KomentDetyra3"  value="<?php{$row1['KomentDetyra3']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomentDetyra3'] ?></textarea></td>
									<?php
									echo"<td><input type='text'  name='Detyra4'  value='{$row1['Detyra4']}'  /></td>";
									?>
									<td><textarea type="text"  name="KomnetDetyra4"  value="<?php{$row1['KomnetDetyra4']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomnetDetyra4'] ?></textarea></td>
									<?php
									echo"<td><input type='text'  name='DorzimiProjektit' value='{$row1['DorzimiProjektit']}'  /></td>";
									?>
									<td><textarea type="text"  name="KomentiDorzimiProjekti"  value="<?php{$row1['KomentiDorzimiProjekti']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomentiDorzimiProjekti'] ?></textarea></td>
									<?php
									echo"<td><input type='text'  name='Prezantimi' value='{$row1['Prezantimi']}'  /></td>";
									?>
									<td><textarea type="text"  name="KomentPrezantimi"  value="<?php{$row1['KomentPrezantimi']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomentPrezantimi'] ?></textarea></td>
									<?php
									echo"<td>{$row1['TotalP']}</td>";
									echo"<td>{$row1['Detyrat']}</td>";
									echo"<td>{$row1['TotalEL']}</td>";
									echo"<td>{$row1['TotalAL']}</td>";
									echo"<td>{$row1['TotalEU']}</td>";
									echo"<td>{$row1['TotalAU']}</td>";
									echo"<td>{$row1['Totali']}</td>";
									echo"<td><input type='text'  name='Provimi'    value='{$row1['Provimi']}'  /></td>";
									echo"<td>{$row1['TotaliPike']}</td>";
									echo"<td>{$row1['Nota']}</td>";
							
									echo"<input type='hidden'  name='uid_lenda'  value='{$row1['uid_lenda']}'  />";
									echo "<td><input class='button primary' type='submit' name='submit' value='MODIFIKO' /></td>";
					
	echo"</tr>";
									
										
	echo "</form>";
								}
							} else if (empty($_REQUEST['term'])){
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
								v.EvidencaL,
								v.AktivitetiL,
								v.EvidencaU,
								v.AktivitetiU,
			
								s.uid_Student,
								s.username,
								s.mbiemri,
								l.lenda,
								el.TotalEL,
								eu.TotalEU,
								al.TotalAL,
								au.TotalAU,
								v.uid_lenda
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
                                l.uid_lenda = '$id' ORDER BY s.uid_Student ASC");
								while ($row1 = mysqli_fetch_array($query1)) {

									echo "	<form class='form'  action='VlersimiFinal.php?id=$id method='get' >";


								echo"<input class='input' type='hidden' name='uid_vlersimiF' value='{$row1['uid_vlersimiF']}' />";
								echo"<input class='input' type='hidden' name='id' value='{$id}' />";
								echo"<td>{$row1['uid_Student']}</td>";
								echo"<td>{$row1['username']}</td>";
								echo"<td>{$row1['mbiemri']}</td>";
								echo"<td>{$row1['TitulliProjektit']}</td>";
								?>
								<td><textarea type="text"  name="KomnetDetyra1"  value="<?php{$row1['KomnetDetyra1']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomnetDetyra1'] ?></textarea></td>
								<?php
								echo"<input class='input' type='hidden' name='TotalEL' value='{$row1['TotalEL']}' />";
								echo"<input class='input' type='hidden' name='TotalEU' value='{$row1['TotalEU']}' />";
								echo"<input class='input' type='hidden' name='TotalAL' value='{$row1['TotalAL']}' />";
								echo"<input class='input' type='hidden' name='TotalAU' value='{$row1['TotalAU']}' />";
			

								echo"<td><input type='text'   name='Detyra2' value='{$row1['Detyra2']}' /></td>";
									?>
									<td><textarea type="text"  name="KomentDetyra2"  value="<?php{$row1['KomentDetyra2']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomentDetyra2'] ?></textarea></td>
									<?php
									echo"<td><input type='text'  name='Detyra3'  value='{$row1['Detyra3']}'  /></td>";
									?>
									<td><textarea type="text"  name="KomentDetyra3"  value="<?php{$row1['KomentDetyra3']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomentDetyra3'] ?></textarea></td>
									<?php
									echo"<td><input type='text'  name='Detyra4'  value='{$row1['Detyra4']}'  /></td>";
									?>
									<td><textarea type="text"  name="KomnetDetyra4"  value="<?php{$row1['KomnetDetyra4']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomnetDetyra4'] ?></textarea></td>
									<?php
									echo"<td><input type='text'  name='DorzimiProjektit' value='{$row1['DorzimiProjektit']}'  /></td>";
									?>
									<td><textarea type="text"  name="KomentiDorzimiProjekti"  value="<?php{$row1['KomentiDorzimiProjekti']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomentiDorzimiProjekti'] ?></textarea></td>
									<?php
									echo"<td><input type='text'  name='Prezantimi' value='{$row1['Prezantimi']}'  /></td>";
									?>
									<td><textarea type="text"  name="KomentPrezantimi"  value="<?php{$row1['KomentPrezantimi']}?>" style="width: 10em; height:1.7em;" ><?php echo $row1['KomentPrezantimi'] ?></textarea></td>
									<?php
								echo"<td>{$row1['TotalP']}</td>";
								echo"<td>{$row1['Detyrat']}</td>";
								echo"<td>{$row1['TotalEL']}</td>";
								echo"<td>{$row1['TotalAL']}</td>";
								echo"<td>{$row1['TotalEU']}</td>";
								echo"<td>{$row1['TotalAU']}</td>";
								echo"<td>{$row1['Totali']}</td>";
								echo"<td><input type='text'  name='Provimi'    value='{$row1['Provimi']}'  /></td>";
								echo"<td>{$row1['TotaliPike']}</td>";
								echo"<td>{$row1['Nota']}</td>";
						
								echo"<input type='hidden'  name='uid_lenda'  value='{$row1['uid_lenda']}'  />";
								echo "<td><input class='button primary' type='submit' name='submit' value='MODIFIKO' /></td>";
				
echo"</tr>";
								
									
echo "</form>";
								}
							}
								?>
										</tbody>
							</table>
						</div>
			
				<div style="display: flex; align-items: center; justify-content: center;">
				<form action="VlersimiFinal.php?idSH=<?php $idSH?>" style="margin: 3%;"  method="get">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<input type="submit" name="checkvisibility" class="button primary"style="margin-left: 2%;" value="<?php		
			$query1 = mysqli_query($conn10, "SELECT shfaq FROM vlersimi_final  WHERE shfaq = 0"); 
																$idSH = 0;
																echo "SHFAQ"
																?>" />														
		</form>
		<form action="VlersimiFinal.php?idSH=<?php $idSH1?>" style="margin: 3%;" method="get">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<input type="submit"  name="checkvisibility1" class="button primary" style="margin-left: 15%;" value="<?php
		
			$query = mysqli_query($conn10, "SELECT shfaq FROM vlersimi_final  WHERE shfaq = 1");
			$idSH1 = 0;
																echo "HIQE";
																?>" />
																				
		</form>
		</div>
		<?php
if(isset($_GET['checkvisibility'])){
    $checkvisibility = $_GET['checkvisibility'];
        $result = mysqli_query($conn10, "UPDATE vlersimi_final set shfaq = 1 WHERE  shfaq = 0"); 

        echo "<p style='text-align:center; border-radius:10px; color:white; margin:auto; height:1.7em; width:27em; background-color:#09C32E;'>
        Lista është duke u shfaqur tek Asistenti dhe Studenti!</p>";

}
if(isset($_GET['checkvisibility1'])){
    $checkvisibility = $_GET['checkvisibility1'];
        $result = mysqli_query($conn10, "UPDATE vlersimi_final set shfaq = 0 WHERE  shfaq = 1"); 


        echo "<p style='text-align:center; border-radius:10px; color:white; margin:auto; height:1.7em; width:27em; background-color:#CF2D0C;'>
        Lista nuk është duke u shfaqur tek Asistenti dhe Studenti!</p>";


}
?>
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