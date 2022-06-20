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
	padding: 0.25em;
	margin: auto;
	white-space: nowrap;
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
form{
	margin: 2em 0 2em 0;
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
			

		<h2 style="margin-bottom:5%" class="title">MENAXHO IDETË E PROJEKTEVE</h2>

						<?php 
						
						$result2 = mysqli_query($conn25, "CALL SelectShfaqIdeteEProjektit($id)"); //na nevoitet ne query
						// rreshtat qe jane me 1 per tu shfaqur
						$rowcount = mysqli_num_rows($result2);
						// nese ka rreshta
						if ($rowcount > 0) {
						
						
						
						?>
 <div class="scroll">
							<table class="alt" style="width: 20%; margin: 0%;">
							<form action="ideteEProjektit.php?id=<?php echo $id ?>" method="post" style="width: 90%; "> 
							 				
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
									<th name="ID" id="ID">
                        <div>ID</div>
                     </th>
                     <th name="Emri" id="Emri">
                        <div>Emri</div>
                     </th>
                     <th name="Mbiemri" id="Mbiemri">
                        <div>Mbiemri</div>
                     </th>
                     <th name="TitulliProjektit" id="TitulliProjektit">
                        <div>Titulli Projektit</div>
                     </th>
                     <th name="Koment" id="Koment">
                        <div>Koment nga Asistenti</div>
                     </th>
                     <th name="KomentetEIdeve" id="KomentetEIdeve">
                        <div>Koment lidhur me Idenë e Projektit</div>
                     </th>
                     <th name="KomentProf" id="KomentProf">
                        <div>Shto koment</div>
                     </th>
                     <th name="Modifiko" id="Modifiko">
                        <div>Modifiko</div>
                     </th>
									</tr>
								</thead>

								<form class='form' method='get'>



									

							
								


									<?php

									if (isset($_GET['submit'])) {

										
									    $uid_IdetEProjekteve = $_GET['uid_IdetEProjekteve'];
										$KomentProf = $_GET['KomentProf'];
										$query = mysqli_query($conn10, "UPDATE ideteprojekteved1 SET
										KomentProf='$KomentProf'
										WHERE uid_IdetEProjekteve=$uid_IdetEProjekteve");




									}


									$id = $_REQUEST['id'];
					


									?>
						
										<?php
									$id = $_REQUEST['id'];
									

									// SELECT
									// p.uid_IdetEProjekteve,
									// p.uid,
									// p.`TitulliProjektit`,
									// p.`Koment`,
									// p.KomentProf,
									// s.uid_Student,
									// s.username,
									// s.mbiemri,
									// s.email,
									// l.lenda,
									// i.`uid_komentet_ideve`,
									// i.KomentetEIdeve,
									// p.KomentProf
									// FROM
									// `ideteprojekteved1` p
									// INNER JOIN
									// users s ON p.uid = s.uid  
									// LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
									// LEFT OUTER JOIN `komentet_ideve` i ON p.uid_komentet_ideve = i.uid_komentet_ideve 
									// 	WHERE l.uid_lenda = '$id'
									if (!empty($_REQUEST['term'])) {
										$term = mysqli_real_escape_string($conn,$_REQUEST['term']);     
									
									  $query1 = mysqli_query($conn10,"SELECT
									  p.uid_IdetEProjekteve,
									  p.uid,
									  p.`TitulliProjektit`,
									  p.`Koment`,
									  p.KomentProf,
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
										  WHERE l.uid_lenda = '$id' and  s.username LIKE '%".$term."%' ORDER BY s.username ASC");
								while ($row1 = mysqli_fetch_array($query1)) {
									echo "	<form class='form'  action='ideteEProjektit.php?update={$row1['uid_IdetEProjekteve']}&id=$id method='get' >";

									echo "<input class='input' type='hidden' name='uid_IdetEProjekteve' value='{$row1['uid_IdetEProjekteve']}' />";
									echo "<input class='input' type='hidden' name='id' value='{$id}' />";
									echo "<tr>";

									echo "<td>{$row1['uid_Student']}</td>";
									echo "<td>{$row1['username']}</td>";
									echo "<td>{$row1['mbiemri']}</td>";
									echo "<td>{$row1['TitulliProjektit']}</td>";
									?>
									<td><textarea type="text"  name="Koment" style="width: 10em; height:1.7em;"readonly><?php echo $row1['Koment'] ?></textarea></td>
									
									<?php
									echo "<td>{$row1['KomentetEIdeve']}</td>";
									?>
									<td><textarea type="text"  name="KomentProf" style="width: 10em; height:1.7em;"><?php echo $row1['KomentProf'] ?></textarea></td>
									
									<?php
								
									echo "<td><input class='button primary' type='submit' name='submit' value='MODIFIKO' /></td>";

									echo "</tr>";


									echo "</form>";
								}
							} else if (empty($_REQUEST['term'])){
											$query1 = mysqli_query($conn26, "CALL SelektoIdentEProjekteve($id)");
											while ($row1 = mysqli_fetch_array($query1)) {
												echo "	<form class='form'  action='ideteEProjektit.php?update={$row1['uid_IdetEProjekteve']}&id=$id method='get' >";

												echo "<input class='input' type='hidden' name='uid_IdetEProjekteve' value='{$row1['uid_IdetEProjekteve']}' />";
												echo "<input class='input' type='hidden' name='id' value='{$id}' />";
												echo "<tr>";

												echo "<td>{$row1['uid_Student']}</td>";
												echo "<td>{$row1['username']}</td>";
												echo "<td>{$row1['mbiemri']}</td>";
												echo "<td>{$row1['TitulliProjektit']}</td>";
												?>
												<td><textarea type="text"  name="Koment" style="width: 10em; height:1.7em;"readonly><?php echo $row1['Koment'] ?></textarea></td>
												
												<?php
												echo "<td>{$row1['KomentetEIdeve']}</td>";
												?>
												<td><textarea type="text"  name="KomentProf" style="width: 10em; height:1.7em;"><?php echo $row1['KomentProf'] ?></textarea></td>
												
												<?php
											
												echo "<td><input class='button primary' type='submit' name='submit' value='MODIFIKO' /></td>";

												echo "</tr>";


												echo "</form>";
											}
										}
										?>
							</table>
</div>
							<?php
							} else{
								echo "<p style='text-align:center; border:red; border-radius:10px; color:white; margin:auto; height:1.7em; width:23em; background-color:#CF2D0C;'>
                                Lista nuk është shfaqur akoma nga Asistenti!</p>";

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