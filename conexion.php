<?php
//-----------------conexion para el inicio de sesion del sistema-------------IMPORTANTE-----solo modificar las credenciales del nombre de la base, la contraseña y usuario no mover nada mas de lo contrario deja de funcionar el inicio de sesion
$mysqli = new mysqli("localhost","root","","metasrh"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}

try{
   $conexion = new PDO('mysql:host=localhost;dbname=metasrh', 'root', '');
 }catch(PDOException $prueba_error){
  echo "Error: " . $prueba_error->getMessage();
 }

 $con = new mysqli("localhost", "root", "", "metasrh");
if ($con->connect_errno)
{
    echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
    exit();
}
@mysqli_query($con, "SET NAMES 'utf8'");
 $host = 'localhost';
 $basededatos = 'metasrh';
 $usuario = 'root';
 $contraseña = '';
 
 $conexion2 = new mysqli($host, $usuario,$contraseña, $basededatos);
 
 if ($conexion2 -> connect_errno)
 {
   die("Fallo la conexion:(".$conexion2 -> mysqli_connect_errno().")".$conexion2-> mysqli_connect_error());
 }


  ?>