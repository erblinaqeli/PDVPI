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
	header("Content-Disposition: attachment; filename=ListaPrezantimev.xls");  
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
					<th>Tituli i Projektit</th>
					<th>Detyra 1</th>
					<th>Detyra 2</th>
					<th>Detyra 3</th>
					<th>Detyra 4</th>
					<th>Projekti</th>
					<th>Word dok</th>
					<th>Data Prezantimit</th>
					<th>Komenti</th>
					<th>Lenda</th>
			</thead>
			<tbody>
	";
	$id = $_REQUEST['id'];
 
	$query = $conn23->query("CALL SelectListenPrezantimeve($id)") or die(mysqli_errno());
	while($fetch = $query->fetch_array()){
		
		if($fetch['detyra1'] == 1) {
			$detyra1VP = 'P0';
			} else {
				$detyra1VP = 'JO';
			}
			if($fetch['detyra2'] == 1) {
				$detyra2VP = 'P0';
			} else {
				$detyra2VP = 'JO';
			}
			if($fetch['detyra3'] == 1) {
			$detyra3VP = 'P0';
			} else {
				$detyra3VP = 'JO';
			}
			if($fetch['detyra4'] == 1) {
			$detyra4VP = 'P0';
			} else {
				$detyra4VP = 'JO';
			}
			if($fetch['projekti'] == 1) {
			$projektiVP = 'P0';
			} else {
				$projektiVP = 'JO';
			}
			if($fetch['worddok'] == 1) {
			$worddokVP = 'P0';
			} else {
				$worddokVP = 'JO';
			}
	$output .= "
				<tr style='vertical-align: top; '>
					<td>".$fetch['uid_Student']."</td>
					<td>".$fetch['username']."</td>
					<td>".$fetch['mbiemri']."</td>
					<td>".$fetch['TitulliProjektit']."</td>
					<td>".$detyra1VP."</td>
					<td>".$detyra2VP."</td>
					<td>".$detyra3VP."</td>
					<td>".$detyra4VP."</td>
					<td>".$projektiVP."</td>
					<td>".$worddokVP."</td>
					<td>".$fetch['data_prezantimit']."</td>
					<td style='width:800px;'>".$fetch['Komenti']."</td>
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