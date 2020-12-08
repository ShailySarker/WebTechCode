<?php
$db_username = "root";
$db_password = "";
$db_name = "final_lab3";
$db_host = "localhost";

function dbOperation($query)
{
    global $db_name, $db_password, $db_username, $db_host;
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die("Connection Failed" . mysqli_connect_error());
    $result = mysqli_query($conn, $query);
    mysqli_close($conn);
    return $result;
}

function getValues($query)
{
    global $db_name, $db_password, $db_username, $db_host;
    $conn = mysqli_connect($db_host, $db_username, $db_password, $db_name) or die("Connection Failed" . mysqli_connect_error());
    $result = mysqli_query($conn, $query);
    $data = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_close($conn);
    return $data;
}