<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=student_list.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	require_once 'config.php';
 
	$output = "";
 
	$output .="
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>ID Studentit</th>
					<th>Emri</th>
					<th>Mbiemri</th>
					<th>Java1</th>
					<th>Java2</th>
					<th>Java3</th>
					<th>Java4</th>
					<th>Java5</th>
					<th>Java6</th>
					<th>Java7</th>
					<th>Java8</th>
					<th>Java9</th>
					<th>Java10</th>
					<th>Java11</th>
					<th>Java12</th>
					<th>Java13</th>
					<th>Java14</th>
					<th>Java15</th>
					<th>Total</th>
					<th>Piket</th>
				</tr>
			<tbody>
	";
	$id = $_REQUEST['id'];
 
	$query = $conn20->query("CALL SElectEvidencenLP($id)") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
					<td>".$fetch['uid_Evidenca']."</td>
					<td>".$fetch['uid_Student']."</td>
					<td>".$fetch['username']."</td>
					<td>".$fetch['mbiemri']."</td>
					<td>".$fetch['Java1']."</td>
					<td>".$fetch['Java2']."</td>
					<td>".$fetch['Java3']."</td>
					<td>".$fetch['Java4']."</td>
					<td>".$fetch['Java5']."</td>
					<td>".$fetch['Java6']."</td>
					<td>".$fetch['Java7']."</td>
					<td>".$fetch['Java8']."</td>
					<td>".$fetch['Java9']."</td>
					<td>".$fetch['Java10']."</td>
					<td>".$fetch['Java11']."</td>
					<td>".$fetch['Java12']."</td>
					<td>".$fetch['Java13']."</td>
					<td>".$fetch['Java14']."</td>
					<td>".$fetch['Java15']."</td>
					<td>".$fetch['TotalEL']."</td>
					<td>".$fetch['Piket']."</td>
				</tr>
	";
	}
 
	$output .="
			</tbody>
 
		</table>
	";
 
	echo $output;
 
 
?>