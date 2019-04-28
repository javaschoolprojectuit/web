<?php
function add_user() {
    if (check_connection() === true) {
        session_start();
        $lastUserId = 0;
        $sql    = 'SELECT * FROM user_info ORDER BY USER_ID DESC LIMIT 1';
        $result = $GLOBALS['conn']->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()){
                $lastUserId = intval($row['USER_ID']) + 1;
            }
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $user_pass = $_POST['user_pass'];
            $sql = "INSERT INTO user_info(USER_ID, USER_NAME,USER_PASS,USER_EMAIL) VALUES ($lastUserId,'$user_name','$user_pass','$user_email')";
            $GLOBALS['conn']->query($sql);
            $GLOBALS['isSignedIn'] = true;
            $_SESSION['user'] = $user_name;
            echo "add succeed!";
        }
        else echo "add failed!";
    }
     else echo "connection failed!";
}
if(isset($_POST['user_name']))
{
   add_user();
   header("location:http://englishkids.com");
} 
?>