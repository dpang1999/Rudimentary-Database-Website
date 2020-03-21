<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h2> Drivers Associated with a Rescue Organization </h2>
<br>


<?php
$rescue = $_POST["Rescue"];
$dbh = new PDO('mysql:host=localhost;dbname=cisc_332', "root", "");

echo "<h2> Rescue Organization: $rescue </h2>";
echo "<br>";
echo "<table>";
echo "<tr><th> --License Place-- </th><th> --License Number-- </th><th> --Name-- </th></tr> ";

$drivers = $dbh->query("select * from driver where Organization = \"$rescue\"");

foreach ($drivers as $row)
{
    echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
}

$dbh = null; 

?>

</table>

</body>
</html>