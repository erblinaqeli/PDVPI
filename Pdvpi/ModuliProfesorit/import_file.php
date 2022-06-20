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
        $username = $csv[1];
        $mbiemri = $csv[2];
        $email = $csv[3];
        $result = mysqli_query($conn,"SELECT `uid`,`uid_Student`,`username`,`mbiemri`,`email`,`password`,`ID_usersRole` FROM `users` WHERE uid_Student = $uid_Student " );
        while($row = mysqli_fetch_array($result)) {
            $uidstud = $row['uid_Student'];   
            $uid = $row['uid'];   
            if($uid_Student == $uidstud){


                $result = mysqli_query($conn,"SELECT `uid_LS`, `uid`, `uid_lenda` FROM `lendstud` WHERE `uid`= $uid and uid_lenda = $id");
                while($row = mysqli_fetch_array($result)) {
                    $uidstud1 = $row['uid'];   
                    $uid_lendastud = $row['uid_lenda'];   
                }

                    if($uidstud1 == $uid && $uid_lendastud == $id)
                    {
                        echo"123";
                    }else
                    {
                        mysqli_query($conn,"INSERT INTO lendstud VALUES('','$uid','$id')");
                        mysqli_query($conn,"INSERT INTO ideteprojekteved1 VALUES('','$uid','/','$id','1','/','/','0')");
                        mysqli_query($conn,"INSERT INTO evidencal VALUES('','$uid','','','','','','','','','','','','','','','','','','$id')");
                        mysqli_query($conn,"INSERT INTO aktivitetil VALUES('','$uid','','','','','','','','','','','','','','','','','','$id')");
                        mysqli_query($conn,"INSERT INTO aktivitetiu VALUES('','$uid','','','','','','','','','','','','','','','','','','$id')");
                        mysqli_query($conn,"INSERT INTO evidencau VALUES('','$uid','','','','','','','','','','','','','','','','','','$id')");
        
                        $result1 = mysqli_query($conn,"SELECT `uid_IdetEProjekteve` FROM `ideteprojekteved1` ORDER BY `uid_IdetEProjekteve` DESC LIMIT 1");
                        while($row = mysqli_fetch_array($result1)){
                            $titulli= $row['uid_IdetEProjekteve'];
                            mysqli_query($conn,"INSERT INTO listaprezantimeve VALUES('','$uid','$titulli','$id','1','1','1','1','1','1','2022-02-05','/','0')");
                        } 
                        $result1 = mysqli_query($conn,"SELECT `uid_Evidenca` FROM `evidencal` ORDER BY `uid_Evidenca` DESC LIMIT 1");
                        while($row = mysqli_fetch_array($result1)){
                            $uid_Evidenca = $row['uid_Evidenca'];
                        } 
                        $result1 = mysqli_query($conn,"SELECT `uid_aktivitetil` FROM `aktivitetil` ORDER BY `uid_aktivitetil` DESC LIMIT 1");
                        while($row = mysqli_fetch_array($result1)){
                            $uid_aktivitetil = $row['uid_aktivitetil'];
                        } 
                        $result1 = mysqli_query($conn,"SELECT `uid_EvidencaU` FROM `evidencau` ORDER BY `uid_EvidencaU` DESC LIMIT 1");
                        while($row = mysqli_fetch_array($result1)){
                            $uid_EvidencaU = $row['uid_EvidencaU'];
                        }
                        $result1 = mysqli_query($conn,"SELECT `uid_aktivitetiu` FROM `aktivitetiu` ORDER BY `uid_aktivitetiu` DESC LIMIT 1");
                        while($row = mysqli_fetch_array($result1)){
                            $uid_aktivitetiu = $row['uid_aktivitetiu'];
                        }
                        mysqli_query($conn,"INSERT INTO vlersimi_final VALUES('','$uid','$id','$titulli','','','','','','','','$uid_Evidenca','$uid_aktivitetil','$uid_EvidencaU','$uid_aktivitetiu','','','','','')");
                    }
                   
                
            }
            else{
                echo "Keta studente nuk egzistojne ne list";
            }
        }
        
    }
}
header("Location: Konfigurimet.php?id=$id");

?>
