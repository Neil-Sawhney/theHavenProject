<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>

<body>
    <img id="topbannerDB" alt="this is the top banner" src="./xd-ref/topbanner.png">
    <div id="subtitle">Corporate Social Responsibility In-Kind Database</div>

            <?php

    echo "<div class='dataWrapper'> ";
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

    echo "<div class='col'>";
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo  $row["OrganizationName"]. "<br>";
      }
    } else {
      echo "0 results";
    }
    echo "</div>";

    $result = $conn->query($sql);

    echo "<div class='col'>";
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo  $row["Category"]. "<br>";
      }
    } else {
      echo "0 results";
    }
    echo "</div>";

    $conn->close();
    echo "</div>";
    ?>

     <img id="bridgeDecal" src="./xd-ref/bridgeDecal.png" alt="this is a bridge">
</body>