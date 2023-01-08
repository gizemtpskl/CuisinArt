<?php 

include "../../config1.php"; 

if (!empty($_POST['wid'])){ 
    $wid = $_POST['wid']; 
    $uid= $_POST['uid']; 

    

    $sql_statement = "INSERT INTO enrolled(uid, wid) VALUES ($uid,$wid)"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the wid.";
}

?>