<?php
   /* Faqja (home.php) e cila paraqitet pasi perdoruesi te llogohet me sukses */
   	include("check.php");	
       echo $id = $_REQUEST['id'];
   ?>
<!DOCTYPE HTML>
<!--
   Hyperspace by HTML5 UP
   html5up.net | @ajlkn
   Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
   -->
<html>
   <head>
      <title>Moduli Asistentit</title>
      <link rel="icon" href="images/mobilelogo1.png">
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <noscript>
         <link rel="stylesheet" href="assets/css/noscript.css" />
      </noscript>
      <style>
         input[type="text"],
         input[type="password"],
         input[type="email"],
         select {
         height: 1.75em;
         }
         input[type="text"],
         input[type="password"],
         input[type="email"],
         input[type="tel"],
         select,
         textarea {
         width: 1.5em;
         padding: 0;
         margin: auto;
         }
         table {
         width: 90%;
         margin: auto;
         margin-top: 1%;
         margin-bottom: 1%;
         }
         table td {
         border: 1px black solid;
         margin: auto;
         white-space: nowrap;
         padding: 0.25em;
         vertical-align: middle;
         text-align: center;
         }
         table th {
         vertical-align: middle;
         white-space: nowrap;
         text-align: center;
         padding: 0.5em 0.5em;
         }
         .rotate {
         text-align: center;
         white-space: nowrap;
         vertical-align: middle;
         width: 1.5em;
         padding: 2em 0em;
         }
         .rotate div {
         -moz-transform: rotate(-90.0deg);
         -o-transform: rotate(-90.0deg);
         -webkit-transform: rotate(-90.0deg);
         filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);
         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)";
         }
         .thtabele{
         padding: 2em 0em;
         }
         .scroll {
         overflow-y: auto;
         width: 100%;
         height: 50%
         }
         .scroll::-webkit-scrollbar {
         width: 10px;
         height: 10px;
         }
         .scroll::-webkit-scrollbar-track {
         background: #f1f1f1; 
         }
         .scroll::-webkit-scrollbar-thumb {
         background: #aaa; 
         border-radius:50px;
         }
         .scroll::-webkit-scrollbar-thumb:hover {
         background: #888; 
         }
         .shark-1 {
         position: sticky;
         top: 0;
         }
         .page-container {
         position: relative;
         min-height: 100vh;
         }
         .content-wrap {
         padding-bottom: 2.5rem;    /* Footer height */
         }
         .footer {
         position: absolute;
         bottom: 0;
         width: -webkit-fill-available;
         height: 4.5rem;            /* Footer height */
         }
      </style>
   </head>
   <body class="is-preload">
      <!-- Header -->
      <div class="page-container">
         <div class="content-wrap">
            <?php include_once("Header.php"); ?>
            <section id="sidebar" class="menu" >
               <svg class='menu-logo' onclick="togglemenu()" fill="#fefefe" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">
                  <path d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z"/>
               </svg>
               <nav>
                  <?php
                     $result = mysqli_query($conn13,"CALL SelectMenyAss()");
                     while ($row = mysqli_fetch_assoc($result)) {
                     
                       extract($row);
                     $MenyB;
                     $MenyE;
                     $MenyA;
                     $Idet;
                     $Prezantimet;
                     $Vlersimi;
                     $Konfigurimet;
                     $Ckycu;
                     
                     
                     if($result==null)
                     mysqli_free_rezultati($result);
                     
                     }
                     ?>
                  <ul id="menuList">
                     <li><a  href="admin_home.php?id=<?php echo $id?>"><?php echo $MenyB ?></a></li>
                     <li><a href="lendaAsist.php?id=<?php echo $id?>"><?php echo $MenyE ?></a></li>
                     <li><a href="aktivitetiU.php?id=<?php echo $id?>"><?php echo $MenyA ?></a></li>
                     <li><a href="ideteEProjektit.php?id=<?php echo $id?>"><?php echo $Idet ?></a></li>
                     <li><a href="ListaPrezantimeve.php?id=<?php echo $id?>"><?php echo $Prezantimet ?></a></li>
                     <li><a href="vlersimifinal.php?id=<?php echo $id?>"><?php echo $Vlersimi ?></a></li>
                     <li><a href="../logout.php"><?php echo $Ckycu ?></a></li>
                  </ul>
               </nav>
            </section>
            <div id="wrapper">
               <section id="MenaxhimiPerdoruesve" style="overflow-y: auto; padding:5%;">
                  <h2 style="margin-bottom:5%"class="title">MENAXHO LISTËN E PREZENTIMEVE</h2>
                  <?php
                     if (isset($_GET['submit'])) {
                               $uid_ListaPrezantimeve = $_GET['uid_ListaPrezantimeve'];
                               $detyra1 = $_GET['detyra1'];
                               $detyra2 = $_GET['detyra2'];
                               $detyra3 = $_GET['detyra3'];
                               $detyra4 = $_GET['detyra4'];
                               $projekti = $_GET['projekti'];
                               $worddok = $_GET['worddok'];
                               $data_prezantimit = $_GET['data_prezantimit'];
                               $Komenti = $_GET['Komenti'];
                              
                               $query = mysqli_query($conn10,"UPDATE listaprezantimeve SET  
                               detyra1='$detyra1', detyra2='$detyra2', detyra3='$detyra3',detyra4='$detyra4',
                               projekti='$projekti',worddok='$worddok',data_prezantimit='$data_prezantimit',Komenti='$Komenti'
                               WHERE uid_ListaPrezantimeve=$uid_ListaPrezantimeve");
                           
                     }
                     
                     $id = $_REQUEST['id'];
                     
                     ?>
                  <div class="scroll">
                     <table class="alt" style="margin: 0%;">
                        <form action="ListaPrezantimeve.php?id=<?php echo $id ?>" method="post" style="width: 90%; ">
                           <div class="row gtr-uniform" style="  display: flex; flex-direction: row;">
                              <div  class="col-12"  style="display: flex; justify-content: center; flex-direction: row; border-bottom:solid 1px rgba(0, 0, 0, 0.15); padding-bottom: 1.5em;	 border-top:solid 1px rgba(0, 0, 0, 0.15); align-items: center;">
                                 Shkruaj:
                                 <input type="text" name="term" value="%"  placeholder="" style="margin-left: 1em; margin-right: 1em; width:15em;"/>
                                 <ul class="actions"  style="display: flex; justify-content: center;	align-items: center;">
                                    <li><input type="submit" value="Kërko" class="primary" /></li>
                                 </ul>
                              </div>
                           </div>
                        </form>
                        <thead class="shark-1" style="background-color: #fff;">
                           <?php
                              echo"<th>ID</th>";
                              echo"<th>Emri</th>";
                              echo"<th>Mbiemri</th>";
                              echo"<th>Titulli i Projektit</th>";
                              
                              echo"<th>Detyra 1</th>";
                              echo"<th>Detyra 2</th>";
                              echo"<th>Detyra 3</th>";
                              echo"<th>Detyra 4</th>";
                              echo"<th>Projekti</th>";
                              echo"<th>Worddok</th>";
                              echo"<th>Data Prezantimit</th>";
                              echo"<th>Komenti</th>";
                              
                              
                              echo"<th>Modifiko</th>";
                              
                              
                              echo"</thead>";
                              if (!empty($_REQUEST['term'])) {
                              $term = mysqli_real_escape_string($conn,$_REQUEST['term']);     
                              
                              $query1 = mysqli_query($conn10,"SELECT
                              p.`uid_ListaPrezantimeve`,
                              p.uid,
                              p.`uid_IdetEProjekteve`,
                              p.`uid_lenda`,
                              p.`detyra1`,
                              p.`detyra2`,
                              p.`detyra3`,
                              p.`detyra4`,
                              l.lenda,
                              p.`projekti`,
                              p.`worddok`,
                              p.`data_prezantimit`,
                              d.`Aprovim/Refuzim`,
                              d.uid_Detyrat,
                              s.uid_Student,
                              s.username,
                              s.mbiemri,
                              k.TitulliProjektit,
                              p.Komenti
                              FROM
                              `listaprezantimeve` p
                              INNER JOIN
                              users s ON p.uid = s.uid  
                              LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
                              LEFT OUTER JOIN `detyrat` d ON p.detyra1 = d.uid_Detyrat 
                              LEFT OUTER JOIN `ideteprojekteved1` k ON p.uid_IdetEProjekteve = k.uid_IdetEProjekteve 
                              WHERE l.uid_lenda = '$id' and  s.username LIKE '%".$term."%' ORDER BY s.username ASC");
                              while ($row1 = mysqli_fetch_array($query1)) {
                              echo"	<form class='form' method='get'>";
                              
                              echo"<input class='input' type='hidden' name='uid_ListaPrezantimeve' value='{$row1['uid_ListaPrezantimeve']}' />";
                              echo"<input class='input' type='hidden' name='id' value='{$id}' />";
                                
                              echo"<input type='hidden'  name='data_prezantimit'   value='{$row1['data_prezantimit']}'  />";
                              
                              echo"<td>{$row1['uid_Student']}</td>";
                                      echo"<td>{$row1['username']}</td>";
                                      echo"<td>{$row1['mbiemri']}</td>";
                                      echo"<td>{$row1['TitulliProjektit']}</td>";
                              
                                   
                              $Aprovim = $row1['Aprovim/Refuzim'];
                              $detyra1 = $row1['detyra1'];
                              $uid_Detyrat = $row1['uid_Detyrat'];
                              $detyra2 = $row1['detyra2'];
                              $detyra3 = $row1['detyra3'];
                              $detyra4 = $row1['detyra4'];
                              $projekti = $row1['projekti'];
                              $worddok = $row1['worddok'];
                              $Komenti = $row1['Komenti'];
                              $data_prezantimit = $row1['data_prezantimit'];

                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='detyra1' style='width: 5em;'>";
                              echo"<option value='$detyra1'  >{$row1['Aprovim/Refuzim']}</option>";
                              if($row1['uid_Detyrat'] == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($row1['uid_Detyrat'] == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";

                              
                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='detyra2' style='width: 5em;'>";
                              if($detyra2 == 1) {
                                 echo"<option value='$detyra2' selected='selected'>PO</option>";
                                 } else if($detyra2 == 2){
                                   echo"<option value='$detyra2' selected='selected'>JO</option>";
                                 }
                              if($detyra2 == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($detyra2 == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";


                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='detyra3' style='width: 5em;'>";
                              if($detyra3 == 1) {
                                 echo"<option value='$detyra3' selected='selected'>PO</option>";
                                 } else if($detyra3 == 2){
                                   echo"<option value='$detyra3' selected='selected'>JO</option>";
                                 }
                              if($detyra3 == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($detyra3 == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";


                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='detyra4' style='width: 5em;'>";
                              if($detyra4 == 1) {
                                 echo"<option value='$detyra4' selected='selected'>PO</option>";
                                 } else if($detyra4 == 2){
                                   echo"<option value='$detyra4' selected='selected'>JO</option>";
                                 }
                              if($detyra4 == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($detyra4 == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";


                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='projekti' style='width: 5em;'>";
                              if($projekti == 1) {
                                 echo"<option value='$projekti' selected='selected'>PO</option>";
                                 } else if($projekti == 2){
                                   echo"<option value='$projekti' selected='selected'>JO</option>";
                                 }
                              if($projekti == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($projekti == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";



                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='worddok' style='width: 5em;'>";
                              if($worddok == 1) {
                                 echo"<option value='$worddok' selected='selected'>PO</option>";
                                 } else if($worddok == 2){
                                   echo"<option value='$worddok' selected='selected'>JO</option>";
                                 }
                              if($worddok == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($worddok == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";


                              
                              
                              
                              
                              
                              echo"<td><input type='datetime-local'  name='data_prezantimit'   value='$data_prezantimit'  /> $data_prezantimit</td>";

                              
                              ?>
                              <td><textarea type="text"  name="Komenti"  value="<?php $Komenti ?>"><?php echo $Komenti?></textarea></td>
                              <?php
                              echo"<input type='hidden'  name='uid_lenda'  size='1' maxlength='1'  value='{$row1['uid_lenda']}'  />";
                              
                              echo "<td><input class='button primary' type='submit' name='submit' value='MODIFIKO' /></td>";
                              
                              echo"</tr>";
                              
                              	
                              echo "</form>";
                                  }
                                }else if (empty($_REQUEST['term'])){
                              $query1 = mysqli_query($conn10,"SELECT
                              p.`uid_ListaPrezantimeve`,
                              p.uid,
                              p.`uid_IdetEProjekteve`,
                              p.`uid_lenda`,
                              p.detyra1,
                              p.`detyra2`,
                              p.`detyra3`,
                              p.`detyra4`,
                              l.lenda,
                              p.`projekti`,
                              p.`worddok`,
                              p.`data_prezantimit`,
                              d.`Aprovim/Refuzim`,
                              d.uid_Detyrat,
                              s.uid_Student,
                              s.username,
                              s.mbiemri,
                              k.TitulliProjektit,
                              p.Komenti
                              FROM
                              `listaprezantimeve` p
                              INNER JOIN
                              users s ON p.uid = s.uid  
                              LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
                              LEFT OUTER JOIN `detyrat` d ON p.detyra1 = d.uid_Detyrat 
                              LEFT OUTER JOIN `ideteprojekteved1` k ON p.uid_IdetEProjekteve = k.uid_IdetEProjekteve 
                              WHERE l.uid_lenda = '$id' ORDER BY s.username ASC");
                              while ($row1 = mysqli_fetch_array($query1)) {
                              echo"	<form class='form' method='get'>";
                              
                              echo"<input class='input' type='hidden' name='uid_ListaPrezantimeve' value='{$row1['uid_ListaPrezantimeve']}' />";
                              echo"<input class='input' type='hidden' name='id' value='{$id}' />";
                              
                              echo"<input type='hidden'  name='data_prezantimit'   value='{$row1['data_prezantimit']}'  />";
                              
                              echo"<td>{$row1['uid_Student']}</td>";
                              echo"<td>{$row1['username']}</td>";
                              echo"<td>{$row1['mbiemri']}</td>";
                              echo"<td>{$row1['TitulliProjektit']}</td>";
                              
                        



                              
                              $Aprovim = $row1['Aprovim/Refuzim'];
                              $detyra1 = $row1['detyra1'];
                              $uid_Detyrat = $row1['uid_Detyrat'];
                              $detyra2 = $row1['detyra2'];
                              $detyra3 = $row1['detyra3'];
                              $detyra4 = $row1['detyra4'];
                              $projekti = $row1['projekti'];
                              $worddok = $row1['worddok'];
                              $Komenti = $row1['Komenti'];
                              $data_prezantimit = $row1['data_prezantimit'];
                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='detyra1' style='width: 5em;'>";
                              echo"<option value='$detyra1'  >{$row1['Aprovim/Refuzim']}</option>";
                              if($row1['uid_Detyrat'] == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($row1['uid_Detyrat'] == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";

                              
                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='detyra2' style='width: 5em;'>";
                              if($detyra2 == 1) {
                                 echo"<option value='$detyra2' selected='selected'>PO</option>";
                                 } else if($detyra2 == 2){
                                   echo"<option value='$detyra2' selected='selected'>JO</option>";
                                 }
                              if($detyra2 == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($detyra2 == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";


                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='detyra3' style='width: 5em;'>";
                              if($detyra3 == 1) {
                                 echo"<option value='$detyra3' selected='selected'>PO</option>";
                                 } else if($detyra3 == 2){
                                   echo"<option value='$detyra3' selected='selected'>JO</option>";
                                 }
                              if($detyra3 == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($detyra3 == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";


                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='detyra4' style='width: 5em;'>";
                              if($detyra4 == 1) {
                                 echo"<option value='$detyra4' selected='selected'>PO</option>";
                                 } else if($detyra4 == 2){
                                   echo"<option value='$detyra4' selected='selected'>JO</option>";
                                 }
                              if($detyra4 == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($detyra4 == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";


                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='projekti' style='width: 5em;'>";
                              if($projekti == 1) {
                                 echo"<option value='$projekti' selected='selected'>PO</option>";
                                 } else if($projekti == 2){
                                   echo"<option value='$projekti' selected='selected'>JO</option>";
                                 }
                              if($projekti == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($projekti == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";



                              echo "<td>";
                              $query2 = mysqli_query($conn10, "SELECT
                              *
                              FROM
                              `detyrat`");
                              echo "<select name='worddok' style='width: 5em;'>";
                              if($worddok == 1) {
                                 echo"<option value='$worddok' selected='selected'>PO</option>";
                                 } else if($worddok == 2){
                                   echo"<option value='$worddok' selected='selected'>JO</option>";
                                 }
                              if($worddok == 1) {
                                 while ($row1 = $query2->fetch_array()) {
                                    echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                    echo "</option>";
                                 }
                                 } else if($worddok == 2){
                                    while ($row1 = $query2->fetch_array()) {
                                       echo "<option value='{$row1['uid_Detyrat']}'>{$row1['Aprovim/Refuzim']}";
                                       echo "</option>";
                                    }
                                 }
                              echo " </select>";
                              echo "</td>";

                                 echo"<td><input type='datetime-local'  name='data_prezantimit'   value='$data_prezantimit'  required/> $data_prezantimit</td>";
                                 
                              
                              ?>
                              <td><textarea type="text"  name="Komenti"  value="<?php $Komenti ?>"><?php echo $Komenti?></textarea></td>
                              <?php
                              echo"<input type='hidden'  name='uid_lenda'  size='1' maxlength='1'  value='{$row1['uid_lenda']}'  />";
                              
                              echo "<td><input class='button primary' type='submit' name='submit' value='MODIFIKO' /></td>";
                              
                              echo"</tr>";
                              
                              	
                              echo "</form>";
                              }
                                    }
                              ?>
                           </tbody>
                     </table>
                  </div>
                  <div style="display: flex; align-items: center; justify-content: center;">
                     <form action="ListaPrezantimeve.php?idSH=<?php $idSH?>" style="margin: 3%;"  method="get">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit" name="checkvisibility" class="button primary"style="margin-left: 2%;" value="<?php		
                           $query1 = mysqli_query($conn10, "SELECT shfaq FROM listaprezantimeve  WHERE shfaq=0"); 
                           													$idSH = 0;
                           													echo "SHFAQ"
                           													?>" />														
                     </form>
                     <form action="ListaPrezantimeve.php?idSH=<?php $idSH1?>" style="margin: 3%;" method="get">
                        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                        <input type="submit"  name="checkvisibility1" class="button primary" style="margin-left: 15%;" value="<?php
                           $query = mysqli_query($conn10, "SELECT shfaq FROM listaprezantimeve  WHERE shfaq = 1");
                           $idSH1 = 0;
                           													echo "HIQE";
                           													?>" />
                     </form>
                  </div>
                  <?php
                     if(isset($_GET['checkvisibility'])){
                     	$checkvisibility = $_GET['checkvisibility'];
                     		$result = mysqli_query($conn10, "UPDATE listaprezantimeve set shfaq = 1 WHERE  shfaq = 0"); 
                         echo "<p style='text-align:center; border:red; border-radius:10px; color:white; margin:auto; height:1.7em; width:27em; background-color:#09C32E;'>
                             Lista është duke u shfaqur tek Profesori dhe Studenti!</p>";
                     }
                     if(isset($_GET['checkvisibility1'])){
                     	$checkvisibility = $_GET['checkvisibility1'];
                     		$result = mysqli_query($conn10, "UPDATE listaprezantimeve set shfaq = 0 WHERE  shfaq = 1"); 
                         echo "<p style='text-align:center; border:red; border-radius:10px; color:white; margin:auto; height:1.7em; width:27em; background-color:#CF2D0C;'>
                             Lista nuk është duke u shfaqur tek Profesori dhe Studenti!</p>";
                     }
                     ?>
            </div>
            </section>
         </div>
         <footer class="footer"><?php include_once("footer.php"); ?></footer>
      </div>
      <!-- Scripts -->
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrollex.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/browser.min.js"></script>
      <script src="assets/js/breakpoints.min.js"></script>
      <script src="assets/js/util.js"></script>
      <script src="assets/js/main.js"></script>
      <script src="assets/js/menuscript.js"></script>
   </body>
</html>