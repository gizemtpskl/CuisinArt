<?php 

include "../../config1.php"; 

if (!empty($_POST['name'])){ 
    $name = $_POST['name']; 
    $description = $_POST['description']; 

    $sql_statement = "INSERT INTO food_types(name, description) VALUES ('$name','$description')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the food type name.";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../" />
</head>
<body>
    
</body>
</html>