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



$sql_statement = "SELECT * FROM located";
$result = mysqli_query($db, $sql_statement);

echo "<table>";
echo "<tr><th>Venue ID</th><th>Venue Name</th><th>Workshop ID</th><th>Workshop Name</th></tr>";
while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
    //select from workshop db the associated workshop
    $wid = $row['wid'];
    $sql_statement1 = "SELECT * FROM workshops WHERE wid = $wid";
    $result1 = mysqli_query($db, $sql_statement1);
    $wname = mysqli_fetch_assoc($result1)['name'];
    //same for user
    $veid = $row['veid'];
    $sql_statement2 = "SELECT * FROM venues WHERE veid = $veid";
    $result2 = mysqli_query($db, $sql_statement2);
    $vname = mysqli_fetch_assoc($result2)['name'];
    //print
    echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$veid</td><td>$vname</td><td>$wid</td><td>$wname</td></tr>\n";
}
echo "</table>";


?>
</body>

</html>