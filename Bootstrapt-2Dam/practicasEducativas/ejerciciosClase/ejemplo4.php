<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  
<?php   
include 'libreria.php';
$consulta = " select Id, DNI, Nombre from clientes";
$filas = ConsultaDatos($consulta);
?>;


<table class= "table table-striped table-dark table-hover">

<tr>
  <th>Id</th>
  <th>DNI</th>
  <th>Nombre</th>
<!-- </tr> -->
<!--Ejemplo de una select con solo unos campos-->
<?php foreach($filas as $fila) { ?>
  
  <tr>
    <td><?php echo $fila['Id']?></td>
    <td><?php echo $fila['Nombre']?></td>
    <td><?php echo $fila['DNI']?></td>
  <tr>

<?php } ?>
</table>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>