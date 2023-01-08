<?php

include "../config1.php";

if(!empty($_POST['ids']))
{
    $wid = $_POST['ids'];
    $sql_statement = "DELETE FROM workshops WHERE wid = $wid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>