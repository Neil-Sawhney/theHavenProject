<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database</title>
</head>
<body>
<img id="topbannerDB" alt="this is the top banner" src="./xd-ref/topbanner.png">
  

<?php
$servername = "localhost";
$username = "root";
$password = "MbtjBctkJ9HA";
$dbname = "my_cool_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT OrganizationName, Category FROM havenprojectdatabase";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "Organization Name: " . $row["OrganizationName"]. "&nbsp;&nbsp;&nbsp;&nbsp;Category: " . $row["Category"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
</body>
