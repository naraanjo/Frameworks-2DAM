<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
 <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<body>

<!--Inicio codigo php-->
<?php
include  'libreria.php';
$consulta = " select productos.Id, productos.Nombre, productos.Marca, productos.Modelo, productos.Precio, marcas.Nombre AS NombreMarca from productos, marcas where productos.marca = marcas.Id;"; // Consulta al servidor
$filas = ConsultaDatos($consulta);


?>; <!--Cierre de codigo php-->


<table class="table table-striped table-dark table-hover">

<tr>
  <th>ID</th>
  <th>Nombre</th>
  <th>Marca</th>
  <th>Modelo</th>
  <th>Precio</th>
  <th>Nombre Marca</th>
</tr>


<?php foreach($filas as $fila) { ?>
<tr>
  <td><?php echo $fila['Id']; ?></td>
  <td><?php echo $fila['Nombre']; ?></td>
  <td><?php echo $fila['Marca']; ?></td>
  <td><?php echo $fila['Modelo']; ?></td>
  <td><?php echo $fila['Precio']; ?></td>
  <td><?php echo $fila['NombreMarca']; ?></td>
</tr>
<?php } ?>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>