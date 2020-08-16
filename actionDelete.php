<?php

require_once "config.php";

$id = $_GET['id'];

$delete = "DELETE FROM users WHERE id_user = '$id'";

$result = $connection->query($delete);

if ($result) {
    header("location:update.php");
} else {
    echo "<script>alert('Can't delet users'); window.history.go(-1)</script>";
}

$connection->close();