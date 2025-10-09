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

<!--Inicio codigo php-->
  <?php 
  include 'libreria.php';

  $consulta = "select  from clientes"; // Consulta al servidor

  $filas = ConsultaDatos($consulta);

  ?> <!--Cierre de codigo php-->


  <table class = "table table-striped table-dark table-hover">
    
    <tr>
      <th>Nombre</th>
      <th>Apellido1</th>
      <th>Apellido2</th>
      <th>Email</th>
    </tr>

    <?php foreach($filas as $fila) { ?> <!--Abro llave del bucle {-->
    <tr>
      <td> <?php echo $fila['Nombre']; ?> </td>
      <td> <?php echo $fila['Apellido1']; ?></td>
      <td> <?php echo $fila['Apellido2']; ?></td>
      <td> <?php echo $fila['Email']; ?></td>
    </tr>

    <!--Para sacar todos los campos 
    ?php
    foreach ($fila as $campo)
    {
      echo "<td> $campo </td>";
    }
      ?
    -->

    <?php } ?>    <!--Cierro llave del bucle, unicamente abro codigo php para eso} -->

  </table>



 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>