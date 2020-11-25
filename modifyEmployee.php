<?php include('modifyEmployeeServer.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Modify Employee using PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Modify Employee</h2>
	</div>

		<form action="modifyEmployee.php" method="post">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>SSN:</label>
				<input type="text" id="SSN" name = "SSN" value="<?php echo $SSN; ?>" />

			</div>
			<div class="input-group"> 
	         		<select id="SectionToChange" name="SectionToChange" value="<?php echo $SectionToChange; ?>">
	            		<option value = "EPhone" selected>Employee Phone</option>
	            		<option value = "Salary">Salary</option>
	            		<option value = "EName">Employee Name</option>
	            		<option value = "EAddress">Employee Address</option>
	            		<option value = "DNum">Department Num</option>
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