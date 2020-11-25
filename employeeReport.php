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
		$query = "SELECT Count(DNum), DNum FROM employee";
		$result = $db->query($query);
		$queryResults = mysqli_num_rows($result);

		echo '<table border="1" cellspacint="3" cellpadding="2" class="styled-table">
		<caption style="caption-side:top"><h2>Number of Employees in Each Department</h2></caption>
			<thead>
				<tr>
					<th> <font face="Arial">Num of Employees</font></th>
					<th> <font face="Arial">Department Num</font></th>
				</tr>
			</thead>';

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tbody>
				<tr>
					<td>".$row['Count(DNum)']."</td>
					<td>".$row['DNum']."</td>
				</tr></tbody>";
			}
		}
	?>
	<?php
		$query = "SELECT EName, Salary, DNum FROM employee as o WHERE Salary >= (SELECT AVG(Salary) fROM employee as i WHERE i.DNum = o.DNum)";
		$result = $db->query($query);
		$queryResults = mysqli_num_rows($result);

		echo '<table border="1" cellspacint="3" cellpadding="2" class="styled-table">
			<caption style="caption-side:top"><h2>Employees Getting Paid Above Average</h2></caption>
			<thead>
				<tr>
					<th> <font face="Arial">Employee Name</font></th>
					<th> <font face="Arial">Salary</font></th>
					<th> <font face="Arial">Department Num</font></th>
				</tr>
			</thead>';

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tbody>
				<tr>
					<td>".$row['EName']."</td>
					<td>".$row['Salary']."</td>
					<td>".$row['DNum']."</td>
				</tr></tbody>";
			}
		}
	?>
	</div>
</div>
</div>
</body>
</html>