<?php
include ("config.php");
$request = $_REQUEST['q'];
if ($request !== '')
{
    get_news_title($request);
}
function get_news_title($cat_id) {
    if (check_connection() === true) {
        $sql    = " SELECT NEWS_TITLE FROM NEWS WHERE CAT_ID = '$cat_id'";
        $result = $GLOBALS['conn']->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row["NEWS_TITLE"] . "</li>";
            }
        }
    }
}
?>