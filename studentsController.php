<?php

include 'studentModel.php';


$num1 = $_POST['action'];



$stud = new student('placeholder','placeholder', 'placeholder', 'placeholder');

if ($num1 == 1){
	

	$stud.store()

}



?>
