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



$sql_statement = "SELECT * FROM teachers";
$result = mysqli_query($db, $sql_statement);

echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Profession</th></tr>";
while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $tid = $row['tid'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $profession = $row['profession'];
    //echo $eid . " " . $name . " " . $price . "<br>"; 
    echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$tid</td><td>$name</td><td>$email</td><td>$mobile</td><td>$profession</td></tr>\n";
}
echo "</table>";


?>
</body>

</html>