<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<body>
    <img id="topbannerDB" alt="this is the top banner" src="./xd-ref/topbanner.png">
    <div id="subtitle">Corporate Social Responsibility In-Kind Database</div>

<div class="searchWrapper">

<script>
  //search code
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
//end of search code


</script>
</head>
<body>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Search category..." />
        <div class="result"></div>
    </div>
</body>
</html>
</div>


         <?php
         echo "<div class='buttonWrapper'> ";
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

         $sql = "SELECT DISTINCT Category FROM havenprojectdatabase";
         $result = $conn->query($sql);
     
        echo "<div class='col'>";
         if ($result->num_rows > 0) {
           // output data of each row
           while($row = $result->fetch_assoc()) {
             echo  $row["Category"]. "    |     ";
           }
         } else {
           echo "0 results";
         }
         echo "</div>";

         $conn->close();
         echo "</div>";
         ?> 
          
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

    $sql = "SELECT OrganizationName, DescriptionofDonation FROM havenprojectdatabase WHERE Category='Clothing'";
    $result = $conn->query($sql);

    echo "<div class='col'>";
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo  $row["OrganizationName"]. "<br><br><br>";
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
        echo  $row["DescriptionofDonation"]. "<br><br><br>";
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
