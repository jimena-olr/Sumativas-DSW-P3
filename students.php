<?php






?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Idk bro, im done FR this time</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                //general
               
                $('#new').click(function(event){
                    event.preventDefault();

                    var action=$('#new').val();
                    var username=$('#new_username').val();
                    var name=$('#new_name').val();
                    var last_name=$('#new_last_name').val();
                    var birthdate=$('#new_birthdate').val();
                    var res=0;
                    console.log(action);

                    $.ajax({
                            url:'/AppMVC/studentController.php',
                            type: "POST",
                            data:{action, username, name, last_name, birthdate},
                            success: function(res){
                             console.log(res);
                            }

                       
                });
                })

                 $('#upd').click(function(event){
                    event.preventDefault();

                    var action=$('#upd').val();
                    var id=$('#up_id').val();
                    var username=$('#up_username').val();
                    var name=$('#up_name').val();
                    var last_name=$('#up_last_name').val();
                    var birthdate=$('#up_birthdate').val();
                    var res=0; 
                    console.log(id);

                    $.ajax({
                            url:'/AppMVC/studentController.php',
                            type: "POST",
                            data:{id, action, username, name, last_name, birthdate},
                            success: function(res){
                             console.log(res);
                            }

                       
                });
                })

                 $('#del').click(function(event){
                    event.preventDefault();

                    var action=$('#del').val();
                    var id=$('#del_id').val();
                    var res=0;
                    console.log(id);

                    $.ajax({
                            url:'/AppMVC/studentController.php',
                            type: "POST",
                            data:{action, id},
                            success: function(res){
                             console.log(res);
                            }

                       
                });
                })
            })


        </script>
</head>
<body>
	<form >
	<div class="row">

		<div class="col-4">
                 <button class="btn btn-primary" value="1" id="new"> Ingresar alumno </button>
                 <input class="form-control" id="new_username"> 
                 <input class="form-control" id="new_name"> 
                 <input class="form-control" id="new_last_name"> 
                 <input class="form-control" id="new_birthdate"> 
        </div>
                        

        <div class="col-4">
                 <button class="btn btn-primary" value="2" id="upd"> Modificar alumno </button>
                 <input class="form-control" id="up_id">
                 <input class="form-control" id="up_username"> 
                 <input class="form-control" id="up_name"> 
                 <input class="form-control" id="up_last_name"> 
                 <input class="form-control" id="up_birthdate">
        </div>

        <div class="col-4">
                  <button class="btn btn-primary" value="3" id="del"> Eliminar alumno </button>
                  <input class="form-control" id="del_id">
        </div>



        

       
    </div>

    <div class="container my-5">
    <h2> Lista de alumnos </h2>

    <table class="table">
        <thead>
            <tr>
                <th> ID </th>
                <th> Username </th>
                <th> Name </th>
                <th> Last name </th>
                <th> Birthdate </th>
                
            </tr>
        <thead>
        <tbody>
            <?php
                $server = "sql9.freemysqlhosting.net";
                $user = "sql9572075";
                $pass = "C3RgP3HGhx";
                $database = "sql9572075";

                $connection = new mysqli ($server, $user, $pass, $database);

                if ($connection ->connect_error){
                    die("Connection failed: ". $connection->connect_error);
                }

                $sql = "SELECT * FROM students";
                $result = $connection ->query($sql);

                if (!$result){
                    die("Invalid query: ". $connection->connection_error);
                }

                while ($row = $result->fetch_assoc()){
                    echo "
                    <tr>
                        <td>$row[id]</td>
                        <td>$row[username]</td>
                        <td>$row[name]</td>
                        <td>$row[last_name]</td>
                        <td>$row[birthdate]</td>

                        <tr>";



                }
            ?>

</form>
</body>
</html>
