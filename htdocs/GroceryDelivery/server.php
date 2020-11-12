<?php
	$IName = "";
	$Price = "";
	$DNum = "";
	$errors = array();
	$db = mysqli_connect('localhost', 'root', '', 'grocerydelivery');
	if (isset($_POST['create'])){
		$IName = $db->real_escape_string($_POST['IName']);
		$Price = $db->real_escape_string($_POST['Price']);
		$DNum = $db->real_escape_string($_POST['DNum']);

	if (empty($IName)){
		array_push($errors, "Item name is required");
	}
	if (empty($Price)){
		array_push($errors, "Price is required");
	}
	if (empty($DNum)){
		array_push($errors, "Department number is required");
	}

	if(count($errors) == 0){
		$sql = "INSERT INTO item(IName, Price, DNum) VALUES ('$IName', '$Price', '$DNum')";
		array_push($errors, "Item has been created");
		mysqli_query($db, $sql);
	}
}

?>