<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$contrasena = "";
$dbname = "t15a_proyecto";

$conn = new mysqli($servername, $username, $contrasena, $dbname);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar y ejecutar la consulta
$sql = "SELECT matricula, nombre_completo, carrera, generacion,semestre,username, password , tipo FROM usuarios"; // Cambia según tu base de datos
$result = $conn->query($sql);

// Mostrar los datos en una tabla
if ($result->num_rows > 0) {
    echo "<form method='post' action='formulario.php'>"; // Cambia 'procesar.php' según tus necesidades
    echo "<table border='1'>
            <tr>
                <th>Seleccionar</th>
                <th>Matricula</th>
                <th>Nombre Completo</th>
                <th>carrera</th>
                <th>Generacion</th>
                <th>Semestre</th>
                <th>Username</th>
                <th>Password</th>
                <th>Tipo</th>
            </tr>";
    
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td><input type='radio' name='ine' value='" . $row["matricula"] . "'></td>
                <td>" . $row["matricula"] . "</td>
                <td>" . $row["nombre_completo"] . "</td>
                <td>" . $row["carrera"] . "</td>
                <td>" . $row["generacion"] . "</td>
                <td>" . $row["semestre"] . "</td>
                <td>" . $row["username"] . "</td>
                <td>" . $row["password"] . "</td>
                <td>" . $row["tipo"] . "</td>
              </tr>";
    }
    echo "</table>";
    echo "<input type='submit' value='Actualizar'>";
    echo "</form>";
    echo "<a href ='Menu.php'>Salir</a>";
} else {
    echo "0 resultados";
    echo "<a href ='Menu.php'>Salir</a>";
}
$conn->close();
?>