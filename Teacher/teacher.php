<?php include "../Inlogpagina/DBconn.php";



 $query = "SELECT happiness, studentId FROM moods";

// $query = "SELECT student.firstName, moods.happiness
// FROM student
// FULL OUTER JOIN moods ON student.studentId = moods.studentId
// moods BY student.firstName";

//$query = "SELECT happiness, studentId, student.firstName FROM moods INNER JOIN student ON student.studentId = moods.studentId";

$result = $db->query($query);

if ($result ->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo " Student wellness: " . $row["happiness"]. " " .  $row["studentId"];//. " " . $row["student.firstName"]. "<br>";
  }
} else {
 trigger_error('Invalid Query: ' . $db->error);
}



 ?>





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


       <!-- <div class="myBorder"> -->

             <form action="../Student/logout.php" method= "POST">


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


                  <div id = "table_slot"></div>


                 <table id="table1" style="width:100%; display: none">
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



       data = [[1, 'Mehran','Juan',4.5], [2, 'Mark','Jose',4]]

       var table = document.createElement('TABLE')
       table.id = 'table'
       table.style.color= 'red'

       for(var student = 0; student < data.length; student++) {
         var row = document.createElement('TR');
         row.class = 'student-row';

         var studentid = document.createElement('TD');
         studentid.innerHTML = data[student][0];
         row.appendChild(studentid);

         var first_name = document.createElement('TD');
         first_name.innerHTML = data[student][1];
         row.appendChild(first_name);

         var last_name = document.createElement('TD');
         last_name.innerHTML = data[student][2];
         row.appendChild(last_name);

         var average_happiness = document.createElement('TD');
         avg_happiness = data[student][3];
         average_happiness.innerHTML = avg_happiness
         row.appendChild(average_happiness);
         avg_happiness--;
         color = "rgb("+255*((4-avg_happiness)/4) +", " + 255*(avg_happiness/4) + ", 0)"
         average_happiness.style.color = color
        table.appendChild(row);

       }

       document.getElementById('table_slot').appendChild(table);

       </script>
   </body>
 </html>
