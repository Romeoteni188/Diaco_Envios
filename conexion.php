<?php

class conexión
{

    function ConexionDB()
    {
        $servername = "LAPTOP-SN1NKNDJ";
        $database = "BD2";
        $username = "romeo188";
        $password = "romeo188+";
        $puerto = 1433;
        try {
            $conn = new PDO("sqlrv:Server=$servername,$puerto;DataBase=$database", $username, $password);
            echo "se conecto a la base datos";
        } catch (PDOException $exp) {
            echo "No se logro conectar a la base de datos correctamente: $database, erro: $exp";
        }
        return $conn;


    }




}


?>


 <!--otro -->
<?php
// Obtener los valores enviados desde el formulario
$nombre = $_POST['nombre'];
$propieta= $_POST['correo'];
$departamento
$municipio
$queja
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
