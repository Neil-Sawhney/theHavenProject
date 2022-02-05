<h1>My First PHP Site</h1>
<p>This HTML will get delivered as is</p>
<?php echo "<p>But this code is interpreted by PHP and turned into HTML</p>";?>
<?php echo "<ul><li>You can use all HTML tags,</li><li>like this list.</li></ul>";?>
<footer>
  <p>And this code is back in plain HTML</p>
</footer>

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

$sql = "SELECT firstname, lastname FROM cats";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  "Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>
