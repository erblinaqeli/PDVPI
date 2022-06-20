<?php
/* Index.php faqja qe permban formen e loginit) */
 // Include Login Script

	include('login.php');
	if ((isset($_SESSION['ID_usersRole']) == '1')) 
	{
		header('Location: ModuliAdministratorit/admin_home.php');
	}	
	else if ((isset($_SESSION['ID_usersRole']) == '2')) 
	{
		header('Location: ModuliProfesorit/admin_home.php');
	}	
	else if ((isset($_SESSION['ID_usersRole']) == '3')) 
	{
		header('Location: ModuliAsistentit/admin_home.php');
	}	
	else if ((isset($_SESSION['ID_usersRole']) == '4')) 
	{
		header('Location: ModuliStudentit/admin_home.php');
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
	<title>PDVPI</title>
        <link rel="icon" href="images/mobilelogo1.png">
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<style>
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
		<section id="sidebar1" class="header">
			<div class="tlogo">
				<div style="margin:3% 2%;" >
					<div class="col-12"><span class="image fit"><img src="images/logolin2.png" alt=""  /></span></div>
				</div>
				<div style="margin:3% 2%;">
					<h2 class="tituli"  ><a  href="index.html" class="title" style="color: #ffffff;">PDVPI</a></h2>
				</div>
			</div>
		</section>
			<section id="sidebar" class="menu" >
				<div class="inner" style="height: 0%;">
					
				</div>
			</section>
		
		

		<!-- Wrapper -->
		<div id="wrapper" >
			<section id="two" class="wrapper style3 fade-up">
				<div class="inner" style="padding: 0%;">
					<div class="features" style="border: none;">
						<section style="border: none;">
							<div class="col-12">
								<form method="post" action=""   >
									<h1 class="major" style="width: max-content;"  >KYÇJA NË PLATFORMË</h1>
									<div class="row gtr-uniform" style="  display: flex; flex-direction: column;">
										<div  class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
											<input type="email"  name="email" id="email" value="" placeholder="Email" />
										</div>
										<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
											<input type="password"name="password" id="password" value="" placeholder="Fjalekalimi" />
										</div>
										<div class="col-12">
											<ul class="actions"  style="display: flex; justify-content: center;	align-items: center;"> 
												<li><input type="submit" name="submit" value="kycu" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
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



			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="assets/js/menuscript.js"></script>

</body>
	<!-- <body class="is-preload">

		<section id="sidebar1" class="header">
			<div class="tlogo">
				<div style="margin:3% 2%;" >
					<div class="col-12"><span class="image fit"><img src="images/logo.png" alt="" /></span></div>
				</div>
				<div style="margin:3% 2%;">
					<h2 class="tituli"  ><a  href="index.html" class="title" style="color: #ffffff;">PDVPI </a></h2>
				</div>
			</div>
		</section>
			<section  class="menu" style="margin: 0%;">
				
			</section>

		
		<div id="wrapper" >
			<section id="two" class="wrapper style3 fade-up">
				<div class="inner">
					<section class="prove" >		
						<form method="post" action="#"   >
						<h1 class="major"  style="display: flex; justify-content: center;	align-items: center;" >Administrator</h1>
							<div class="row gtr-uniform" style="  display: flex; flex-direction: column;">
								<div  class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
									<input type="text"  name="username" id="username" value="" placeholder="Username" />
								</div>
								<div class="col-12"  style="display: flex; justify-content: center;	align-items: center;">
									<input type="email"name="password" id="password" value="" placeholder="Password" />
								</div>
								<div class="col-12">
									<ul class="actions"  style="display: flex; justify-content: center;	align-items: center;"> 
										<li><input type="submit" value="Kycu" class="primary" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
			</section>
		</div>


		<footer id="footer" class="wrapper style1-alt">
			<div class="inner">
				<ul class="menu">
					<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</footer>

		
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body> -->
</html>