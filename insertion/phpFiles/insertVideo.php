<?php 

include "../../config1.php"; 

if (!empty($_POST['name'])){ 
    $name = $_POST['name']; 
    $link = $_POST['link'];
    $description = $_POST['description']; 

    $sql_statement = "INSERT INTO videos(name, link, description) VALUES ('$name', '$link', '$description')"; 

    $result = mysqli_query($db, $sql_statement);
    echo "Your result is: " . $result;
} 
else 
{
    echo "You did not enter the video name.";
}

?>