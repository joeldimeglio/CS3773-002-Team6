<?php
	$CPhone = "";
	$SectionToChange = "";
	$ChangeVar = "";
	$errors = array();
	$db = mysqli_connect('localhost', 'root', '', 'grocerydelivery');
	if (isset($_POST['modify'])){
		$CPhone = $db->real_escape_string($_POST['CPhone']);
		$ChangeVar = $db->real_escape_string($_POST['ChangeVar']);
		$SectionToChange = $db->real_escape_string($_POST['SectionToChange']);

	if (empty($CPhone)){
		array_push($errors, "Phone Number is required");
	}
	if (empty($SectionToChange)){
		array_push($errors, "Cannot have null change");
	}

	if(count($errors) == 0){
		if(is_numeric($ChangeVar) && (strcmp($SectionToChange, "CPhone") == 0)){
			$sql = "UPDATE customer SET $SectionToChange = $ChangeVar WHERE CPhone = $CPhone;";
			array_push($errors, "Customer has been modified");
			mysqli_query($db, $sql);
		}
		else {
			$sql = "UPDATE customer SET $SectionToChange = '$ChangeVar' WHERE CPhone = $CPhone;";
			array_push($errors, "Customer has been modified");
			mysqli_query($db, $sql);
		}

	}
}
?>