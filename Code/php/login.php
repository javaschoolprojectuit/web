<?php
include("connection.php");
session_start();
if (check_connection() === true) {
    $email   = $_POST['email'];
    $pass   = $_POST['pass'];
    $sql    = "SELECT USER_EMAIL,USER_PASS,USER_NAME FROM USER_INFO WHERE USER_EMAIL='$email' and USER_PASS='$pass' ";
    $result = $GLOBALS['conn']->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){
            $_SESSION['user'] = $row['USER_NAME'];
           }
            $_SESSION['pass'] = $_POST['pass'];
            header("location:http://englishkids.com");
            $GLOBALS['isSignedIn'] = true;
            return true;
    }
    else {
        echo("wrong password or username");
        return false;
    }
}
else {
    echo("connection failed");
    return false;
}
?>