 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="InlogStyle.css">
    <title>Login Page</title>
 </head>

 <body>
 
 <div class="myForm">    
  <div class="myBorder">
    <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>"> 
        <h1>Please sign in</h1>

        <label for="emailbox" class="blockLabels" required>Email:</label>
        <input type="text" id="username" name="username">

        <label for="password" class="blockLabels" required>Password:</label>
        <input type="password" name="password">
         <div id="loginCheckbox">
              <input type="checkbox">
              <label for="myCheckbox">Keep me signed in</label>
         </div>
         <div>
        <input type ="submit" value ="Login " id="SignInButton" ></button>
         </div>
          <a href="ChangeSettings.html" id="ChangeSettingsButton">Change Password</a>
     </form>
    </div>   
   
    <?php 

   include("DBconn.php");
   session_start();

// //  function JSC($input){
// //     echo "<pre>";
// //     print_r($input);
// //     echo "</pre>";
// //  } 
//  $arrayOne = [1, 2, 3, 4, 5, 6, 7, 8 , 9,10];
//  print_r($arrayOne); JSC($arrayOne);
// print_r($_POST);
  if(isset($_POST["username"])){ 

  $username = ($_POST["username"]);
  $passwrd = ($_POST["password"]);


//   $username = stripcslashes($username);
//   $passwrd = stripcslashes($passwrd);
//   $username = mysqli_real_escape_string($username);
//   $passwrd = mysqli_real_escape_string($passwrd);


 
  $result= mysqli_query ($db, "SELECT * FROM student WHERE email ='$username' AND password = '$passwrd'")
  or die("Error while searching");
  
   $row = mysqli_fetch_array($result);

   
  $result1= mysqli_query ($db, "SELECT * FROM teacher WHERE email ='$username' AND password = '$passwrd'")
  or die("Error while searching teacher");

  $row1 = mysqli_fetch_array($result1);


  if($row['email'] == $username && $row['password'] == $passwrd){
    header("location: ../student/student-input.php");
  } elseif($row1['email'] == $username && $row1['password'] == $passwrd){
    header("location: ../teacher/teacher.php");}
    else { echo "Login failed"; }
      
    
   

}


   
    
?> 

</form>
   
</body>


</html>