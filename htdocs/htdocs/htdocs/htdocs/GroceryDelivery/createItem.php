<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Item using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Create Item</h2>
	</div>

		<form action="createItem.php" method="post">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Item Name:</label>
				<input type="text" id="IName" name = "IName" value="<?php echo $IName; ?>" />

			</div>
			<div class="input-group">
				<label>
					Price:
				</label>
				<input type="text" id="Price" name = "Price" value="<?php echo $Price; ?>" />
				
			</div>
			<div class="input-group">
				<label>
					Department Number:
				</label>
				<input type="text" id="DNum" name = "DNum" value="<?php echo $DNum;?>" />
				
			</div>
			<div class="input-group">
				<button type="submit" name="create" class="btn">Create</button>
			</div>
			<p>
				Need to go <a href="index.html">back?</a>
			</p>
	    </form>
	</div>
</body>