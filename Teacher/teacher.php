<!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Student Review</title>
     <link rel="stylesheet" href="teacher.css">
     <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   </head>


   <body>
       <div class="myForm">
           <div class="myBorder">
             <a href="ChangeSetting.html" id="ChangeSettingsButton">Change Settings</a>
             <form action="../Inlogpagina/index.php" method= "POST">
             
             <button id="LogOutButton">Log Out</button>
             </form>
             
             

             <h1>Student Wellness</h1>
             <h2>My classes</h2>

             <div id="piechart" style="width: 40vw; height: 45vh;"></div>
             <div id="buttonSpacing">

                 <button id="classBtn1">Class 1</button>
                 <button id="classBtn2">Class 2</button>
                 <button id="classBtn3">Class 3</button>
                 <button id="classBtn4">Class 4</button>
                 <button id="classBtn5">Class 5</button>
                 <button id="classBtn6">Class 6</button>


                 <br>

                 <table id="table1" style="width:100% display: none">
                   <tr>
                     <th>Studentid</th>
                     <th>Firstname</th>
                     <th>Lastname</th>
                   </tr>
                   <tr>
                     <td>1111</td>
                     <td>Mark</td>
                     <td>Bijl</td>
                   </tr>
                 </table>


                 <table id="table2" style="width:100%; display: none">
                   <tr>
                     <th>Studentid</th>
                     <th>Firstname</th>
                     <th>Todays score</th>
                     <th>One week avg</th>
                     <th>Two weeks avg</th>
                   </tr>
                   <tr>
                       <td>6969</td>
                     <td>Mehran</td>
                     <td>(convert to color(5))</td>
                     <td>(convert to color(Fetch from database))</td>
                     <td>(convert to color(Fetch from database))</td>
                   </tr>
                 </table>
               </div>
               <button type="button" id="ExitButton">Exit</button>
               
           </div>
       </div>
       <script src="chart.js"></script>
       <script>
       // Action listener for button 1
       document.getElementById("classBtn1").addEventListener("click", function()
       {
       document.getElementById("table1").style.display = "block";
       document.getElementById("table2").style.display = "none";
       });
       // Action listener for button 2
       document.getElementById("classBtn2").addEventListener("click", function()
       {
       document.getElementById("table1").style.display = "none";
       document.getElementById("table2").style.display = "block";
       });
       </script>
   </body>
 </html>
