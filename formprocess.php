<?php

//include'gradingform.php';

/*
if(isset($_POST['enter'])) {
$gradeInput = $_POST['blankRadio'];
*/

/*
	function calcGrade($gradeInput) {
			
		switch ($gradeInput) {
			
			case <= 39:
				return "E"
				break;
			case <= 49:
				return "D"
				break;
			case <= 54:
				return "C-"
				break;
			case <= 59:
				$gradeLetter = "C"
				break;
			case <= 64:
				return "C+"
				break;
			case <= 69:
				return "B-"
				break;
			case <= 74:
				return "B"
				break;
			case <= 79:
				return "B+"
				break;
			case <= 84:
				return "A-"
				break;
			case <= 89:
				return "A"
				break;
			default:
				return "A+"
				
		}
		
	}
	*/
$gradeInput = $_POST['blankRadio'];

	if ($gradeInput <= 39) {
		$gradeLetter = "E";
	} elseif ($gradeInput <= 49) {
		$gradeLetter = "D";
	} elseif ($gradeInput <= 54) {
		$gradeLetter = "C-";
	} elseif ($gradeInput <= 59) {
		$gradeLetter = "C";
	} elseif ($gradeInput <= 64) {
		$gradeLetter = "C+";
	} elseif ($gradeInput <= 69) {
		$gradeLetter = "B-";
	} elseif ($gradeInput <= 74) {
		$gradeLetter = "B";
	} elseif ($gradeInput <= 79) {
		$gradeLetter = "B+";
	} elseif ($gradeInput <= 84) {
		$gradeLetter = "A-";
	} elseif ($gradeInput <= 89) {
		$gradeLetter = "A";
	} else {
		$gradeLetter = "A+";
	}
		
?>