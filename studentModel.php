<?php

$db = mysqli_connect("sql9.freemysqlhosting.net", "sql9572075", "C3RgP3HGhx", "students");

class student{

private $username;
private $name;
private $last_name;
private $birthdate;

public function __construct($username, $name, $last_name, $birthdate)
  {
    $this->username = $username;
	$this->name = $name;
    $this->last_name = $last_name;
    $this->birthdate = $birthdate;
  }
 
  public function getAll(){

  
    $sql = "SELECT * FROM  students";

	mysqli_query($db, $sql);
  }

  public function getOne($id){

  	$sql = "SELECT * FROM students WHERE id=$id";
  	mysqli_query($db, $sql);

  }

  public function store ($new_name, $new_username, $new_last_name, $new_birthdate) {

  	$sql = "INSERT INTO students(username, name, last_name, birthdate) VALUES ('$new_username', '$new_name', '$new_last_name', '$new_birthdate')";
  	mysqli_query($db, $sql);


  }

  public function update($id, $up_name, $up_username, $up_last_name, $up_birthdate){

    $sql = "UPDATE students SET username = '$up_username', name='$up_name', last_name='$up_last_name', birthdate='$up_birthdate' WHERE id=$id";
    mysqli_query($db, $sql);
  	

  }

  public function delete($id){

    $sql = "DELETE FROM students WHERE id=$id";
    mysqli_query($db, $sql);


  }
 
  


?>