<?php

require 'conexion.php';


function popular($conex)
{
    $queryCantidad = "SELECT * FROM books";
    $getCantidad = mysqli_query($conex, $queryCantidad);
    $cantidad = mysqli_num_rows($getCantidad);


    for ($i = 1; $i < $cantidad + 1; $i++) {
        $queryLibros = "SELECT * FROM books WHERE isbn = " . $i;
        $getLibros = mysqli_query($conex, $queryLibros);
        $libro = $getLibros->fetch_array();
        if ($libro[1] == NULL) {
            echo "<option value=\"" . $libro[0] . "\" >" . $libro[2] . "</option>";
        }
    }
}
function nameuser($conex)
{
    $queryname = "SELECT * FROM users";
    $getname = mysqli_query($conex, $queryname);
    $users = $getname->fetch_array();

    if ($users[3] == ($_POST["user_id"])) {
        echo "<option value =\"" . $users[0] . "\">" . $users[3] . "</option>";
    }
}
