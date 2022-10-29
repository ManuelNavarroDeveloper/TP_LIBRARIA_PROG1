<?php
$sql = "SELECT user_id FROM books WHERE user_id = 'NULL'";
include 'conexion.php';
include 'prueba.php';
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Libreria</title>
</head>
<form action="cookie.php" method="post">
    <h2> Elige el libro que quieres alquilar </h2><br>
    <label> Libros disponibles: </label><br>

    <br><select name="opcionLibro" class="seleccionar">
        <option value=""> Seleccione un libro</option>
        <?php
        popular($conex);
        ?>
        <?php
        nameuser($conex);
        ?>
    </select><br>
    <br><input type="submit" value="Alquilar" class="boton">
</form>
</body>
</br>
<a href="logout.php"> Desloguearse </a>

</html>