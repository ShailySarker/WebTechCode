<?php

	require_once "../Model/database_connection.php";
	function moreValidation($data)
	{
		$data = trim($data);
		$data = htmlentities($data);
		return $data;
	}


//read all student 

function getAllStudent()
{
    $sqlAllStudents = "SELECT s.*,d.name department FROM student s, department d WHERE s.dept_id = d.id;";
    $students = getValues($sqlAllStudent);
    return $students;
}


//add student validation
$err_name = $err_department = $err_dob = $err_credit = $err_cgpa = $err_image = "";
$err_dob_date = $err_dob_month = $err_dob_year = "";

$status = "";
$validCountAddStudent = 0;

if (isset($_POST['add_student'])) {

    //name
    if (empty(trim($_POST['sname']))) {
        $err_name = "<span style='color:red;'>*Name is requiered<span>";
    } 
	else {
        $name = moreValidation($_POST['sname']);
        $validCountAddStudent++;
    }
	
    //department
    if ($_POST['department'] == -1) {
        $err_department = "<span style='color:red;'>*Department is requiered<span>";
    } 
	else {
        $department = moreValidation($_POST['department']);
        $validCountAddStudent++;
    }
	//dob
    if (empty(trim($_POST['dob']))) {
        $err_dob = "<span style='color:red;'>*DOB is requiered<span>";
    }
	else {
        $dob = moreValidation($_POST['dob']);
        $validCountAddStudent++;
    }
	
	
	   /// date
    if (empty(trim($_POST['date-dob']))) {
        $err_dob_date = "<span style='color:red; font-weight:bold;'>Field is requiered<span>";
    } 
	else if (!is_numeric($_POST['date-dob'])) {
        $err_dob_date = "<span style='color:red; font-weight:bold;'>Year is not numeric<span>";
    } 
	else {
        $dob_date = moreValidation($_POST['date-dob']);
        $validCountAddStudent++;
    }
	  /// month
    if (empty(trim($_POST['month-dob']))) {
        $err_dob_month = "<span style='color:red; font-weight:bold;'>Field is requiered<span>";
    } 
	else if (!is_numeric($_POST['month-dob'])) {
        $err_dob_month = "<span style='color:red; font-weight:bold;'>Year is not numeric<span>";
    } 
	else {
        $dob_month = moreValidation($_POST['month-dob']);
        $validCountAddStudent++;
    }
      /// year

    if (empty(trim($_POST['year-dob']))) {
        $err_dob_year = "<span style='color:red; font-weight:bold;'>Field is requiered<span>";
    } 
	else if (!is_numeric($_POST['year-dob'])) {
        $err_dob_year = "<span style='color:red; font-weight:bold;'>Year is not numeric<span>";
    } 
	else {
        $dob_year = moreValidation($_POST['year-dob']);
        $validCountAddStudent++;
    }


    if ($validCountAddStudent == 8) {
        echo $dob =  $dob_date . "/" . $dob_month . "/" .$dob_year;
        addStudent($name, $department,$dob,$cgpa, $credit,);
    }
	
	
    //credit
    if (empty(trim($_POST['credit']))) {
        $err_credit = "<span style='color:red;'>*Credit is requiered<span>";
    } 
	else {
        $credit = moreValidation($_POST['credit']);
        $validCountAddStudent++;
    }
    //cgpa
    if (empty(trim($_POST['cgpa']))) {
        $err_cgpa = "<span style='color:red;'>*CGPA is requiered<span>";
    } 
	else {
        $cgpa = moreValidation($_POST['cgpa']);
        $validCountAddStudent++;
    }

    
}
// add student
function addStudent($name, $department, $dob, $cgpa, $credit)
{
    $sqlAddStudent = "INSERT INTO `student` (`id`, `name`, `dept_id`, `dob`, `cgpa`, `credit`) VALUES (NULL, '$name', '$department',  `dob`,'$cgpa', '$credit');";
    if (dbOperation($sqlAddStudent)) {
        echo "Add Student Successfully.....!!!!";
    } 
	else {
        echo "Failed ........to add";
    }
}


//edit student 
if (isset($_POST['update_student'])) {
    $name = $_POST['sname'];
    $department = $_POST['department'];
	$dob = $_POST['dob'];
    $cgpa = $_POST['cgpa'];
    $credit = $_POST['credit'];
    

    if (true) {
        updateStudent($name, $department,$dob, $cgpa, $credit);
    } else {
        $status = "Failded..........";
    }
}

function updateStudent($name, $department,$dob, $cgpa, $credit)
{
    $sqlUpdateStudent = "UPDATE `student` SET `name` = '$name', `dept_id` = '$department',`dob` = '$dob', `cgpa` = '$cgpa', `credit` = '$credit' WHERE `student`.`id` =" . $_GET['s_id'] . ";";
    if (dbOperation($sqlUpdateStudent)) {
        echo "Update student Successfully.......!!!!!";
    } else {
        echo "Failded..........to update";
    }
    
}


//read Student Details 
if (isset($_GET['s_id'])) {
    $sqlgetDatafromId = "SELECT s.*,d.name department FROM student s, department d WHERE s.dept_id = d.id and s.id =" . $_GET['s_id'] . ";";
    $studentData = getValues($sqlgetDatafromId);
}

//delete student

if (isset($_GET['delete']) and isset($_GET['s_id'])) {
    echo $deleteQuery = "DELETE FROM `student` WHERE `student`.`id` = " . $_GET['s_id'] . ";";
    if (dbOperation($deleteQuery)) {
        header("location:" . $_SERVER['PHP_SELF'] . "");
        echo "Delete student Succussfully............!!!!";
    } else {
        echo "Failded..........to delete";
    }
}