
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
          <h2>My classes</h2><br>

          <div id="piechart" style="width: 40vw; height: 45vh;"></div>
          <div id="buttonSpacing" style="display: flex; justify-content: center">

            <button  id="Class 1" class="classBtn1">Class 1</button>
            <button  id="Class 2" class="classBtn2">Class 2</button>
            <button  id="Class 3" class="classBtn3">Class 3</button>
            <button  id="Class 4" class="classBtn4">Class 4</button>
            <button  id="Class 5" class="classBtn5">Class 5</button>
            <button  id="Class 6" class="classBtn6">Class 6</button>

          </div>


          <style>
            table, th, td {

              border: 1px solid black;
              border-collapse: collapse;
              text-align: center;
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
 
            </div> <br>
             


                <form action="../Student/logout.php" method="POST">
               <button type="submit" id="ExitButton">Log Out</button>
               </form>
           </div>
       </div>
       <script src="chart.js"></script>
       <script>


       // Action listener for buttons
       for (var i = 1; i <= 6; i++) {
         document.getElementById("Class " + i).addEventListener("click", function()
         {
           table.innerHTML= header;
           insertInfo(this.id);
         });
       }

       // Class 1 - Table starts here
       var table = document.getElementById("table_slot");
       var header = table.innerHTML;
       table.innerHTML='';
       //console.log(header);

      function insertInfo (classId){
        
        
<?php include "../Inlogpagina/DBconn.php" ;
        

$query = "SELECT firstName, studentId, classId, moods.happiness 
AS happiness, moods.student_explanation AS explanation 
FROM student INNER JOIN moods USING (studentId)";

$result = $db->query($query);
//print_r($result);
$a = [];
while($row = $result->fetch_assoc()){
  $a[] = $row; 
}
//$a = [1,2,3,[1,2]];
?>

let result = <?php echo json_encode($a); ?>;
console.log(result[0], result[1]);


// Loop door de hele result heen en vergelijk de classId van de functie met de classId uit een row van de result.
// zoek uit hoe je result[0] alleen de naam krijgt
// haal alle $ weg, sorry!
  {
 

        for (let i = 0; i < result.length; i++) {
          const element = result[i];
          console.log(result[i]['classId']);
          console.log(classId);
          if(result[i]['classId']== classId){
        

         // Start TR
         var row = document.createElement('TR');
         row.class = 'student-row';

         var studentid = document.createElement('TD');
         studentid.innerHTML = result[i]['studentId'];
         row.appendChild(studentid);

         var first_name = document.createElement('TD');
         first_name.innerHTML = result[i]['firstName'];
         row.appendChild(first_name);

         // var last_name = document.createElement('TD');
         // last_name.innerHTML = data[student][2];
         // row.appendChild(last_name);
         var average_happiness = document.createElement('TD');
         avg_happiness =result[i]['happiness'];
         average_happiness.innerHTML = avg_happiness
         row.appendChild(average_happiness);
         avg_happiness--;
         color = "rgb("+255*((4-avg_happiness)/4) +", " + 255*(avg_happiness/4) + ", 0)"
         average_happiness.style.color = color


         var average_happiness = document.createElement('TD');
         avg_happiness = result[i]['happiness'];
         average_happiness.innerHTML = avg_happiness
         row.appendChild(average_happiness);
         avg_happiness--;
         color = "rgb("+255*((4-avg_happiness)/4) +", " + 255*(avg_happiness/4) + ", 0)"
         average_happiness.style.color = color
        table.appendChild(row);


               // // hier bezig

                 var explanation = document.createElement('TD');
                 explanation.innerHTML= result[i]['explanation'];
                 row.appendChild(explanation);

                 // hier niet meer

          }
      }
  } 
       // document.getElementById('table_slot').appendChild(table);
}
       // Class 1 table ends here


      table_slot.style.background = 'white'
      table_slot.style.width = '100%'

       </script>
   </body>
 </html>
