<?php

require_once "config.php";

$first_name = $_POST['name'];
$last_name = $_POST['lname'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];

$insert = "INSERT INTO users (name, lastName, address, telephone) VALUES ('$first_name', '$last_name', '$address', '$telephone') ";

if ($connection->query($insert) === TRUE) {
    echo "<script>alert('New Record inserted successfully'); window.location='/www/PHP/php_simple_crud/home.php'</script>";
} else {
    echo "Failed to introduce new records";
}

$connection->close();
 