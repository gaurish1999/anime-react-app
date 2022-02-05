<?php

require 'connection.php';

$showtitle = $_POST['showtitle'];
$ver = $_POST['version'];

$sql = "INSERT INTO `favs`(`showName`, `version`)
 VALUES ('$showtitle', '$ver')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
  
$conn->close();

?>