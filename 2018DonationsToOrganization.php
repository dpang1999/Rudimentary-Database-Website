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
<h2> Total Donations in 2018 to a Specified Organization </h2>
<br>


<?php
$organization = $_POST["Organization"];
echo "<p> Organization: $organization </p>";

echo "<p> Amount: ";
$dbh = new PDO('mysql:host=localhost;dbname=cisc_332', "root", "");

$allDonations = $dbh->query("select amount from donations where Organization = \"$organization\" and year(date)=2018");
$sum=0;
foreach($allDonations as $donation) {
		$sum=$sum+$donation[0];
    }
echo "\$$sum.00 </p>";
$dbh = null; 

?>

</table>

</body>
</html>