
			
					<ul style="margin: auto; font-size:14px;">
						<?php
            $rezultati = mysqli_query($conn63,"CALL Footertedhenat()");
            while ($rresht = mysqli_fetch_assoc($rezultati)) {

              extract($rresht);
			  	 echo $pershkrimi;
			  
if($rezultati==null)
  mysqli_free_rezultati($rezultati);

			}
            ?>
					</ul>
			
			