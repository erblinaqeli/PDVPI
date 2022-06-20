<?php
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
      <title>Moduli Studentit</title>
      <link rel="icon" href="images/mobilelogo1.png">
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
      <link rel="stylesheet" href="assets/css/main.css" />
      <noscript>
         <link rel="stylesheet" href="assets/css/noscript.css" />
      </noscript>
      <style>
         input[type="text"], input[type="password"], input[type="email"], select {
         height: 1.75em;
         }
         input[type="text"], input[type="password"], input[type="email"], input[type="tel"], select, textarea {
         width: 70%;
         padding: 0;
         margin: auto;
         }
         table{
         width: 90%;
         margin: auto;
         margin-top: 1%;
         margin-bottom: 1%;
         }
         table td {
         border: 1px black solid;
         padding: 0.25em;
         margin: auto;
         white-space: nowrap;
         vertical-align: middle;
         text-align: center;
         }
         table th{
         vertical-align: middle;
         white-space: nowrap;
         text-align: center;
         padding: 1.7em 0em;
         vertical-align: middle;
         }
         .rotate {
         text-align: center;
         white-space: nowrap;
         vertical-align: middle;
         width: 1.5em;
         }
         .rotate div {
         -moz-transform: rotate(-90.0deg); 
         -o-transform: rotate(-90.0deg);  
         -webkit-transform: rotate(-90.0deg);  
         filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083); 
         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
         }
         .scroll {
         overflow-y: auto;
         width: 100%;
         height: 20em
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
         mark{
         background-color: orange;
         color: black;
         }
      </style>
   </head>
   <body class="is-preload">
      <!-- Header -->
      <div id="page-container">
         <div id="content-wrap">
            <?php include_once("Header.php"); ?>
            <section id="sidebar" class="menu" >
               <svg class='menu-logo' onclick="togglemenu()" fill="#fefefe" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">
                  <path d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z"/>
               </svg>
               <nav>
                  <?php
                     $result = mysqli_query($conn39,"CALL SelektoMenyStud()");
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
                     <li><a class='links-style' href="admin_home.php"><?php echo $MenyB ?></a></li>
                     <li><a class='links-style' href="lendaStud.php?id=<?php echo $id?>"><?php echo $MenyE ?></a></li>
                     <li><a class='links-style' href="aktiviteti.php?id=<?php echo $id?>"><?php echo $MenyA ?></a></li>
                     <li><a class='links-style' href="ideteEProjektit.php?id=<?php echo $id?>"><?php echo $Idet ?></a></li>
                     <li><a class='links-style' href="ListaPrezantimeve.php?id=<?php echo $id?>"><?php echo $Prezantimet ?></a></li>
                     <li><a class='links-style' href="vlersimifinal.php?id=<?php echo $id?>"><?php echo $Vlersimi ?></a></li>
                     <li><a class='links-style' href="../logout.php"><?php echo $Ckycu ?></a></li>
                  </ul>
               </nav>
            </section>
            <div id="wrapper">
               <section id="MenaxhimiPerdoruesve" style="overflow-y: auto;  padding: 5%;">
                  <h2 style="margin-bottom:5%"class="title">LISTA E PREZENTIMEVE</h2>
                  <?php 
                     $result2 = mysqli_query($conn37, "CALL SelectShfaqListenEPrezantimeve($id)"); //na nevoitet ne query
                     // rreshtat qe jane me 1 per tu shfaqur
                     $rowcount = mysqli_num_rows($result2);
                     // nese ka rreshta
                     if ($rowcount > 0) {
                     
                     
                     
                     ?>
                  <div class="scroll">
                     <table class="alt" style="width: 20%; margin: auto;">
                        <thead class="shark-1" style="background-color: #fff;">
                           <tr>
                              <th name="ID" id="ID" >
                                 <div>ID</div>
                              </th>
                              <th  name="Emri" id="Emri" >
                                 <div>Emri</div>
                              </th>
                              <th  name="Mbiemri" id="Mbiemri" >
                                 <div>Mbiemri</div>
                              </th>
                              <th class='rotate'   rowspan='4' name="TitulliProjektit" id="TitulliProjektit" >Titulli</th>
                              <th class='rotate'   rowspan='4' name="lenda" id="lenda" >
                                 <div>Detyra 1</div>
                              </th>
                              <th class='rotate'   rowspan='4' name="lenda" id="lenda" >
                                 <div>Detyra 2</div>
                              </th>
                              <th class='rotate'   rowspan='4' name="lenda" id="lenda" >
                                 <div>Detyra 3</div>
                              </th>
                              <th class='rotate'   rowspan='4' name="lenda" id="lenda" >
                                 <div>Detyra 4</div>
                              </th>
                              <th class='rotate'   rowspan='4' name="projekti" id="projekti" >
                                 <div>Projekti</div>
                              </th>
                              <th class='rotate'   rowspan='4' name="worddok" id="worddok" >
                                 <div>Word Dok</div>
                              </th>
                              <th  name="worddok" id="worddok" >
                                 <div>Data Prezantimit</div>
                              </th>
                              <th  name="Komenti" id="Komenti" >
                                 <div>Komenti</div>
                              </th>
                           </tr>
                        </thead>
                        <form class='form' method='get'>
                        <?php
                           $id = $_REQUEST['id'];
                           // 				SELECT
                                   // p.`uid_ListaPrezantimeve`,
                                   // p.uid,
                                   // p.`uid_IdetEProjekteve`,
                                   // p.`uid_lenda`,
                                   // p.`detyra1`,
                                   // p.`detyra2`,
                                   // p.`detyra3`,
                                   // p.`detyra4`,
                                   // l.lenda,
                                   // p.`projekti`,
                                   // p.`worddok`,
                                   // p.`data_prezantimit`,
                                   // d.`Aprovim/Refuzim`,
                                   // s.uid_Student,
                                   // s.username,
                                   // s.mbiemri,
                           // k.TitulliProjektit,
                           // p.Komenti
                                   // FROM
                                   //  `listaprezantimeve` p
                                   // INNER JOIN
                                   // users s ON p.uid = s.uid  
                                   // LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
                                   //   LEFT OUTER JOIN `detyrat` d ON p.detyra1 = d.uid_Detyrat 
                                   //   LEFT OUTER JOIN `ideteprojekteved1` k ON p.uid_IdetEProjekteve = k.uid_IdetEProjekteve 
                                   // WHERE l.uid_lenda = '$id'
                           
                           
                           $result = mysqli_query($conn31,"CALL SelectListenPrezantimeve($id)" );//na nevoitet ne query
                           
                           
                           while($row = mysqli_fetch_array($result)) {
                           	
                           	echo "<tr>";
                           	$stud = $row['email'];
                                           if($stud == $login_user)
                                           {
                           echo"<td><mark>{$row['uid_Student']}</mark></td>";
                           echo"<td><mark>{$row['username']}</mark></a></td>";
                           echo"<td><mark>{$row['mbiemri']}</mark></td>";
                           echo"<td>{$row['TitulliProjektit']}</td>";
                           if($row['detyra1'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           if($row['detyra2'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           if($row['detyra3'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           if($row['detyra4'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           if($row['projekti'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           if($row['worddok'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           
                           
                           echo"<td>{$row['data_prezantimit']}</td>";
                           }else {
                           echo"<td>{$row['uid_Student']}</td>";
                           echo"<td>{$row['username']}</a></td>";
                           echo"<td>{$row['mbiemri']}</td>";
                           echo"<td>{$row['TitulliProjektit']}</td>";
                           if($row['detyra1'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           if($row['detyra2'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           if($row['detyra3'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           if($row['detyra4'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           if($row['projekti'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           if($row['worddok'] == 1) {
                           echo"<td>PO</td>";
                           } else {
                           echo"<td>JO</td>";
                           }
                           
                           
                           echo"<td>{$row['data_prezantimit']}</td>";
                           }
                           	
                           
                           	?>
                        <td><textarea type="text"  name="Komenti" style="width: 10em; height:1.7em;" readonly><?php echo $row['Komenti'] ?></textarea></td>
                        <?php
                           }
                           ?>
                 
                  </div>
                  <?php
                     } else{
                     	echo "<p style='text-align:center; border:red; border-radius:10px; color:white; margin:auto; height:1.7em; width:23em; background-color:#CF2D0C;'>
                                              Lista nuk është shfaqur akoma nga Asistenti!</p>";
                     
                     }
                     
                     ?>
                
                  </table>
					</div>
                  <div style="text-align: center; padding-top: 5%;">
                     <?php 				echo"<a class='button primary' href=\"export_excelListaP.php?id=$id\">Export Listen e Prezantimeve</a>"; ?>
                  </div>
               </section>
            </div>
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