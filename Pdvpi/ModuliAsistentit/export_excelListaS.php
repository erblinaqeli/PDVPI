
<?php
	header("Content-Type: application/xls");    
	header("Content-Disposition: attachment; filename=ListaStudenteve.xls");  
	header("Pragma: no-cache"); 
	header("Expires: 0");
 
	require_once 'config.php';
 
	$output = "";
 
	$output .="
		<table style='border: 1px solid black' >
			<thead>
				<tr>
					<th style='border: 1px solid black'>ID Studentit</th>
					<th style='border: 1px solid black'>Emri</th>
					<th style='border: 1px solid black'>Mbiemri</th>
					<th style='border: 1px solid black'>Emaili</th>
					<th style='border: 1px solid black'>Lenda</th>
				</tr>
			<tbody>
	";
	$id = $_REQUEST['id'];
	// SELECT
	// u.`uid`,ls.`uid_lenda`,u.uid_Student, u.username, u.mbiemri, u.email, l.lenda
	// 		FROM
	// 		 lendstud ls
	// 			LEFT OUTER JOIN `lendet` l ON ls.`uid_lenda` = l.uid_lenda 
	// 			LEFT OUTER JOIN `users` u ON ls.`uid` = u.uid 
				
	// 			WHERE l.uid_lenda = '$id'
	$query = $conn->query("SelectExcelStud($id)");
	while($fetch = $query->fetch_array()){
 
	$output .= "
				<tr>
					<td style='border: 1px solid black'>".$fetch['uid_Student']."</td>
					<td style='border: 1px solid black'>".$fetch['username']."</td>
					<td style='border: 1px solid black'>".$fetch['mbiemri']."</td>
					<td style='border: 1px solid black'>".$fetch['email']."</td>
					<td style='border: 1px solid black'>".$fetch['lenda']."</td>
				</tr>
	";
	}
 
	$output .="
			</tbody>
		</table>
	";
 
	echo $output;
 
 
?>