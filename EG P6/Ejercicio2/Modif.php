<?php include("Conexion.php"); ?>
<form method="post">
    ID: <input type="number" name="id" required><br>
    Nueva ciudad: <input type="text" name="ciudad" required><br>
    Nuevo pais: <input type="text" name="pais" required><br>
    Habitantes: <input type="number" name="habitantes" required><br>
    Superficie: <input type="text" name="superficie" required><br>
    Tiene Metro (1 o 0): <input type="number" name="tieneMetro" min="0" max="1" required><br>
    <input type="submit" value="Modificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = (int) $_POST['id'];
    $ciudad = mysqli_real_escape_string($conexion, $_POST['ciudad']);
    $pais = mysqli_real_escape_string($conexion, $_POST['pais']);
    $habitantes = (int) $_POST['habitantes'];
    $superficie = (float) $_POST['superficie'];
    $tieneMetro = (int) $_POST['tieneMetro'];
    
    $sql = "UPDATE Ciudades SET 
                ciudad='$ciudad', pais='$pais', 
                habitantes=$habitantes, superficie=$superficie,
                tieneMetro=$tieneMetro 
            WHERE id=$id";

if ($conexion->query($sql)) {
    echo "Ciudad modificada.";
} else {
    echo "Error al modificar: " . $conexion->error;
}
}
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