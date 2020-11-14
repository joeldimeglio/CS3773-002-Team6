<?php 
	include 'server.php'
?>
<head>
	<link rel="stylesheet" type="text/css" href="listAndSearch.css">
</head>
<h1>Search page</h1>
<a href="listItem.php"><button>Back</button></a>
<p></p>
<div class="item-container">
<?php 
	if (isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($db, $_POST['search']);
		$sql = "SELECT * FROM item WHERE IName LIKE '%$search%' OR INum LIKE '%$search%' OR DNum='$search'";
		$result = mysqli_query($db, $sql);
		$queryResult = mysqli_num_rows($result);

		if ($queryResult > 0){
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
			while ($row = mysqli_fetch_assoc($result)){
				echo "<tbody>
				<tr>
					<td>".$row['IName']."</td>
					<td>".$row['Stock']."</td>
					<td>".$row['Price']."</td>
					<td>".$row['INum']."</td>
					<td>".$row['DNum']."</td>
				</tr>
				</tbody>";
			}
		} else{
			echo "There are no results matching your search!";
		}
	}
?>
</div>