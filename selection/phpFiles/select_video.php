<html>
<head>
<title>...</title>
<style type="text/css">
table {
margin: 50px;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: 2em;
background: #9919d0;
color: #FFF;
padding: 12px 16px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: 2em;
border: 1px solid #DDD;
}
</style>
</head>
<body>
<?php 
include "../../config1.php"; // Makes mysql connection


if (!empty($_POST['name'])){ 
   
    $name= $_POST['name']; 
    
    $sql_statement = "SELECT * FROM videos WHERE  name = '$name'";
    $result = mysqli_query($db, $sql_statement);
    if (mysqli_num_rows($result)  < 1) {
        echo "No results, sorry..";} else {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Link</th><th>Description</th></tr>";
        while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $viid = $row['viid'];
            $name = $row['name'];
            $link = $row['link'];
            $description = $row['description'];
            echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$viid</td><td>$name</td><td>$link</td><td>$description</td></tr>\n";
        }
        echo "</table>";
    }
} 
else 
{
    echo "You did not enter a type";
}


?>
</body>
</html>