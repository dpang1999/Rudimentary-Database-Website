<!DOCTYPE html>
<html>
<head>
<!--Import Google Icon Font-->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
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