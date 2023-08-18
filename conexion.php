<!DOCTYPE html>
<html>
<head>
    <title>Mostrar Datos</title>
</head>
<body>
    <h1>Datos del Formulario</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Teléfono</th>
            <th>Origen</th>
            <th>Comentario</th>
        </tr>

    </table>
</body>
</html>





<?php
$nombrebase = 'formulario_db';
$user = 'root';
$contraseña = '';


try {
    $conex = new PDO('mysql:host=localhost; dbname=' . $nombrebase, $user, $contraseña);

    $resultado = $conex->query('SELECT * FROM datos_formulario');

    while ($fila = $resultado->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $fila['id'] . "</td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['correo'] . "</td>";
        echo "<td>" . $fila['telefono'] . "</td>";
        echo "<td>" . $fila['origen'] . "</td>";
        echo "<td>" . $fila['comentario'] . "</td>";
        echo "</tr>";
    }
} catch (PDOException $e) {
    echo "Ha ocurrido un error: " . $e->getMessage();
}
?>
