<?php
	$CPhone = "";
	$CName = "";
	$CAddress = "";
	$CEmail = "";
	$errors = array();
	$db = mysqli_connect('localhost', 'root', '', 'grocerydelivery');
	if (isset($_POST['create'])){
		$CPhone = $db->real_escape_string($_POST['CPhone']);
		$CName = $db->real_escape_string($_POST['CName']);
		$CAddress = $db->real_escape_string($_POST['CAddress']);
		$CEmail = $db->real_escape_string($_POST['CEmail']);

		if (empty($CPhone)){
		array_push($errors, "Customer phone number is required");
	}
		if (empty($CName)){
		array_push($errors, "Customer name is required");
	}
		if (empty($CAddress)){
		array_push($errors, "Customer address is required");
	}
	if (empty($CEmail)){
		array_push($errors, "Customer email is required");
	}

	if(count($errors) == 0){
		$sql = "INSERT INTO customer(CPhone, CName, CAddress, CEmail) VALUES ($CPhone, '$CName', '$CAddress', '$CEmail');";
		array_push($errors, $sql);
		mysqli_query($db, $sql);
	}
}

?>