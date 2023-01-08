<?php


include "../config1.php";

if(!empty($_POST['ids']))
{
    $fid = $_POST['ids'];
    $sql_statement = "DELETE FROM food_types WHERE fid = $fid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>