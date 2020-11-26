<?php
	include 'server.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search and list Customers</title>
	<link rel="stylesheet" type="text/css" href="listAndSearch.css">
</head>
<body>
	<a href="employee.html"><button>Back</button></a>
	<p></p>
<h2>All Customers:</h2>

<div class="item-container">
	<?php
		$query = "SELECT * FROM customer;";
		$result = $db->query($query);
		$queryResults = mysqli_num_rows($result);

		echo '<table border="1" cellspacint="3" cellpadding="2" class="styled-table">
			<thead>
				<tr>
					<th> <font face="Arial">Customer Phone</font></th>
					<th> <font face="Arial">Customer Name</font></th>
					<th> <font face="Arial">Customer Address</font></th>
					<th> <font face="Arial">Customer Email</font></th>
				</tr>
			</thead>';

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tbody>
				<tr>
					<td>".$row['CPhone']."</td>
					<td>".$row['CName']."</td>
					<td>".$row['CAddress']."</td>
					<td>".$row['CEmail']."</td>
				</tr></tbody>";
			}
		}
	?>
</div>

</body>
</html>