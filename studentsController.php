<?php

include 'studentModel.php';


$num1 = $_POST['action'];


$stud = new student('placeholder','placeholder', 'placeholder', 'placeholder');

$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$last_name = $_POST['last_name'];
$birthdate = $_POST['birthdate'];




if ($num1 == 1){
	$stud ->store($username, $name, $last_name, $birthdate);
}

if ($num1 == 2){
	$stud ->update($id, $username, $name, $last_name, $birthdate);
}

if ($num1 == 3){
	$stud ->delete($id);
}







?>
