<?php include "Inlogpagina./DBconnect.php";
              
              if(isset($_POST['LetUsKnowButton'])){

                $explanation = $_POST['student_explanation'];

                $query = "INSERT INTO moods (student_explanation)";
                $query .= "VALUES ('$explanation')";

                $result = mysqli_query($connection, $query);

                if(!$result){

                    die('Query Failed'. mysqli_error($connection));
                }
              }
              
              ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>How are you?</title>
    <link rel="stylesheet" href="student-input.css">
  </head>

  <body>
      <div class="myForm">
        <form action="logout.php" method="POST">
          <div class="myBorder">
          <button id="LogOutButton"> Log out</button>
        </Form>
            <button id="ChangeSettingsButton"> Change Settings</button>
              
            <h1>Student happiness form</h1>
            <h2>How are you feeling today?</h2>

            <div id="myInputs">
              <label for="block_labels">Very good😁</label>
              <input type="radio" name="feeling" value="veryGood">
            
              <label for="block_labels">Good😊</label>
              <input type="radio" name="feeling" value="good">
            
            
              <label for="block_labels">Neutral😐</label>
              <input type="radio" name="feeling" value="neutral">
            
            
              <label for="block_labels">Bad😕</label>
              <input type="radio" name="feeling" value="bad">
            
            
              <label for="block_labels">Very bad☹️</label>
              <input type="radio" name="feeling" value="veryBad">
            </div>
            <div>
              <h2>Is there something you would like to talk about?</h2><br>
              <textarea id="textArea" name="messageToCoach" rows="8" cols="80"></textarea><br><br>
            </div>
            <div id="myCheckbox">
              <input type="checkbox">
              <label for="myCheckbox">Check this box if you would like to set an appointment with your coach</label><br><br>
              </div> 
              <form method="POST">
              <button type="button" id="LetUsKnowButton" value="LetUsKnowButton">Let us know!</button>
              
            </form>
          </div>
        </form>
      </div>
  </body>
</html>





<?php 



//  $sql = "INSERT INTO moods (hapiness, studentId) VALUES ('veryGood', 

// if(isset($_POST['button'])){


//     $feeling = $_POST['feeling'];


// }

?>