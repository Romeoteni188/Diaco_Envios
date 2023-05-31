<?php
$servername = "LAPTOP-SN1NKNDJ";
$database = "BD2";
$username = "romeo188";
$password = "romeo188+";

//Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Aquí puedes realizar consultas a la base de datos si es necesario

?>


 <!--otro -->
<?php
// Obtener los valores enviados desde el formulario
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
// Resto de los campos de formulario

// Realizar acciones con los datos, como guardarlos en la base de datos

// Ejemplo de inserción en la base de datos
//$sql = "INSERT INTO nombre_tabla (nombre, correo) VALUES ('$nombre', '$correo')";
$sql="INSERT INTO DBDIACO2.dbo.Comercio (NombreComercio, Propietario, Municipio, Departamento)
VALUES ('Comercio1', 'Propietario1', 'Municipio1', 'Departamento1');";

if ($conn->query($sql) === TRUE) {
    echo "Registro insertado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
