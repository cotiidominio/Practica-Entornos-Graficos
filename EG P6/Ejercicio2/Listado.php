<?php
include("Conexion.php"); 
$vSql = "SELECT * FROM Ciudades";
$vResultado = mysqli_query($conexion, $vSql);
$total_registros = mysqli_num_rows($vResultado);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Listado completo</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #888;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #ccc;
        }
        .menu-button {
            text-align: center;
            margin-top: 20px;
        }
        .menu-button a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #007BFF;
            color: white;
            border-radius: 5px;
        }
        .menu-button a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Listado de Ciudades</h2>

<?php if ($total_registros > 0): ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Ciudad</th>
            <th>País</th>
            <th>Habitantes</th>
            <th>Superficie</th>
            <th>Tiene Metro</th>
        </tr>
        <?php while ($fila = mysqli_fetch_array($vResultado)): ?>
        <tr>
            <td><?php echo $fila['id']; ?></td>
            <td><?php echo $fila['ciudad']; ?></td>
            <td><?php echo $fila['pais']; ?></td>
            <td><?php echo $fila['habitantes']; ?></td>
            <td><?php echo $fila['superficie']; ?></td>
            <td><?php echo ($fila['tieneMetro'] ? 'Sí' : 'No'); ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
<?php else: ?>
    <p style="text-align:center;">No hay ciudades registradas.</p>
<?php endif; ?>

<?php
mysqli_free_result($vResultado);
mysqli_close($conexion);
?>

<div style="text-align:center; margin-top:20px;">
    <a href="Index.html" style="
        text-decoration:none;
        padding:10px 20px;
        background-color:#007BFF;
        color:white;
        border-radius:5px;
        font-family:sans-serif;
    ">Volver al Menu Principal</a>
</div>
