<?php

require_once "config.php";

$first_name = $_POST['fname'];
$last_name = $_POST['lname'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];

$insert = queryMysql("INSERT INTO users (name, lastName, address, telephone) VALUES ('$first_name', '$last_name', '$address', '$telephone') ");

if ($insert === true) {
    echo "<script>alert('New Record inserted successfully'); window.location='/www/PHP/php_simple_crud/insertForm.php'</script>";
} else {
    echo "Failed to introduce new records";
}

$connection->close();
