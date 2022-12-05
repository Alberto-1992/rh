<?php
include('conexion.php');
$prove = mysqli_real_escape_string($con, $_POST["id_datoProveedor"]);
$query = 'SELECT * FROM descripcioneEje WHERE referenciaEje = "'.$prove.'" ';
$result = mysqli_query($con, $query);
while($row = mysqli_fetch_array($result, MYSQL_ASSOC))
{
    echo '<option value="' .$row["id_descripcion"]. '">' .$row["descripcion"]. '</option>';
  

}
mysqli_close($con);
?>