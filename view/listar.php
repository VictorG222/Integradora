<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body onload="listar()">

<div class="container">
  <h2>Listar o consultas</h2>
  <p>Consultas de la tabla customers</p>
  <div id="demo"></div>
</div>
  
<script>
   
   function listar(){

       $.get("../controller/controller_listar_cita.php", function(data, status){

			console.log(data);
            var myObj = JSON.parse(data);
        	console.log(myObj);
         	var txt ="";
            var i = 0;

                txt += "<table class='table'>" +
                          "<thead>" +
                            "<tr>" +
                              "<th>Fecha</th>" +
							                "<th>Hora</th>" + 
						              	  "<th>Fecha de cancelacion</th>" +
							                "<th>Medico</th>" + 
                            "</tr>" +
                          "</thead>" +
                          "<tbody>";

             for (;myObj[i];) {

               txt += "<tr><td>" + myObj[i].fecha + "</td>" +
			   			"<td>" + myObj[i].hora + "</td>" +
						"<td>" + myObj[i].fecha_de_cancelacion + "</td>" +
                		"<td>" + myObj[i].nombre_completo + "</td></tr>";
                i++;
             }
              
              txt += " </tbody>" +
                      "</table>";
              document.getElementById("demo").innerHTML = txt;

      });

   }
            
</script>

</body>
</html>