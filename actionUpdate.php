<?php

require_once "config.php";

$id = $_POST['id'];
$first_name = $_POST['name'];
$last_name = $_POST['lname'];
$address = $_POST['address'];
$telephone = $_POST['telephone'];

// Update information

$update = "UPDATE users SET name = '$first_name', lastName = '$last_name', address = '$address', telephone = '$telephone' WHERE id_user = '$id'";

$result = $connection->query($update);

if ($result) {
    echo "<script>alert('Your dates were updated successfully'); window.location='/www/PHP/php_simple_crud/update.php'</script>";
} else {
    echo "<script>alert('Error during the process'); window.history.go(-1);</script>";
}
