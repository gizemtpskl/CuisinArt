<?php 

include "../../config1.php"; 

if (!empty($_POST['name'])){ 
    $name = $_POST['name']; 
    $address = $_POST['address']; 
    $mobile = $_POST['mobile']; 
    

    $sql_statement = "INSERT INTO venues(name, mobile,address ) VALUES ('$name',$mobile ,'$address')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the venue name.";
}

?>