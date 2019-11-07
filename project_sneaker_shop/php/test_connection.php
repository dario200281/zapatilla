<?php 
include_once '../includes/db.php';
$con = openCon();//si o si devuelve un return
echo ('todo ok ');
closeCon($con);//llamo al mismo con del opencon
echo ('desconectado');
?>