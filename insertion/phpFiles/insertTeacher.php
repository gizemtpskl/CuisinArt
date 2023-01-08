<?php 

include "../../config1.php"; 

if (!empty($_POST['email'])){ 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $mobile= $_POST['mobile']; 
    $profession = $_POST['profession']; 

    

    $sql_statement = "INSERT INTO teachers(name, email,  mobile, profession) VALUES ('$name','$email',$mobile,'$profession' )"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the email.";
}

?>
