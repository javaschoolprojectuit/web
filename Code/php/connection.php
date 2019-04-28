<?php
function check_connection() {
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "btpm";
    GLOBAL $conn;
    // Create connection
    $GLOBALS['conn'] = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        return false;
    }
    return true;
}
?>