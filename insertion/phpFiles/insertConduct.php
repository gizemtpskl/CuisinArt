<?php 

include "../../config1.php"; 

if (!empty($_POST['wid'])){ 
    $wid = $_POST['wid']; 
    $tid= $_POST['tid']; 

    

    $sql_statement = "INSERT INTO conducts(tid, wid) VALUES ($tid,$wid)"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the wid.";
}

?>