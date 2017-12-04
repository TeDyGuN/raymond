<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reportes</title>
    <!-- Toastr style -->
    <link href="css/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="css/jquery.gritter.css" rel="stylesheet">

</head>
<body>
<div class="" style="margin-bottom: 15px; margin-right: 20px">
        <pre>RAYMOND - BOLIVIA

     LA PAZ - BOLIVIA
        </pre>
</div>
<h2 align="center">Reporte de pedidos</h2>
<div class="table table-striped" align="center">
    <table border=3 cellspacing=0 align="center" width="100%">
        <tr>
            <th class="success" width="14%">Nombres</th>
            <th class="success" width="14%">Apellidos</th>
            <th class="success" width="14%">Direccion</th>
            <th class="success" width="14%">Celular</th>
            <th class="success" width="16%">Email</th>
            <th class="success" width="14%">Tela</th>
            <th class="success" width="14%">Entregado</th>

        </tr>
        <?php foreach($pedidos as $p): ?>
        <tr align="center">
            <th class="success" width="14%"><?php echo($p->nombres) ?></th>
            <th class="success" width="14%"><?php echo($p->apellidos) ?></th>
            <th class="success" width="14%"><?php echo($p->direccion) ?></th>
            <th class="success" width="14%"><?php echo($p->telefono) ?></th>
            <th class="success" width="16%"><?php echo($p->email) ?></th>
            <th class="success" width="14%"><?php echo($p->tela) ?></th>
            <th class="success" width="14%"><?php echo($p->entregado) ?></th>
        </tr>
        <?php endforeach; ?>

    </table>
</div>
<br><br><br>
<?php
date_default_timezone_set('America/La_Paz');
$hoy = getdate();
echo("<pre>");
echo("<p>");
echo("Reporte Generado en Fecha: ".$hoy['mday']."/".$hoy['mon']."/".$hoy['year']."     ".$hoy['hours'].":".$hoy['minutes'].":".$hoy['seconds']);
echo("</p>");
echo("</pre>");
?>
</body>
</html>
