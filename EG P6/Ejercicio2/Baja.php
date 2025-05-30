<?php include("Conexion.php"); ?>
<form method="post">
    ID de ciudad a eliminar: <input type="number" name="id">
    <input type="submit" value="Eliminar">
</form>

<?php
if ($_POST) {
    $conexion->query("DELETE FROM Ciudades WHERE id=$_POST[id]");
    echo "Ciudad eliminada.";
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
