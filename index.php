<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Adapterio „patternas“</title>
	<link href="styles.css" rel="stylesheet">
</head>



<?php include('select_data.php'); include('adapter.php');?>
<body>
	<h1>Adapterio „patternas“</h1>
	<h3>Prieš adaptaciją</h3>


	<table class="container">
		<thead>
			<tr>
				<th><h1>ID</h1></th>
				<th><h1>Vardas</h1></th>
				<th><h1>Pavardė</h1></th>
				<th><h1>Pareigos</h1></th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach($data as $row){
			echo "<tr><td>".$row[0]."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td></tr>";
								}
		?>
		</tbody>
	</table>

	<h3>Po adaptacijos</h3>

	<table class="container">
		<thead>
		</thead>
		<tbody>
		<tr><td>
		<?php
			echo ListPersons::showpersons($data);
		?>
		</td></tr>
		</tbody>
	</table>

</body>
</html>