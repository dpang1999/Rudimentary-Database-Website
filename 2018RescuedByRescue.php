<!DOCTYPE html>
<html>
<head>
</head>

<body>
<h2> Animals Rescued in 2018 by any Rescue Organization</h2>
<br>


<?php

$dbh = new PDO('mysql:host=localhost;dbname=cisc_332', "root", "");

$rescues = $dbh->query("select * from transport, animal where transport.animal=animal.ID and year(animal.departure_date)=2018");
$num=0;
foreach ($rescues as $row)
{
    $num=$num+1;
}
echo "<p>The number of amimals rescued in 2018: $num </p>";

$dbh = null; 

?>


</body>
</html>