<?php include "../Inlogpagina/DBconn.php";
session_start();
              
              if(isset($_POST['messageToCoach'])){
                $feeling = $_POST['feeling'];
                $explanation = $_POST['messageToCoach'];
                $id= $_SESSION['studentId'];

                $query = "INSERT INTO moods(happiness, student_explanation, studentId) VALUES ('$feeling', '$explanation', $id)";

                $result = $db->query($query);

                if(!$result){

                    die('Query Failed'. mysqli_error($db));
                }
              }

            
              
              ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="student-input.css">
  </head>

  <body>
      <div class="myForm">
        <form action="logout.php" method="POST">
          <div class="myBorder">
          <button id="LogOutButton">Log out</button>
        </form>
        <a href="Changsetting.html" id="ChangeSettingsButton">Change Settings</a>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">      
            <h1>Student happiness form</h1>
            <h2>How are you feeling today?</h2>

            <div id="myInputs">
              <label for="block_labels">Very good😁</label>
              <input type="radio" name="feeling" value="5" required>
            
              <label for="block_labels">Good😊</label>
              <input type="radio" name="feeling" value="4">
            
            
              <label for="block_labels">Neutral😐</label>
              <input type="radio" name="feeling" value="3">
            
            
              <label for="block_labels">Bad😕</label>
              <input type="radio" name="feeling" value="2">
            
            
              <label for="block_labels">Very bad☹️</label>
              <input type="radio" name="feeling" value="1">
            </div>
            <div>
              <h2>Is there something you would like to talk about?</h2><br>
              <textarea id="textArea" name="messageToCoach" rows="8" cols="80"required></textarea><br><br>
            </div>
            <div>
                <a href="mailto:rqueen@gmail.com" id="MyLink">Make an appointment! </a>
              </div> 
             
              <button type="submit" id="LetUsKnowButton">Let us know!</button>
          </div>
        </form>
      </div>
  </body>
</html>





