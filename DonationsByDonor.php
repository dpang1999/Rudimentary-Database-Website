<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h2> Total Donations by a Specified Donor </h2>
<br>


<?php
$donor = $_POST["Donor"];
echo "<p> Donor: $donor</p>";


$dbh = new PDO('mysql:host=localhost;dbname=cisc_332', "root", "");

$allDonations = $dbh->query("select date,amount,organization from donations where donor = \"$donor\"");
$sum=0;
echo "<table>";
echo "<tr><th>--Date--</th><th>--Amount--</th><th>--Organization--</th></tr>";
foreach($allDonations as $donation) {
        echo "<tr><td>".$donation[0]."</td><td>$".$donation[1]."</td><td>".$donation[2]."</td></tr>";
		$sum=$sum+$donation[1];
    }
echo "<p>Total Amount: \$$sum.00 </p>";

$dbh = null; 

?>

</table>

</body>
</html>