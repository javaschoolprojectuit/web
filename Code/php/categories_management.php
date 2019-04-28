<?php
function get_id_name_categories() {
        $sql    = 'SELECT CAT_NAME,CAT_ID FROM CATEGORIES';
        $result = $GLOBALS['conn']->query($sql);
        $catTittle = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                array_push($catTittle,$row['CAT_ID'],$row['CAT_NAME']);
            }
        }
        return $catTittle;
}

function get_content_categories($cat_id) {
        $formatted_id = intval($cat_id);
        $content = "";
        $sql    = "SELECT CAT_CONTENT FROM CATEGORIES WHERE CAT_ID = '$formatted_id' ";
        $result = $GLOBALS['conn']->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $content = $row['CAT_CONTENT'];
        }
        return $content;
}
?>