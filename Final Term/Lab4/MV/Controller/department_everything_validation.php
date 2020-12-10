<?php

	require_once "../Model/database_connection.php";


//read all department

function getAllDepartment()
{
    $sqlDepartments = "SELECT * FROM `department` order by name;";
    $department = getValues($sqlDepartments);
    return $department;
}

//add department

if (isset($_POST['add_department'])) {
    $name = $_POST['name'];
    $id = $_POST['id'];
    addDepartment($name, $id);
}

function addDepartment($name, $id)
{
    echo $sqlAddDepartment = "INSERT INTO `department` (`id`, `name`) VALUES ('$id', '$name');";
    if (dbOperation($sqlAddDepartment)) {
        header("location:all_department.php");
    } else {
        echo "Failed.....to Add";
    }
}

//edit department

if (isset($_POST['edit_department'])) {
    $dname = $_POST['dname'];
    $id = $_POST['id'];
    updateDepartment($dname, $id);
}

function updateDepartment($dname, $id)
{
    //UPDATE `department` SET `name` = 'Banglas', `id` = '117' WHERE `department`.`id` = 119;
     $sqlUpdateDepartment = "UPDATE `department` SET `name` = '$dname', id = '$id' WHERE `department`.`id` =" . $_GET['d_id'] . ";";
    if (dbOperation($sqlUpdateDepartment)) {
        header("location:all_department.php");
    } else {
        echo "Failed ..........to Edit!!";
    }
}

//read department details 
if (isset($_GET['d_id'])) {
    $id = $_GET['d_id'];
    $sql = "select * from department where id =$id;";
    $department = getValues($sql);
}



//delete department

if (isset($_GET['delete']) and isset($_GET['d_id'])) {
    echo $deleteQuery = "DELETE FROM `department` WHERE `department`.`id` = " . $_GET['d_id'] . ";";
    if (dbOperation($deleteQuery)) {
        header("Delete department Succussfully....!!";
    } else {
        echo "Failed ............. to delete";
    }
}