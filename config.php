<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "users_db";

$connection = new mysqli($host, $user, $password, $db_name);

if ($connection->connect_error) {
    echo "failed to connect with the server";
}


