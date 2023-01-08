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


$sql_statement = "SELECT * FROM has";
$result = mysqli_query($db, $sql_statement);

echo "<table>";
echo "<tr><th>Event ID</th><th>Event Name</th><th>Food Type ID</th><th>Food Type Name</th></tr>";
while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $eid = $row['eid'];
    $sql_statement1 = "SELECT * FROM events WHERE eid = $eid";
    $result1 = mysqli_query($db, $sql_statement1);
    $ename = mysqli_fetch_assoc($result1)['name'];
    //same for user
    $fid = $row['fid'];
    $sql_statement2 = "SELECT * FROM food_types WHERE fid = $fid";
    $result2 = mysqli_query($db, $sql_statement2);
    $fname = mysqli_fetch_assoc($result2)['name'];
    //print
    echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$eid</td><td>$ename</td><td>$fid</td><td>$fname</td></tr>\n";
}
echo "</table>";


?>
</body>

</html>