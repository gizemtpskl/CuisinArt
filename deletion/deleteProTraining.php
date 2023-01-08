<?php

include "../config1.php";

if(!empty($_POST['ids']))
{
    $pid = $_POST['ids'];
    $sql_statement = "DELETE FROM pro_trainings WHERE pid = $pid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>