<?php 

require 'connection.php';

echo "<br>Working! Let's Go<br/>";
$title = $_POST["title"];
$rating = $_POST["rating"];
echo "Rating: " . $rating;
echo "<br>Title: " . $title;

// $sql = "INSERT INTO wishList (`name`, `rating`)
// VALUES ('$title', '$rating');";
$sql = "SELECT * FROM `wishList`";

// if(mysqli_query($conn, $sql)){
    // echo "<h3>Data added in the database.</h3>"; 

    $result = mysqli_query($conn, $sql);
    echo "<table border='1' class='table table-striped table-hover text-center'>
    <thead class='thead thead-dark'>
        <tr>

            <th>Id</th>
            <th>Title</th>
            <th>Rating</th>
            
        </tr>
    </thead>
    ";

    // Gets data of each row from DB table and puts in a variable named '$row'
    while ($row = mysqli_fetch_assoc($result)) { // Important line !!! Check summary get row on array ..

        // Inputs value into each cell of table
        echo "<tr>";
        foreach ($row as $field => $value) { // I you want you can right this line like this: foreach($row as $value) {
            echo "<td style='text-align: center; padding: 15px;'>" . $value . "</td>"; // I just did not use "htmlspecialchars()" function. 
        }

        echo "</tr>";
    }
    echo "</table>";
    // }
    //  else{
    // echo "<br/>ERROR: Uh oh! <br/><br/><i>$sql.</i><br/><br/> " 
    //     . mysqli_error($conn);
    // }

// Close connection
mysqli_close($conn);

?>