<section id="sidebar" class="menu" >
			<div class="inner">
<nav>

					<ul>
						<?php
            $result = mysqli_query($conn49,"CALL SelectMenyProf()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
			  	 echo $pershkrimi;
			  
if($result==null)
  mysqli_free_rezultati($result);

			}
            ?>
						
					</ul>
					
				</nav></div>
		</section>