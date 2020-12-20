<?php
$db_username = "root";
$db_password = "";
$db_name = "final_term";
$db_server = "localhost";

function dbOperation($query)
{
    global $db_username, $db_password, $db_name, $db_server;
    $connection = mysqli_connect($db_server, $db_username, $db_password, $db_name) or die("Connection is Failed" . mysqli_connect_error());
    $result = mysqli_query($connection, $query);
    mysqli_close($connection);
    return $result;
}
//INSERT INTO `books`(`ID`, `Name`, `Author`, `Edition`, `BookImage`) VALUES (111,"Bangla","Mr.X","2nd","Importance-of-Books.PNG")
function getValues($query)
{
    global $db_username, $db_password, $db_name, $db_server;
    $connection = mysqli_connect($db_server, $db_username, $db_password, $db_name) or die("Connection is Failed" . mysqli_connect_error());
    $result = mysqli_query($connection, $query);
    $data = array();
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row;
        }
    }
    mysqli_close($connection);
    return $data;
}