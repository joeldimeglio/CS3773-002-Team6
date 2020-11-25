<?php
	$SSN = "";
	$SectionToChange = "";
	$ChangeVar = "";
	$errors = array();
	$db = mysqli_connect('localhost', 'root', '', 'grocerydelivery');
	if (isset($_POST['modify'])){
		$SSN = $db->real_escape_string($_POST['SSN']);
		$ChangeVar = $db->real_escape_string($_POST['ChangeVar']);
		$SectionToChange = $db->real_escape_string($_POST['SectionToChange']);

	if (empty($SSN)){
		array_push($errors, "SSN is required");
	}
	if (empty($SectionToChange)){
		array_push($errors, "Cannot have null change");
	}

	if(count($errors) == 0){
		if(is_numeric($ChangeVar) && (strcmp($SectionToChange, "Salary") == 0) || (strcmp($SectionToChange, "DNum") == 0)){
			$sql = "UPDATE employee SET $SectionToChange = $ChangeVar WHERE SSN = '$SSN';";
			array_push($errors, "Item has been modified");
			mysqli_query($db, $sql);
		}
		else {
			$sql = "UPDATE employee SET $SectionToChange = '$ChangeVar' WHERE SSN = '$SSN';";
			array_push($errors, "Item has been modified");
			mysqli_query($db, $sql);
		}

	}
}
?>