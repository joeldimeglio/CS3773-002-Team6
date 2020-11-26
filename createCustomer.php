<?php include('createCustomerServer.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Customer using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Create Customer</h2>
	</div>

		<form action="createCustomer.php" method="post">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Customer Name:</label>
				<input type="text" id="CName" name = "CName" value="<?php echo $CName; ?>" />

			</div>

			<div class="input-group">
				<label>
					Customer Phone Number:
				</label>
				<input type="text" id="CPhone" name = "CPhone" value="<?php echo $CPhone;?>" />
				
			</div>
			<div class="input-group">
				<label>
					Customer Address:
				</label>
				<input type="text" id="CAddress" name = "CAddress" value="<?php echo $CAddress;?>" />
				
			</div>
			<div class="input-group">
				<label>
					Customer Email:
				</label>
				<input type="text" id="CEmail" name = "CEmail" value="<?php echo $CEmail;?>" />
				
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