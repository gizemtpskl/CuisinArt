<?php 

include "../../config1.php"; 

if (!empty($_POST['email'])){ 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $mobile= $_POST['mobile']; 
    $type = $_POST['type']; 

    

    $sql_statement = "INSERT INTO users(name, email,  mobile, type) VALUES ('$name','$email',$mobile,'$type' )"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the email.";
}

?>

