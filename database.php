<?php 

require 'connection.php';

// echo "<br>Working! Let's Go<br/>";

$title = $_POST["title"];
$rating = $_POST["rating"];

echo "You selected: <br/>Title: <b>" . $title . "</b>, Rating: <b>" . $rating . "/10</b><br/>";

$sql = "INSERT INTO wishList (`name`, `rating`)
VALUES ('$title', $rating);";

$query = mysqli_query($conn, "SELECT * FROM `wishList`");

// $tabledata = mysqli_fetch_array($query);

if($query){
    echo "<h3>Selected anime added in the database. You can <i>go back</i> and keep saving more!</h3>"; 
    echo "<h3>Your wishlist (all except current input is shown):</h3>"; 

    $result = $query;

    echo "<table border='1'>
    <thead>
        <tr>

            <th>S.No.</th>
            <th>Title</th>
            <th>Rating</th>
            
        </tr>
    </thead>
    ";

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<tr>";
        foreach ($row as $value) { 
            echo "<td style='text-align: center; padding: 15px;'>" . $value . "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";

    }
     else{
    echo "<br/>ERROR: Uh oh! <br/><br/><i>.$query.</i><br/><br/> " 
        . mysqli_error($conn);
    }

    if ($conn -> multi_query($sql)) {
        do {
          
          if ($result = $conn -> store_result()) {
            while ($row = $result -> fetch_row()) {
              printf("%s\n", $row[0]);
            }
           $result -> free_result();
          }
          // if there are more result-sets, the print a divider
          if ($conn -> more_results()) {
            printf("-------------\n");
          }
           //Prepare next result set
        } while ($conn -> next_result());
      }

// Close connection
mysqli_close($conn);

?>