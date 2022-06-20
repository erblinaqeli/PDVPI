<!-- Header -->
				<?php
            $result = mysqli_query($conn24, "CALL Selecttedhenatheader()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  
			  
if($result==null)
  mysqli_free_result($result);

            ?>
		<section id="sidebar1" class="header">
			<div class="tlogo">
				<div style="margin:3% 2%;" >
				<a  href="admin_home.php"><div class="col-12"><span class="image fit"><img src="<?php echo $file ?>" alt=""  /></span></div></a>
				</div>
				<div style="margin:3% 2%;">
					<h2 class="tituli"  ><a  href="admin_home.php" class="title" style="color: #ffffff;"><?php echo $titulli ?></a></h2>
				</div>
			</div>
		</section>
		<?php } ?>