

<?php 

   include("DBconn.php");
   


  if(isset($_POST['emailbox'])){
  $username = mysqli_real_escape_string($_POST["emailbox"]);
  $password = mysqli_real_escape_string($_POST["password"]);

 
  $sql ="SELECT * FROM student WHERE email ='".$username."' AND password = '".$password."'limit 1";

  $result = mysqli_query($sql);



  $row = mysqli_fetch_array($result);   





 if (mysql_num_rows($result)==1 ){
        
    header('location: Student\stundent-input.html');

    exit();
    }else {
    echo "Login Failed";}
  
 }
   
?> 

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
<form method="POST" action="#"> 
 <div class="myBorder">
        <h1>Please sign in</h1>

        <label for="emailbox" class="blockLabels">Email:</label>
        <input type="text" id="emailbox">

        <label for="password" class="blockLabels" >Password:</label>
        <input type="password">
         <div id="loginCheckbox">
              <input type="checkbox">
              <label for="myCheckbox">Keep me signed in</label>
         </div>
         <div>
        <input type ="submit" value ="submit " id="SignInButton" ></button>
         </div>
         
        <a href="ChangeSettings.html" id="ChangeSettingsButton">Change Password</a>
    </div>   
      
</form>
   
</body>


</html>