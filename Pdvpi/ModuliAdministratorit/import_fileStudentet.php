<?php
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
    $password1 = "12345678";
    $password =  MD5($password1);
    mysqli_query($conn,"INSERT IGNORE INTO users VALUES ('','$uid_Student','$username','$mbiemri','$email','$password','4')");

    }
}
header("Location: menaxhimiPerdoruesve.php?id=$id");

?>
