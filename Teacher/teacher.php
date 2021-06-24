<?php include "../Inlogpagina/DBconn.php";


$query = "SELECT firstName, studentId, classId, moods.happiness AS happiness, moods.student_explanation AS explanation FROM student INNER JOIN moods USING (studentId)";


$result = $db->query($query);

if ($result ->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo "<div class='studentdata'>";
    echo $row["studentId"]. "-" .  $row["firstName"]. "-" . $row["classId"]. "-" . $row["happiness"]. "-" . $row["explanation"];
    echo "</div>";
  }
} else {
  echo "0 results";
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

             <form action="../Student/logout.php" method= "POST">
             <button id="LogOutButton">Log Out</button>
             </form>



             <h1>Student Wellness</h1>
             <h2>My classes</h2>

             <div id="piechart" style="width: 40vw; height: 45vh;"></div>
             <div id="buttonSpacing" style="display: flex; justify-content: center">

                 <button id="classBtn1">Class 1</button>
                 <button id="classBtn2">Class 2</button>
                 <button id="classBtn3">Class 3</button>
                 <button id="classBtn4">Class 4</button>
                 <button id="classBtn5">Class 5</button>
                 <button id="classBtn6">Class 6</button>

               </div>


                <style>
                  table, th, td {

                  border: 1px solid black;
                  border-collapse: collapse;
                }
                </style>

                  <div>
                    <table id = "table_slot">
                        <th>ID</th>
                        <th>First name</th>
                        <th>Today</th>
                        <th>14 days</th>
                        <th>Message</th>
                    </table>
  <!-- This is the spot for the table -->
                  </div>
                  <br>


               <button type="button" id="ExitButton">Exit</button>

           </div>
       </div>
       <script src="chart.js"></script>
       <script>


       // Action listener for buttons
       for (var i = 1; i <= 6; i++) {
         document.getElementById("classBtn"+i).addEventListener("click", function()
         {
           table.innerHTML= header;
           insertInfo(i);
         });
       }

       let data = [];
       let studentdata = document.getElementsByClassName('studentdata');
       for (let i = 0 ; i < studentdata.length ; i++) {
         data.push(studentdata[i].innerHTML.split("-"));

         // TODO: Activate this line so data disappears from screen
         // studentdata[i].innerHTML = null;
       }
       console.log(data[1][0]);


// DATA WEER UITZETTEN NA HET TESTEN !!!!!!
       data = [[1, 'Mehran',5,4.5,'Im a boss'], [2, 'Mark',4.5, 4, 'Absolutely splendid']];
       data2 =[[3, 'Serferaaz', 'Jefe', 3],[4, 'Class', '3', 3.5]];
// id firstname today 14 days Message



       // Class 1 - Table starts here
       var table = document.getElementById("table_slot");
       var header = table.innerHTML;
       table.innerHTML='';
       // table.id = 'table1';

       console.log(header);
      function insertInfo (classId){

       for(var student = 0; student < data.length; student++) {

         // Start TR
         var row = document.createElement('TR');
         row.class = 'student-row';

         var studentid = document.createElement('TD');
         studentid.innerHTML = data[student][0];
         row.appendChild(studentid);

         var first_name = document.createElement('TD');
         first_name.innerHTML = data[student][1];
         row.appendChild(first_name);

         // var last_name = document.createElement('TD');
         // last_name.innerHTML = data[student][2];
         // row.appendChild(last_name);
         var average_happiness = document.createElement('TD');
         avg_happiness = data[student][2];
         average_happiness.innerHTML = avg_happiness
         row.appendChild(average_happiness);
         avg_happiness--;
         color = "rgb("+255*((4-avg_happiness)/4) +", " + 255*(avg_happiness/4) + ", 0)"
         average_happiness.style.color = color


         var average_happiness = document.createElement('TD');
         avg_happiness = data[student][3];
         average_happiness.innerHTML = avg_happiness
         row.appendChild(average_happiness);
         avg_happiness--;
         color = "rgb("+255*((4-avg_happiness)/4) +", " + 255*(avg_happiness/4) + ", 0)"
         average_happiness.style.color = color
        table.appendChild(row);


               // // hier bezig

                 var explanation = document.createElement('TD');
                 explanation.innerHTML= data[student][4];
                 row.appendChild(explanation);

                 // hier niet meer

       }
       // document.getElementById('table_slot').appendChild(table);
}
       // Class 1 table ends here


      table_slot.style.background = 'white'
      table_slot.style.width = '100%'

       </script>
   </body>
 </html>
