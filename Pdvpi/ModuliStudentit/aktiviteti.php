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
      <title>Moduli Studentit</title>
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
         padding: 0em 0.5em;
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
         height: 12em
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
      <div id="page-container">
         <div id="content-wrap">
            <?php include_once("Header.php"); ?>
            <section id="sidebar" class="menu" >
               <svg class='menu-logo' onclick="togglemenu()" fill="#fefefe" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 24 24" width="24px" height="24px">
                  <path d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z"/>
               </svg>
               <nav>
                  <?php
                     $result = mysqli_query($conn40,"CALL SelektoMenyStud()");
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
               <section id="MenaxhimiPerdoruesve" style="overflow-y: auto; padding: 5%;">
                  <h2 style="margin-bottom:5%"class="title">AKTIVITETI</h2>
                  <div class="scroll">
                     <table class="alt" style="width: 20%; margin: 0%; ">
                        <thead class="shark-1" style="background-color: #fff;">
                           <tr>
                              <th>Evidenca</th>
                              <th>ID</th>
                              <th>Emri</th>
                              <th>Mbiemri</th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 1</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 2</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 3</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 4</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 5</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 6</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 7</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 8</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 9</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 10</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 11</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 12</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 13</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 14</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Java 15</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Piket</div>
                              </th>
                              <th  class='rotate'rowspan="4">
                                 <div>Totali</div>
                              </th>
                           </tr>
                        </thead>
                        <form class='form' method='get'>
                        <?php
                           $id = $_REQUEST['id'];
                           // SELECT
                           // p.uid_aktivitetil,
                           // p.uid,
                           // p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,p.Java15,p.TotalAL,p.Piket,
                           // s.uid_Student,
                           // s.username,
                           // s.email,
                           // s.mbiemri,
                           // l.lenda
                           // FROM
                           //  `aktivitetil` p
                           // INNER JOIN
                           // users s ON p.uid = s.uid  
                           // 	LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
                           
                           	
                           // WHERE l.uid_lenda = '$id' and s.email = '$login_user' 
                           
                           
                           $result = mysqli_query($conn17,"CALL SelectAktivitetinL('$login_user',$id);" );
                           
                           
                           while($row = mysqli_fetch_array($result)) {
                           	echo "<tr>";
                           	echo"<td>Ligjeratë</td>";
                           
                           	echo"<td>{$row['uid_Student']}</td>";
                           	echo"<td>{$row['username']}</td>";
                           	echo"<td>{$row['mbiemri']}</td>";
                           	echo"<td>{$row['Java1']}</td>";
                           	echo"<td>{$row['Java2']}</td>";
                           	echo"<td>{$row['Java3']}</td>";
                           	echo"<td>{$row['Java4']}</td>";
                           	echo"<td>{$row['Java5']}</td>";
                           	echo"<td>{$row['Java6']}</td>";
                           	echo"<td>{$row['Java7']}</td>";
                           	echo"<td>{$row['Java8']}</td>";
                           	echo"<td>{$row['Java9']}</td>";
                           	echo"<td>{$row['Java10']}</td>";
                           	echo"<td>{$row['Java11']}</td>";
                           	echo"<td>{$row['Java12']}</td>";
                           	echo"<td>{$row['Java13']}</td>";
                           	echo"<td>{$row['Java14']}</td>";
                           	echo"<td>{$row['Java15']}</td>";
                           	echo"<td>{$row['Piket']}</td>";
                           	echo"<td>{$row['TotalAL']}</td>";
                           }
                           ?> 
                        <!-- pjesa dyte  -->
                        <?php
                           $id = $_REQUEST['id'];
                           
                           // SELECT
                           // p.uid_aktivitetiu,
                           // p.uid,
                           // p.Java1,p.Java2, p.Java3,p.Java4,p.Java5,p.Java6,p.Java7,p.Java8,p.Java9,p.Java10,p.Java11,p.Java12,p.Java13,p.Java14,p.Java15,p.TotalAU,p.Piket,
                           // s.uid_Student,
                           // s.username,
                           // s.email,
                           // s.mbiemri,
                           // l.lenda
                           // FROM
                           //  `aktivitetiu` p
                           // INNER JOIN
                           // users s ON p.uid = s.uid  
                           // 	LEFT OUTER JOIN `lendet` l ON p.uid_lenda = l.uid_lenda 
                           
                           	
                           // WHERE l.uid_lenda = '$id' and s.email = '$login_user' 
                           
                           $result = mysqli_query($conn18,"CALL SelectAktivitetinU($id,'$login_user')" );
                           
                           
                           while($row = mysqli_fetch_array($result)) {
                           	echo "<tr>";
                           	echo"<td>Ushtrime</td>";
                           
                           	echo"<td>{$row['uid_Student']}</td>";
                           	echo"<td>{$row['username']}</td>";
                           	echo"<td>{$row['mbiemri']}</td>";
                           	echo"<td>{$row['Java1']}</td>";
                           	echo"<td>{$row['Java2']}</td>";
                           	echo"<td>{$row['Java3']}</td>";
                           	echo"<td>{$row['Java4']}</td>";
                           	echo"<td>{$row['Java5']}</td>";
                           	echo"<td>{$row['Java6']}</td>";
                           	echo"<td>{$row['Java7']}</td>";
                           	echo"<td>{$row['Java8']}</td>";
                           	echo"<td>{$row['Java9']}</td>";
                           	echo"<td>{$row['Java10']}</td>";
                           	echo"<td>{$row['Java11']}</td>";
                           	echo"<td>{$row['Java12']}</td>";
                           	echo"<td>{$row['Java13']}</td>";
                           	echo"<td>{$row['Java14']}</td>";
                           	echo"<td>{$row['Java15']}</td>";
                           	echo"<td>{$row['Piket']}</td>";
                           	echo"<td>{$row['TotalAU']}</td>";
                           	
                           
                           	
                           }
                           ?>
                        <!-- deriqetu  -->
                     </table>
                     </table>
                  </div>
                  <div style="text-align: center; padding-top: 5%;">
                     <?php 				echo"<a class='button primary' href=\"export_excelAktivitetinLU.php?id=$id\">Export Aktivitetin</a>"; ?>
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