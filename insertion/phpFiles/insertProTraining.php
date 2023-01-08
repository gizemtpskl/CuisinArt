<?php 

include "../../config1.php"; 

if (!empty($_POST['name'])){ 
    $name = $_POST['name']; 
    $price = $_POST['price']; 
    $capacity = $_POST['capacity']; 
    
    $date = strtotime($_POST['date']);
    $date = date('Y-m-d', $date);

    $sql_statement = "INSERT INTO pro_trainings(name, price, capacity, date) VALUES ('$name',$price,$capacity ,'$date')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the training name.";
}

?>