<!DOCTYPE html>
<html>
<body>
	<p>Click <a href="index.html">here</a> to return</p>
	<?php
		$db = mysqli_connect('localhost', 'root', '', 'grocerydelivery');
		$query = "SELECT * FROM item";

		echo '<table border="0" cellspacing="2" cellpadding="2">
		<tr>
			<td> <font face="Arial">IName</font></td>
			<td> <font face="Arial">Stock</font></td>
			<td> <font face="Arial">Price</font></td>
			<td> <font face="Arial">INum</font></td>
			<td> <font face="Arial">DNum</font></td>
		</tr>';

		if ($result = $db->query($query)) {
			while ($row = $result->fetch_assoc()){
				$IName = $row["IName"];
				$Stock = $row["Stock"];
				$Price = $row["Price"];
				$INum = $row["INum"];
				$DNum = $row["DNum"];

				echo '<tr>
					<td>'.$IName.'</td>
					<td>'.$Stock.'</td>
					<td>'.$Price.'</td>
					<td>'.$INum.'</td>
					<td>'.$DNum.'</td>
				</tr>';
			}
			$result->free();
		}
	?>
</body>
</html>