<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>

</head>
<body>
	

<?php

 $ID_usuario = $_POST['ID_usuario'];

if($ID_usuario == 'si'){
?>
<strong><h3>Nombre de la empresa </h3></strong>
<input type="text" class="form-control" name="nombreEmpresa" placeholder="Nombre de la empresa">

<a href="redirect-insert-modelo?var=<?php echo $ID_usuario; ?>" class="btn btn-danger">Continuar</a>


<?php
}elseif($ID_usuario == 'no'){
?>
<input type="submit" class="btn btn-warning" value="Continuar">
<?php
}
?>
</body>
</html>