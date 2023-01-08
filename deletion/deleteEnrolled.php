<?php

include "../config1.php";

if(!empty($_POST['uid']))
{
    $uid = $_POST['uid'];
    $wid = $_POST['wid'];
    $sql_statement = "DELETE FROM enrolled WHERE uid = $uid AND wid = $wid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>