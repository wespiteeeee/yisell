<?php
$mysqli = new mysqli("localhost", "usuario3", "", "yermis");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

}
$alumnos="SELECT * FROM alumnos";
$resAlumnos=$mysqli->query($alumnos);

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="estilos.css">
    <title>yeinet</title>
</head>
<body>

    <header>
        <div class="franki"> 
            <center>
        <h2>PERFIL ESTUDIANTIL</h2>
        </center>
        </div>

    </header>
    <section>
        <center> 
        
        <table class="table" border="2">  
            <tr class="china" >
                
            <td >ID</td>
            <td >NOMBRE</td>
            <td >CARRERA</td>
            <td >GRUPO</td>
            </tr>
 <?php
 while ($registroAlumnos=$resAlumnos->fetch_array(MYSQLI_BOTH)) {
      
      echo "<tr>
            <td>".$registroAlumnos['ID']."</td>
            <td>".$registroAlumnos['NOMRE']."</td>
            <td>".$registroAlumnos['CARRERA']."</td>
            <td>".$registroAlumnos['GRUPO']."</td>
            </tr>";
 }
 ?>



        </table>
    </section>
</center>
</body>
</html>


