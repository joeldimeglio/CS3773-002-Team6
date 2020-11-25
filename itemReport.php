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
<div>


<div class="item-container">
	<?php
		$query = "SELECT Count(INum), DNum FROM item;";
		$result = $db->query($query);
		$queryResults = mysqli_num_rows($result);

		echo '<table border="1" cellspacint="3" cellpadding="2" class="styled-table">
		<caption style="caption-side:top"><h2>Items in each Department</h2></caption>
			<thead>
				<tr>
					<th> <font face="Arial">Num of Items</font></th>
					<th> <font face="Arial">DNum</font></th>
				</tr>
			</thead>';

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tbody>
				<tr>
					<td>".$row['Count(INum)']."</td>
					<td>".$row['DNum']."</td>
				</tr></tbody>";
			}
		}
	?>
	<?php
		$query = "SELECT INum, IName FROM item WHERE Stock > 5;";
		$result = $db->query($query);
		$queryResults = mysqli_num_rows($result);

		echo '<table border="1" cellspacint="3" cellpadding="2" class="styled-table">
			<caption style="caption-side:top"><h2>Low Stock:</h2></caption>
			<thead>
				<tr>
					<th> <font face="Arial">INum</font></th>
					<th> <font face="Arial">IName</font></th>
				</tr>
			</thead>';

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tbody>
				<tr>
					<td>".$row['INum']."</td>
					<td>".$row['IName']."</td>
				</tr></tbody>";
			}
		}
	?>
	</div>
</div>
</div>
</body>
</html>