<?php

$host = "localhost";
$user = "root";
$password = "";
$db_name = "users_db";

$connection = new mysqli($host, $user, $password, $db_name);

if ($connection->connect_error) {
    echo "failed to connect with the server";
}

function queryMysql($query)
{
    global $connection;
    $result = $connection->query($query);
    if (!$result) {
        die("Fatla error" . $connection->connect_error);
    }
    return $result;
}
