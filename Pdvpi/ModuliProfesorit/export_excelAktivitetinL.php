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
	header("Content-Disposition: attachment; filename=AktivitetiLigjerate.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	require_once 'config.php';
 
	$output = "";
 
	$output .="
		<table style=''>
			<thead>
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
					<th>Lenda</th>
			</thead>
			<tbody>
	";
	$id = $_REQUEST['id'];
 
	$query = $conn21->query("CALL SelectAKtivitetiLP($id)") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
	$output .= "
				<tr style='vertical-align: top; '>
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
					<td>".$fetch['TotalAL']."</td>
					<td>".$fetch['Piket']."</td>
					<td>".$fetch['lenda']."</td>
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