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
			width: 70%;
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
		}

		.rotate div {
			-moz-transform: rotate(-90.0deg);
			-o-transform: rotate(-90.0deg);
			-webkit-transform: rotate(-90.0deg);
			filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);
			-ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)";
			
		}
		.scroll {
         overflow-y: auto;
         width: 100%;
         height: 50%
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
		<section id="MenaxhimiPerdoruesve" style="overflow-y: auto;  padding: 5%;">
			
		<h2 style="margin-bottom:5%" class="title">MENAXHO IDETË E PROJEKTEVE</h2>
						


									<?php

									if (isset($_GET['submit'])) {

										
									    $uid_IdetEProjekteve = $_GET['uid_IdetEProjekteve'];


										$TitulliProjektit = $_GET['TitulliProjektit'];
										$uid_komentet_ideve = $_GET['uid_komentet_ideve'];
										$Koment = $_GET['Koment'];

										$query = mysqli_query($conn10, "UPDATE ideteprojekteved1 SET
										TitulliProjektit='$TitulliProjektit', uid_komentet_ideve='$uid_komentet_ideve', Koment='$Koment'
										WHERE uid_IdetEProjekteve=$uid_IdetEProjekteve");




									}


									$id = $_REQUEST['id'];
					


									?>
						
 <div class="scroll">
							<table class="alt" style="width: 20%; margin: 0%;">
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
										<th><div>ID</div></th>
										<th><div>Emri</div></th>
										<th><div>Mbiemri</div></th>
										<th>Titulli Projektit</th>
										<th>Koment</th>
										<th>Koment lidhur me Idene e Projektit</th>
										<th>Komenti nga Profesor/i/esha</th>
										<th><div>Modifiko</div></th>
									</tr>
								</thead>
										<?php
									$id = $_REQUEST['id'];
				// 					SELECT
                // p.uid_IdetEProjekteve,
                // p.uid,
                // p.`TitulliProjektit`,
                // p.`Koment`,
                // s.uid_Student,
                // s.username,
                // s.mbiemri,
				// s.email,
                // l.lenda,
                // i.`uid_komentet_ideve`,
                // i.KomentetEIdeve,
                //     p.KomentProf
                // FROM
                //  `ideteprojekteved1` p
                // INNER JOIN
                // users s ON p.uid = s.uid  
                // LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
                //   LEFT OUTER JOIN `komentet_ideve` i ON p.uid_komentet_ideve = i.uid_komentet_ideve 
                // WHERE l.uid_lenda = '$id'
				if (!empty($_REQUEST['term'])) {
					$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     
			
				$query1 = mysqli_query($conn10,"	SELECT
                p.uid_IdetEProjekteve,
                p.uid,
                p.`TitulliProjektit`,
                p.`Koment`,
                s.uid_Student,
                s.username,
                s.mbiemri,
				s.email,
                l.lenda,
                i.`uid_komentet_ideve`,
                i.KomentetEIdeve,
                    p.KomentProf
                FROM
                 `ideteprojekteved1` p
                INNER JOIN
                users s ON p.uid = s.uid  
                LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
                  LEFT OUTER JOIN `komentet_ideve` i ON p.uid_komentet_ideve = i.uid_komentet_ideve 
                WHERE l.uid_lenda = '$id' and  username LIKE '%".$term."%' ORDER BY s.username ASC");
								while ($row1 = mysqli_fetch_array($query1)) {
									echo "	<form class='form'  action='ideteEProjektit.php?id=$id method='get' >";

												echo "<input class='input' type='hidden' name='uid_IdetEProjekteve' value='{$row1['uid_IdetEProjekteve']}' />";
												echo "<input class='input' type='hidden' name='id' value='{$id}' />";
												echo "<input class='input' type='hidden' name='email' value='{$row1['email']}' />";
												echo "<input class='input' type='hidden' name='username' value='{$row1['username']}' />";
												echo "<input class='input' type='hidden' name='mbiemri' value='{$row1['mbiemri']}' />";
												echo "<input class='input' type='hidden' name='lenda' value='{$row1['lenda']}' />";
												echo "<input class='input' type='hidden' name='KomentetEIdeve' value='{$row1['KomentetEIdeve']}' />";
												echo"<td>{$row1['uid_Student']}</td>";
												echo"<td>{$row1['username']}</td>";
												echo"<td>{$row1['mbiemri']}</td>";
												echo "<td><input type='text' style='width:22em;' name='TitulliProjektit'   value='{$row1['TitulliProjektit']}'  /></td>";
												$Komenti = $row1['Koment'];
												?>
												
												<td><textarea type="text"  name="Koment" style="width: 10em; height:1.7em;"><?php echo $Komenti ?></textarea></td>
												
												<?php
												
												$KomentetEIdeve = $row1['KomentetEIdeve'];
												$KomentiProf = $row1['KomentProf'];
												$uid_komentet_ideve = $row1['uid_komentet_ideve'];
												

												echo "<td>";
												$query2 = mysqli_query($conn10, "SELECT
												*
												FROM
												`komentet_ideve`");
												echo "<select name='uid_komentet_ideve' style='width: 15em;'>";
												echo"<option value='$uid_komentet_ideve'>".$row1['KomentetEIdeve']."</option>";
												if($row1['uid_komentet_ideve'] == 1) {
													while ($row1 = $query2->fetch_array()) {
														echo "<option value='{$row1['uid_komentet_ideve']}'>{$row1['KomentetEIdeve']}";
														echo "</option>";
													}
													} else if($row1['uid_komentet_ideve'] == 2){
														while ($row1 = $query2->fetch_array()) {
															echo "<option value='{$row1['uid_komentet_ideve']}'>{$row1['KomentetEIdeve']}";
															echo "</option>";
														}
													}
												echo " </select>";
												echo "</td>";

												?>
												
												<td><textarea type="text"  name="KomentProf" style="width: 10em; height:1.7em;" readonly><?php echo $KomentiProf ?></textarea></td>
												
												<?php
												echo "<td><input class='button primary' type='submit' name='submit' value='MODIFIKO' /></td>";

												echo "</tr>";


												echo "</form>";}
											}
											else if (empty($_REQUEST['term'])){
											$query1 = mysqli_query($conn34, "CALL SelectIdeteEProjekteveULend($id)");
											while ($row1 = mysqli_fetch_array($query1)) {
												echo "	<form class='form'  action='ideteEProjektit.php?id=$id method='get' >";

												echo "<input class='input' type='hidden' name='uid_IdetEProjekteve' value='{$row1['uid_IdetEProjekteve']}' />";
												echo "<input class='input' type='hidden' name='id' value='{$id}' />";
												echo "<input class='input' type='hidden' name='email' value='{$row1['email']}' />";
												echo "<input class='input' type='hidden' name='username' value='{$row1['username']}' />";
												echo "<input class='input' type='hidden' name='mbiemri' value='{$row1['mbiemri']}' />";
												echo "<input class='input' type='hidden' name='lenda' value='{$row1['lenda']}' />";
												echo "<input class='input' type='hidden' name='KomentetEIdeve' value='{$row1['KomentetEIdeve']}' />";
												echo"<td>{$row1['uid_Student']}</td>";
												echo"<td>{$row1['username']}</td>";
												echo"<td>{$row1['mbiemri']}</td>";
												echo "<td><input type='text' style='width:22em;' name='TitulliProjektit'   value='{$row1['TitulliProjektit']}'  /></td>";
												$Komenti = $row1['Koment'];
												?>
												
												<td><textarea type="text"  name="Koment" style="width: 10em; height:1.7em;"><?php echo $Komenti ?></textarea></td>
												
												<?php
												
												$KomentetEIdeve = $row1['KomentetEIdeve'];
												$KomentiProf = $row1['KomentProf'];
												$uid_komentet_ideve = $row1['uid_komentet_ideve'];
												

												echo "<td>";
												$query2 = mysqli_query($conn10, "SELECT
												*
												FROM
												`komentet_ideve`");
											
												echo "<select name='uid_komentet_ideve' style='width: 15em;'>";
												echo"<option value='$uid_komentet_ideve'>".$row1['KomentetEIdeve']."</option>";
												if($row1['uid_komentet_ideve'] == 1) {
													while ($row1 = $query2->fetch_array()) {
														echo "<option value='{$row1['uid_komentet_ideve']}'>{$row1['KomentetEIdeve']}";
														echo "</option>";
													}
													} else if($row1['uid_komentet_ideve'] == 2){
														while ($row1 = $query2->fetch_array()) {
															echo "<option value='{$row1['uid_komentet_ideve']}'>{$row1['KomentetEIdeve']}";
															echo "</option>";
														}
													}

												// $query2 = mysqli_query($conn10, "SELECT
												// *
												// FROM
												// `komentet_ideve`");

												// while ($row1 = $query2->fetch_array()) {
												// 	echo "<option value='{$row1['uid_komentet_ideve']}'>{$row1['KomentetEIdeve']}";
												// 	echo "</option>";
												// }
												
												echo " </select>";
												echo "</td>";

												?>
												
												<td><textarea type="text"  name="KomentProf" style="width: 10em; height:1.7em;" readonly><?php echo $KomentiProf ?></textarea></td>
												
												<?php
											

												echo "<td><input class='button primary' type='submit' name='submit' value='MODIFIKO' /></td>";

												echo "</tr>";


												echo "</form>";
											}
										}
										?>
										</tbody>
							</table>
										</div>
										<div style="display: flex; align-items: center; justify-content: center;">
				<form action="ideteEProjektit.php?idSH=<?php $idSH?>" style="margin: 3%;"  method="get">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<input type="submit" name="checkvisibility" class="button primary"style="margin-left: 2%;" value="<?php		
			$query1 = mysqli_query($conn10, "SELECT shfaq FROM ideteprojekteved1  WHERE shfaq=0"); 
																$idSH = 0;
																echo "SHFAQ"
																?>" />														
		</form>
		<form action="ideteEProjektit.php?idSH=<?php $idSH1?>" style="margin: 3%;" method="get">
		<input type="hidden" name="id" value="<?php echo $id; ?>"/>
			<input type="submit"  name="checkvisibility1" class="button primary" style="margin-left: 15%;" value="<?php
		
			$query = mysqli_query($conn10, "SELECT shfaq FROM ideteprojekteved1  WHERE shfaq = 1");
			$idSH1 = 0;
																echo "HIQE";
																?>" />
																				
		</form>
		</div>
		<?php
if(isset($_GET['checkvisibility'])){
	$checkvisibility = $_GET['checkvisibility'];
		$result = mysqli_query($conn10, "UPDATE ideteprojekteved1 set shfaq = 1 WHERE  shfaq = 0"); 
		echo "<p style='text-align:center; border:red; border-radius:10px; color:white; margin:auto; height:1.7em; width:27em; background-color:#09C32E;'>
        Lista është duke u shfaqur tek Profesori dhe Studenti!</p>";
}
if(isset($_GET['checkvisibility1'])){
	$checkvisibility = $_GET['checkvisibility1'];
		$result = mysqli_query($conn10, "UPDATE ideteprojekteved1 set shfaq = 0 WHERE  shfaq = 1"); 
		echo "<p style='text-align:center; border:red; border-radius:10px; color:white; margin:auto; height:1.7em; width:27em; background-color:#CF2D0C;'>
        Lista nuk është duke u shfaqur tek Profesori dhe Studenti!</p>";
}
?>
				<!-- Per email -->
				<div>
					<?php
				require 'includes/PHPMailer.php';
require 'includes/SMTP.php';
require 'includes/EXCEPTION.php';

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->isSMTP();

$mail->Host = "smtp.gmail.com";

$mail->SMTPAuth = "true";

$mail->SMTPSecure = "tls";

$mail->Port = "587";

$mail->Username = "pdvpi.ukz@gmail.com";

$mail->Password = "Erblina123";

$mail->Subject = "Platforma Digjitale per Vleresimin e Projekteve Individuale";

$mail->setFrom("pdvpi.ukz@gmail.com");

$mail->isHTML(true);

 if(isset($_GET['submit']))
{
$mail->Body = "	Përshëndetje i/e nderuar, ".$_GET['username']." ".$_GET['mbiemri']." <br> Ju njoftojmë se në lendën ".$_GET['lenda'].", në projektin ".$_GET['TitulliProjektit']." keni marrë komentet rreth idesë. <br> Nëse idea juaj është UNIKE mund të vazhdoni me zhvillimin e më tutjeshëm të projektit. 
<br> Ndërsa nëse komenti juaj është 'Ftoheni në Konsultime tek Profesor/i/esha e lëndës', ju lutem ti shikoni oraret e konsultimeve në e-learning dhe të merrni pjesë në to. 
<br> Ju lutem mos përgjegjeni në këtë email sepse ky email është i automatizuar.";
}
 if(isset($_GET['submit']))
{
$mail->addAddress($_GET['email']);
}
if ($mail->Send()) {
	echo "<p style='text-align:center; border-radius:10px; color:white; margin:auto; height:1.7em; width:45em; background-color:#09C32E;'>
	Ju dërguat një e-mail informimi për idenë e projektit tek: ".$_GET['email']."!<p>";
}

$mail->smtpClose();

 ?>
				</div>
				<!-- Per me shfaq tabelen te moduli profees -->
		


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