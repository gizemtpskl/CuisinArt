<?php

include "../config1.php";

if(!empty($_POST['tid']))
{
    $tid = $_POST['tid'];
    $wid = $_POST['wid'];
    $sql_statement = "DELETE FROM conducts WHERE tid = $tid AND wid = $wid";
    $result = mysqli_query($db, $sql_statement);
   
    echo "Your result is " . $result;
}

?>