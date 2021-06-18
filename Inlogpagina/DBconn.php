<?php

// Create connection
$db = new mysqli("51.68.47.8:3306", "scrumteam4", "yO93wNW2g1lIjVr1", "scrumteam4");

// Check connection
if ($db->connect_error) {
  die("Connection failed: " . $db->connect_error);
}
// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $stmt = $conn->prepare("Select last_time from test.lastcheck order by last_time asc limit 1"); 
//   $stmt->execute();

//   // set the resulting array to associative
//   $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
//   foreach($stmt->fetchAll() as $k=>$v) { 
//       $last = $v;
//   }
// }
// catch(PDOException $e) {
//   $conn = null;
// }
// $conn = null;


// echo '<form id=theForm>
//    <input type=hidden value="'.$last.'" name=last id=last></input>
//    <input type=button onclick="submitFunction()"></input>
//    </form>';

// $sql = "SELECT * FROM `student`";
// $result = $db->query($sql);

// if ($result->num_rows > 0) {
//   // output data of each row
//   while($row = $result->fetch_assoc()) {
      
//     echo " Name: " . $row["firstName"]. " " . $row["lastName"]. " " . $row["password"]. " " . "<br>";
//   }
// } else {
//   echo "0 results";
// }
// $db->close();


?>

