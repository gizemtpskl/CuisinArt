<?php

include "../config1.php";

if(!empty($_POST['eid']))
{
    $eid = $_POST['eid'];
    $fid = $_POST['fid'];
    $sql_statement = "DELETE FROM has WHERE eid = $eid AND fid = $fid";
    $result = mysqli_query($db, $sql_statement);
   
    echo "Your result is " . $result;
}

?>