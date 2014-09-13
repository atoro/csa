<?php
		$conn=mysql_connect("localhost","csa_user","Re1JGGq7Q(&B"); // ESTABLECER CONEXION
		if(!$conn){
			die("error al conectarse al motor");
		}
		$mibase = mysql_select_db("csa_bd",$conn); //SELECCION BD
		if(!$mibase){
			die("error al selecionar la base de datos");
		}
		//Re1JGGq7Q(&B
?>