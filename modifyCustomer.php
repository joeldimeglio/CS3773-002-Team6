<?php include('modifyCustomerServer.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Modify Customer using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Modify Customer</h2>
	</div>

		<form action="modifyCustomer.php" method="post">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Customer Phone Number:</label>
				<input type="text" id="CPhone" name = "CPhone" value="<?php echo $CPhone; ?>" />

			</div>
			<div class="input-group"> 
	         		<select id="SectionToChange" name="SectionToChange" value="<?php echo $SectionToChange; ?>">
	            		<option value = "CPhone" selected>Phone Number</option>
	            		<option value = "CName">Name</option>
	            		<option value = "CAddress">Address</option>
	            		<option value = "CEmail">Email</option>
	         		</select>
         	</div>
			<div class="input-group">
				<label>
					Change To:
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