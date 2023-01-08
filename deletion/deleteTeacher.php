<?php

include "../config1.php";

if(!empty($_POST['ids']))
{
    $tid = $_POST['ids'];
    $sql_statement = "DELETE FROM teachers WHERE tid = $tid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>