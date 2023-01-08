<?php

include "../config1.php";

if(!empty($_POST['ids']))
{
    $eid = $_POST['ids'];
    $sql_statement = "DELETE FROM events WHERE eid = $eid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>