<?php include('createEmployeeServer.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Employee using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Create Employee</h2>
	</div>

		<form action="createEmployee.php" method="post">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Employee Name:</label>
				<input type="text" id="EName" name = "EName" value="<?php echo $EName; ?>" />

			</div>
			<div class="input-group">
				<label>
					DOB:
				</label>
				<input type="text" id="DOB" name = "DOB" value="<?php echo $DOB; ?>" />
				
			</div>
			<div class="input-group">
				<label>
					Start Date:
				</label>
				<input type="text" id="SDate" name = "SDate" value="<?php echo $SDate;?>" />
				
			</div>
			<div class="input-group">
				<label>
					SSN:
				</label>
				<input type="text" id="SSN" name = "SSN" value="<?php echo $SSN;?>" />
				
			</div>
			<div class="input-group">
				<label>
					Employee Phone Number:
				</label>
				<input type="text" id="EPhone" name = "EPhone" value="<?php echo $EPhone;?>" />
				
			</div>
			<div class="input-group">
				<label>
					Employee Address:
				</label>
				<input type="text" id="EAddress" name = "EAddress" value="<?php echo $EAddress;?>" />
				
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