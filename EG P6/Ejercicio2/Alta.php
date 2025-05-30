<?php include("Conexion.php"); ?>

<form method="post">
    Ciudad: <input type="text" name="ciudad"><br>
    Pais: <input type="text" name="pais"><br>
    Habitantes: <input type="number" name="habitantes"><br>
    Superficie: <input type="text" name="superficie"><br>
    TieneMetro: <input type="number" name="tieneMetro" min="0" max="4"><br>
    <input type="submit" value="Agregar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $ciudad = $_POST['ciudad'] ?? '';
    $pais = $_POST['pais'] ?? '';
    $habitantes = $_POST['habitantes'] ?? 0;
    $superficie = $_POST['superficie'] ?? 0;
    $tieneMetro = isset($_POST['tieneMetro']) ? $_POST['tieneMetro'] : 0;

    $sql = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro)
            VALUES ('$ciudad', '$pais', $habitantes, $superficie, $tieneMetro)";

    if ($conexion->query($sql)) {
        echo "Ciudad agregada.";
    } else {
        echo "Error: " . $conexion->error;
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
