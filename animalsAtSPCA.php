<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h2> Animals at a Given SPCA Location </h2>
<br>


<?php
$organization = $_POST["SPCA"];
echo "<h2> SPCA Location: $organization </h2>";
echo "<table>";
echo "<tr><th> --Animal ID-- </th><th> --Animal Species-- </th></tr> ";
$dbh = new PDO('mysql:host=localhost;dbname=cisc_332', "root", "");

$rows = $dbh->query("select ID, species from animal where Branch = \"$organization\"");

foreach($rows as $row) {
		echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td></tr>";
    }
    $dbh = null; 

?>

</table>

</body>
</html>