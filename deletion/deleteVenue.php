<?php

include "../config1.php";

if(!empty($_POST['ids']))
{
    $veid = $_POST['ids'];
    $sql_statement = "DELETE FROM venues WHERE veid = $veid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>