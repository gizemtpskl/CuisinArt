<?php 

include "../../config1.php"; 

if (!empty($_POST['name'])){ 
    $name = $_POST['name']; 
    $type = $_POST['type'];
    $price = $_POST['price']; 
    $capacity = $_POST['capacity']; 
    
    $date = strtotime($_POST['date']);
    $date = date('Y-m-d', $date);

    $sql_statement = "INSERT INTO events(name,type, price, capacity, date) VALUES ('$name','$type',$price,$capacity ,'$date')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the event name.";
}

?>