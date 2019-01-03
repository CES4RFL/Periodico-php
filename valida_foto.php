<?php

include ('cgi/conexion_db.php');
$noticia=$_POST["noticia"];
$titulo=$_POST["titulo"];
$foto=$_FILES['foto']['name'];
$ruta=$_FILES['foto']['tmp_name'];
session_start();
$usuario=$_SESSION['username'];
echo $ruta;
$destino="Imagenes_resp/".$foto;
copy($ruta,$destino);

mysql_query("INSERT INTO Columnista (id_noticia, titulo, noticia, fecha, estatus, imagen,archivo, comentario, usuario)VALUES(NULL,'$titulo','$noticia',SYSDATE(),'OFFLINE','$destino','$foto','En revision','$usuario');");

?>
