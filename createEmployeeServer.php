<?php
	$DOB = "";
	$SDate = "";
	$SSN = "";
	$EPhone = "";
	$EName = "";
	$EAddress = "";
	$DNum = "";
	$errors = array();
	$db = mysqli_connect('localhost', 'root', '', 'grocerydelivery');
	if (isset($_POST['create'])){
		$DOB = $db->real_escape_string($_POST['DOB']);
		$SDate = $db->real_escape_string($_POST['SDate']);
		$SSN = $db->real_escape_string($_POST['SSN']);
		$EPhone = $db->real_escape_string($_POST['EPhone']);
		$EName = $db->real_escape_string($_POST['EName']);
		$EAddress = $db->real_escape_string($_POST['EAddress']);
		$DNum = $db->real_escape_string($_POST['DNum']);

	if (empty($DOB)){
		array_push($errors, "Date of birth is required");
	}
	if (empty($SDate)){
		array_push($errors, "Start date is required");
	}
		if (empty($SSN)){
		array_push($errors, "SSN is required");
	}
		if (empty($EPhone)){
		array_push($errors, "Employee phone number is required");
	}
		if (empty($EName)){
		array_push($errors, "Employee name is required");
	}
		if (empty($EAddress)){
		array_push($errors, "Employee address is required");
	}
	if (empty($DNum)){
		array_push($errors, "Department number is required");
	}

	if(count($errors) == 0){
		$sql = "INSERT INTO employee(DOB, SDate, SSN, EPhone, EName, EAddress, DNum) VALUES ('$DOB', '$SDate', '$SSN', '$EPhone', '$EName', '$EAddress', $DNum);";
		array_push($errors, "Employee has been created");
		mysqli_query($db, $sql);
	}
}

?>