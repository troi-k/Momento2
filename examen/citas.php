<?php include_once('header.php'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilotable.css">

<?php include_once('carrusel.php'); ?>

<br>

<H1>CITAS MEDICAS AGENDADAS</H1>
<br>
<div class="table-responsive">

<table  >

  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Cedula</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Celular</th>
      <th scope="col">Barrio</th>
      <th scope="col">Ciudad de residencia</th>
      <th scope="col">Editar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
  </div>

  <script>
function confirmar()
{
	if(confirm("Estas seguro que quieres eliminar la cita agendada ?"))
	{
		return true;
	}
	return false;
}
</script>
 


       <?php
        
        try{
           include 'db_conection.php';
            $sql = "SELECT * FROM citas";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $rowTemplate = "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nombre']}</td>
                    <td>{$row['apellidos']}</td>
                    <td>{$row['cedula']}</td>
                    <td>{$row['fechanacimiento']}</td>
                    <td>{$row['telefonocelular']}</td>
                    <td>{$row['barrio']}</td>
                    <td>{$row['ciudadresidencia']}</td>
                    <td>
                    <a    href='editcita.php?id={$row['id']}' class='badge badge-primary' >Edit</a>
                    
                  </td>
                  <td>
                  <a href='deletecita.php?id={$row['id']}' onclick='return confirmar()' class='badge badge-danger'>Delete</a>
                  </td>
                    </tr>";
                    echo $rowTemplate; 
                }
            }
           
        }catch(Exception $ex){
            echo "error";
        }
      ?>
    
    
  </tbody>
</table>