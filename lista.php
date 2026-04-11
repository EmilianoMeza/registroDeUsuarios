<?php
include 'include/querys.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lista de usuarios</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <h1 class="text-center mt-4">Usuarios del sistema</h1>
<!--Inicia tabla-->
    <div class="container">
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido Paterno</th>
      <th scope="col">Apellido Materno</th>
      <th scope="col">Telefono</th>
      <th scope="col">Email</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <?php
        while($row = $consultaE->fetch_assoc()){

        ?>
      <td scope="row"><?php echo $row['nombre'];?></td>
      <td scope="row"><?php echo $row['apellidoP'];?></td>
      <td scope="row"><?php echo $row['apellidoM'];?></td>
      <td scope="row"><?php echo $row['telefono'];?></td>
      <td scope="row"><?php echo $row['email'];?></td>
      <td scope="row"><?php echo $row['fechaNac'];?></td>
      <td scope="row">Editar- <a href="include/eliminar.php?id_usuario=<?php echo $row['id_usuario'];?>"></a>Eliminar</td>
      <?php }?>
    </tr>
  </tbody>
</table>
    </div>
<!--termina tabla-->
<script src="assets/js/bootstrap.min.css"></script>
</body>
</html>