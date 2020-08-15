<?php

session_start();

require_once "config.php";

if (isset($_POST['user'])) {
    $user = $_POST['user'];
    $result = "SELECT * FROM users WHERE name = '$user'";

    if ($result->num_rows) {
        echo "<span>The username '$user' is taken</span>";
    } else {
        echo "<span>The username '$user' is availabel</span>";
    }
}

$connection->close();
