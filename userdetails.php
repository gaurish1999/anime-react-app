<?php

require 'connection.php';

$name = $_POST['inputName'];
$email = $_POST['usermail'];
$mobile = $_POST['mobnum'];
$occupation = $_POST['occupation'];
$contribution = htmlspecialchars($_POST['contribute']);

// echo $name . $email . $mobile . $occupation;
// echo $contribution;

$sql = "INSERT INTO `users` (`name`, `email`, `mobile`, `occupation`, `contribution`)
VALUE ('$name', '$email', $mobile, '$occupation', '$contribution')";

if($conn->query($sql) === TRUE){
    echo "Thank You! We got your details.";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>