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
  $consulta = "select * from clientes";
  $filas = ConsultaDatos($consulta);
  ?>

  <table class = "table table-striped table-dark table-hover">

    <tr>
      <th>Id</th>
      <th>DNI</th>
      <th>Nombre</th>
      <th>Apellido1</th>
      <th>Apellido2</th>
      <th>Email</th>
      <th>Clave</th>
    </tr>

    <!--Saco todas las columnas con el forEach-->
    <?php
    foreach ($filas as $fila) {
    ?>
      <tr>

        <?php foreach ($fila as $columna) { ?>

          <?php echo "<td>$columna</td>" ?>
        <?php } ?>
      <?php } ?>
      </tr>

  </table>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>