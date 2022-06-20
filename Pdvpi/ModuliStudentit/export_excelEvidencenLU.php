<html>
	<head>
		<style>
			table thead th {
				background-color: rgb(242,242,242);
		}
		</style>
	</head>
	
<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=Evidenca.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	require_once 'config.php';
	require_once('check.php');	
 
	$output = "";
 
	$output .="
		<table style=''>
			<thead>
			<th>EVIDENCA</th>

					<th>ID</th>
					<th>Emri</th>
					<th>Mbiemri</th>
					<th>Java 1</th>
					<th>Java 2</th>
					<th>Java 3</th>
					<th>Java 4</th>
					<th>Java 5</th>
					<th>Java 6</th>
					<th>Java 7</th>
					<th>Java 8</th>
					<th>Java 9</th>
					<th>Java 10</th>
					<th>Java 11</th>
					<th>Java 12</th>
					<th>Java 13</th>
					<th>Java 14</th>
					<th>Java 15</th>
					<th>Totali</th>
					<th>Piket</th>

			</thead>
			<tbody>
	";
	$id = $_REQUEST['id'];
 
	$result = mysqli_query($conn21,"CALL SelectEvidencenL($id,'$login_user')" );


	while($fetch = mysqli_fetch_array($result)) {
		
	$output .= "
				<tr style='vertical-align: top; '>
				<td>LIGJERAT</td>

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
	$result = mysqli_query($conn22,"CALL SelectEvidencenP($id,'$login_user')" );


	
while($fetch = mysqli_fetch_array($result)) {
		
	$output .= "
				<tr style='vertical-align: top; '>
				<td>USHTRIME</td>

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
					<td>".$fetch['TotalEU']."</td>
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
</html>