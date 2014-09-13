<?php

$connection = mysqli_connect("localhost","jonasmeska_ad","asd123","jonasmeska_ad");

if (mysqli_connect_errno())
  {
  echo "Nepavyko prisijungti. Klaida: " . mysqli_connect_error();
  die;
}

$result = mysqli_query($connection, "SELECT * FROM users") or die (mysqli_error());


$data = array();
$i = 0;

while ( $row = mysqli_fetch_array($result) ) {
	$masive = array();
	$masive[0] = $row['id'];
	$masive[1] = $row['name'];
	$masive[2] = $row['surname'];
	$masive[3] = $row['position'];
	$data [$i++] = $masive;
}

mysqli_close($connection);
?>