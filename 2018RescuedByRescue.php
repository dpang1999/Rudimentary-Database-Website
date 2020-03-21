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