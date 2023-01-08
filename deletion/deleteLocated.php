<?php

include "../config1.php";

if(!empty($_POST['veid']))
{
    $veid = $_POST['veid'];
    $wid = $_POST['wid'];
    $sql_statement = "DELETE FROM located WHERE veid = $veid AND wid = $wid";
    $result = mysqli_query($db, $sql_statement);
   
    echo "Your result is " . $result;
}

?>