<?php

include "../config1.php";

if(!empty($_POST['ids']))
{
    $viid = $_POST['ids'];
    $sql_statement = "DELETE FROM videos WHERE viid = $viid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>