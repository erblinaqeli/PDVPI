<?php
     $id = $_REQUEST['id'];
$conn = mysqli_connect("127.0.0.1:3306","root","","pdvpi") 
or die('Gabim ne lidhje!');
if(isset($_POST["submit_file"]))
{
    $header = 1;
    $file = $_FILES["file"]["tmp_name"];
    $file_open = fopen($file,"r");
    while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
    {
        if($header == 1)
        {
            $header++;
            continue;
        }

        $uid_Student = $csv[0];
        $query1 = mysqli_query($conn,"SELECT `uid`,`uid_Student`,`username`,`mbiemri`,`email`,`password`,`ID_usersRole` FROM `users` WHERE `uid_Student` = $uid_Student");
        while ($row1 = mysqli_fetch_array($query1)) {
                $uid = $row1['uid'];
        }
        $query1 = mysqli_query($conn,"SELECT `uid_aktivitetiu`, `uid`, `Java1`, `Java2`, `Java3`, `Java4`, `Java5`, `Java6`, `Java7`, `Java8`, `Java9`, `Java10`, `Java11`, `Java12`, `Java13`, `Java14`, `Java15`, `TotalAU`, `Piket`, `uid_lenda` FROM `aktivitetiu` WHERE uid = $uid");
        while ($row1 = mysqli_fetch_array($query1)) {
                $uid_aktivitetiu = $row1['uid_aktivitetiu'];
        }
        $username = $csv[1];
        $mbiemri = $csv[2];
        $Java1 = $csv[3];
        $Java2 = $csv[4];
        $Java3 = $csv[5];
        $Java4 = $csv[6];
        $Java5 = $csv[7];
        $Java6 = $csv[8];
        $Java7 = $csv[9];
        $Java8 = $csv[10];
        $Java9 = $csv[11];
        $Java10 = $csv[12];
        $Java11 = $csv[13];
        $Java12 = $csv[14];
        $Java13 = $csv[15];
        $Java14 = $csv[16];
        $Java15 = $csv[17];
        $TotalAU = $csv[18];
        $Piket = $csv[19];
        $result =  mysqli_query($conn,"UPDATE aktivitetiu SET `uid_aktivitetiu`='$uid_aktivitetiu',uid='$uid',Java1='$Java1',Java2='$Java2',Java3='$Java3',Java4='$Java4',Java5='$Java5',Java6='$Java6',Java7='$Java7',Java8='$Java8',Java9='$Java9',Java10='$Java10',Java11='$Java11',Java12='$Java12',Java13='$Java13',Java14='$Java14',Java15='$Java15',`TotalAU`='$TotalAU',Piket='$Piket',uid_lenda='$id' WHERE uid='$uid'");
        $result = mysqli_query($conn,"SELECT `FA` FROM formulat");
        while($res = mysqli_fetch_array($result))
        {
            $FA = $res['FA'];
        }
        $query = mysqli_query($conn,"UPDATE
								aktivitetiu
								SET
								Piket =
									Java1 + Java2 + Java3 + Java4 + Java5 + Java6 + Java7 + Java8 + Java9 + Java10 + Java11 + Java12 + Java13 + Java14 + Java15");
									$query = mysqli_query($conn,"UPDATE
									aktivitetiu
									SET
									TotalAU =
										Piket $FA");
        
    }
}
header("Location: aktivitetiU.php?id=$id");

?>
