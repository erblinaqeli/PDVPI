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
	<title>Moduli Asistentit</title>
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
            $result = mysqli_query($conn13,"CALL SelectMenyProf()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
    
            $Konfigurimet;
            $Ckycu;


if($result==null)
  mysqli_free_rezultati($result);

            }
            ?>
                    <ul id="menuList">
					<li><a href="Konfigurimet.php"><?php echo $Konfigurimet ?></a></li>
                        <li><a style="margin:3% 2%;" href="../logout.php"><?php echo $Ckycu ?></a></li>
                    </ul>
                </nav>
			</section>

	
	
	
		<!-- Wrapper -->
		<div id="wrapper">
			<section id="MenaxhimiPerdoruesve" class="wrapper style3 fade-up">
					<div class="inner">
					<h2 class="title" style="text-align:center; font-size:1.6em; color: rgb(0,33,68);">Platforma Digjitale për Vlerësimin e Projekteve Individuale (PDVPI)</h2>
                <br><h3 style="text-align:center; font-size:1.4em; color: rgb(0,33,68);"> LËNDËT </h3><br>
						<div class="features" style="border: none;">
						
					

						<?php
						// SELECT  u.email , l.lenda , s.asistenti , l.uid_lenda FROM lendasist s  
						// LEFT OUTER JOIN `lendet` l ON s.uid_lenda = l.uid_lenda 
						// LEFT OUTER JOIN `users` u ON s.asistenti = u.uid
						// WHERE u.email = '$login_user'
						$result2 = mysqli_query($conn10,"CALL SelectAsist('$login_user')");	
						while($row2=mysqli_fetch_array($result2)){
							extract($row2);
							if($result2==null)
								mysqli_free_result($result2);
							?> 
			<section style="border: none; width:25%">
				<div class="col-12" style="border: none;">
					<ul class="actions"> 
							<!-- Id e butonave me qit ka lenda3 varesisht prej butonit qe e klikojm -->
					
						<li><a href="lendaAsist.php?id=<?php echo $uid_lenda; ?> "><input type="submit" value="<?php echo $lenda;?> " class="primary" /></a></li>
						
						
					</ul>
				</div>
			</section>
		<?php }	?>

							
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