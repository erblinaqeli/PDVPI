       
					<?php
                     $result = mysqli_query($conn33, "CALL SelectMenuAdmin()");
            while ($row = mysqli_fetch_assoc($result)) {

              extract($row);
              echo $pershkrimi;
			  
if($result==null)
  mysqli_free_result($result);

			}

            ?>

