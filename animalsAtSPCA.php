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