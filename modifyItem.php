<?php include('modifyItemServer.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Modify Item using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Modify Item</h2>
	</div>

		<form action="modifyItem.php" method="post">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Item Num:</label>
				<input type="text" id="INum" name = "INum" value="<?php echo $INum; ?>" />

			</div>
			<div class="input-group"> 
	         		<select id="SectionToChange" name="SectionToChange" value="<?php echo $SectionToChange; ?>">
	            		<option value = "IName" selected>Item Name</option>
	            		<option value = "Stock">Stock</option>
	            		<option value = "Price">Price</option>
	         		</select>
         	</div>
			<div class="input-group">
				<label>
					Change:
				</label>
				<input type="text" id="ChangeVar" name = "ChangeVar" value="<?php echo $ChangeVar; ?>" />
				
			</div>
			<div class="input-group">
				<button type="submit" name="modify" class="btn">Modify</button>
			</div>
			<p>
				Need to go <a href="index.html">back?</a>
			</p>
	    </form>
</body>