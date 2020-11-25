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
	<a href="employee.html"><button>Back</button></a>
	<p></p>
<h2>All Employees:</h2>

<div class="item-container">
	<?php
		$query = "SELECT * FROM Employee ORDER BY EName ASC;";
		$result = $db->query($query);
		$queryResults = mysqli_num_rows($result);

		echo '<table border="1" cellspacint="3" cellpadding="2" class="styled-table">
			<thead>
				<tr>
					<th> <font face="Arial">DOB</font></th>
					<th> <font face="Arial">Start Date</font></th>
					<th> <font face="Arial">SSN</font></th>
					<th> <font face="Arial">Employee Phone</font></th>
					<th> <font face="Arial">Salary</font></th>
					<th> <font face="Arial">Employee Name</font></th>
					<th> <font face="Arial">Employee Address</font></th>
					<th> <font face="Arial">Department Num</font></th>
				</tr>
			</thead>';

		if ($queryResults > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tbody>
				<tr>
					<td>".$row['DOB']."</td>
					<td>".$row['SDate']."</td>
					<td>".$row['SSN']."</td>
					<td>".$row['EPhone']."</td>
					<td>".$row['Salary']."</td>
					<td>".$row['EName']."</td>
					<td>".$row['EAddress']."</td>
					<td>".$row['DNum']."</td>
				</tr></tbody>";
			}
		}
	?>
</div>

</body>
</html>