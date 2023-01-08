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
include "../config1.php"; // Makes mysql connection



$sql_statement = "SELECT * FROM events";
$result = mysqli_query($db, $sql_statement);

echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Price</th><th>Capacity</th><th>Date</th></tr>";
while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $eid = $row['eid'];
    $name = $row['name'];
    $type = $row['type'];
    $price = $row['price'];
    $capacity = $row['capacity'];
    $date = $row['date'];
    //echo $eid . " " . $name . " " . $price . "<br>"; 
    echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$eid</td><td>$name</td><td>$price</td><td>$capacity</td><td>$date</td></tr>\n";
}
echo "</table>";



?>
</body>

</html>