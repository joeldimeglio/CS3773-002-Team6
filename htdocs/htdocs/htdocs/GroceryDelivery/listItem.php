<?php
	include 'server.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Search and list Items</title>
	<link rel="stylesheet" type="text/css" href="listAndSearch.css">
</head>
<body>
	<a href="items.html"><button>Back</button></a>
	<p></p>
	<form action="search.php" method="POST">
		<input type="text" name="search" placeholder="Search">
		<button type="submit" name="submit-search">Search</button>
	</form>
<h2>All Items:</h2>

<div class="item-container">
	<?php
		$query = "SELECT * FROM item";
		$result = $db->query($query);
		$queryResults = mysqli_num_rows($result);

		echo '<table border="1" cellspacint="3" cellpadding="2" class="styled-table">
			<thead>
				<tr>
					<th> <font face="Arial">IName</font></th>
					<th> <font face="Arial">Stock</font></th>
					<th> <font face="Arial">Price</font></th>
					<th> <font face="Arial">INum</font></th>
					<th> <font face="Arial">DNum</font></th>
				</tr>
			</thead>';

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tbody>
				<tr>
					<td>".$row['IName']."</td>
					<td>".$row['Stock']."</td>
					<td>".$row['Price']."</td>
					<td>".$row['INum']."</td>
					<td>".$row['DNum']."</td>
				</tr></tbody>";
			}
		}
	?>
</div>

</body>
</html>