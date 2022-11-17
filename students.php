

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
                    var res=0;
                    console.log(action);

                    $.ajax({
                            url:'/AppMVC/studentController.php',
                            type: "POST",
                            data:{action},
                            success: function(res){
                             console.log(res);
                            }

                       
                });
                })
            })


        </script>
</head>
<body>
	<form>
	<div class="row">

		<div class="col-4">
                 <button class="btn btn-primary" value="1" id="new"> Ingresar alumno </button>
        </div>

        <div class="col-4">
                 <button class="btn btn-primary" value="2" id="upd"> Modificar alumno </button>
        </div>

        <div class="col-4">
                  <button class="btn btn-primary" value="3" id="del"> Eliminar alumno </button>
        </div>

        

       
    </div>

</form>
</body>
</html>
