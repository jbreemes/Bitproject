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
echo "Connected successfully";

// $sql = "SELECT * FROM `student`";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
      
//     echo " Name: " . $row["firstName"]. " " . $row["lastName"]. " " . $row["password"]. " " . "<br>";
//   }
// } else {
//   echo "0 results";
// }
$conn->close();


?>

