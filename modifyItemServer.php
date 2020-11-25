<?php
	$INum = "";
	$SectionToChange = "";
	$ChangeVar = "";
	$errors = array();
	$db = mysqli_connect('localhost', 'root', '', 'grocerydelivery');
	if (isset($_POST['modify'])){
		$INum = $db->real_escape_string($_POST['INum']);
		$ChangeVar = $db->real_escape_string($_POST['ChangeVar']);
		$SectionToChange = $db->real_escape_string($_POST['SectionToChange']);

	if (empty($INum)){
		array_push($errors, "Item number is required");
	}
	if (empty($ChangeVar)){
		array_push($errors, "Change Value is required");
	}
	if (empty($SectionToChange)){
		array_push($errors, "Department number is required");
	}

	if(count($errors) == 0){
		if(is_numeric($ChangeVar) && (strcmp($SectionToChange, "IName") != 0)){
			$sql = "UPDATE Item SET $SectionToChange = $ChangeVar WHERE INum = $INum;";
			array_push($errors, "Item has been modified");
			mysqli_query($db, $sql);
		}
		else if(strcmp($SectionToChange,"IName") == 0 && !(is_numeric($ChangeVar))){
			$sql = "UPDATE Item SET $SectionToChange = '$ChangeVar' WHERE INum = $INum;";
			array_push($errors, "Item has been modified");
			mysqli_query($db, $sql);
		}
		else{
			array_push($errors, "Cannot change to that");
		}
	}
}
?>