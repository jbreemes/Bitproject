<?php 
$servername = "51.68.47.8:3306";
$username = "scrumteam4";
$password = "yO93wNW2g1lIjVr1";
$database = "scrumteam4";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully" . "<br>";

// $sql = "SELECT * FROM student";
// $result = mysqli_query($conn, $sql);
// $resultCheck= mysqli_num_rows($result);

// if ($resultCheck > 0){
//   while ($row = mysqli_fetch_assoc($result)){
//     echo $row['firstName'] . "<br>";
//   }

// }

$conn->close();


?>

