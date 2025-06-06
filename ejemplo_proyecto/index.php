<?php
// Datos de conexión (ajústalos según tu Railway)
$host = 'ballast.proxy.rlwy.net';
$port = 50544;
$user = 'root';
$password = 'nicxCGpyZKHghbOFeFdOhbKnAvvcTBGN';
$database = 'proyecto';

// Conexión
$conn = new mysqli($host, $user, $password, $database, $port);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta
$sql = "SELECT id_usuario, nombre, ap_paterno, ap_materno, correo FROM usuarios";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Usuarios</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #999; padding: 10px; text-align: left; }
        th { background-color: #f2f2f2; }
        body { font-family: Arial, sans-serif; text-align: center; }
    </style>
</head>
<body>
    <h1>Lista de Usuarios</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Correo</th>
        </tr>
        <?php
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_usuario']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['ap_paterno']}</td>
                        <td>{$row['ap_materno']}</td>
                        <td>{$row['correo']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No se encontraron usuarios</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>
