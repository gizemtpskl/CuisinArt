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



$sql_statement = "SELECT * FROM users";
$result = mysqli_query($db, $sql_statement);


echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Phone</th><th>Type</th></tr>";
while ($row = mysqli_fetch_assoc($result)) { // Iterating the result
    $uid = $row['uid'];
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
    $type = $row['type'];
    echo "<tr onmouseover=\"hilite(this)\" onmouseout=\"lowlite(this)\"><td>$uid</td><td>$name</td><td>$email</td><td>$mobile</td><td>$type</td></tr>\n";
}
echo "</table>";


?>
</body>

</html>