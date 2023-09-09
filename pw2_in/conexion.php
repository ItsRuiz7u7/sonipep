<?php
	$conexion = mysqli_connect("localhost","root","",) 
	or die("FALLO LA CONEXION");

	mysqli_select_db($conexion,"int3") 
	or die("ERROR EN SELECCION DE LA BD");
?>